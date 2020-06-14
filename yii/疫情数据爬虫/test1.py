"""
Team:：Four little swan
Code BY: HuayingYuan 1810780
"""
from git import Repo
from pymongo import MongoClient
import pymysql
import os
import json
import time
import logging
import datetime
import requests
import pandas as pd

logging.basicConfig(level=logging.INFO, format='%(asctime)s - %(message)s')
logger = logging.getLogger(__name__)

db = pymysql.connect(host="localhost", user="root", password="", database="yii2", charset="utf8")

# 键是想要保存的文件名，值是对应的url模块
collections = {
    'DXYOverall': 'overall',
    'DXYArea': 'area',
    'DXYNews': 'news',
    'DXYRumors': 'rumors'
}

time_types = ('pubDate', 'createTime', 'modifyTime', 'dataInfoTime', 'crawlTime', 'updateTime')


# 将document和city_dict中的内容全部导入result字典并且返回
def dict_parser(document, city_dict=None):
    result = dict()

    try:
        result['continentName'] = document['continentName']
        result['continentEnglishName'] = document['continentEnglishName']
    except KeyError:
        result['continentName'] = None
        result['continentEnglishName'] = None

    result['countryName'] = document['countryName']

    try:
        result['countryEnglishName'] = document['countryEnglishName']
    except KeyError:
        result['countryEnglishName'] = None

    result['provinceName'] = document['provinceName']
    result['provinceEnglishName'] = document.get('provinceEnglishName')
    result['province_zipCode'] = document.get('locationId')
    result['province_confirmedCount'] = document['confirmedCount']
    result['province_suspectedCount'] = document['suspectedCount']
    result['province_curedCount'] = document['curedCount']
    result['province_deadCount'] = document['deadCount']

    if city_dict:
        result['cityName'] = city_dict['cityName']
        result['cityEnglishName'] = city_dict.get('cityEnglishName')
        result['city_zipCode'] = city_dict.get('locationId')
        result['city_confirmedCount'] = city_dict['confirmedCount']
        result['city_suspectedCount'] = city_dict['suspectedCount']
        result['city_curedCount'] = city_dict['curedCount']
        result['city_deadCount'] = city_dict['deadCount']

    result['updateTime'] = datetime.datetime.fromtimestamp(int(document['updateTime'] / 1000))

    return result


# 处理git相关日志消息
def git_manager(changed_files):
    repo = Repo(path=os.path.split(os.path.realpath(__file__))[0])
    repo.index.add(changed_files)
    repo.index.commit(message='{datetime} - Change detected!'.format(datetime=datetime.datetime.now()))
    origin = repo.remote('origin')
    origin.push()
    logger.info('Pushing to GitHub successfully!')


class DB:
    def __init__(self):
        self.db = db
        self.cursor = db.cursor()

    def count(self, collection):
        return self.db[collection].count_documents(filter={})

    # def dump(self, collection):
    #     return self.db[collection].aggregate(
    #         pipeline=[
    #             {
    #                 '$sort': {
    #                     'updateTime': -1,
    #                     'crawlTime': -1
    #                 }
    #             }
    #         ],
    #         allowDiskUse=True
    #     )

    def list_table(self):
        self.cursor.execute("show tables")
        table_list = [tuple[0] for tuple in self.cursor.fetchall()]
        return table_list


class Listener:
    def __init__(self):
        self.db = db
        self.cursor = self.db.cursor()

    def list_table(self):
        self.cursor.execute("show tables")
        table_list = [tuple[0] for tuple in self.cursor.fetchall()]
        return table_list

    def run(self):
        while True:
            self.listener()
            time.sleep(60)

    def listener(self):
        changed_files = list()
        tables = self.list_table()
        pos = [0 for i in range(4)]
        for table in tables:
            if table[0]!='d':
                continue
            # 将大小写转化成对应格式，即前四个字母大写
            a = table[0].upper()
            b = table[1].upper()
            c = table[2].upper()
            d = table[3].upper()
            e = table[4:]
            table = a + b + c + d + e

            json_file = open(
                os.path.join(
                    os.path.split(os.path.realpath(__file__))[0], 'json', table + '.json'),  # 这块如果报错可能是因为大小写
                'r', encoding='utf-8'
            )
            try:
                static_data = json.load(json_file)
            except (UnicodeDecodeError, FileNotFoundError, json.decoder.JSONDecodeError):
                static_data = None
            json_file.close()
            while True:
                str = collections.get(table)
                request = requests.get(url='https://lab.isaaclin.cn/nCoV/api/' + collections.get(table))  # 此处是爬虫
                if request.status_code == 200:
                    current_data = request.json()
                    break
                else:
                    time.sleep(1)
                    continue

            #爬虫爬取信息完毕，下面开始导入数据库
            # if static_data != current_data:#数据存在更新
            #     self.json_dumper(collection=table, content=current_data)
            #     changed_files.append('json/' + table + '.json')
            #     self.mysql_dumper(table,current_data)

            if table == 'DXYNews':
                self.mysql_dumper(table, current_data)  # 如果哪一个表觉得数据不够，可以把这句话取消注释来导入数据
            logger.info('{collection} checked!'.format(collection=table))
            # if table == 'DXYArea':
            #      self.mysql_dumper(table, current_data)  # 如果哪一个表觉得数据不够，可以把这句话取消注释来导入数据
            # logger.info('{collection} checked!'.format(collection=table))
            # if table == 'DXYRumors':
            #     self.mysql_dumper(table, current_data)  # 如果哪一个表觉得数据不够，可以把这句话取消注释来导入数据
            # logger.info('{collection} checked!'.format(collection=table))



    def json_dumper(self, collection, content=None):
        json_file = open(
            os.path.join(
                os.path.split(
                    os.path.realpath(__file__))[0], 'json', collection + '.json'
            ),
            'w', encoding='utf-8'
        )
        json.dump(content, json_file, ensure_ascii=False, indent=4)
        json_file.close()

    def csv_dumper(self, collection, cursor):
        if collection == 'DXYArea':  # 这块之后的大小写要改一下
            structured_results = list()
            for document in cursor:
                if document.get('cities', None):
                    for city_counter in range(len(document['cities'])):
                        city_dict = document['cities'][city_counter]
                        structured_results.append(dict_parser(document=document, city_dict=city_dict))
                else:
                    structured_results.append(dict_parser(document=document))

            df = pd.DataFrame(structured_results)
            df.to_csv(
                path_or_buf=os.path.join(
                    os.path.split(os.path.realpath(__file__))[0], 'csv', collection + '.csv'),
                index=False, encoding='utf_8_sig', float_format="%i"
            )
        else:
            df = pd.DataFrame(data=cursor)
            for time_type in time_types:
                if time_type in df.columns:
                    df[time_type] = df[time_type].apply(
                        lambda x: datetime.datetime.fromtimestamp(x / 1000) if not pd.isna(x) else '')
            df.to_csv(
                path_or_buf=os.path.join(
                    os.path.split(os.path.realpath(__file__))[0], 'csv', collection + '.csv'),
                index=False, encoding='utf_8_sig', date_format="%Y-%m-%d %H:%M:%S"
            )

    def db_dumper(self, collection, cursor):
        data = list()  # 初始化一个列表
        for document in cursor:
            document.pop('_id')
            data.append(document)

        json_file = open(
            os.path.join(
                os.path.split(
                    os.path.realpath(__file__))[0], 'json', collection + '-TimeSeries.json'
            ),
            'w', encoding='utf-8'
        )
        json.dump(data, json_file, ensure_ascii=False, indent=4)
        json_file.close()

    def mysql_dumper(self, table, da):  # current_data是一个json文件，字典套列表套字典
        if table == 'DXYNews':
            sql = "insert into " + table + " values(%s,%s,%s,%s,%s,%s,%s)"
            for item in da['results']:  # 只导最新一条新闻
                value = (item["pubDate"], item["title"], item["summary"], item["infoSource"],
                         item["sourceUrl"], item["province"], item["provinceId"])
                self.cursor.execute(sql, value)
                self.db.commit()
        elif table == 'DXYArea':
            sql = "insert into " + table + " values(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)"
            for item in da['results']:  # 只导最新一条新闻
                value = (item["locationId"], item["continentName"], item["continentEnglishName"], item["countryName"],
                         item["countryEnglishName"], item["countryFullName"], item["provinceName"],
                         item["provinceEnglishName"],
                         item["provinceShortName"], int(item["currentConfirmedCount"]), int(item["confirmedCount"]),
                         int(item["suspectedCount"]),
                         int(item["curedCount"]), int(item["deadCount"]), item["comment"], item["cities"],int(item["updateTime"]))
                self.cursor.execute(sql, value)
                self.db.commit()
            #下面开始往两张新表中划分灾区
            
        elif table == 'DXYRumors':
            sql = "insert into " + table + " values(%s,%s,%s,%s)"
            for item in da['results']:  # 只导最新一条新闻
                value = (item["title"], item["mainSummary"], item["body"], item["sourceUrl"])
                self.cursor.execute(sql, value)
                self.db.commit()


if __name__ == '__main__':
    listener = Listener()
    listener.run()

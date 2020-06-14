# coding=utf-8
"""
　　__title__ = ''
　　__file__ = ''
　　__author__ = 'tianmuchunxiao'
　　__mtime__ = '2019/7/4'
"""

from multiprocessing import Pool
import requests
import io
import json
import threading
import datetime
import pandas as pd
from io import StringIO
from lxml import etree


class Info_base(object):
    URL = ''
    PARAMS = {}
    HEADERS = {}
    file_path = ''

    def __init__(self):
        try:
            self.data_df = pd.read_csv(self.file_path)
        except:
            self.get_data()

    def get_data(self):
        response = requests.get(url=self.URL,
                                params=self.PARAMS,
                                headers=self.HEADERS)

        data_json = json.loads(io.StringIO(response.text).read())
        self.PARAMS['count'] = data_json['total']
        print('正在获取数据……')
        response = requests.get(url=self.URL,
                                params=self.PARAMS,
                                headers=self.HEADERS)

        data_json = json.loads(io.StringIO(response.content.decode('gbk')).read())
        print(data_json)
        self.data = data_json['list']

        self.columns = list(self.data[0].keys())

        self.data_df = pd.DataFrame(self.data, columns=self.columns)

        self.data_df.to_csv(self.file_path, encoding='gbk', index=False)
        print('数据处理完成')


class Stock_info(Info_base):
    PARAMS = {
        'host': 'http://quotes.money.163.com/hs/service/diyrank.php',
        'page': '0',
        'query': 'STYPE:EQA',
        'fields': 'NO,SYMBOL,NAME,PRICE,PERCENT,UPDOWN,FIVE_MINUTE,OPEN,YESTCLOSE,HIGH,LOW,VOLUME,TURNOVER,HS,LB,WB,'
                  'ZF,PE,MCAP,TCAP,MFSUM,MFRATIO.MFRATIO2,MFRATIO.MFRATIO10,SNAME,CODE,ANNOUNMT,UVSNEWS',
        'sort': 'SYMBOL',
        'order': 'asc',
        'count': '20',
        'type': 'query'
    }
    HEADERS = {
        'Accept': 'application/json, text/javascript, */*; q=0.01',
        'Accept-Encoding': 'gzip, deflate',
        'Accept-Language': 'zh,en-US;q=0.9,en;q=0.8,zh-TW;q=0.7,zh-CN;q=0.6',
        'Connection': 'keep-alive',
        'Host': 'quotes.money.163.com',
        'Referer': 'http://quotes.money.163.com/old/',
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) '
                      'Chrome/75.0.3770.100 Safari/537.36',
        'X-Requested-With': 'XMLHttpRequest'
    }
    URL = PARAMS['host']
    file_path = 'D:/Stock_Data/stock_info.csv'


class Index_info(Info_base):
    PARAMS = {
        'host': '/hs/service/hsindexrank.php',
        'page': '0',
        'query': 'IS_INDEX:true',
        'fields': 'no,SYMBOL,NAME,PRICE,UPDOWN,PERCENT,zhenfu,VOLUME,TURNOVER,YESTCLOSE,OPEN,HIGH,LOW',
        'sort': 'SYMBOL',
        'order': 'asc',
        'count': '25',
        'type': 'query',
        'callback': '',
        'req': '31254'
    }
    HEADERS = {
        'Accept': '*/*',
        'Accept-Encoding': 'gzip, deflate',
        'Accept-Language': 'zh,en-US;q=0.9,en;q=0.8,zh-TW;q=0.7,zh-CN;q=0.6',
        'Connection': 'keep-alive',
        'Host': 'quotes.money.163.com',
        'Referer': 'http://quotes.money.163.com/old/',
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36'
    }
    URL = 'http://quotes.money.163.com/hs/service/hsindexrank.php'
    file_path = 'D:/Stock_Data/index_info.csv'


TODAY = datetime.date.strftime(datetime.date.today(), '%Y%m%d')


class Data(object):
    URL = ''
    PARAMS = {}
    HEADERS = {}
    file_path = ''

    def get_data(self, code, end=TODAY):
        self.PARAMS['code'] = code
        self.PARAMS['end'] = end
        print('正在获取{}数据……'.format(code))
        response = requests.get(url=self.URL,
                                params=self.PARAMS,
                                headers=self.HEADERS)
        print('正在处理{}数据...'.format(code))
        data_df = pd.read_csv(StringIO(response.content.decode('gbk')), skip_blank_lines=True)
        print(data_df)
        data_df = data_df.sort_values(by='日期')
        if data_df.empty:
            print('空数据', code)
        else:
            data_df.to_csv(self.file_path + str(code[1:]) + '.csv', encoding='gbk', index=False)
            print('{}数据处理完成！！'.format(code))


class Stock_data(Data):
    URL = 'http://quotes.money.163.com/service/chddata.html'
    PARAMS = {
        'code': '',
        'start': '19900101',
        'end': '',
        'fields': 'TCLOSE;HIGH;LOW;TOPEN;LCLOSE;CHG;PCHG;TURNOVER;VOTURNOVER;VATURNOVER;TCAP;MCAP'
    }
    HEADERS = {
        'Cookie': 'Province=0; City=0; UM_distinctid=16c05496622f1-00e8d8cb7044e48-4c312272-15f900-16c054966245cc; _ntes_nnid=0213f9288c03916f18ed2634a6a3506d,1563456793050; vjuids=1be4f793f.16c054a41b6.0.6b5b7a77d19a78; vjlast=1563456848.1563930352.13; vinfo_n_f_l_n3=ad2a50d90e25c7dc.1.4.1563456848324.1563950911150.1563963465898; usertrack=ezq0ZV03rush6S+BCCg6Ag==; _ntes_nuid=0213f9288c03916f18ed2634a6a3506d; NNSSPID=bcf860b5427949c599552390d570c1d0; _ntes_stock_recent_plate_=%7Chy006000%3A%E6%89%B9%E5%8F%91%E9%9B%B6%E5%94%AE; _ntes_stock_recent_=0601857%7C0601326%7C0600682; _ntes_stock_recent_=0601857%7C0601326%7C0600682; _ntes_stock_recent_=0601857%7C0601326%7C0600682; ne_analysis_trace_id=1563963422398; s_n_f_l_n3=ad2a50d90e25c7dc1563963422401; _antanalysis_s_id=1563963428611; pgr_n_f_l_n3=ad2a50d90e25c7dc15639634493333113',
        'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,'
                  'application/signed-exchange;v=b3',
        'Accept-Encoding': 'gzip, deflate',
        'Accept-Language': 'zh,en-US;q=0.9,en;q=0.8,zh-TW;q=0.7,zh-CN;q=0.6',
        'Connection': 'keep-alive',
        'Host': 'quotes.money.163.com',
        'Referer': 'http://quotes.money.163.com / trade / lsjysj_601857.html',
        'Upgrade-Insecure-Requests': '1',
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) '
                      'Chrome/75.0.3770.100 Safari/537.36'
    }
    file_path = 'D:/Stock_Data/stock_info.csv'


class Index_data(Data):
    URL = 'http://quotes.money.163.com/service/chddata.html'
    HEADERS = {
        'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,'
                  'application/signed-exchange;v=b3',
        'Accept-Encoding': 'gzip, deflate',
        'Accept-Language': 'zh,en-US;q=0.9,en;q=0.8,zh-TW;q=0.7,zh-CN;q=0.6',
        'Connection': 'keep-alive',
        'Host': 'quotes.money.163.com',
        'Referer': 'http://quotes.money.163.com/trade/lsjysj_zhishu_000003.html',
        'Upgrade-Insecure-Requests': '1',
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) '
                      'Chrome/75.0.3770.100 Safari/537.36'
    }
    PARAMS = {
        'start': '19900101',
        'fields': 'TCLOSE;HIGH;LOW;TOPEN;LCLOSE;CHG;PCHG;VOTURNOVER;VATURNOVER '
    }
    file_path = 'D:/linshi/'


class Bonus(object):
    URL = 'http://quotes.money.163.com/f10/fhpg_{}.html'
    HEADERS = {}
    file_path = ''

    def __init__(self, symbol):
        self.symbol = symbol
        self.URL = self.URL.format(symbol)
        print('正在获取{}数据……'.format(symbol))
        response = requests.get(url=self.URL,
                                headers=self.HEADERS)
        self.html = etree.HTML(response.content.decode('gbk'))

    def get_data(self, content='bonus', num_div='4', num_col=8):
        if content == 'bonus':
            title = self.html.xpath('/html/body/div[2]/div[4]/table/thead/tr/th/text()')
            del title[2]
            title[2], title[3], title[4], title[5], title[6], title[7] = title[5], title[6], title[7], title[2], title[
                3], title[4]
            columns = title
        else:
            columns = self.html.xpath('/html/body/div[2]/div[{}]/table/thead/tr/th/text()'.format(num_div))

        tds = self.html.xpath('/html/body/div[2]/div[{}]/table/tr/td'.format(num_div))
        data_list = []
        for t in tds:
            data_list.append(t.text)
        if not ('暂无数据' in data_list):
            data = pd.DataFrame(columns=columns)
            for i in range(0, len(data_list), num_col):
                data_dict = {}
                for j in range(num_col):
                    data_dict[columns[j]] = data_list[i + j]
                data_df = pd.DataFrame(data_dict, columns=columns, index=[i // num_col])
                data = data.append(data_df)
            data.to_csv(self.file_path + self.symbol + '.csv', encoding='gbk', index=False)
        else:
            print('暂无数据')
        print('{}数据处理完成'.format(self.symbol))

    def get_bonus(self):
        self.file_path = 'F:/Stock_Data/bonus/'
        self.get_data(content='bonus', num_div='4', num_col=8)

    def get_allot(self):
        self.file_path = 'F:/Stock_Data/allot/'
        self.get_data(content='allot', num_div='6', num_col=8)

    def get_issue(self):
        self.file_path = 'F:/Stock_Data/issue/'
        self.get_data(content='issue', num_div='8', num_col=8)

    def get_financing(self):
        self.file_path = 'F:/Stock_Data/financing/'
        self.get_data(content='finacing', num_div='10', num_col=6)


def get_bonus_data(symbol):
    bonus = Bonus(symbol)
    bonus.get_bonus()
    bonus.get_allot()
    bonus.get_issue()
    bonus.get_financing()


def get_all_bonus_data():
    stock_info = Stock_info()
    info_df = stock_info.data_df
    pool = Pool(10)
    for row in info_df.iterrows():
        symbol = row[1]['SYMBOL']
        pool.apply_async(func=get_bonus_data, args=(symbol,))
    pool.close()
    pool.join()


def get_index_data(code):
    index_data = Index_data()
    index_data.get_data(code)


def get_all_index_data():
    index_info = Index_info()
    info_df = index_info.data_df
    pool = Pool(10)
    for row in info_df.iterrows():
        code = row[1]['CODE']
        pool.apply_async(func=get_index_data, args=(code,))
    pool.close()
    pool.join()


def get_stock_data(code):
    stock_data = Stock_data()
    stock_data.get_data(code)


def get_all_stock_data():
    stock_info = Stock_info()
    info_df = stock_info.data_df
    pool = Pool(10)
    for row in info_df.iterrows():
        code = row[1]['CODE']
        pool.apply_async(func=get_stock_data, args=(code,))
    pool.close()
    pool.join()


def get_info():
    stock_info = Stock_info()
    index_info = Index_info()
    stock_info.get_data()
    index_info.get_data()


if __name__ == '__main__':
    get_info()
    get_all_stock_data()
    get_all_index_data()
    get_all_bonus_data()

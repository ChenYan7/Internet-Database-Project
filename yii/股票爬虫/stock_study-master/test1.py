import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
import os
from models import Stock

csv_file = open('D:/Stock_Data/stock_info.csv', 'r+', encoding='gbk')
data_df = pd.read_csv(csv_file)
for index, row in data_df.iterrows():
    if len(str(row['CODE'])) == 7:
        code = str(row['CODE'])[1:]
    else:
        code = row['CODE']
    path = "D:/Stock_Data/stock_info.csv{}.csv".format(code)
    if os.path.exists(path):
        detail_file = open(path, 'r+', encoding='gbk')
        data = pd.read_csv(detail_file).sort_values(by="日期", ascending=False)
        insert_data = [{"day": v["日期"], "code": row['CODE'], "name": v["名称"], "price": v["收盘价"], "height": v["最高价"], "low": v["最低价"], "open": v["开盘价"], "open": v["开盘价"], "yes_close": v["前收盘"], "updown": v["涨跌额"], "percent": v["涨跌幅"], "volume": v["成交量"], "tornover": v["成交金额"], "tcap": v["总市值"], "mcap": v["流通市值"]} for i, v in data[0:30].iterrows()]
        Stock.insert_many(insert_data).execute()
        print(insert_data)



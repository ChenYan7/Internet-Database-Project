from peewee import *

database = MySQLDatabase('yii', user='root', host='localhost', port=3306, password="123")


class Stock(Model):
    day = DateField(verbose_name="日期", null=True)
    code = CharField(verbose_name="股票代码", null=True)
    name = CharField(verbose_name="名称", null=True)
    price = DecimalField(verbose_name="收盘价", null=True)
    height = DecimalField(verbose_name="最高价", null=True)
    low = DecimalField(verbose_name="最低价", null=True)
    open = DecimalField(verbose_name="开盘价", null=True)
    yes_close = DecimalField(verbose_name="前收盘", null=True)
    updown = DecimalField(verbose_name="涨跌额", null=True)
    percent = DecimalField(verbose_name="涨跌幅", null=True)
    volume = IntegerField(verbose_name="成交量", null=True)
    tornover = IntegerField(verbose_name="成交金额", null=True)
    tcap = IntegerField(verbose_name="总市值", null=True)
    mcap = IntegerField(verbose_name="流通市值", null=True)

    class Meta:
        database = database

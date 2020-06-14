<?php
/*
Team:Four little swans
coding by 苑华莹 1810780 郑惠麟 1811522
*/
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widget;

$this->title = Yii::t('app', '中国数据');
$this->params['breadcrumbs'][] = $this->title;
?>

<div align="center">
    <h1><?= Html::encode($this->title) ?></h1>
<table width="843" border="0" align="center">
  <tr align="center" height="50">
    <td width="107" bgcolor="#f0ffff">cityName</td>
    <td width="161" bgcolor="#ffb6c1">currentConfirmedCount</td>
    <td width="133" bgcolor="#ff6347">confirmedCount</td>
    <td width="165" bgcolor="#e6e6fa">suspectedCount</td>
    <td width="127" bgcolor="#f0ffff">curedCount</td>
    <td width="124" bgcolor="#f5f5dc">deadCount</td>
  </tr>
    <?php foreach ($models as $model):?>
  <tr align="center">
        <td><?= "<li>".$model['cityname']."</li>" ?>
        <td><?= "<li>".$model['currentConfirmedCount']."</li>"?>
        <td><?= "<li>".$model['confirmedCount']."</li>" ?>
        <td><?= "<li>".$model['suspectedCount']."</li>" ?>
        <td><?= "<li>".$model['curedCount']."</li>" ?>
        <td><?= "<li>".$model['deadCount']."</li>" ?>
  </tr>
   <?php endforeach ?>
</table>
</div>
<?= LinkPager::widget([ 
        'pagination' => $pages, 
        'nextPageLabel' => '下一页', 
        'prevPageLabel' => '上一页', 
        'firstPageLabel' => '首页', 
        'lastPageLabel' => '尾页',
    ]); 
?>



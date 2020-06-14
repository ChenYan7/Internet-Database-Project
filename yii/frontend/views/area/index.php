<?php
/*
Team:Four little swans
coding by 郑惠麟 1811522
*/
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widget;

$this->title = Yii::t('app', '全球数据');
$this->params['breadcrumbs'][] = $this->title;
?>

<div align="center">
    <h1><?= Html::encode($this->title) ?></h1>
<table width="880" border="0" align="center">
  <tr align="center" height="50">
    <td width="143" bgcolor="#f0ffff">countryName</td>
    <td width="185" bgcolor="#ffb6c1">currentConfirmedCount</td>
    <td width="134" bgcolor="#ff6347">confirmedCount</td>
    <td width="147" bgcolor="#e6e6fa">suspectedCount</td>
    <td width="114" bgcolor="#f0ffff">curedCount</td>
    <td width="131" bgcolor="#f5f5dc">deadCount</td>
  </tr>
    <?php foreach ($models as $model):?>
  <tr align="center">
        <td><?= "<li>".$model['countryName']."</li>" ?>
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



<?php
/*
Team:
Coding by ZhengHuilin 1811522
*/
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widget;

$this->title = Yii::t('app', 'Test2');
$this->params['breadcrumbs'][] = $this->title;
?>

<div align="center">
    <h1><?= Html::encode($this->title) ?></h1>
<table width="1000" border="0" align="center">
  <tr align="center" height="50">
    <td bgcolor="#f0ffff">countryName</td>
    <td bgcolor="#ffb6c1">currentConfirmedCount</td>
    <td bgcolor="#ff6347">confirmedCount</td>
    <td bgcolor="#e6e6fa">suspectedCount</td>
    <td bgcolor="#e6e6fa">curedCount</td>
    <td bgcolor="#f5f5dc">deadCount</td>
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



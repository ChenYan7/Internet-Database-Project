<?php
/*
Team:Four little swans
coding by 郑惠麟 1811522
*/
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widget;

$this->title = Yii::t('app', 'News');
$this->params['breadcrumbs'][] = $this->title;
?>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <style>
 ul,li{ margin:0; padding:0; }
 li{ list-style:none; }
 .container{ display:inline-block; background: #fffffc; padding:10px; border:1px solid #ccc; font-family:"Microsoft YaHei"; }
 .container .li-box{ height:28px; overflow:hidden; }
 .container ul{ position:relative; animation: moveUp 33s infinite; -webkit-animation: moveUp 33s infinite; }
 @keyframes moveUp
 {
 0%   {top:0px;}
 10%  {top:0px;}
 20%  {top:-20px;}
 30%  {top:-40px;}
 40%  {top:-60px;}
 50%  {top:-68px;}
 60%  {top:-90px;}
 70%  {top:-110px;}
 80%  {top:-130px;}
 90%  {top:-150px;}
100%  {top:-170px;}
 }</p> <p> @-webkit-keyframes moveUp  /*Safari and Chrome*/
 {
 0%   {top:0px;}
 10%  {top:0px;}
 20%  {top:-20px;}
 30%  {top:-40px;}
 40%  {top:-60px;}
 50%  {top:-70px;}
 60%  {top:-90px;}
 70%  {top:-110px;}
 80%  {top:-130px;}
 90%  {top:-150px;}
100%  {top:-170px;}
 }
 .container li{ line-height:1.8; color:#666; }
</style>
</head>
<body>
 <h1 align="center"><?= Html::encode($this->title) ?></h1>
 <div class="container">
 <div class="li-box">
 <ul>
 <?php $i=0 ?>
 <?php foreach ($title as $value): ?>
 <?= "<a href=$source[$i]>".$title[$i]."</a>" ?>
 <br>
 <?php $i=$i+1 ?>
 <?php endforeach?>
 </ul>
 </div>
 </div>
 <div align="center">
    <table width="1000" border="0" align="center">
    <?php $i=0 ?>
    <?php foreach ($models as $value):?>
  <tr align="center">
        <td><?="<h3>".$value['title']."</h3>" ?><br><?= $value['summary'] ?><br><div align="right"><?= $value['infoSource']?></div></td>
  </tr>
  <?php $i=$i+1?>
   <?php endforeach ?>
</table>
</div>
</body>
</html>
<?= LinkPager::widget([ 
        'pagination' => $pages, 
        'nextPageLabel' => '下一页', 
        'prevPageLabel' => '上一页', 
        'firstPageLabel' => '首页', 
        'lastPageLabel' => '尾页',
    ]); 
?>

<?php

/*
Team:Four little swans
Coding by 陈燕 1811471
*/
 
/* @var $this \yii\web\View */
/* @var $content string */
 
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use backend\assets\LoginAsset;
 
//LoginAsset 在后面的步骤中会创建
LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
 <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="signwrapper">
<?php $this->beginBody() ?>
 
<?= $content ?>
 
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
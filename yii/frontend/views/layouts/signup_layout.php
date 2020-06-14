<?php
/*
Team:Four little swans
coding by 郑惠麟 1811522
*/
use frontend\assets\SignupAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
//use backend\models\MemberSearch;

SignupAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
	<?php $this->beginBody() ?>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<!--<a href="/" class="logo pull-left">
					<img src="assets/images/logo.png" height="54" alt="Porto Admin" />
				</a>-->

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
					</div>
					<div class="panel-body">
						<!--Begin:Content-->
                     <section id="content" class="table-layout animated fadeIn">
                     <?= $content ?>
                     </section>
                     <!-- End: Content -->
					</div>
				</div>
			</div>
		</section>
		<!-- end: page -->
    <?php $this->endBody() ?>
	</body>
	<?php $this->endPage() ?>
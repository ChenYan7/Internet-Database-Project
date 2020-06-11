<?php
/*
Team:Four little swans
Coding by 苑华莹1810780 郑慧麟1811522  
*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ContactmeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contactmes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactme-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Contactme', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   


</div>

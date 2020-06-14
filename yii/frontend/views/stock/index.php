<?php
/*
Team:Four little swans
Coding by 苑华莹1810780 
*/
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\StockSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Stocks');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php Pjax::begin(); ?>
   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showHeader'=>1,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'day',
            'name',
            'price',
            'height',
            'low',
            'open',
            'yes_close',
            'updown',
            'percent',
            'volume',
            'tornover',
            'tcap',
            'mcap',
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>

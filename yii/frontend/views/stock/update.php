<?php
/*
Team:Four little swans
Coding by 苑华莹1810780 
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Stock */

$this->title = Yii::t('app', 'Update Stock: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Stocks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="stock-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

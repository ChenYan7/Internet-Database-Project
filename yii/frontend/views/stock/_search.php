<?php
/*
Team:Four little swans
Coding by 苑华莹1810780 
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\StockSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>


    <?= $form->field($model, 'day') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'low') ?>

    <?php // echo $form->field($model, 'open') ?>

    <?php // echo $form->field($model, 'yes_close') ?>

    <?php // echo $form->field($model, 'updown') ?>

    <?php // echo $form->field($model, 'percent') ?>

    <?php // echo $form->field($model, 'volume') ?>

    <?php // echo $form->field($model, 'tornover') ?>

    <?php // echo $form->field($model, 'tcap') ?>

    <?php // echo $form->field($model, 'mcap') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

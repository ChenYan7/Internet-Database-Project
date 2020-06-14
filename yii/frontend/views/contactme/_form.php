<?php
/*
Team:Four little swans
Coding by 苑华莹1810780  
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Contactme */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contactme-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>
    <br>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <br>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
    <br>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <br>

    <?= $form->field($model, 'feedback')->textarea(['rows' => 8]) ?>
    <br>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

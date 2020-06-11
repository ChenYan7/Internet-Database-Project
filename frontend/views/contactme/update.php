<?php
/*
Team:Four little swans
Coding by 苑华莹1810780 郑慧麟1811522  
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Contactme */

$this->title = '更新信息: ' ;
$this->params['breadcrumbs'][] = ['label' => 'Contactmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contactme-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

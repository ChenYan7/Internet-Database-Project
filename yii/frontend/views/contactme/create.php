<?php
/*
Team:Four little swans
Coding by 苑华莹1810780  
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Contactme */

$this->title = 'Create Contactme';
$this->params['breadcrumbs'][] = ['label' => 'Contactmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactme-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

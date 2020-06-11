<?php
/*
Team:Four little swans
Coding by 苑华莹1810780 郑慧麟1811522  
*/
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Contactme */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Contactmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="contactme-view">

    <h1><?= Html::encode($this->title.',') ?></h1>
    <h2>感谢您的反馈，您提交的信息如下所示<h2>
    <p>
        <?= Html::a('重新填写', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'phone',
            'email:email',
            'feedback',
        ],
    ]) ?>

</div>

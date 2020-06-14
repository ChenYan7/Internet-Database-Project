<?php

/*
Team:Four little swans
Coding by 陈燕 1811471
*/

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\widgets\ListView;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContactmeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Contactmes';
//$this->params['breadcrumbs'][] = $this->title;
?>
<!--div class="contactme-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Contactme', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'phone',
            'email:email',
            'feedback',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div-->

<div class="container">

    <div class="row">
        <div class="col-md-8">
        <ol class="breadcrumb">
        <li><a href="<?= Yii::$app->homeUrl;?>">Home</a></li>
        <li>留言列表</li>
        
        </ol>
        
        <?= ListView::widget([
                'id'=>'messageList',
                'dataProvider'=>$dataProvider,
                'itemView'=>'_listitem',
                'layout'=>'{items}{pager}',
                'pager'=>[
                        'maxButtonCount' => 5,//最多显示几个分页按钮
                        'firstPageLabel' => '首页',
                        'prevPageLabel' => '上一页',
                        'nextPageLabel' => '下一页',
                        'lastPageLabel' => '尾页'
                ],

        ])?>
        
        </div>

    </div>

</div>
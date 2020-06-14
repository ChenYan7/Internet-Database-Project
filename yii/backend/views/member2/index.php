<?php

/*
Team:Four little swans
Coding by 陈燕 1811471
*/

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\backend\models\member;
use yii\widgets\ListView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\MemberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '成员管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('添加新成员', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'pager'=>[
            //'options'=>['class'=>'hidden']//关闭自带分页
            'firstPageLabel'=>"第一页",
            'prevPageLabel'=>'上一页',
            'nextPageLabel'=>'下一页',
            'lastPageLabel'=>'最后一页',
        ],
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            //'stu_id',
            //'gender',
            //'college',
            //'email:email',
            'role',
            'message',

            ['class' => 'yii\grid\ActionColumn',
                    'template'=>'{view} {update}'
                ],
        ],
    ]); ?>
    
                        
    <?php Pjax::end(); ?>

    <!--div class="col-md-8 col-lg-6">

    <div class="tabs">
        <ul class="nav nav-tabs tabs-primary">
            <li>
                <a href="#edit" data-toggle="tab">成员信息展示</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="edit" class="tab-pane">
                        <?= ListView::widget([
                            'id'=>'memberList',
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
    </div-->
</div>

</div>


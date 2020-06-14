<?php

/*
Team:Four little swans
Coding by 张明悦 1811517
*/

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\frontend\models\member;
use yii\widgets\ListView;
use yii\helpers\Url;
use frontend\assets\LayuiAsset;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MemberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>


<div class="layui-container">
    <div class="layui-carousel" id="uscarousel" lay-filter="uscarousel" >
        <div carousel-item >
            <?php foreach ($data as $value):?>

                <div class="layui-container">
                    <div class="pull-right" style="position: absolute;left: 650px;top: 10px;">
                        <img src="<?php echo Url::to('@web/statics/assets/images/天鹅湖.jpg')?>" alt="" width="400" class="img-thumbnail">
                    </div>
                    <br>
                    <div class="layui-row">
                        <div class="layui-col-md3" style="position: relative; left: 100px;">
                            <i class="fa fa-user fa-2x">姓名</i>
                        </div>
                    </div>
                    <div class="layui-row">
                        <div class="layui-col-md3" style="position: relative; left: 100px;">
                            <p class="h4"><?= $value['name'] ?></p>
                        </div>
                    </div>
                    <br>
                    <div class="layui-row">
                        <div class="layui-col-md3" style="position: relative; left: 100px;">
                            <i class="fa fa-info-circle fa-2x">学号</i>
                        </div>
                    </div>
                    <div class="layui-row">
                        <div class="layui-col-md3" style="position: relative; left: 100px;">
                            <p class="h4"><?= $value['id'] ?></p>
                        </div>
                    </div>
                    <br>

                    <div class="layui-row">
                        <div class="layui-col-md3" style="position: relative; left: 100px;">
                            <i class="fa fa-superpowers fa-2x">座右铭</i>
                        </div>
                    </div>
                    <div class="layui-row">
                        <div class="layui-col-md10" style="position: relative; left: 100px;">
                            <p class="h4"><?= $value['message'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<br>

<?php LayuiAsset::addscript($this,'@web/resources/js/aboutus.js')?>




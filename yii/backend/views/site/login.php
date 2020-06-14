<?php

/*
Team:Four little swans
Coding by 陈燕 1811471
*/
 
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use backend\models\user;
 
$this->title = '登录';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sign-overlay"></div>
<div class="signpanel"></div>
 
<div class="panel signin">
    <div class="panel-heading">
        <h4 class="panel-title">欢迎登陆系统后台</h4>
    </div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
 
        <?= $form->field($model, 'username',[
            'inputOptions'=>[
                'placeholder'=>'请输入登录账号',
            ],
            'inputTemplate'=>'<div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>{input}
                                    </div>',
        ])->textInput(['autofocus' => true])->label(false) ?>
 
        <?= $form->field($model, 'password',[
            'inputOptions'=>[
                'placeholder'=>'请输入登录密码',
            ],
            'inputTemplate'=>
                '<div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>{input}
                                    </div>',
 
        ])->passwordInput()->label(false) ?>
 
        <!--div><a href="#" class="forgot">忘记密码</a></div-->
 
        <div class="form-group">
            <?= Html::submitButton('登录', ['class' => 'btn btn-primary btn-success btn-block', 'name' => 'login-button']) ?>
        </div>
 
        <?php ActiveForm::end(); ?>
        <hr class="invisible">
        
    </div>
</div><!-- panel -->
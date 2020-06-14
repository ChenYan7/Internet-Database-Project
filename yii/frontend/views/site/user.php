<?php  
use yii\helpers\Html;  
use yii\widgets\ActiveForm;  
  
?>  
  
<h1>YII2.0使用ActiveForm</h1>  
  
<?php $form = ActiveForm::begin([  
    'action' => ['log/login'], //提交地址(*可省略*)  
    'method'=>'post',    //提交方法(*可省略默认POST*)  
    'id' => 'login-form', //设置ID属性  
    'options' => [  
            'class' => 'form-horizontal', //设置class属性  
            'enctype' => 'multipart/form-data' //文件上传时添加该编码  
    ],  
    'fieldConfig' => [  
            'template' => '<div class="form-group"><center><label class="col-md-2 control-label" for="type-name-field">{label}</label></center><div class="col-md-8 controls">{input}{error}</div></div>'  
    ],  //设置模板的样式  
]); ?>  
  
    <!--文本框 (*验证长度可在这里写 maxlength 这样就不用再 model 里面写了 *)-->  
    <?= $form->field($model, 'username',['template'=>'<div class="form-group"><div class="col-md-8 controls">{label}{input}{error}</div></div>'])->textInput(['maxlength' => 20,"style"=>"width:200px; height:30px;"]) ?>  
      
    <!--密码框 (*不使用他的lable只需要用false把他禁止, 然后你可以自己写*)-->  
    <h4>密码</h4><?= $form->field($model, 'pwd')->label(false)->passwordInput(['maxlength' => 20,"style"=>"width:200px; height:30px;","placeholder"=>"请输入您的密码"]) ?>  
  
    <?= $form->field($model, 're_pwd')->passwordInput(['maxlength' => 20,"style"=>"width:200px; height:30px;","placeholder"=>"请输入您的密码"]) ?>  
      
    <!--单选按钮(*设置默认选中*)-->  
    <?php $model->sex=1; echo $form->field($model, 'sex')->radioList(['1'=>'男','0'=>'女']) ?>  
  
    <!--验证邮箱-->  
    <?= $form->field($model, 'email')->textInput() ?>  
      
    <!--下拉框的默认选中使用 prompt 设置 -->  
    <?= $form->field($model, 'school')->dropDownList(['1'=>'大学','2'=>'高中','3'=>'初中'], ['prompt'=>'请选择','style'=>'width:120px']) ?>  
      
    <!--文件上传-->  
    <?= $form->field($model, 'photo')->fileInput() ?>  
      
    <!--复选框 -->  
    <?= $form->field($model, 'hobby')->checkboxList(['0'=>'篮球','1'=>'足球','2'=>'羽毛球','3'=>'乒乓球']) ?>  
      
    <!--文本域-->  
    <?= $form->field($model, 'remark')->textarea(['rows'=>3]) ?>  
      
    <!--隐藏域-->  
    <?= $form->field($model, 'userid')->hiddenInput(['value'=>3])->label(false); ?>  
  
    <?= Html::submitButton('提交', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>  
         
    <?= Html::resetButton('重置', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>  
  
<?php ActiveForm::end(); ?>  


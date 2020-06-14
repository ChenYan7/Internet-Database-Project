<?php

/*
Team:Four little swans
Coding by 陈燕 1811471
*/

/* @var $this yii\web\View */

$this->title = '' ;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div id="Layer1" style="position:fixed; left:0px; top:0px; width:100%; height:100%">  
    <img src="statics/images/bg.jpg" width="100%" height="100%"/>     
</div>
</body>
</html>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="site-index">              
        <div style="position:absolute;left:1000px;top:500px">
            
                <p><font size="10" color="white"><strong>您已成功登录！</strong></font></p>                      
                <div class="col-lg-6">
                    <p><a class="btn btn-lg btn-success" href="index.php?r=user%2Findex">进入后台</a></p>
                </div>
                
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
?>

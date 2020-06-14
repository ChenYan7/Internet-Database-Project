<?php

/*
Team:Four little swans
Coding by 陈燕 1811471
*/

use yii\helpers\Html;
?>

<div class="contactme">
	<div class="name">
		<h2><span class="glyphicon glyphicon-user" aria-hidden="true"><a href="<?= $model->url;?>"><?= Html::encode($model->name);?></a></span></h2>
	</div>
		
	<br>
	<div class="content">
	<?= $model->beginning;?>	
	</div>
</div>
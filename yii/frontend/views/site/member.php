<?php
use yii\helpers\Html;  
?>

<h1>members</h1>
<ul>  
<?php foreach ($members as $member): ?>  
   <li>  
       <?= Html::encode("{$member->name} from ({$member->id})") ?>:  
       <?= $member->message ?>  
   </li>  
<?php endforeach; ?>  
</ul>  

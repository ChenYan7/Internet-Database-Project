<?php
/*
Team:Four little swans
Coding by 苑华莹1810780 郑惠麟1811522  
*/

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Rumors;
use yii\helpers\ArrayHelper;
use yii\data\Pagination;
use yii\grid\GridView;
use yii\db\ActiveRecord;

class RumorController extends Controller
{
	public $layout = "main_layout";
    public function actionIndex()
    {
      	$model= Rumors::find()->asArray()->all();
        $title = ArrayHelper::getColumn($model,'title');
        $summary = ArrayHelper::getColumn($model,'summary');
        $body=ArrayHelper::getColumn($model,'body');
        $sourceurl=ArrayHelper::getColumn($model,'sourceUrl');

        $query = Rumors::find();
        $countQuery = clone $query;
        $pageSize = 3;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => $pageSize]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index',[
        	'models'=>$models,
        	'pages'=>$pages,
        	'title'=>$title,
        	'summary'=>$summary,
        	'body'=>$body,
        	'sourceurl'=>$sourceurl,
            'title'=>$title]);
    }

}

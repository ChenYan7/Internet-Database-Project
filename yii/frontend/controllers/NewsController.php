<?php
/*
Team:Four little swans
coding by 郑惠麟 1811522
*/
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\News;
use yii\helpers\ArrayHelper;
use yii\data\Pagination;
use yii\grid\GridView;
use yii\db\ActiveRecord;
class NewsController extends Controller{
      public $layout = "main_layout";
      public function actionIndex(){
      	$model= News::find()->asArray()->all();
        $title = ArrayHelper::getColumn($model,'title');
        $source=ArrayHelper::getColumn($model,'sourceTrl');
        $summary=ArrayHelper::getColumn($model,'summary');
        $infosource=ArrayHelper::getColumn($model,'infoSource');

        $query = News::find();
        $countQuery = clone $query;
        $pageSize = 3;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => $pageSize]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('index',[
        	'models'=>$models,
        	'pages'=>$pages,
        	'source'=>$source,
        	'summary'=>$summary,
        	'infosource'=>$infosource,
            'title'=>$title]);
      }
}
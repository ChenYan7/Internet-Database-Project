<?php
/*
Team:Four little swans
coding by 苑华莹 1810780 郑惠麟 1811522
*/
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\China;
use yii\helpers\ArrayHelper;
use yii\data\Pagination;
use yii\grid\GridView;
use yii\db\ActiveRecord;
class ChinaController extends Controller{
    public $layout = "main_layout";
    public function actionIndex() {
        $query = China::find();
        $countQuery = clone $query;
        $pageSize = 15;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => $pageSize]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
        ]);
   }
}
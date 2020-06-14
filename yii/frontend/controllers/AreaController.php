<?php
/*
Team:Four little swans
coding by 郑惠麟 1811522
*/
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Area;
use yii\helpers\ArrayHelper;
use yii\data\Pagination;
use yii\grid\GridView;
use yii\db\ActiveRecord;
class AreaController extends Controller{
    public $layout = "main_layout";
    public function actionIndex() {
        $query = Area::find();
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
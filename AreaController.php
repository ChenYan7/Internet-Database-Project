<?php
/*
Team:
Coding by ZhengHuilin 1811522
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
	/*public function actionChina(){
	$db = \Yii::$app->db;
	$cmd = $db->createCommand('SELECT * FROM dxy_china');
	$res = $cmd->queryAll();
	echo json_encode($res);
}*/
 public function actionIndex() {
        $searchModel = new Area();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionTest(){
        $model= Area::find()->asArray()->all();
        $count = Area::find()->count();
        $pages = new Pagination([
        'totalCount' => $count,
         'pageSize'  => 5 //每页显示条数
         ]);
        //$model=$model->offset($pages->offset)->limit($pages->limit);
        $countryName = ArrayHelper::getColumn($model,'countryName');
        $currentConfirmedCount=ArrayHelper::getColumn($model,'currentConfirmedCount');
        $confirmedCount=ArrayHelper::getColumn($model,'confirmedCount');
        $suspectedCount=ArrayHelper::getColumn($model,'suspectedCount');
        $curedCount=ArrayHelper::getColumn($model,'curedCount');
        $deadCount=ArrayHelper::getColumn($model,'deadCount');
        return $this->render('test',[
            'pages' => $pages,
            'countryName'=>$countryName,
            'currentConfirmedCount'=>$currentConfirmedCount,
            'confirmedCount'=>$confirmedCount,
            'suspectedCount'=>$suspectedCount,
            'curedCount'=>$suspectedCount,
            'curedCount'=>$curedCount,
            'deadCount'=>$deadCount]);
    }

   public function actionTest2(){
        $query = Area::find();
        $countQuery = clone $query;
        $pageSize = 15;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => $pageSize]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('test2', [
            'models' => $models,
            'pages' => $pages,
        ]);
}
}
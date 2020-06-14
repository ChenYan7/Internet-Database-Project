<?php

/*
Team:Four little swans
Coding by 陈燕 1811471
*/

namespace frontend\controllers;

use Yii;
use frontend\models\Member;
use frontend\models\MemberSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * MemberController implements the CRUD actions for Member model.
 */
class MemberController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public $layout="main_layout";
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Member models.
     * @return mixed
     */
    /*public function actionIndex()
    {
        $searchModel = new MemberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        //$model= new MemberSearch();
        //$model = $this->findModel($id);
        return $this->render('index', [
            //'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }*/

    public function actionIndex(){
        $model= Member::find()->asArray()->all();
        $name = ArrayHelper::getColumn($model,'name');
        $id=ArrayHelper::getColumn($model,'id');
        //$gender=ArrayHelper::getColumn($model,'gender');
        //$college=ArrayHelper::getColumn($model,'college');
        //$email=ArrayHelper::getColumn($model,'email');
        $message=ArrayHelper::getColumn($model,'message');
        return $this->render('index',[
            'name'=>$name,
            'id'=>$id,
            //'gender'=>$gender,
            //'college'=>$college,
            //'email'=>$email,
            'message'=>$message,
            ]);
    }

    /**
     * Displays a single Member model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Member model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Member();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        $user = Yii::$app->user->identity->username;
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Member model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Member model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /* public function actionResetpwd($id)
    {
        $model = new ResetpwdForm();
    
        if ($model->load(Yii::$app->request->post())) {
            
            if($model->resetPassword($id))
            {
                return $this->redirect(['index']);
            }
        }
         
        return $this->render('resetpwd', [
                'model' => $model,
        ]);
    
    }*/
    /**
     * Finds the Member model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Member the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Member::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

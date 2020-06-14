<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Member;
use yii\web\NotFoundHttpException;
use yii\helpers\ArrayHelper;
use common\models\Stock;
use common\models\StockVolume;
/**
 * Team controller
 */
class TeamController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public $layout = "main_layout2";
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post','get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    /*public function actionIndex()
    {
        return $this->render('index');
    }*/

     public function actionEconomic(){
         $data1 = array();
         $result = Stock::find()->select('name')->groupBy("name")->limit(30)->all();
         $i=1;
         foreach ($result as $v)
         {
             $temp =  Stock::find()->where(['name' => $v->name])->select('day,price,volume')->all();
             $tempVolume =  StockVolume::find()->where(['name' => $v->name])->select('day,price,volume')->all();
             $result_temp['name'] = $v->name;
             $result_temp['value1'] = "a"."flotDashSales1Data".$i;
             $result_temp['value2'] = "b"."flotDashSales1Data".$i;

             $data1_echart = [];
             $data2_echart = [];
             foreach ($temp as $k2=>$v2)
             {
                 $data1_temp1 = [];
                 $data1_temp1[] = $v2->day;
                 $data1_temp1[] = $v2->price;

                 $data1_temp2 = [];
                 $data1_temp2[] = $v2->day;
                 $data1_temp2[] = $tempVolume[$k2]->volume;

                 $data1_echart['data'][] = $data1_temp1;
                 $data2_echart['data'][] = $data1_temp2;
             }

             $data1_echart['color'] = "#0088cc";
             $result_temp['data'] = $data1_echart;

             $data2_echart['color'] = "#0088cc";
             $result_temp['data2'] = $data2_echart;

             $data1[] = $result_temp;
             $i++;
         }
        $this->view->params['data1'] = $data1;
        return $this->render('index1',['data1'=>$data1]);
    }

    public function actionIndex(){
        $this->layout = "main_layout";
        $model= Member::find()->asArray()->all();
        return $this->render('index',[
            'data'=>$model,
        ]);
    }
}

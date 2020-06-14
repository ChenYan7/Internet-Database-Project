<?php

namespace frontend\controllers;

class StocklineController extends \yii\web\Controller
{
	public $layout = "main_layout";
    public function actionIndex()
    {
        return $this->render('index');
    }

}

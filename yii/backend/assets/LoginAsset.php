<?php
 
 /*
Team:Four little swans
Coding by 陈燕 1811471
*/

namespace backend\assets;
 
use yii\web\AssetBundle;
 
/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'statics/css/font-awesome/css/font-awesome.min.css',
        'statics/css/layout.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
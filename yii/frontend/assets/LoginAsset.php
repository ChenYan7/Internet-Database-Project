<?php
/*
Team:Four little swans
coding by 郑惠麟 1811522
*/
namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/statics';
    public $css = [
        //<!-- Vendor CSS -->
        'assets/vendor/bootstrap/css/bootstrap.css',
        'assets/vendor/font-awesome/css/font-awesome.css',
        'assets/vendor/magnific-popup/magnific-popup.css' ,
        'assets/vendor/bootstrap-datepicker/css/datepicker3.css' ,

        //<!-- Theme CSS -->
        'assets/stylesheets/theme.css' ,

        //<!-- Skin CSS -->
       'assets/stylesheets/skins/default.css',

        //<!-- Theme Custom CSS -->
        'assets/stylesheets/theme-custom.css',
    ];
    public $js = [
        'assets/vendor/modernizr/modernizr.js',
        //<!-- Vendor -->
        'assets/vendor/jquery/jquery.js',
        'assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js',
        'assets/vendor/bootstrap/js/bootstrap.js',
        'assets/vendor/nanoscroller/nanoscroller.js',
        'assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js',
        'assets/vendor/magnific-popup/magnific-popup.js',
        'assets/vendor/jquery-placeholder/jquery.placeholder.js',
        
        //<!-- Theme Base, Components and Settings -->
        'assets/javascripts/theme.js',
        
        //<!-- Theme Custom -->
        'assets/javascripts/theme.custom.js',
        
        //<!-- Theme Initialization Files -->
        'assets/javascripts/theme.init.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

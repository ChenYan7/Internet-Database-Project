<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'defaultRoute' => 'site',
    'bootstrap' => ['log'],
    'modules' => [],
    /*'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
             //'layout' => 'left-menu',//yii2-admin的导航菜单
            'layout'=>'main_layout',
            ]
    ],*/
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // 使用数据库管理配置文件
        ],
        /*'urlManager' => [
            'enablePrettyUrl' => true,
            // 'enableStrictParsing' => true,
            'showScriptName' => false,
            'suffix' => '.html',
            'rules' => [
                '<controller:(user|member|message)>s'=>'<controller>/index',
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<id:\d+>/<action:(create|update|delete)>'=>'<controller>/<action>',
            ],

        ],*/
        /*'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            //'showScriptName' => false,
            'suffix' => '',
            'rules' => [
                '<controller:\w+>/<id:\d+>' => '<controller>/index',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>'
            ],
        ],*/
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\Adminuser',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],

    'params' => $params,
    /*'aliases' => [
        '@mdm/admin' => '@vendor/yii2-admin-2.9',
        // for example: '@mdm/admin' => '@app/extensions/mdm/yii2-admin-2.0.0',
    ],
    'as access' => [
            'class' => 'mdm\admin\components\AccessControl',
            'allowActions' => [
                '*',
                'member/*',
                'message/*',
                'user/*',
                'site/*',//允许访问的节点，可自行添加
                'admin/*',//允许所有人访问admin节点及其子节点
            ],
    ],*/
];

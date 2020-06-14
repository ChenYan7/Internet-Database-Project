<?php

/*
Team:Four little swans
Coding by 陈燕 1811471
*/

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

//use yii\grid\GridView;
//use yii\widgets\Pjax;
//use backend\models\User;
//use backend\controllers\UserController;
//$user = Yii::$app->user->identity->id; 
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <!--?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/user/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/user/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?-->
    <section class="body">
        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a class="logo">
                    <img src="statics/images/logo.png" height="35" alt="Porto Admin" />
                </a>
            </div>
                <!-- start: search & user box -->
            <div class="header-right">
                <span class="separator"></span>
        
                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                            <span class="role">管理员</span>
                            <p>
                                <?php echo $user = Yii::$app->user->identity->username; ?>
                            </p>
                                                     
                        </div>
        
                        <i class="fa custom-caret"></i>
                    </a>
        
                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                            <li>
                                <?= $menuItems[] = '<li>'
                                . Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                    '退出登录',
                                    ['class' => 'btn btn-link logout']
                                )
                                . Html::endForm()
                                . '</li>'; ?>
                               
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->
        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">            
                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li class="nav-active">
                                    <a href="index.php?r=member%2Findex">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>成员信息</span>
                                    </a>
                                </li>
                                <li class="nav-active">
                                    <a href="index.php?r=user%2Findex">
                                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                                        <span>用户信息</span>
                                    </a>
                                </li>
                                <li class="nav-active">
                                    <a href="index.php?r=contactme%2Findex">
                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                        <span>评论管理</span>
                                    </a>
                                </li>
                                <!--li class="nav-parent">
                                        <a>
                                            <i class="fa fa-tasks" aria-hidden="true"></i>
                                            <span>权限管理</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="index.php?r=admin">
                                                     分配
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index.php?r=admin%2Frole">
                                                     角色列表
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index.php?r=admin%2Fpermission">
                                                     权限列表
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index.php?r=admin%2Froute">
                                                     路由列表
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index.php?r=admin%2Frule">
                                                     规则列表
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index.php?r=admin%2Fmenu">
                                                     菜单列表
                                                </a>
                                            </li>
                                        </ul>
                                    </li-->
                                <!--li>
                                    <a href="statics/mailbox-folder.html">
                                        <span class="pull-right label label-primary">182</span>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span>Mailbox</span>
                                    </a>
                                </li--> 
                            </ul>         
                        </nav>
                    </div>
            
                </div>
            
            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>用户管理</h2>
                </header>
                <div class="container">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= Alert::widget() ?>
                    <?=$content ?>
                </div>
            </section>
        </div>
    </head>       
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

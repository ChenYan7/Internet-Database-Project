<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);

$data1 = $this->params['data1'];
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?php $this->beginBody() ?>

<!-- start: header -->
<header class="header">
    <div class="logo-container">
        <a href="../" class="logo">
            <img src="statics/assets/images/logo.png" height="35" alt="JSOFT Admin" />
        </a>
        <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <!-- start: search & user box -->
    <div class="header-right">

        <form action="pages-search-results.html" class="search nav-form">
            <div class="input-group input-search">

                <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                            </span>
            </div>
        </form>

        <span class="separator"></span>

        <ul class="notifications">
            <li>
                <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                    <i class="fa fa-tasks"></i>
                    <span class="badge">3</span>
                </a>

                <div class="dropdown-menu notification-menu large">
                    <div class="notification-title">
                        <span class="pull-right label label-default">3</span>
                        Tasks
                    </div>

                    <div class="content">
                        <ul>
                            <li>
                                <p class="clearfix mb-xs">
                                    <span class="message pull-left">Generating Sales Report</span>
                                    <span class="message pull-right text-dark">60%</span>
                                </p>
                                <div class="progress progress-xs light">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                </div>
                            </li>

                            <li>
                                <p class="clearfix mb-xs">
                                    <span class="message pull-left">Importing Contacts</span>
                                    <span class="message pull-right text-dark">98%</span>
                                </p>
                                <div class="progress progress-xs light">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                </div>
                            </li>

                            <li>
                                <p class="clearfix mb-xs">
                                    <span class="message pull-left">Uploading something big</span>
                                    <span class="message pull-right text-dark">33%</span>
                                </p>
                                <div class="progress progress-xs light mb-xs">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                    <i class="fa fa-envelope"></i>
                    <span class="badge">4</span>
                </a>

                <div class="dropdown-menu notification-menu">
                    <div class="notification-title">
                        <span class="pull-right label label-default">230</span>
                        Messages
                    </div>

                    <div class="content">
                        <ul>

                            <li>
                                <a href="#" class="clearfix">
                                    <figure class="image">
                                        <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                                    </figure>
                                    <span class="title">Joseph Junior</span>
                                    <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="clearfix">
                                    <figure class="image">
                                        <img src="statics/assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
                                    </figure>
                                    <span class="title">Joe Junior</span>
                                    <span class="message">Lorem ipsum dolor sit.</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="clearfix">
                                    <figure class="image">
                                        <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                                    </figure>
                                    <span class="title">Joseph Junior</span>
                                    <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                </a>
                            </li>
                        </ul>

                        <hr />

                        <div class="text-right">
                            <a href="#" class="view-more">View All</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                    <i class="fa fa-bell"></i>
                    <span class="badge">3</span>
                </a>

                <div class="dropdown-menu notification-menu">
                    <div class="notification-title">
                        <span class="pull-right label label-default">3</span>
                        Alerts
                    </div>

                    <div class="content">
                        <ul>
                            <li>
                                <a href="#" class="clearfix">
                                    <div class="image">
                                        <i class="fa fa-thumbs-down bg-danger"></i>
                                    </div>
                                    <span class="title">Server is Down!</span>
                                    <span class="message">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="clearfix">
                                    <div class="image">
                                        <i class="fa fa-lock bg-warning"></i>
                                    </div>
                                    <span class="title">User Locked</span>
                                    <span class="message">15 minutes ago</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="clearfix">
                                    <div class="image">
                                        <i class="fa fa-signal bg-success"></i>
                                    </div>
                                    <span class="title">Connection Restaured</span>
                                    <span class="message">10/10/2014</span>
                                </a>
                            </li>
                        </ul>

                        <hr />

                        <div class="text-right">
                            <a href="#" class="view-more">View All</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <span class="separator"></span>

        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
                <figure class="profile-picture">
                    <img src="statics/assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="statics/assets/images/!logged-user.jpg" />
                </figure>
                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                    <span class="role">administrator</span>
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="statics/pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="statics/pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
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

        <div class="sidebar-header">
            <div class="sidebar-title">
                Navigation
            </div>
            <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <div class="nano">
            <div class="nano-content">

                <nav id="menu" class="nav-main" role="navigation">
                    <ul class="nav nav-main">
                        <li class="nav-active">
                            <!-- <a href="statics/index.html"> -->

                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-copy" aria-hidden="true"></i>
                                <span>个人作业</span>
                            </a>
                            <ul class="nav nav-children">
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                        <span>陈燕</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="statics/pages-signup.html">
                                                作业1：web前端初探
                                            </a>
                                        </li>
                                        <li>
                                            <a href="statics/pages-signup.html">
                                                作业2：web前端设计
                                            </a>
                                        </li>
                                        <li>
                                            <a href="statics/pages-signup.html">
                                                作业3：开源建站工具初始文档
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                        <span>苑华莹</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="statics/pages-signup.html">
                                                作业1：web前端初探
                                            </a>
                                        </li>
                                        <li>
                                            <a href="statics/pages-signup.html">
                                                作业2：web前端设计
                                            </a>
                                        </li>
                                        <li>
                                            <a href="statics/pages-signup.html">
                                                作业3：开源建站工具初始文档
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                        <span>郑惠麟</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="\yii\data\personal\1811522_郑惠麟\作业1(1811522_郑惠麟).zip" download="作业1(1811522_郑惠麟).zip">作业1：web前端初探</a>
                                        </li>
                                        <li>
                                            <a href="\yii\data\personal\1811522_郑惠麟\作业2(1811522_郑惠麟).zip" download="作业2(1811522_郑惠麟).zip">
                                                作业2：web前端设计
                                            </a>
                                        </li>
                                        <li>
                                            <a href="\yii\data\personal\1811522_郑惠麟\作业3(1811522_郑惠麟).zip" download="作业3(1811522_郑惠麟).zip">
                                                作业3：开源建站工具初始文档
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                        <span>张明悦</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="statics/pages-signup.html">
                                                作业1：web前端初探
                                            </a>
                                        </li>
                                        <li>
                                            <a href="statics/pages-signup.html">
                                                作业2：web前端设计
                                            </a>
                                        </li>
                                        <li>
                                            <a href="statics/pages-signup.html">
                                                作业3：开源建站工具初始文档
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                <span>团队作业</span>
                            </a>
                            <ul class="nav nav-children">
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                        <span>疫情</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="index.php?r=area">
                                                全球数据
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.php?r=news">
                                                新闻
                                            </a>
                                        </li>
                                    </ul>
                                <li>
                                    <a href="frontend/web/index.php?r=team/economic">
                                        经济
                                    </a>
                                </li>
                                <li>
                                    <a href="frontend/web/index.php?r=team/index">
                                        团队成员
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-charts.html">
                                        需求文档
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-charts.html">
                                        设计文档
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-charts.html">
                                        实现文档
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-charts.html">
                                        用户手册
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-charts.html">
                                        部署文档
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <hr class="separator" />

                <div class="sidebar-widget widget-tasks">
                    <div class="widget-header">
                        <h6>Projects</h6>
                        <div class="widget-toggle">+</div>
                    </div>
                    <div class="widget-content">
                        <ul class="list-unstyled m-none">
                            <li><a href="#">JSOFT HTML5 Template</a></li>
                            <li><a href="#">Tucson Template</a></li>
                            <li><a href="#">JSOFT Admin</a></li>
                        </ul>
                    </div>
                </div>

                <hr class="separator" />

                <div class="sidebar-widget widget-stats">
                    <div class="widget-header">
                        <h6>Company Stats</h6>
                        <div class="widget-toggle">+</div>
                    </div>
                    <div class="widget-content">
                        <ul>
                            <li>
                                <span class="stats-title">Stat 1</span>
                                <span class="stats-complete">85%</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                        <span class="sr-only">85% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span class="stats-title">Stat 2</span>
                                <span class="stats-complete">70%</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                        <span class="sr-only">70% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span class="stats-title">Stat 3</span>
                                <span class="stats-complete">2%</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                        <span class="sr-only">2% Complete</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </aside>
    <!-- end: sidebar -->

    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Dashboard</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="statics/index.html">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Dashboard</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>
        <?php echo $content;?>

    </section>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<script>

    (function( $ ) {

        'use strict';

        /*
         Sales Selector
         */
        $('#salesSelector').themePluginMultiSelect().on('change', function() {
            var rel = $(this).val();
            $('#salesSelectorItems .chart').removeClass('chart-active').addClass('chart-hidden');
            $('#salesSelectorItems .chart[data-sales-rel="' + rel + '"]').addClass('chart-active').removeClass('chart-hidden');
        });

        $('#salesSelector').trigger('change');

        $('#salesSelectorWrapper').addClass('ready');

        <?php foreach ($data1 as $k=>$v){?>
        var <?php echo $v['value1'];?> = $.plot("#<?php echo $v['value1'];?>", <?php echo $v['value1'];?><?php echo md5($v['value1']);?>, {
            series: {
                lines: {
                    show: true,
                    lineWidth: 2
                },
                points: {
                    show: true
                },
                shadowSize: 0
            },
            grid: {
                hoverable: true,
                clickable: true,
                borderColor: 'rgba(0,0,0,0.1)',
                borderWidth: 1,
                labelMargin: 15,
                backgroundColor: 'transparent'
            },
            yaxis: {
                min: 0,
                color: 'rgba(0,0,0,0.1)'
            },
            xaxis: {
                mode: 'categories',
                color: 'rgba(0,0,0,0)'
            },
            legend: {
                show: false
            },
            tooltip: true,
            tooltipOpts: {
                content: '%x: %y',
                shifts: {
                    x: -30,
                    y: 25
                },
                defaultTheme: false
            }
        });


        <?php }?>


        $('#salesSelector2').themePluginMultiSelect().on('change', function() {
            var rel = $(this).val();
            $('#salesSelectorItems2 .chart').removeClass('chart-active').addClass('chart-hidden');
            $('#salesSelectorItems2 .chart[data-sales-rel="' + rel + '"]').addClass('chart-active').removeClass('chart-hidden');
        });

        $('#salesSelector2').trigger('change');

        $('#salesSelectorWrapper2').addClass('ready');

        <?php foreach ($data1 as $k=>$v){?>
        var <?php echo $v['value2'];?> = $.plot("#<?php echo $v['value2'];?>", <?php echo $v['value2'];?><?php echo md5($v['value2']);?>, {
            series: {
                lines: {
                    show: true,
                    lineWidth: 2
                },
                points: {
                    show: true
                },
                shadowSize: 0
            },
            grid: {
                hoverable: true,
                clickable: true,
                borderColor: 'rgba(0,0,0,0.1)',
                borderWidth: 1,
                labelMargin: 15,
                backgroundColor: 'transparent'
            },
            yaxis: {
                min: 0,
                color: 'rgba(0,0,0,0.1)'
            },
            xaxis: {
                mode: 'categories',
                color: 'rgba(0,0,0,0)'
            },
            legend: {
                show: false
            },
            tooltip: true,
            tooltipOpts: {
                content: '%x: %y',
                shifts: {
                    x: -30,
                    y: 25
                },
                defaultTheme: false
            }
        });


        <?php }?>


    }).apply( this, [ jQuery ]);


</script>
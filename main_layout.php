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
use common\models\Stock;
use common\models\StockVolume;
AppAsset::register($this);

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
    foreach ($temp as  $k2=>$v2)
    {
        $data1_temp1 = [];
        $data1_temp1[] = $v2->day;
        $data1_temp1[] = $v2->price;

        $data1_temp2 = [];
        $data1_temp2[] = $v2->day;
        $data1_temp2[] = = $tempVolume[$k2]->volume;

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
                <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
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
                                        <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
                                    </figure>
                                    <span class="title">Joseph Doe</span>
                                    <span class="message">Lorem ipsum dolor sit.</span>
                                </a>
                            </li>
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
                    <span class="name">John Doe Junior</span>
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
                            <a href="statics/index.html">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="statics/mailbox-folder.html">
                                <span class="pull-right label label-primary">182</span>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>Mailbox</span>
                            </a>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-copy" aria-hidden="true"></i>
                                <span>Pages</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="statics/pages-signup.html">
                                        Sign Up
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/pages-signin.html">
                                        Sign In
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/pages-recover-password.html">
                                        Recover Password
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/pages-lock-screen.html">
                                        Locked Screen
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/pages-user-profile.html">
                                        User Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/pages-session-timeout.html">
                                        Session Timeout
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/pages-calendar.html">
                                        Calendar
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/pages-timeline.html">
                                        Timeline
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/pages-media-gallery.html">
                                        Media Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/pages-invoice.html">
                                        Invoice
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/pages-blank.html">
                                        Blank Page
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/pages-404.html">
                                        404
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/pages-500.html">
                                        500
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/pages-log-viewer.html">
                                        Log Viewer
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/pages-search-results.html">
                                        Search Results
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                <span>UI Elements</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="statics/ui-elements-typography.html">
                                        Typography
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-icons.html">
                                        Icons
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-tabs.html">
                                        Tabs
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-panels.html">
                                        Panels
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-widgets.html">
                                        Widgets
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-portlets.html">
                                        Portlets
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-buttons.html">
                                        Buttons
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-alerts.html">
                                        Alerts
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-notifications.html">
                                        Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-modals.html">
                                        Modals
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-lightbox.html">
                                        Lightbox
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-progressbars.html">
                                        Progress Bars
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-sliders.html">
                                        Sliders
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-carousels.html">
                                        Carousels
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-accordions.html">
                                        Accordions
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-nestable.html">
                                        Nestable
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-tree-view.html">
                                        Tree View
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-grid-system.html">
                                        Grid System
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-charts.html">
                                        Charts
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-animations.html">
                                        Animations
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-extra.html">
                                        Extra
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                <span>Forms</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="statics/forms-basic.html">
                                        Basic
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/forms-advanced.html">
                                        Advanced
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/forms-validation.html">
                                        Validation
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/forms-layouts.html">
                                        Layouts
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/forms-wizard.html">
                                        Wizard
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/forms-code-editor.html">
                                        Code Editor
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span>Tables</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="statics/web/tables-basic.html">
                                        Basic
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/tables-advanced.html">
                                        Advanced
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/tables-responsive.html">
                                        Responsive
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/tables-editable.html">
                                        Editable
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/tables-ajax.html">
                                        Ajax
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/tables-pricing.html">
                                        Pricing
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>Maps</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="statics/maps-google-maps.html">
                                        Basic
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/maps-google-maps-builder.html">
                                        Map Builder
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/maps-vector.html">
                                        Vector
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span>Layouts</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="statics/layouts-default.html">
                                        Default
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/layouts-boxed.html">
                                        Boxed
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/layouts-menu-collapsed.html">
                                        Menu Collapsed
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/layouts-scroll.html">
                                        Scroll
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-align-left" aria-hidden="true"></i>
                                <span>Menu Levels</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a>First Level</a>
                                </li>
                                <li class="nav-parent">
                                    <a>Second Level</a>
                                    <ul class="nav nav-children">
                                        <li class="nav-parent">
                                            <a>Third Level</a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a>Third Level Link #1</a>
                                                </li>
                                                <li>
                                                    <a>Third Level Link #2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a>Second Level Link #1</a>
                                        </li>
                                        <li>
                                            <a>Second Level Link #2</a>
                                        </li>
                                    </ul>
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

        <!-- start: page -->
        <div class="row">
            <div class="col-md-6 col-lg-12 col-xl-6">
                <section class="panel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="chart-data-selector" id="salesSelectorWrapper">
                                    <h2>
                                        收盘价:
                                        <strong>
                                            <select class="form-control" id="salesSelector">

                                                <?php foreach ($data1 as $v){?>
                                                    <option value="<?php echo $v['value1'];?>"><?php echo $v['name'];?></option>
                                                <?php }?>
                                            </select>
                                        </strong>
                                    </h2>

                                    <div id="salesSelectorItems" class="chart-data-selector-items mt-sm">
                                        <!-- Flot: Sales JSOFT Admin -->
                                        <?php foreach ($data1 as $k=>$v){?>
                                            <div class="chart chart-sm" data-sales-rel="<?php echo $v['value1'];?>" id="<?php echo $v['value1'];?>" class="chart-hidden"></div>
                                            <script>

                                                var <?php echo $v['value1'];?><?php echo md5($v['value1']);?> = [<?php echo json_encode($v['data']);?>];

                                            </script>
                                        <?php }?>


                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>



        <!-- start: page -->
        <div class="row">
            <div class="col-md-6 col-lg-12 col-xl-6">
                <section class="panel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="chart-data-selector" id="salesSelectorWrapper2">
                                    <h2>
                                        成交量:
                                        <strong>
                                            <select class="form-control" id="salesSelector2">
                                                <?php foreach ($data1 as $v){?>
                                                    <option value="<?php echo $v['value2'];?>"><?php echo $v['name'];?></option>
                                                <?php }?>
                                            </select>
                                        </strong>
                                    </h2>

                                    <div id="salesSelectorItems2" class="chart-data-selector-items mt-sm">
                                        <!-- Flot: Sales JSOFT Admin -->
                                        <?php foreach ($data1 as $k=>$v){?>
                                            <div class="chart chart-sm" data-sales-rel="<?php echo $v['value2'];?>" id="<?php echo $v['value2'];?>" class="chart-hidden"></div>
                                            <script>

                                                var <?php echo $v['value2'];?><?php echo md5($v['value2']);?> = [<?php echo json_encode($v['data2']);?>];

                                            </script>
                                        <?php }?>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>


        <!-- end: page -->
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
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
use backend\models\MemberSearch;
//use Yii;

AppAsset::register($this);
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
                            <!-- <a href="statics/index.html"> -->
                            <a href="index.php">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <!--<li>
                            <a href="statics/mailbox-folder.html">
                                <span class="pull-right label label-primary">182</span>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>Mailbox</span>
                            </a>
                        </li>-->
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
                                                作业1 :web前端初探
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
                                                作业1 :web前端初探
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
                                            <a href="\yii\frontend\web\作业展示\data\personal\作业1（1811522_郑惠麟）.zip" download="作业1（1811522_郑惠麟）.zip">作业1 :web前端初探</a>
                                        </li>
                                        <li>
                                            <a href="\yii\frontend\web\作业展示\data\personal\作业2 （1811522_郑惠麟）.zip" download="作业2 （1811522_郑惠麟）.zip">
                                                作业2：web前端设计
                                            </a>
                                        </li>
                                        <li>
                                            <a href="\yii\frontend\web\作业展示\data\personal\作业3（1811522_郑惠麟）.zip"download="作业3（1811522_郑惠麟）.zip">
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
                                                作业1 :web前端初探
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

                                <!-- <li>
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
                                 </li> -->
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                <span>团队作业</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="\yii\frontend\views\area\">
                                        疫情
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-charts.html">
                                        经济
                                    </a>
                                </li>
                                <li>
                                    <a href="statics/ui-elements-charts.html">
                                        需求文档
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


                                <!-- <li>
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
                                 </li> -->
                            </ul>
                        </li>
                        <!-- <li class="nav-parent">
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
                         <li>
                             <a href="http://themeforest.net/item/JSOFT-responsive-html5-template/4106987?ref=JSOFT" target="_blank">
                                 <i class="fa fa-external-link" aria-hidden="true"></i>
                                 <span>Front-End <em class="not-included">(Not Included)</em></span>
                             </a>
                         </li>-->
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
        <section id="content" class="table-layout animated fadeIn">
            <?= $content ?>

        </section>
        <!-- End: Content -->
        <!-- <div class="row">
         <div class="col-md-6">
             <section class="panel">
                 <header class="panel-heading">
                     <div class="panel-actions">
                         <a href="#" class="fa fa-caret-down"></a>
                         <a href="#" class="fa fa-times"></a>
                     </div>

                     <h2 class="panel-title">Best Seller</h2>
                     <p class="panel-subtitle">Customize the graphs as much as you want, there are so many options and features to display information using JSOFT Admin Template.</p>
                 </header>
                 <div class="panel-body">-->

        <!-- Flot: Basic -->
        <!-- <div class="chart chart-md" id="flotDashBasic"></div>
         <script>

             var flotDashBasicData = [{
                 data: [
                     [0, 170],
                     [1, 169],
                     [2, 173],
                     [3, 188],
                     [4, 147],
                     [5, 113],
                     [6, 128],
                     [7, 169],
                     [8, 173],
                     [9, 128],
                     [10, 128]
                 ],
                 label: "Series 1",
                 color: "#0088cc"
             }, {
                 data: [
                     [0, 115],
                     [1, 124],
                     [2, 114],
                     [3, 121],
                     [4, 115],
                     [5, 83],
                     [6, 102],
                     [7, 148],
                     [8, 147],
                     [9, 103],
                     [10, 113]
                 ],
                 label: "Series 2",
                 color: "#2baab1"
             }, {
                 data: [
                     [0, 70],
                     [1, 69],
                     [2, 73],
                     [3, 88],
                     [4, 47],
                     [5, 13],
                     [6, 28],
                     [7, 69],
                     [8, 73],
                     [9, 28],
                     [10, 28]
                 ],
                 label: "Series 3",
                 color: "#734ba9"
             }];

             // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

         </script>

     </div>
 </section>
</div>-->
        <!-- <div class="col-md-6">
             <section class="panel">
                 <header class="panel-heading">
                     <div class="panel-actions">
                         <a href="#" class="fa fa-caret-down"></a>
                         <a href="#" class="fa fa-times"></a>
                     </div>
                     <h2 class="panel-title">Server Usage</h2>
                     <p class="panel-subtitle">It's easy to create custom graphs on JSOFT Admin Template, there are several graph types that you can use, such as lines, bars, pie charts, etc...</p>
                 </header>
                 <div class="panel-body">-->

        <!-- Flot: Curves -->
        <!--<div class="chart chart-md" id="flotDashRealTime"></div>-->
        <!-- <div class="chart chart-md" id="flotDashRealTime" style="padding: 0px; position: relative;"><canvas class="flot-base" width="692" height="437" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 554px; height: 350px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 328px; left: 13px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 262px; left: 7px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 197px; left: 7px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 131px; left: 7px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 66px; left: 7px; text-align: right;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">100</div></div></div><canvas class="flot-overlay" width="692" height="437" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 554px; height: 350px;"></canvas></div>-->

        <!--</div>
    </section>
</div>
</div>-->

        <!-- start: page -->
        <!--<div class="row">
            <div class="col-md-6 col-lg-12 col-xl-6">
                <section class="panel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="chart-data-selector" id="salesSelectorWrapper">
                                    <h2>
                                        Sales:
                                        <strong>
                                            <select class="form-control" id="salesSelector">
                                                <option value="JSOFT Admin" selected>JSOFT Admin</option>
                                                <option value="JSOFT Drupal" >JSOFT Drupal</option>
                                                <option value="JSOFT Wordpress" >JSOFT Wordpress</option>
                                            </select>
                                        </strong>
                                    </h2>-->

        <!--<div id="salesSelectorItems" class="chart-data-selector-items mt-sm">-->
        <!-- Flot: Sales JSOFT Admin -->
        <!--<div class="chart chart-sm" data-sales-rel="JSOFT Admin" id="flotDashSales1" class="chart-active"></div>
        <script>

            var flotDashSales1Data = [{
                data: [
                    ["Jan", 140],
                    ["Feb", 240],
                    ["Mar", 190],
                    ["Apr", 140],
                    ["May", 180],
                    ["Jun", 320],
                    ["Jul", 270],
                    ["Aug", 180]
                ],
                color: "#0088cc"
            }];

            // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

        </script>-->

        <!-- Flot: Sales JSOFT Drupal -->
        <!-- <div class="chart chart-sm" data-sales-rel="JSOFT Drupal" id="flotDashSales2" class="chart-hidden"></div>
         <script>-->

        <!-- var flotDashSales2Data = [{
             data: [
                 ["Jan", 240],
                 ["Feb", 240],
                 ["Mar", 290],
                 ["Apr", 540],
                 ["May", 480],
                 ["Jun", 220],
                 ["Jul", 170],
                 ["Aug", 190]
             ],
             color: "#2baab1"
         }];

         // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

     </script>-->

        <!-- Flot: Sales JSOFT Wordpress -->
        <!--<div class="chart chart-sm" data-sales-rel="JSOFT Wordpress" id="flotDashSales3" class="chart-hidden"></div>
        <script>

            var flotDashSales3Data = [{
                data: [
                    ["Jan", 840],
                    ["Feb", 740],
                    ["Mar", 690],
                    ["Apr", 940],
                    ["May", 1180],
                    ["Jun", 820],
                    ["Jul", 570],
                    ["Aug", 780]
                ],
                color: "#734ba9"
            }];

            // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

        </script>
    </div>

</div>
</div>-->
        <!-- <div class="col-lg-4 text-center">
             <h2 class="panel-title mt-md">Sales Goal</h2>
             <div class="liquid-meter-wrapper liquid-meter-sm mt-lg">
                 <div class="liquid-meter">
                     <meter min="0" max="100" value="35" id="meterSales"></meter>
                 </div>
                 <div class="liquid-meter-selector" id="meterSalesSel">
                     <a href="#" data-val="35" class="active">Monthly Goal</a>
                     <a href="#" data-val="28">Annual Goal</a>
                 </div>
             </div>
         </div>
     </div>
 </div>
</section>
</div>-->
        <!--<div class="col-md-6 col-lg-12 col-xl-6">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <section class="panel panel-featured-left panel-featured-primary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-primary">
                                        <i class="fa fa-life-ring"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">陈燕</h4>
                                        <div class="info">
                                            <strong class="amount">1281</strong>
                                            <span class="text-primary">(14 unread)</span>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase">(view all)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <section class="panel panel-featured-left panel-featured-secondary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-secondary">
                                        <i class="fa fa-usd"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Total Profit</h4>
                                        <div class="info">
                                            <strong class="amount">$ 14,890.30</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase">(withdraw)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <section class="panel panel-featured-left panel-featured-tertiary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-tertiary">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Today's Orders</h4>
                                        <div class="info">
                                            <strong class="amount">38</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase">(statement)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <section class="panel panel-featured-left panel-featured-quartenary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-quartenary">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Today's Visitors</h4>
                                        <div class="info">
                                            <strong class="amount">3765</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase">(report)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>-->


        <!--<h1 align="center">团队成员介绍</h1>
        <div class="row">
            <div class="col-xl-3 col-lg-6">
                <section class="panel panel-transparent">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>-->

        <!--<h2 class="panel-title">团队成员介绍</h2>-->
        <!-- </header>
         <div class="panel-body">
             <section class="panel panel-group">
                 <header class="panel-heading bg-primary">

                     <div class="widget-profile-info">
                         <div class="profile-picture">
                             <img src="statics/assets/images/cy.jpg">
                         </div>
                         <div class="profile-info">-->
        <!--<?php
        //$connection=Yii::app()->db;
        //$sql="select * from member";
        //$command=$connection->createCommand($sql);
        //$value=$command->queryScalar();
        //$dataReader=$command->query(); // 重复调用 read() 直到它返回 false

        //while(($row=$dataReader->read())!==false) { ... } // 使用 foreach 遍历数据中的每一行

        //foreach($dataReader as $row) { ... } // 一次性提取所有行到一个数组

        //$rows=$dataReader->readAll();?>-->
        <!--<h4 class="name text-semibold"></h4>
        <h5 class="role">组员</h5>-->
        <!--<div class="profile-footer">
            <a href="statics/pages-signin.html">编辑</a>
        </div>-->
        <!-- </div>
     </div>

 </header>
 <div id="accordion">
     <div class="panel panel-accordion panel-accordion-first">
         <div class="panel-heading">
             <h4 class="panel-title">
                 <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
                     <i class="fa fa-check"></i> Tasks
                 </a>
             </h4>
         </div>
         <div id="collapse1One" class="accordion-body collapse in">
             <div class="panel-body">
                 <ul class="widget-todo-list">
                     <li>
                         <div class="checkbox-custom checkbox-default">
                             <input type="checkbox" checked="" id="todoListItem1" class="todo-check">
                             <label class="todo-label" for="todoListItem1"><span>Lorem ipsum dolor sit amet</span></label>
                         </div>
                         <div class="todo-actions">
                             <a class="todo-remove" href="#">
                                 <i class="fa fa-times"></i>
                             </a>
                         </div>
                     </li>
                     <li>
                         <div class="checkbox-custom checkbox-default">
                             <input type="checkbox" id="todoListItem2" class="todo-check">
                             <label class="todo-label" for="todoListItem2"><span>Lorem ipsum dolor sit amet</span></label>
                         </div>
                         <div class="todo-actions">
                             <a class="todo-remove" href="#">
                                 <i class="fa fa-times"></i>
                             </a>
                         </div>
                     </li>
                     <li>
                         <div class="checkbox-custom checkbox-default">
                             <input type="checkbox" id="todoListItem3" class="todo-check">
                             <label class="todo-label" for="todoListItem3"><span>Lorem ipsum dolor sit amet</span></label>
                         </div>
                         <div class="todo-actions">
                             <a class="todo-remove" href="#">
                                 <i class="fa fa-times"></i>
                             </a>
                         </div>
                     </li>
                     <li>
                         <div class="checkbox-custom checkbox-default">
                             <input type="checkbox" id="todoListItem4" class="todo-check">
                             <label class="todo-label" for="todoListItem4"><span>Lorem ipsum dolor sit amet</span></label>
                         </div>
                         <div class="todo-actions">
                             <a class="todo-remove" href="#">
                                 <i class="fa fa-times"></i>
                             </a>
                         </div>
                     </li>
                     <li>
                         <div class="checkbox-custom checkbox-default">
                             <input type="checkbox" id="todoListItem5" class="todo-check">
                             <label class="todo-label" for="todoListItem5"><span>Lorem ipsum dolor sit amet</span></label>
                         </div>
                         <div class="todo-actions">
                             <a class="todo-remove" href="#">
                                 <i class="fa fa-times"></i>
                             </a>
                         </div>
                     </li>
                     <li>
                         <div class="checkbox-custom checkbox-default">
                             <input type="checkbox" id="todoListItem6" class="todo-check">
                             <label class="todo-label" for="todoListItem6"><span>Lorem ipsum dolor sit amet</span></label>
                         </div>
                         <div class="todo-actions">
                             <a class="todo-remove" href="#">
                                 <i class="fa fa-times"></i>
                             </a>
                         </div>
                     </li>
                 </ul>
                 <hr class="solid mt-sm mb-lg">
                 <form method="get" class="form-horizontal form-bordered">
                     <div class="form-group">
                         <div class="col-sm-12">
                             <div class="input-group mb-md">
                                 <input type="text" class="form-control">
                                 <div class="input-group-btn">
                                     <button type="button" class="btn btn-primary" tabindex="-1">Add</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
     <div class="panel panel-accordion">
         <div class="panel-heading">
             <h4 class="panel-title">
                 <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
                      <i class="fa fa-comment"></i> Messages
                 </a>
             </h4>
         </div>
         <div id="collapse1Two" class="accordion-body collapse">
             <div class="panel-body">
                 <ul class="simple-user-list mb-xlg">
                     <li>
                         <figure class="image rounded">
                             <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                         </figure>
                         <span class="title">Joseph Doe Junior</span>
                         <span class="message">Lorem ipsum dolor sit.</span>
                     </li>
                     <li>
                         <figure class="image rounded">
                             <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
                         </figure>
                         <span class="title">Joseph Junior</span>
                         <span class="message">Lorem ipsum dolor sit.</span>
                     </li>
                     <li>
                         <figure class="image rounded">
                             <img src="statics/assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
                         </figure>
                         <span class="title">Joe Junior</span>
                         <span class="message">Lorem ipsum dolor sit.</span>
                     </li>
                     <li>
                         <figure class="image rounded">
                             <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                         </figure>
                         <span class="title">Joseph Doe Junior</span>
                         <span class="message">Lorem ipsum dolor sit.</span>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </div>
</section>

</div>
</section>
</div>


<div class="row">
<div class="col-xl-3 col-lg-6">
<section class="panel panel-transparent">
<header class="panel-heading">
<div class="panel-actions">
 <a href="#" class="fa fa-caret-down"></a>
 <a href="#" class="fa fa-times"></a>
</div>-->

        <!--<h2 class="panel-title">苑华莹</h2>-->
        <!--</header>
        <div class="panel-body">
            <section class="panel panel-group">
                <header class="panel-heading bg-primary">

                    <div class="widget-profile-info">
                        <div class="profile-picture">
                            <img src="statics/assets/images/yhy.jpg">
                        </div>
                        <div class="profile-info">
                            <h4 class="name text-semibold">苑华莹</h4>
                            <h5 class="role">组长</h5>
                            <div class="profile-footer">
                                <a href="statics/pages-signin.html">编辑</a>
                            </div>
                        </div>
                    </div>

                </header>
                <div id="accordion">
                    <div class="panel panel-accordion panel-accordion-first">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
                                    <i class="fa fa-check"></i> Tasks
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1One" class="accordion-body collapse in">
                            <div class="panel-body">
                                <ul class="widget-todo-list">
                                    <li>
                                        <div class="checkbox-custom checkbox-default">
                                            <input type="checkbox" checked="" id="todoListItem1" class="todo-check">
                                            <label class="todo-label" for="todoListItem1"><span>Lorem ipsum dolor sit amet</span></label>
                                        </div>
                                        <div class="todo-actions">
                                            <a class="todo-remove" href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-default">
                                            <input type="checkbox" id="todoListItem2" class="todo-check">
                                            <label class="todo-label" for="todoListItem2"><span>Lorem ipsum dolor sit amet</span></label>
                                        </div>
                                        <div class="todo-actions">
                                            <a class="todo-remove" href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-default">
                                            <input type="checkbox" id="todoListItem3" class="todo-check">
                                            <label class="todo-label" for="todoListItem3"><span>Lorem ipsum dolor sit amet</span></label>
                                        </div>
                                        <div class="todo-actions">
                                            <a class="todo-remove" href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-default">
                                            <input type="checkbox" id="todoListItem4" class="todo-check">
                                            <label class="todo-label" for="todoListItem4"><span>Lorem ipsum dolor sit amet</span></label>
                                        </div>
                                        <div class="todo-actions">
                                            <a class="todo-remove" href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-default">
                                            <input type="checkbox" id="todoListItem5" class="todo-check">
                                            <label class="todo-label" for="todoListItem5"><span>Lorem ipsum dolor sit amet</span></label>
                                        </div>
                                        <div class="todo-actions">
                                            <a class="todo-remove" href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-default">
                                            <input type="checkbox" id="todoListItem6" class="todo-check">
                                            <label class="todo-label" for="todoListItem6"><span>Lorem ipsum dolor sit amet</span></label>
                                        </div>
                                        <div class="todo-actions">
                                            <a class="todo-remove" href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <hr class="solid mt-sm mb-lg">
                                <form method="get" class="form-horizontal form-bordered">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="input-group mb-md">
                                                <input type="text" class="form-control">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-primary" tabindex="-1">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-accordion">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
                                     <i class="fa fa-comment"></i> Messages
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1Two" class="accordion-body collapse">
                            <div class="panel-body">
                                <ul class="simple-user-list mb-xlg">
                                    <li>
                                        <figure class="image rounded">
                                            <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                                        </figure>
                                        <span class="title">Joseph Doe Junior</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </li>
                                    <li>
                                        <figure class="image rounded">
                                            <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
                                        </figure>
                                        <span class="title">Joseph Junior</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </li>
                                    <li>
                                        <figure class="image rounded">
                                            <img src="statics/assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
                                        </figure>
                                        <span class="title">Joe Junior</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </li>
                                    <li>
                                        <figure class="image rounded">
                                            <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                                        </figure>
                                        <span class="title">Joseph Doe Junior</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>
</div>


<div class="row">
<div class="col-xl-3 col-lg-6">
    <section class="panel panel-transparent">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>-->

        <!-- <h2 class="panel-title">郑惠麟</h2>-->
        <!-- </header>
                                <div class="panel-body">
                                    <section class="panel panel-group">
                                        <header class="panel-heading bg-primary">

                                            <div class="widget-profile-info">
                                                <div class="profile-picture">
                                                    <img src="statics/assets/images/zhl.jpg">
                                                </div>
                                                <div class="profile-info">
                                                    <h4 class="name text-semibold">郑惠麟</h4>
                                                    <h5 class="role">组员</h5>
                                                    <div class="profile-footer">
                                                        <a href="<?php echo Url::to(['member/index']) ?>">编辑</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </header>
                                        <div id="accordion">
                                            <div class="panel panel-accordion panel-accordion-first">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
                                                            <i class="fa fa-check"></i> Tasks
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse1One" class="accordion-body collapse in">
                                                    <div class="panel-body">
                                                        <ul class="widget-todo-list">
                                                            <li>
                                                                <div class="checkbox-custom checkbox-default">
                                                                    <input type="checkbox" checked="" id="todoListItem1" class="todo-check">
                                                                    <label class="todo-label" for="todoListItem1"><span>Lorem ipsum dolor sit amet</span></label>
                                                                </div>
                                                                <div class="todo-actions">
                                                                    <a class="todo-remove" href="#">
                                                                        <i class="fa fa-times"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox-custom checkbox-default">
                                                                    <input type="checkbox" id="todoListItem2" class="todo-check">
                                                                    <label class="todo-label" for="todoListItem2"><span>Lorem ipsum dolor sit amet</span></label>
                                                                </div>
                                                                <div class="todo-actions">
                                                                    <a class="todo-remove" href="#">
                                                                        <i class="fa fa-times"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox-custom checkbox-default">
                                                                    <input type="checkbox" id="todoListItem3" class="todo-check">
                                                                    <label class="todo-label" for="todoListItem3"><span>Lorem ipsum dolor sit amet</span></label>
                                                                </div>
                                                                <div class="todo-actions">
                                                                    <a class="todo-remove" href="#">
                                                                        <i class="fa fa-times"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox-custom checkbox-default">
                                                                    <input type="checkbox" id="todoListItem4" class="todo-check">
                                                                    <label class="todo-label" for="todoListItem4"><span>Lorem ipsum dolor sit amet</span></label>
                                                                </div>
                                                                <div class="todo-actions">
                                                                    <a class="todo-remove" href="#">
                                                                        <i class="fa fa-times"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox-custom checkbox-default">
                                                                    <input type="checkbox" id="todoListItem5" class="todo-check">
                                                                    <label class="todo-label" for="todoListItem5"><span>Lorem ipsum dolor sit amet</span></label>
                                                                </div>
                                                                <div class="todo-actions">
                                                                    <a class="todo-remove" href="#">
                                                                        <i class="fa fa-times"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox-custom checkbox-default">
                                                                    <input type="checkbox" id="todoListItem6" class="todo-check">
                                                                    <label class="todo-label" for="todoListItem6"><span>Lorem ipsum dolor sit amet</span></label>
                                                                </div>
                                                                <div class="todo-actions">
                                                                    <a class="todo-remove" href="#">
                                                                        <i class="fa fa-times"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <hr class="solid mt-sm mb-lg">
                                                        <form method="get" class="form-horizontal form-bordered">
                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <div class="input-group mb-md">
                                                                        <input type="text" class="form-control">
                                                                        <div class="input-group-btn">
                                                                            <button type="button" class="btn btn-primary" tabindex="-1">Add</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-accordion">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
                                                             <i class="fa fa-comment"></i> Messages
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse1Two" class="accordion-body collapse">
                                                    <div class="panel-body">
                                                        <ul class="simple-user-list mb-xlg">
                                                            <li>
                                                                <figure class="image rounded">
                                                                    <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                                                                </figure>
                                                                <span class="title">Joseph Doe Junior</span>
                                                                <span class="message">Lorem ipsum dolor sit.</span>
                                                            </li>
                                                            <li>
                                                                <figure class="image rounded">
                                                                    <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
                                                                </figure>
                                                                <span class="title">Joseph Junior</span>
                                                                <span class="message">Lorem ipsum dolor sit.</span>
                                                            </li>
                                                            <li>
                                                                <figure class="image rounded">
                                                                    <img src="statics/assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
                                                                </figure>
                                                                <span class="title">Joe Junior</span>
                                                                <span class="message">Lorem ipsum dolor sit.</span>
                                                            </li>
                                                            <li>
                                                                <figure class="image rounded">
                                                                    <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                                                                </figure>
                                                                <span class="title">Joseph Doe Junior</span>
                                                                <span class="message">Lorem ipsum dolor sit.</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </div>
                            </section>
                        </div>


                        <div class="row">
                        <div class="col-xl-3 col-lg-6">
                            <section class="panel panel-transparent">
                                <header class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="fa fa-caret-down"></a>
                                        <a href="#" class="fa fa-times"></a>
                                    </div>-->

        <!--<h2 class="panel-title">张明悦</h2>-->
        <!--</header>
        <div class="panel-body">
            <section class="panel panel-group">
                <header class="panel-heading bg-primary">

                    <div class="widget-profile-info">
                        <div class="profile-picture">
                            <img src="statics/assets/images/zmy.jpg">
                        </div>
                        <div class="profile-info">
                            <h4 class="name text-semibold">张明悦</h4>
                           <h5 class="role">组员</h5>
                            <div class="profile-footer">
                                <a href="statics/pages-signin.html">编辑</a>
                            </div>
                        </div>
                    </div>

                </header>
                <div id="accordion">
                    <div class="panel panel-accordion panel-accordion-first">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
                                    <i class="fa fa-check"></i> Tasks
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1One" class="accordion-body collapse in">
                            <div class="panel-body">
                                <ul class="widget-todo-list">
                                    <li>
                                        <div class="checkbox-custom checkbox-default">
                                            <input type="checkbox" checked="" id="todoListItem1" class="todo-check">
                                            <label class="todo-label" for="todoListItem1"><span>Lorem ipsum dolor sit amet</span></label>
                                        </div>
                                        <div class="todo-actions">
                                            <a class="todo-remove" href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-default">
                                            <input type="checkbox" id="todoListItem2" class="todo-check">
                                            <label class="todo-label" for="todoListItem2"><span>Lorem ipsum dolor sit amet</span></label>
                                        </div>
                                        <div class="todo-actions">
                                            <a class="todo-remove" href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-default">
                                            <input type="checkbox" id="todoListItem3" class="todo-check">
                                            <label class="todo-label" for="todoListItem3"><span>Lorem ipsum dolor sit amet</span></label>
                                        </div>
                                        <div class="todo-actions">
                                            <a class="todo-remove" href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-default">
                                            <input type="checkbox" id="todoListItem4" class="todo-check">
                                            <label class="todo-label" for="todoListItem4"><span>Lorem ipsum dolor sit amet</span></label>
                                        </div>
                                        <div class="todo-actions">
                                            <a class="todo-remove" href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-default">
                                            <input type="checkbox" id="todoListItem5" class="todo-check">
                                            <label class="todo-label" for="todoListItem5"><span>Lorem ipsum dolor sit amet</span></label>
                                        </div>
                                        <div class="todo-actions">
                                            <a class="todo-remove" href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-default">
                                            <input type="checkbox" id="todoListItem6" class="todo-check">
                                            <label class="todo-label" for="todoListItem6"><span>Lorem ipsum dolor sit amet</span></label>
                                        </div>
                                        <div class="todo-actions">
                                            <a class="todo-remove" href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <hr class="solid mt-sm mb-lg">
                                <form method="get" class="form-horizontal form-bordered">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="input-group mb-md">
                                                <input type="text" class="form-control">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-primary" tabindex="-1">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-accordion">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
                                     <i class="fa fa-comment"></i> Messages
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1Two" class="accordion-body collapse">
                            <div class="panel-body">
                                <ul class="simple-user-list mb-xlg">
                                    <li>
                                        <figure class="image rounded">
                                            <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                                        </figure>
                                        <span class="title">Joseph Doe Junior</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </li>
                                    <li>
                                        <figure class="image rounded">
                                            <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
                                        </figure>
                                        <span class="title">Joseph Junior</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </li>
                                    <li>
                                        <figure class="image rounded">
                                            <img src="statics/assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
                                        </figure>
                                        <span class="title">Joe Junior</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </li>
                                    <li>
                                        <figure class="image rounded">
                                            <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                                        </figure>
                                        <span class="title">Joseph Doe Junior</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>
</div>-->
        <!--<div class="col-xl-3 col-lg-6">
            <section class="panel panel-transparent">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">My Stats</h2>
                </header>
                <div class="panel-body">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="small-chart pull-right" id="sparklineBarDash"></div>
                            <script type="text/javascript">
                                var sparklineBarDashData = [5, 6, 7, 2, 0, 4 , 2, 4, 2, 0, 4 , 2, 4, 2, 0, 4];
                            </script>
                            <div class="h4 text-bold mb-none">488</div>
                            <p class="text-xs text-muted mb-none">Average Profile Visits</p>
                        </div>
                    </section>
                    <section class="panel">
                        <div class="panel-body">
                            <div class="circular-bar circular-bar-xs m-none mt-xs mr-md pull-right">
                                <div class="circular-bar-chart" data-percent="45" data-plugin-options='{ "barColor": "#2baab1", "delay": 300, "size": 50, "lineWidth": 4 }'>
                                    <strong>Average</strong>
                                    <label><span class="percent">45</span>%</label>
                                </div>
                            </div>
                            <div class="h4 text-bold mb-none">12</div>
                            <p class="text-xs text-muted mb-none">Working Projects</p>
                        </div>
                    </section>
                    <section class="panel">
                        <div class="panel-body">
                            <div class="small-chart pull-right" id="sparklineLineDash"></div>
                            <script type="text/javascript">
                                var sparklineLineDashData = [15, 16, 17, 19, 10, 15, 13, 12, 12, 14, 16, 17];
                            </script>
                            <div class="h4 text-bold mb-none">89</div>
                            <p class="text-xs text-muted mb-none">Pending Tasks</p>
                        </div>
                    </section>
                </div>
            </section>
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">
                        <span class="label label-primary label-sm text-normal va-middle mr-sm">198</span>
                        <span class="va-middle">Friends</span>
                    </h2>
                </header>
                <div class="panel-body">
                    <div class="content">
                        <ul class="simple-user-list">
                            <li>
                                <figure class="image rounded">
                                    <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                                </figure>
                                <span class="title">Joseph Doe Junior</span>
                                <span class="message truncate">Lorem ipsum dolor sit.</span>
                            </li>
                            <li>
                                <figure class="image rounded">
                                    <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
                                </figure>
                                <span class="title">Joseph Junior</span>
                                <span class="message truncate">Lorem ipsum dolor sit.</span>
                            </li>
                            <li>
                                <figure class="image rounded">
                                    <img src="statics/assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
                                </figure>
                                <span class="title">Joe Junior</span>
                                <span class="message truncate">Lorem ipsum dolor sit.</span>
                            </li>
                        </ul>
                        <hr class="dotted short">
                        <div class="text-right">
                            <a class="text-uppercase text-muted" href="#">(View All)</a>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="input-group input-search">
                        <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </section>
        </div>-->
        <!--<div class="col-xl-6 col-lg-12">
            <section class="panel">
                <header class="panel-heading panel-heading-transparent">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Company Activity</h2>
                </header>
                <div class="panel-body">
                    <div class="timeline timeline-simple mt-xlg mb-md">
                        <div class="tm-body">
                            <div class="tm-title">
                                <h3 class="h5 text-uppercase">November 2013</h3>
                            </div>
                            <ol class="tm-items">
                                <li>
                                    <div class="tm-box">
                                        <p class="text-muted mb-none">7 months ago.</p>
                                        <p>
                                            It's awesome when we find a good solution for our projects, JSOFT Admin is <span class="text-primary">#awesome</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="tm-box">
                                        <p class="text-muted mb-none">7 months ago.</p>
                                        <p>
                                            Checkout! How cool is that!
                                        </p>
                                        <div class="thumbnail-gallery">
                                            <a class="img-thumbnail lightbox" href="statics/assets/images/projects/project-4.jpg" data-plugin-options='{ "type":"image" }'>
                                                <img class="img-responsive" width="215" src="statics/assets/images/projects/project-4.jpg">
                                                <span class="zoom">
                                                    <i class="fa fa-search"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
        </div>-->
        <!--</div>-->
        <!--<div class="row">
            <div class="col-lg-6 col-md-12">
                <section class="panel panel-transparent">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Global Stats</h2>
                    </header>
                    <div class="panel-body">
                        <div id="vectorMapWorld" style="height: 350px; width: 100%;"></div>
                    </div>
                </section>
            </div>-->
        <!--<div class="col-lg-6 col-md-12">
            <section class="panel">
                <header class="panel-heading panel-heading-transparent">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Projects Stats</h2>
                </header>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-none">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project</th>
                                    <th>Status</th>
                                    <th>Progress</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JSOFT - Responsive HTML5 Template</td>
                                    <td><span class="label label-success">Success</span></td>
                                    <td>
                                        <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                100%
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JSOFT - Responsive Drupal 7 Theme</td>
                                    <td><span class="label label-success">Success</span></td>
                                    <td>
                                        <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                100%
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tucson - Responsive HTML5 Template</td>
                                    <td><span class="label label-warning">Warning</span></td>
                                    <td>
                                        <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                60%
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Tucson - Responsive Business WordPress Theme</td>
                                    <td><span class="label label-success">Success</span></td>
                                    <td>
                                        <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                90%
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JSOFT - Responsive Admin HTML5 Template</td>
                                    <td><span class="label label-warning">Warning</span></td>
                                    <td>
                                        <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                45%
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JSOFT - Responsive HTML5 Template</td>
                                    <td><span class="label label-danger">Danger</span></td>
                                    <td>
                                        <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                                40%
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JSOFT - Responsive Drupal 7 Theme</td>
                                    <td><span class="label label-success">Success</span></td>
                                    <td>
                                        <div class="progress progress-sm progress-half-rounded mt-xs light">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                95%
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>-->
        <!--</div>More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>-->
        <!-- end: page -->
    </section>
</div>

<!--<aside id="sidebar-right" class="sidebar-right">
    <div class="nano">
        <div class="nano-content">
            <a href="#" class="mobile-close visible-xs">
                Collapse <i class="fa fa-chevron-right"></i>
            </a>

            <div class="sidebar-right-wrapper">

                <div class="sidebar-widget widget-calendar">
                    <h6>Upcoming Tasks</h6>
                    <div data-plugin-datepicker data-plugin-skin="dark" ></div>

                    <ul>
                        <li>
                            <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                            <span>Company Meeting</span>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-widget widget-friends">
                    <h6>Friends</h6>
                    <ul>
                        <li class="status-online">
                            <figure class="profile-picture">
                                <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                            </figure>
                            <div class="profile-info">
                                <span class="name">Joseph Doe Junior</span>
                                <span class="title">Hey, how are you?</span>
                            </div>
                        </li>
                        <li class="status-online">
                            <figure class="profile-picture">
                                <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                            </figure>
                            <div class="profile-info">
                                <span class="name">Joseph Doe Junior</span>
                                <span class="title">Hey, how are you?</span>
                            </div>
                        </li>
                        <li class="status-offline">
                            <figure class="profile-picture">
                                <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                            </figure>
                            <div class="profile-info">
                                <span class="name">Joseph Doe Junior</span>
                                <span class="title">Hey, how are you?</span>
                            </div>
                        </li>
                        <li class="status-offline">
                            <figure class="profile-picture">
                                <img src="statics/assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                            </figure>
                            <div class="profile-info">
                                <span class="name">Joseph Doe Junior</span>
                                <span class="title">Hey, how are you?</span>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</aside>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
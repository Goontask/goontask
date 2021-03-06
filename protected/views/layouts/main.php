<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/favicon.png">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!--Core CSS -->
    <link href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/css/jquery.steps.css?1">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/css/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/jquery-multi-select/css/multi-select.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/jquery-tags-input/jquery.tagsinput.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/select2/select2.css" />

    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>" class="logo">
        <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/logo.png" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/avatar-mini.jpg"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/avatar-mini-2.jpg"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/avatar-mini-3.jpg"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/avatar-mini.jpg"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/avatar1_small.jpg">
                <span class="username">John Doe</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/site/logout"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        <li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li>
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
        	<?php $this->widget('zii.widgets.CMenu',array(
        			'items'=>array(
        					array(
        							'label'=>'Dashboard', 
        							'url'=>array('/'), 
        					),
        					array(
        							'label'=>'Projects', 
        							'url'=>array('/projects')
        					),
        					array(
        							'label'=>'Tasks', 
        							'url'=>array('/tasks')
        					),
        					array(
        							'label'=>'Messages', 
        							'url'=>array('/site/messages')
        					),
        			),
        			'htmlOptions' => array(
        					'id' => 'nav-accordion',
        					'class' => 'sidebar-menu'
        			),
        	)); 
        	?>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <?php echo $content; ?>
    </section>
</section>
<!--main content end-->
<!--right sidebar start-->
<div class="right-sidebar">
<div class="search-row">
    <input type="text" placeholder="Search" class="form-control">
</div>
<div class="right-stat-bar">
<ul class="right-side-accordion">
<li class="widget-collapsible">
    <a href="#" class="head widget-head red-bg active clearfix">
        <span class="pull-left">work progress (5)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row side-mini-stat clearfix">
                <div class="side-graph-info">
                    <h4>Target sell</h4>
                    <p>
                        25%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="target-sell">
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info">
                    <h4>product delivery</h4>
                    <p>
                        55%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="p-delivery">
                        <div class="sparkline" data-type="bar" data-resize="true" data-height="30" data-width="90%" data-bar-color="#39b7ab" data-bar-width="5" data-data="[200,135,667,333,526,996,564,123,890,564,455]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info payment-info">
                    <h4>payment collection</h4>
                    <p>
                        25%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="p-collection">
						<span class="pc-epie-chart" data-percent="45">
						<span class="percent"></span>
						</span>
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info">
                    <h4>delivery pending</h4>
                    <p>
                        44%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="d-pending">
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="col-md-12">
                    <h4>total progress</h4>
                    <p>
                        50%, Deadline 12 june 13
                    </p>
                    <div class="progress progress-xs mtop10">
                        <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                            <span class="sr-only">50% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="#" class="head widget-head terques-bg active clearfix">
        <span class="pull-left">contact online (5)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/avatar1_small.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">Jonathan Smith</a></h4>
                    <p>
                        Work for fun
                    </p>
                </div>
                <div class="user-status text-danger">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/avatar1.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">Anjelina Joe</a></h4>
                    <p>
                        Available
                    </p>
                </div>
                <div class="user-status text-success">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/chat-avatar2.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">John Doe</a></h4>
                    <p>
                        Away from Desk
                    </p>
                </div>
                <div class="user-status text-warning">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/avatar1_small.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">Mark Henry</a></h4>
                    <p>
                        working
                    </p>
                </div>
                <div class="user-status text-info">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/avatar1.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">Shila Jones</a></h4>
                    <p>
                        Work for fun
                    </p>
                </div>
                <div class="user-status text-danger">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <p class="text-center">
                <a href="#" class="view-btn">View all Contacts</a>
            </p>
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="#" class="head widget-head purple-bg active">
        <span class="pull-left"> recent activity (3)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        just now
                    </p>
                    <p>
                        <a href="#">Jim Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        2 min ago
                    </p>
                    <p>
                        <a href="#">Jane Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        1 day ago
                    </p>
                    <p>
                        <a href="#">Jim Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="#" class="head widget-head yellow-bg active">
        <span class="pull-left"> shipment status</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="col-md-12">
                <div class="prog-row">
                    <p>
                        Full sleeve baby wear (SL: 17665)
                    </p>
                    <div class="progress progress-xs mtop10">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="prog-row">
                    <p>
                        Full sleeve baby wear (SL: 17665)
                    </p>
                    <div class="progress progress-xs mtop10">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                            <span class="sr-only">70% Completed</span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
</ul>

</div>

</div>
<!--right sidebar end-->
</section>

<!--Core js-->
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/jquery.js"></script>
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/bs3/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/jquery-ui-1.9.2.custom.min.js"></script>
<script class="include" type="text/javascript" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/easypiechart/jquery.easypiechart.js"></script>
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/jquery.nicescroll.js"></script>
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/jquery.nicescroll.js"></script>

<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-switch.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/jquery-multi-select/js/jquery.quicksearch.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>

<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/jquery-tags-input/jquery.tagsinput.js"></script>

<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/select2/select2.js"></script>
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/select-init.js"></script>


<!--common script init for all pages-->

<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/toggle-init.js"></script>

<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/jquery-steps/jquery.steps.js"></script>
<!--Easy Pie Chart-->
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/ckeditor/ckeditor.js"></script>
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/scripts.js"></script>
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/advanced-form.js"></script>
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/js/custom.js"></script>
<script>
$(function ()
    {
        $("#wizard").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft",
        });
    });
</script>
</body>
</html>

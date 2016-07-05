<?php
	if($page_active == 'dashboard'){$dash_active = 'active';} else {$dash_active = '';}
	if($page_active == 'sms'){$sms_active = 'active';} else {$sms_active = '';}
	if($page_active == 'transaction'){$trans_active = 'active';} else {$trans_active = '';}
	if($page_active == 'statistic'){$stat_active = 'active';} else {$stat_active = '';}
?>

<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title><?php echo $title; ?></title>

        <meta name="description" content="<?php echo app_meta_desc; ?>">
        <meta name="author" content="<?php echo app_name; ?>">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.png">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/plugins.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/themes/lake.css">
        <!-- END Stylesheets -->

        <script src="<?php echo base_url(); ?>js/vendor/modernizr-respond.min.js"></script>
    </head>
    <body>
        <div id="page-wrapper">
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                <!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <a href="<?php echo base_url('dashboard'); ?>" class="sidebar-brand">
                                <i class="gi gi-flash"></i><span class="sidebar-nav-mini-hide"><strong><?php echo app_name; ?></strong></span>
                            </a>
                            <!-- END Brand -->

                            <!-- User Info -->
                            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-avatar">
                                    <a href="javascript:;">
                                        <img src="<?php echo base_url(); ?>img/placeholders/avatars/avatar2.jpg" alt="avatar">
                                    </a>
                                </div>
                                <div class="sidebar-user-name">
									<?php echo $this->session->userdata('sc_user_othername'); ?>
									<?php echo $this->session->userdata('sc_user_surname'); ?>
                                </div>
                                <div class="sidebar-user-links">
                                    <a href="javascript:;" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                                    <a href="javascript:;" data-toggle="tooltip" data-placement="bottom" title="SMS"><i class="gi gi-envelope"></i></a>
                                    <a href="javascript:;" class="enable-tooltip" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>
                                    <a href="<?php echo base_url('auth/logout'); ?>" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                                </div>
                            </div>
                            <!-- END User Info -->
                            
                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="<?php echo base_url('dashboard'); ?>" class="<?php echo $dash_active; ?>"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide"><strong><?php echo $this->lang->line('menu1'); ?></strong></span></a>
                                </li>
                                <li class="<?php echo $sms_active; ?>">
                                    <a href="javascript:;" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-envelope sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide"><strong><?php echo $this->lang->line('menu2'); ?></strong></span></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url('compose'); ?>"><?php echo $this->lang->line('menu3'); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('buy'); ?>"><?php echo $this->lang->line('menu4'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"><?php echo $this->lang->line('menu5'); ?></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" <?php echo $trans_active; ?>><i class="gi gi-money sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide"><strong><?php echo $this->lang->line('menu6'); ?></strong></span></a>
                                </li>
                                <li>
                                    <a href="javascript:;" <?php echo $stat_active; ?>><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide"><strong><?php echo $this->lang->line('menu7'); ?></strong></span></a>
                                </li>
                        	</ul>
                            <!-- END Sidebar Navigation -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <header class="navbar navbar-default">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">
                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url(); ?>img/placeholders/avatars/avatar2.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                    <li class="dropdown-header text-center">Account</li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>
                                        <a href="javascript:;">
                                            <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                            SMS
                                        </a>
                                        <a href="javascript:;">
                                        	<i class="fa fa-money fa-fw pull-right"></i>
                                            Transactions
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="<?php echo base_url('auth/logout'); ?>"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->
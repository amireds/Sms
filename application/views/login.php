<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

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
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
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
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (enables responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="<?php echo base_url(); ?>js/vendor/modernizr-respond.min.js"></script>
    </head>
    <body style="background-color:#333;">
        <!-- Login Alternative Row -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div id="login-alt-container">
                        <!-- Title -->
                        <h1 class="push-top-bottom">
                            <i class="gi gi-flash"></i> <strong><?php echo app_name; ?></strong><br>
                            <small><?php echo app_meta_desc; ?></small>
                        </h1>
                        <!-- END Title -->

                        <!-- Key Features -->
                        <ul class="fa-ul text-muted">
                            <li><i class="fa fa-check fa-li text-success"></i> 5 seconds sign up</li>
                            <li><i class="fa fa-check fa-li text-success"></i> Compose your marketing sms</li>
                            <li><i class="fa fa-check fa-li text-success"></i> Select preferred market area(s)</li>
                            <li><i class="fa fa-check fa-li text-success"></i> Our system performs the margic</li>
                            <li><i class="fa fa-check fa-li text-success"></i> ... and many more awesome features!</li>
                        </ul>
                        <!-- END Key Features -->

                        <!-- Footer -->
                        <footer class="text-muted push-top-bottom">
                            <small><?php echo date('Y'); ?> &copy; <?php echo app_name; ?></small>
                        </footer>
                        <!-- END Footer -->
                    </div>
                </div>
                <div class="col-md-5">
                    <!-- Login Container -->
                    <div id="login-container">
                        <!-- Login Title -->
                        <div class="login-title text-center">
                            <h1><strong>Login</strong> or <strong>Register</strong></h1>
                        </div>
                        <!-- END Login Title -->
						<?php if(!empty($err_msg)){echo $err_msg;} ?>
                        <!-- Login Block -->
                        <div class="block push-bit">
                            <!-- Login Form -->
                            <form action="<?php echo base_url('auth'); ?>" method="post" id="form-login" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-iphone"></i></span>
                                            <input type="text" id="login-phone" name="login-phone" class="form-control input-lg" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            <input type="password" id="login-password" name="login-password" class="form-control input-lg" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-xs-4">
                                        <label class="switch switch-primary" data-toggle="tooltip" title="Remember Me?">
                                            <input type="checkbox" id="login-remember-me" name="login-remember-me" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col-xs-8 text-right">
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Login to Dashboard</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 text-center">
                                        <a href="javascript:void(0)" id="link-reminder-login"><small>Forgot password?</small></a> -
                                        <a href="javascript:void(0)" id="link-register-login"><small>Create a new account</small></a>
                                    </div>
                                </div>
                            </form>
                            <!-- END Login Form -->

                            <!-- Reminder Form -->
                            <form action="<?php echo base_url(); ?>#reminder" method="post" id="form-reminder" class="form-horizontal display-none">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-iphone"></i></span>
                                            <input type="text" id="reminder-phone" name="reminder-phone" class="form-control input-lg" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-xs-12 text-right">
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Reset Password</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 text-center">
                                        <small>Did you remember your password?</small> <a href="javascript:void(0)" id="link-reminder"><small>Login</small></a>
                                    </div>
                                </div>
                            </form>
                            <!-- END Reminder Form -->

                            <!-- Register Form -->
                            <form action="<?php echo base_url('auth/register'); ?>" method="post" id="form-register" class="form-horizontal display-none">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-iphone"></i></span>
                                            <input type="hidden" id="register-id" name="register-id" />
                                            <input type="text" id="register-phone" name="register-phone" class="form-control input-lg" placeholder="Phone Number" oninput="phone_lookup();">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="register-surname" name="register-surname" class="form-control input-lg" placeholder="Surname">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="text" id="register-othername" name="register-othername" class="form-control input-lg" placeholder="Other Names">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            <input type="password" id="register-password" name="register-password" class="form-control input-lg" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            <input type="password" id="register-password-verify" name="register-password-verify" class="form-control input-lg" placeholder="Verify Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-xs-6">
                                        <a href="#modal-terms" data-toggle="modal" class="register-terms">Terms</a>
                                        <label class="switch switch-primary" data-toggle="tooltip" title="Agree to the terms">
                                            <input type="checkbox" id="register-terms" name="register-terms">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Register Account</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 text-center">
                                        <small>Do you have an account?</small> <a href="javascript:void(0)" id="link-register"><small>Login</small></a>
                                    </div>
                                </div>
                            </form>
                            <script type="text/javascript">
								function phone_lookup(){
									var hr = new XMLHttpRequest();
									var phone = document.getElementById('register-phone').value;
									var c_vars = "phone="+phone;
									hr.open("POST", "<?php echo base_url(); ?>auth/phone_lookup", true);
									hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
									hr.onreadystatechange = function() {
										if(hr.readyState == 4 && hr.status == 200) {
											var return_data = hr.responseText;
											arr = JSON.parse(return_data);
											if(arr.length > 0){
												document.getElementById('register-id').value = arr[0];
												document.getElementById('register-surname').value = arr[1];
												document.getElementById('register-othername').value = arr[2];
											} else {
												document.getElementById('register-id').value = '';
												document.getElementById('register-surname').value = '';
												document.getElementById('register-othername').value = '';
											}
									   }
									}
									hr.send(c_vars);
								}
							</script>
                            <!-- END Register Form -->
                        </div>
                        <!-- END Login Block -->
                    </div>
                    <!-- END Login Container -->
                </div>
            </div>
        </div>
        <!-- END Login Alternative Row -->

        <!-- Modal Terms -->
        <div id="modal-terms" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Terms &amp; Conditions</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Title</h4>
                        <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Modal Terms -->

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?php echo base_url(); ?>js/vendor/jquery-1.12.0.min.js"></script>
        <script src="<?php echo base_url(); ?>js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?php echo base_url(); ?>js/pages/login.js"></script>
        <script>$(function(){ Login.init(); });</script>
    </body>
</html>
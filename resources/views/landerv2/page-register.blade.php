<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lander.v2 - Bootstrap WebApp & Dashboard</title>
        <meta name="author" content="optimisticdesigns">
        <meta name="description" content="Lander.v2 Admin is a clean and flat backend built with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/image/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="/image/favicon.ico">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="/stylesheet/bootstrap.css">
        <link rel="stylesheet" href="/stylesheet/layout.css">
        <link rel="stylesheet" href="/stylesheet/uielement.css">
        <!--/ Application stylesheet -->

        <!-- Theme stylesheet -->
		<link rel="stylesheet" href="/stylesheet/themes/theme.css">
        <!--/ Theme stylesheet -->

        <!-- modernizr script -->
        <script type="text/javascript" src="/plugins/modernizr/js/modernizr.js"></script>
        <!--/ modernizr script -->
        <!-- END STYLESHEETS -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body>
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <section class="container">
                <!-- START row -->
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <!-- Brand -->
                        <div class="text-center" style="margin-bottom:20px;">
                            <span class="logo-figure inverse"></span>
                            <span class="logo-text inverse"></span>
                            <h5 class="semibold text-muted mt-5">Create a new account.</h5>
                        </div>
                        <!--/ Brand -->

                        <!-- Register form -->
                        <form class="panel" name="form-register" action="">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label">Username</label>
                                    <div class="has-icon pull-left">
                                        <input type="text" class="form-control" name="username" data-parsley-required>
                                        <i class="ico-user2 form-control-icon"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Password</label>
                                    <div class="has-icon pull-left">
                                        <input type="password" class="form-control" name="password" data-parsley-required>
                                        <i class="ico-key2 form-control-icon"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Retype Password</label>
                                    <div class="has-icon pull-left">
                                        <input type="password" class="form-control" name="retype-password" data-parsley-equalto="input[name=password]">
                                        <i class="ico-asterisk form-control-icon"></i>
                                    </div>
                                </div>
                            </div>
                            <hr class="nm">
                            <div class="panel-body">
                                <p class="semibold text-muted">To confirm and activate your new account, we will need to send the activation code to your e-mail.</p>
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <div class="has-icon pull-left">
                                        <input type="email" class="form-control" name="email" placeholder="you@mail.com">
                                        <i class="ico-envelop form-control-icon"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox custom-checkbox">  
                                        <input type="checkbox" name="agree" id="agree" value="1">  
                                        <label for="agree">&nbsp;&nbsp;I agree to the <a class="semibold" href="javascript:void(0);">Term Of Services</a></label>   
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox custom-checkbox">  
                                        <input type="checkbox" name="news" id="news" value="1">  
                                        <label for="news">&nbsp;&nbsp;Send me Newsletters.</label>   
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-block btn-success"><span class="semibold">Sign up</span></button>
                            </div>
                        </form>
                        <!-- Register form -->

                        <hr><!-- horizontal line -->

                        <p class="text-center">
                            <span class="text-muted">Already have an account? <a class="semibold" href="page-login.html">Sign in here</a></span>
                        </p>
                    </div>
                </div>
                <!--/ END row -->
            </section>
            <!--/ END Template Container -->
        </section>
        <!--/ END Template Main -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="/javascript/vendor.js"></script>
        <script type="text/javascript" src="/javascript/core.js"></script>
        <script type="text/javascript" src="/javascript/backend/app.js"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
		<script type="text/javascript" src="/plugins/parsley/js/parsley.js"></script>
        <script type="text/javascript" src="/javascript/backend/pages/register.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>
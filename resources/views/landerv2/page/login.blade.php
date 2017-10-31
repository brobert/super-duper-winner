@extends('layouts.blank')

@section('page_title')
Lander.v2 - Login Page
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/parsley/js/parsley.js"></script>
        <script type="text/javascript" src="/javascript/backend/pages/login.js"></script>
@endsection

@section('content')
            <section class="container">
                <!-- START row -->
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <!-- Brand -->
                        <div class="text-center" style="margin-bottom:40px;">
                            <span class="logo-figure inverse"></span>
                            <span class="logo-text inverse"></span>
                            <h5 class="semibold text-muted mt-5">Login to your account.</h5>
                        </div>
                        <!--/ Brand -->

                        <!-- Social button -->
<!--                         <ul class="list-table"> -->
<!--                             <li><button type="button" class="btn btn-block btn-facebook">Connect with <i class="ico-facebook2 ml5"></i></button></li> -->
<!--                             <li><button type="button" class="btn btn-block btn-twitter">Connect with <i class="ico-twitter2 ml5"></i></button></li> -->
<!--                         </ul> -->
                        <!-- Social button -->

                        <hr><!-- horizontal line -->

                        <!-- Login form -->
                        <form class="panel" name="form-login" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="form-stack has-icon pull-left">
                                        <input
                                            name="email"
                                            type="text"
                                            class="form-control input-lg"
                                            placeholder="Username / email"
                                            data-parsley-errors-container="#error-container"
                                            data-parsley-error-message="Please fill in your username / email"
                                            data-parsley-required
                                        />
                                        <i class="ico-user2 form-control-icon"></i>
                                    </div>
                                    <div class="form-stack has-icon pull-left">
                                        <input
                                            name="password"
                                            type="password"
                                            class="form-control input-lg"
                                            placeholder="Password"
                                            data-parsley-errors-container="#error-container"
                                            data-parsley-error-message="Please fill in your password"
                                            data-parsley-required
                                        />
                                        <i class="ico-lock2 form-control-icon"></i>
                                    </div>
                                </div>

                                <!-- Error container -->
                                <div id="error-container"class="mb15"></div>
                                <!--/ Error container -->

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox custom-checkbox">
                                                <input type="checkbox" name="remember" id="remember" value="1">
                                                <label for="remember">&nbsp;&nbsp;Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <a href="javascript:void(0);">Lost password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group nm">
                                    <button type="submit" class="btn btn-block btn-success"><span class="semibold">Sign In</span></button>
                                </div>
                            </div>
                        </form>
                        <!-- Login form -->

                        <hr><!-- horizontal line -->

                        <p class="text-muted text-center">Don't have any account? <a class="semibold" href="/page/register.html">Sign up to get started</a></p>
                    </div>
                </div>
                <!--/ END row -->
            </section>
@endsection



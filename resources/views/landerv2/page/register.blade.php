@extends('layouts.admin')

@section('page_title')
Lander.v2 - Bootstrap WebApp & Dashboard
@endsection

@section('asset_css')
@endsection

@section('asset_css_theme')
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/parsley/js/parsley.js"></script>
        <script type="text/javascript" src="/javascript/backend/pages/register.js"></script>
@endsection

@section('content')
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
                            <span class="text-muted">Already have an account? <a class="semibold" href="/page/login.html">Sign in here</a></span>
                        </p>
                    </div>
                </div>
                <!--/ END row -->
            </section>
@endsection

@section('footer')
@endsection


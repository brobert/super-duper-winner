<div class="tab-pane {{ old('scope', 'profile') === 'password'? 'active': ''}}" id="password">
    <!-- form password -->
    <form class="panel form-horizontal form-bordered form-ajax" name="form-password" method="POST" action="{{route('account.update')}}">
        {{csrf_field()}}
        {{Form::hidden('scope', 'password')}}
        {{Form::hidden('_method', 'put')}}
        <div class="panel-body pt0 pb0">
            <div class="form-group header bgcolor-default">
                <div class="col-md-12">
                    <h4 class="semibold text-primary mt0 mb5">Password</h4>
                    <p class="text-default nm">Change your password or recover your current one.</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Current password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" name="currentpass">
                    <p class="help-block"><a href="javascript:void(0);">Forgot password?</a></p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">New password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" name=password>
                    @if ($errors->has('password'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Verify password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
            </div>
            <div class="form-group message-container global"></div>
        </div>
        <div class="panel-footer">
            @include('form_partials.action_buttons')
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</div>

<div class="tab-pane {{ old('scope', 'profile') === 'profile'? 'active': ''}}" id="profile">
    <!-- form profile -->
    <form
        class="panel form-horizontal form-bordered form-ajax" name="form-profile" method="POST" action="{{route('account.update')}}" >
    	{{csrf_field()}}
    	{{Form::hidden('scope', 'profile')}}
        {{Form::hidden('_method', 'put')}}
        <div class="panel-body pt0 pb0">
            <div class="form-group header bgcolor-default">
                <div class="col-md-12">
                    <h4 class="semibold text-primary mt0 mb5">Profile</h4>
                    <p class="text-default nm">This information appears on your public profile, search results, and beyond.</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
                    <div class="message-container field" name="name"></div>
                    <p class="help-block">Enter your real name.</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="last_name" value="{{old('last_name', $user->last_name)}}">
                    <div class="message-container field" name="last_name"></div>
                    <p class="help-block">Enter your real last name.</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="{{old('email', $user->email)}}">
                    <div class="message-container field" name="email"></div>
                    <p class="help-block">Email will not be publicly displayed.</p>
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
    <!--/ form profile -->
</div>
<!--/ tab-pane: profile -->
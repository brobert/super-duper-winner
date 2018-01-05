@extends('layouts.blank')


@section('content')
<div style="display:flex; width:100vw;height:100vh;justify-content:center; align-items:center;">
    <div class="panel panel-default">
        <section class="brand">Brand</section>
        <section class="form">
            <form action="/login" method="POST">
                <div>
                    <label for"#login-field">Podaj login</label>
                    <input id="login-field" name="login" autofocus="autofocus" />
                </div>
                <div>
                    <label for"#pass-field">Podaj hasło</label>
                    <input id="pass-field"name="password">
                </div>
                <div>
                    <button type="submit" class="btn btn-default">Zaloguj</button>
                </div>
            </form>
        </section>
    </div>


</div>

@endsection
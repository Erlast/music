@extends('auth.layouts.auth')
@section('title','Вход')
@section('content')
<div class="container-fluid-full">
    <div class="row-fluid">

        <div class="row-fluid">
            <div class="login-box">
                <div class="icons">
                    <a href="{{ route('home') }}"><i class="halflings-icon home"></i></a>
                </div>
                <h2>Вход для зарегистрированных пользователей</h2>
                <form class="form-horizontal" action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
                    <fieldset>

                        <div class="input-prepend" title="Имя пользователя">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" name="username" id="username" type="text" placeholder="type username" value="{{ old('username') }}"/>
                            @if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-prepend" title="Пароль">
                            <span class="add-on"><i class="halflings-icon lock"></i></span>
                            <input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="clearfix"></div>

                        <label class="remember" for="remember"><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня</label>

                        <div class="button-login">
                            <button type="submit" class="btn btn-primary">Вход</button>
                        </div>
                        <div class="clearfix"></div>
                    </fieldset>
                </form>
                <hr>
                <h3><a href="{{ route('password.request') }}">Забыли пароль?</a></h3>
            </div><!--/span-->
        </div><!--/row-->


    </div><!--/.fluid-container-->

</div><!--/fluid-row-->
@endsection

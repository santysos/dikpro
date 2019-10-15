@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Password reset
@endsection

@section('content')
<body class="login-page">
    <div id="app">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}">
                    <b>
                        Admin
                    </b>
                    LTEdd
                </a>
            </div>
            <!-- /.login-logo -->
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>
                    Whoops!
                </strong>
                {{ trans('adminlte_lang::message.someproblems') }}
                <br>
                    <br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                            @endforeach
                        </ul>
                    </br>
                </br>
            </div>
            @endif
            <div class="login-box-body">
                <p class="login-box-msg">
                    {{ trans('adminlte_lang::message.passwordreset') }}
                </p>
                <form action="{{ url('/password/reset') }}" method="post">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <input name="token" type="hidden" value="{{ $token }}">
                            <div class="form-group has-feedback">
                                <input class="form-control" name="email" placeholder="Email" type="email" value="{{ old('email') }}"/>
                                <span class="glyphicon glyphicon-envelope form-control-feedback">
                                </span>
                            </div>
                            <div class="form-group has-feedback">
                                <input class="form-control" name="password" placeholder="Password" type="password"/>
                                <span class="glyphicon glyphicon-lock form-control-feedback">
                                </span>
                            </div>
                            <div class="form-group has-feedback">
                                <input class="form-control" name="password_confirmation" placeholder="Password" type="password"/>
                                <span class="glyphicon glyphicon-lock form-control-feedback">
                                </span>
                            </div>
                            <div class="row">
                                <div class="col-xs-2">
                                </div>
                                <!-- /.col -->
                                <div class="col-xs-8">
                                    <button class="btn btn-primary btn-block btn-flat" type="submit">
                                        {{ trans('adminlte_lang::message.passwordreset') }}
                                    </button>
                                </div>
                                <!-- /.col -->
                                <div class="col-xs-2">
                                </div>
                                <!-- /.col -->
                            </div>
                        </input>
                    </input>
                </form>
                <a href="{{ url('/login') }}">
                    Log in
                </a>
                <br>
                    <a class="text-center" href="{{ url('/register') }}">
                        {{ trans('adminlte_lang::message.membreship') }}
                    </a>
                </br>
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
    </div>
    @include('adminlte::layouts.partials.scripts_auth')
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>
@endsection

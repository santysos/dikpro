@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body class="hold-transition login-page">
    <div id="app">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}">
                </a>
                <img alt="Responsive image" class="img-responsive" src="http://www.dikapsa.com/wp-content/uploads/2016/06/logoconisotipo.png">
                </img>
            </div>
            <!-- /.login-logo -->
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
                    {{ trans('adminlte_lang::message.siginsession') }}
                </p>
                <form action="{{ url('/login') }}" method="post">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <div class="form-group has-feedback">
                            <input class="form-control" name="email" placeholder="{{ trans('adminlte_lang::message.email') }}" type="email"/>
                            <span class="glyphicon glyphicon-envelope form-control-feedback">
                            </span>
                        </div>
                        <div class="form-group has-feedback">
                            <input class="form-control" name="password" placeholder="{{ trans('adminlte_lang::message.password') }}" type="password"/>
                            <span class="glyphicon glyphicon-lock form-control-feedback">
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="checkbox icheck">
                                    <label>
                                        <input name="remember" type="checkbox">
                                            {{ trans('adminlte_lang::message.remember') }}
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-6">
                                <button class="btn btn-primary btn-block btn-flat" type="submit">
                                    {{ trans('adminlte_lang::message.buttonsign') }}
                                </button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </input>
                </form>
                <br>
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

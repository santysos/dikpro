@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Password recovery
@endsection

@section('content')
<body class="login-page">
    <div id="app">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}">
                    <img alt="Responsive image" class="img-responsive" src="http://www.dikapsa.com/wp-content/uploads/2016/06/logoconisotipo.png">
                    </img>
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
                    Restaurar Contraseña
                </p>
                <form action="{{ url('/password/email') }}" method="post">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <div class="form-group has-feedback">
                            <input class="form-control" name="email" placeholder="Email" type="email" value="{{ old('email') }}"/>
                            <span class="glyphicon glyphicon-envelope form-control-feedback">
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-8">
                                <button class="btn btn-primary btn-block btn-flat" type="submit">
                                    Restaurar
                                </button>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-2">
                            </div>
                            <!-- /.col -->
                        </div>
                    </input>
                </form>
                <a href="{{ url('/login') }}">
                    Log in
                </a>
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

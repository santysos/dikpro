@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Reset Passswords
                </div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ url('/password/reset') }}" class="form-horizontal" method="POST" role="form">
                        {{ csrf_field() }}
                        <input name="token" type="hidden" value="{{ $token }}">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label" for="email">
                                    E-Mail Address
                                </label>
                                <div class="col-md-6">
                                    <input autofocus="" class="form-control" id="email" name="email" required="" type="email" value="{{ $email or old('email') }}">
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('email') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </input>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label" for="password">
                                    Password
                                </label>
                                <div class="col-md-6">
                                    <input class="form-control" id="password" name="password" required="" type="password">
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('password') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </input>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label" for="password-confirm">
                                    Confirm Password
                                </label>
                                <div class="col-md-6">
                                    <input class="form-control" id="password-confirm" name="password_confirmation" required="" type="password">
                                        @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('password_confirmation') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </input>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button class="btn btn-primary" type="submit">
                                        Reset Password
                                    </button>
                                </div>
                            </div>
                        </input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

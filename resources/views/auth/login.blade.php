@extends('layouts.admin.master')

@section('title')
    OSHU - Login
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Log hier in</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::open() !!}
                        <div class="form-group @if($errors->has('email')) has-error @endif">
                            {!! Form::email('email', null, ['class' => 'form-control', 'value' => Input::old('email'), 'placeholder' => 'Email']) !!}
                            @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('password')) has-error @endif">
                            {!! Form::password('password', ['class' => 'form-control', 'value' => Input::old('password'), 'placeholder' => 'Wachtwoord']) !!}
                            @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Blijf ingelogt
                            </label>
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Login', ['class' => 'btn btn-lg btn-success btn-block']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
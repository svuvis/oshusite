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
                        <form method="POST" action="/auth/login">
                            <fieldset>
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="email" value="{{ old('email') }}" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Wachtwoord" name="password" type="password" id="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Blijf ingelogt
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                        @if(count($errors) > 0)
                            <div class="alert alert-danger" style="margin-top: 20px">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
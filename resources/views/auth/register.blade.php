@extends('layouts.public.master')

@section('title')
    OSHU - Login
@stop

@section('content')
    <div class="row" style="margin: 50px">
        <div class="col-lg-6 col-md-offset-3">
    {!! Form::open() !!}
        <div class="form-group @if($errors->has('name')) has-error @endif">
            {!! Form::label('name','Naam') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'value' => Input::old('name')]) !!}
            @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
        </div>
        <div class="form-group @if($errors->has('email')) has-error @endif">
            {!! Form::label('email','Email') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'value' => Input::old('email')]) !!}
            @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
        </div>
        <div class="form-group @if($errors->has('password')) has-error @endif">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password', ['class' => 'form-control', 'value' => Input::old('password')]) !!}
            @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
        </div>
        <div class="form-group @if($errors->has('password_confirmation')) has-error @endif">
            {!! Form::label('password_confirmation','Password Confirmation') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control', 'value' => Input::old('password_confirmation')]) !!}
            @if ($errors->has('password_confirmation')) <p class="help-block">{{ $errors->first('password_confirmation') }}</p> @endif
        </div>
        <div class="form-group">
            {!! Form::submit('Registreer', ['class' => 'btn btn-primary form-control']) !!}
        </div>     
    {!! Form::close() !!}
    </div>
    </div>
@stop
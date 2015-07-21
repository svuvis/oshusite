<div class="form-group @if($errors->has('title')) has-error @endif">
    {!! Form::label('title','Titel') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'value' => Input::old('title')]) !!}
    @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
</div>
<div class="form-group @if($errors->has('body')) has-error @endif">
    {!! Form::label('body','Nieuwsbericht') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'style' => 'height:20px', 'value' => Input::old('body')]) !!}
    @if ($errors->has('body')) <p class="help-block">{{ $errors->first('body') }}</p> @endif
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
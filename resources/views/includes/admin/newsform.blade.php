<div class="form-group required @if($errors->has('title')) has-error @endif">
    {!! Form::label('title','Titel',['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'value' => Input::old('title')]) !!}
    @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
</div>
<div class="form-group @if($errors->has('slug')) has-error @endif">
    {!! Form::label('slug','Slug') !!} <i class="fa fa-question-circle" rel="tooltip" title="Uitgebreide uitleg op de uitleg pagina EERST LEZEN!"></i>
    {!! Form::text('slug', null, ['class' => 'form-control', 'value' => Input::old('slug')]) !!}
    @if ($errors->has('slug')) <p class="help-block">{{ $errors->first('slug') }}</p> @endif
</div>
<div class="form-group required @if($errors->has('body')) has-error @endif">
    {!! Form::label('body','Nieuwsbericht',['class' => 'control-label']) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'style' => 'height:20px', 'value' => Input::old('body')]) !!}
    @if ($errors->has('body')) <p class="help-block">{{ $errors->first('body') }}</p> @endif
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
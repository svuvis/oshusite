<div class="col-lg-6">
    <div class="form-group required @if($errors->has('picture')) has-error @endif">
        {!! Form::label('picture','Foto',['class' => 'control-label']) !!}
        {!! Form::file('picture', ['class' => 'form-control', 'value' => Input::old('picture')]) !!}
        @if ($errors->has('picture')) <p class="help-block">{{ $errors->first('picture') }}</p> @endif
    </div>
    <div class="form-group required @if($errors->has('title')) has-error @endif">
        {!! Form::label('title','Text',['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control', 'value' => Input::old('title'),'placeholder' => 'Text']) !!}
        @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
    </div>
    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>
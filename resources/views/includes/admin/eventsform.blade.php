<div class="form-group required @if($errors->has('title')) has-error @endif">
    {!! Form::label('title','Titel',['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'value' => Input::old('title')]) !!}
    @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
</div>
<div class='col-md-6'>
    <div class="form-group required @if($errors->has('starttime')) has-error @endif">
        {!! Form::label('starttime','Begintijd',['class' => 'control-label']) !!}
        <div class='input-group date' id='datetimepicker1'>
            {!! Form::text('starttime', isset($event) ? $event->starttime->format('d-m-Y H:i') : null, ['class' => 'form-control', 'value' => Input::old('starttime')]) !!}
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
        @if ($errors->has('starttime')) <p class="help-block">{{ $errors->first('starttime') }}</p> @endif
    </div>
</div>
<div class='col-md-6'>
    <div class="form-group required @if($errors->has('endtime')) has-error @endif">
        {!! Form::label('endtime','Eindtijd',['class' => 'control-label']) !!}
        <div class='input-group date' id='datetimepicker2'>
            {!! Form::text('endtime', isset($event) ? $event->endtime->format('d-m-Y H:i') : null, ['class' => 'form-control', 'value' => Input::old('endtime')]) !!}
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
        @if ($errors->has('endtime')) <p class="help-block">{{ $errors->first('endtime') }}</p> @endif
    </div>
</div>
<div class="form-group required @if($errors->has('place')) has-error @endif">
    {!! Form::label('place','Locatie',['class' => 'control-label']) !!}
    {!! Form::text('place', null, ['class' => 'form-control', 'value' => Input::old('place')]) !!}
    @if ($errors->has('place')) <p class="help-block">{{ $errors->first('place') }}</p> @endif
</div>
<div class="form-group required @if($errors->has('body')) has-error @endif">
    {!! Form::label('body','Nieuwsbericht',['class' => 'control-label']) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'style' => 'height:20px', 'value' => Input::old('body')]) !!}
    @if ($errors->has('body')) <p class="help-block">{{ $errors->first('body') }}</p> @endif
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
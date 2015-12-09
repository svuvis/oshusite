<div class="form-group required @if($errors->has('date')) has-error @endif">
    {!! Form::label('date','Datum',['class' => 'control-label']) !!}
    <div class='input-group date' id='datetimepicker1'>
        {!! Form::text('date', isset($event) ? $event->date->format('d-m-Y') : null, ['class' => 'form-control', 'value' => Input::old('date')]) !!}
        <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
    @if ($errors->has('date')) <p class="help-block">{{ $errors->first('date') }}</p> @endif
</div>
<div class="form-group required @if($errors->has('notule')) has-error @endif">
    {!! Form::label('Notule') !!}
    {!! Form::file('notule', ['class' => 'form-control', 'value' => Input::old('notule')]) !!}
    @if ($errors->has('notule')) <p class="help-block">{{ $errors->first('notule') }}</p> @endif
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
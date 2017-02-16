<div class="col-lg-6">
    <div class="form-group required @if($errors->has('name')) has-error @endif">
        {!! Form::label('name','Naam',['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'value' => Input::old('name')]) !!}
        @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
    </div>
    <div class="form-group required @if($errors->has('function')) has-error @endif">
        {!! Form::label('function','Functie',['class' => 'control-label']) !!}
        {!! Form::text('function', null, ['class' => 'form-control', 'value' => Input::old('function')]) !!}
        @if ($errors->has('function')) <p class="help-block">{{ $errors->first('function') }}</p> @endif
    </div>

    <div class="form-group required @if($errors->has('description')) has-error @endif">
        {!! Form::label('description','Beschrijving',['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '8', 'value' => Input::old('description')]) !!}
        @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
    </div>
    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>
<div class="col-lg-6">
    <div class="col-lg-12 text-center">
        <div class="form-group required">
            {!! Form::label('picture','Foto',['class' => 'control-label']) !!}
            <div>
                {!! Form::hidden('picture', null, ['class' => 'form-control', 'value' => Input::old('description')]) !!}
                <img id="img-thumb" class="user size-lg img-thumbnail"
                     style="height: 175px;width: 175px;@if($errors->has('picture'))border-color: #a94442;@endif"
                     src="{{ isset($member) ? $member->picture : '/media/oshu55b6ea638cdc65.62184446.png' }}">
                @if ($errors->has('picture')) <p class="help-block"
                                                 style="color: #a94442;">{{ $errors->first('picture') }}</p> @endif
            </div>
        </div>
        <input type="file" id="fileupload" name="file" style="display:none">
        <a class="btn btn-default" onclick="$('input[id=fileupload]').click();">Upload</a>
    </div>
</div>
@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Wat doet de OSHU
@stop

@section('mcss')
    {!! HTML::style('/css/redactor.css') !!}
@stop

@section('mjs')
    {!! HTML::script('js/redactor2.js') !!}
    {!! HTML::script('js/table.js') !!}
    {!! HTML::script('js/video.js') !!}
    <script type="text/javascript">
        $(function () {
            $('#body').redactor({
                focus: true,
                imageUpload: '{{ url() }}/image/upload?_token=' + '{{ csrf_token() }}',
                plugins: ['table', 'video'],
                maxHeight: 300,
                minHeight: 300,
                imageUploadErrorCallback: function(json)
                {
                    $.each(json.error.file, function(file, item)
                    {
                        toastr.error(item);
                    });
                }
            });
        });
    </script>
@stop

@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Wat doet de OSHU Aanpassen</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                {!! Form::model($page, ['method' => 'PATCH', 'action' => ['PagesController@update', $page->id]]) !!}
                <div class="form-group required @if($errors->has('title')) has-error @endif">
                    {!! Form::label('title','Titel',['class' => 'control-label']) !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'value' => Input::old('title')]) !!}
                    @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
                </div>
                <div class="form-group required @if($errors->has('body')) has-error @endif">
                    {!! Form::label('body','Pagina',['class' => 'control-label']) !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control', 'style' => 'height:20px', 'value' => Input::old('body')]) !!}
                    @if ($errors->has('body')) <p class="help-block">{{ $errors->first('body') }}</p> @endif
                </div>
                <div class="form-group">
                    {!! Form::submit('Aanpassen', ['class' => 'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
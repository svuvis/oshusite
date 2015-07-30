@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Agenda
@stop

@section('mcss')
    {!! HTML::style('/css/redactor.css') !!}
    {!! HTML::style('/css/bootstrap-datetimepicker.min.css') !!}
@stop

@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Agenda evenement Toevoegen</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                {!! Form::open(['url' => 'admin/events']) !!}
                @include('includes.admin.eventsform',['submitButtonText' => 'Opslaan'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
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
                },
            });
        });
    </script>
    {!! HTML::script('js/moment.min.js') !!}
    {!! HTML::script('js/nl.js') !!}
    {!! HTML::script('js/bootstrap-datetimepicker.min.js') !!}
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({
                locale: 'nl',
                sideBySide: true,
                useCurrent: false
            }).on("dp.change", function (e) {
                $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
            });
            $('#datetimepicker2').datetimepicker({
                locale: 'nl',
                sideBySide: true,
                useCurrent: false
            }).on("dp.change", function (e) {
                $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
            });
        });
    </script>
@stop
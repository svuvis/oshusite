@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Voorbeelden
@stop

@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Voorbeeld Toevoegen</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {!! Form::open(['url' => 'admin/examples']) !!}
                @include('includes.admin.examplesform',['submitButtonText' => 'Opslaan'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('mjs')
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
@stop
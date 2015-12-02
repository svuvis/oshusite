@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Verenigingen
@endsection

@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Vereniging Aanpassen</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                {!! Form::model($association, ['method' => 'PATCH', 'action' => ['AssociationController@update', $association->id]]) !!}
                {!! Form::hidden('id', $association->id) !!}
                    @include('includes.admin.associationsform',['submitButtonText' => 'Aanpassen'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

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
                }
            });
        });
    </script>
    <script>
        jQuery(function($) {
            $('#slug').slugify('#title'); // Type as you slug
        });
    </script>
@endsection
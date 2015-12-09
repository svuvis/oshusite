@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Notulen
@stop

@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Notule Toevoegen</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                {!! Form::open(['url' => 'admin/notulen','files' => true]) !!}
                @include('includes.admin.notulenform',['submitButtonText' => 'Opslaan'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('mjs')
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({
                locale: 'nl',
                format: 'DD-MM-YYYY',
                useCurrent: false
            });
        });
    </script>
@stop
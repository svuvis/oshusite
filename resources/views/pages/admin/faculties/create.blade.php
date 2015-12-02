@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Faculteiten
@stop

@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Faculteit Toevoegen</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                {!! Form::open(['action' => 'FacultyController@store']) !!}
                @include('includes.admin.facultiesform',['submitButtonText' => 'Opslaan'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('mjs')
    <script>
        jQuery(function($) {
            $('#slug').slugify('#title'); // Type as you slug
        });
    </script>
@stop
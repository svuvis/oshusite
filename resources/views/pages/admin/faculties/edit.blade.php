@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Faculteiten
@endsection

@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Faculteit Aanpassen</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                {!! Form::model($faculty, ['method' => 'PATCH', 'action' => ['FacultyController@update', $faculty->id]]) !!}
                {!! Form::hidden('id', $faculty->id) !!}
                    @include('includes.admin.facultiesform',['submitButtonText' => 'Aanpassen'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('mjs')
    <script>
        jQuery(function($) {
            $('#slug').slugify('#title'); // Type as you slug
        });
    </script>
@endsection
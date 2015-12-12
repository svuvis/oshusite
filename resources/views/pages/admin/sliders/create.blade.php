@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Sliders
@stop

@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slider Toevoegen</h1>
            </div>
        </div>
        <div class="row">

            {!! Form::open(['url' => 'admin/sliders','files' => true]) !!}
            @include('includes.admin.slidersform',['submitButtonText' => 'Opslaan'])
            {!! Form::close() !!}

        </div>
    </div>
@stop
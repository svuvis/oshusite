@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Sliders
@stop


@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="margin-bottom: 0px">Sliders voorpagina
                    <a href="{{action('SlidersController@create')}}" class="btn btn-success btn-circle btn-lg">
                        <i class="fa fa-plus" style="line-height: 30px"></i>
                    </a>
                </h1>

            </div>
        </div>
        <div class="row">
            <div class="panel-body">
                <div class="panel-group" id="accordion">
                    @if(count($sliders) != 0)
                        @foreach($sliders as $slider)
                            <div class="panel panel-default" style="margin-top: 5px !important;">
                                <div class="panel-heading">
                                    <h4 class="panel-title" style="height: 34px;line-height: 34px">
                                        {!! $slider->title !!}
                                        {!! Form::model($slider, ['method' => 'DELETE', 'action' => ['SlidersController@destroy', $slider->id], 'style' => 'float: right']) !!}
                                        {!! Form::submit('Verwijderen', ['class' => 'btn btn-danger', 'style' => 'float: right']) !!}
                                        {!! Form::close() !!}
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>Er zijn op dit moment geen sliders</p><br /><br />
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop
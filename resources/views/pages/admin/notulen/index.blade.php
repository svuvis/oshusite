@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Notulen
@stop


@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="margin-bottom: 0px">Notulen
                    <a href="{{action('NotulenController@create')}}" class="btn btn-success btn-circle btn-lg">
                        <i class="fa fa-plus" style="line-height: 30px"></i>
                    </a>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="panel-body">
                <div class="panel-group" id="accordion">
                    @if(count($notulen) != 0)
                        @foreach($notulen as $notule)
                            <div class="panel panel-default" style="margin-top: 5px !important;">
                                <div class="panel-heading">
                                    <h4 class="panel-title" style="height: 34px;line-height: 34px">
                                        <a data-toggle="collapse" data-parent="#accordion"
                                           href="#collapse{{$notule->id}}"
                                           style="color: #428bca">{!! $notule->date !!}</a>
                                        {!! Form::model($notule, ['method' => 'DELETE', 'action' => ['NotulenController@destroy', $notule->id], 'style' => 'float: right']) !!}
                                        {!! Form::submit('Verwijderen', ['class' => 'btn btn-danger', 'style' => 'float: right']) !!}
                                        {!! Form::close() !!}
                                    </h4>
                                </div>
                                <div id="collapse{{$notule->id}}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        {!! $notule->url !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>Er zijn op dit moment geen notulen</p><br/><br/>
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop
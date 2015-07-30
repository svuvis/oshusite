@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Agenda
@stop


@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="margin-bottom: 0px">Agenda evenementen
                    <a href="{{action('EventsController@create')}}" class="btn btn-success btn-circle btn-lg">
                        <i class="fa fa-plus" style="line-height: 30px"></i>
                    </a>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="panel-body">
                <div class="panel-group" id="accordion">
                    @if(count($events) != 0)
                        @foreach($events as $event)
                            <div class="panel panel-default" style="margin-top: 5px !important;">
                                <div class="panel-heading">
                                    <h4 class="panel-title" style="height: 34px;line-height: 34px">
                                        <a data-toggle="collapse" data-parent="#accordion"
                                           href="#collapse{{$event->id}}"
                                           style="color: #428bca">{!! $event->title !!}</a>
                                        {!! Form::model($event, ['method' => 'DELETE', 'action' => ['EventsController@destroy', $event->id], 'style' => 'float: right']) !!}
                                        {!! Form::submit('Verwijderen', ['class' => 'btn btn-danger', 'style' => 'float: right']) !!}
                                        {!! Form::close() !!}
                                        <a href="{{action('EventsController@edit',$event->id)}}" class="btn btn-warning"
                                           style="float: right; margin-right: 15px;color: white">Aanpassen</a>
                                    </h4>
                                </div>
                                <div id="collapse{{$event->id}}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div style="font-size: 14px;margin-right: 50px;float: left" class="text-muted">
                                            <i class="glyphicon glyphicon-time"></i>
                                            @if($event->starttime->isSameDay($event->endtime))
                                                {{ $event->starttime->format('d/m/Y H:i') }} - {{ $event->endtime->format('H:i') }}
                                            @else
                                                {{ $event->starttime->format('d/m/Y H:i') }} - {{ $event->endtime->format('d/m/Y H:i') }}
                                            @endif
                                        </div>
                                        <div style="font-size: 14px" class="text-muted"><i
                                                    class="fa fa-map-marker"></i> {{ $event->place }}</div>
                                        <br/>
                                        {!! $event->body !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>Er zijn op dit moment geen agenda evenementen</p><br/><br/>
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop
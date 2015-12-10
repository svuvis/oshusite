@extends('layouts.public.master')

@section('title')
    OSHU - Agenda
@stop

@section('content')
    <div class="container">
        <div class="page-header">
            <h1 id="timeline">Agenda</h1>
        </div>
        @if(count($events) != 0)
            <ul class="timeline">
                @foreach($events as $key=>$event)
                <li @unless(($key+2) % 2 == 0) class="timeline-inverted"@endunless>
                    <div class="timeline-badge"><i class="fa fa-calendar"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">{{ $event->title }}</h4>
                            <div style="font-size: 14px" class="text-muted"><i class="glyphicon glyphicon-time"></i>&nbsp;
                                @if($event->starttime->isSameDay($event->endtime))
                                    {{ $event->starttime->format('d/m/Y H:i') }} - {{ $event->endtime->format('H:i') }}
                                @else
                                    {{ $event->starttime->format('d/m/Y H:i') }} - {{ $event->endtime->format('d/m/Y H:i') }}
                                @endif</div>
                            <div style="font-size: 14px" class="text-muted"><i class="fa fa-map-marker fa-lg"></i> &nbsp;&nbsp;{{ $event->place }}</div>
                        </div>
                        <div class="timeline-body">
                            {!! $event->body !!}
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        @else
            <p>Er zijn op dit moment geen agenda evenementen</p><br />
        @endif
    </div>
@stop
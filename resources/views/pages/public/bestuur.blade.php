@extends('layouts.public.master')

@section('title')
    OSHU - Bestuur
@stop

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 40px">
            @foreach($members as $member)
                <div class="col-md-6">
                    <section style="margin-top: 40px;margin-bottom: 0 !important;">
                        <div class="panel panel-default  animated fadeInDown animation-delay-10" style="margin-bottom: 0">
                            <div class="panel-body" style="height:500px">
                                <h3 class="section-title">{{ $member->name }}
                                    <small class="pull-right">{{ $member->function }}</small>
                                    <div class="clearfix"></div>
                                </h3>
                                <div class="clearfix"></div>
                                {!! HTML::image($member->picture,'voorzitter',array('class' => 'alignleft imageborder', 'style' => 'width:192px;height:232px')) !!}
                                <p class="no-margin-top">
                                    @foreach(array_slice(preg_split('/(?<=[.?!])\s+/', $member->description, -1, PREG_SPLIT_NO_EMPTY), 0, count(preg_split('/(?<=[.?!])\s+/', $member->description, -1, PREG_SPLIT_NO_EMPTY)) / 2) as $para)
                                        {{ $para }}
                                    @endforeach
                                </p>
                                <p>
                                    @foreach(array_slice(preg_split('/(?<=[.?!])\s+/', $member->description, -1, PREG_SPLIT_NO_EMPTY), count(preg_split('/(?<=[.?!])\s+/', $member->description, -1, PREG_SPLIT_NO_EMPTY)) / 2) as $para)
                                        {{ $para }}
                                    @endforeach
                                </p>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </section>
                </div>
            @endforeach
        </div>
    </div> <!-- container -->
@stop

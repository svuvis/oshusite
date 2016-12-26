@extends('layouts.public.master')

@section('title')
    OSHU - Bestuur
@stop

@section('content')
    <div class="container">
        <div class="row" style="margin-top: 20px">
            <div class="col-xs-12">
                <h1 class="hl text-center top-zero">Het Bestuur van 2016-2017</h1>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="team">
                    @if(count($members) != 0)
                        @foreach($members as $key=>$member)
                                <div class="@if(($key+2) % 2 == 0)member-left @else member-right @endif">
                                    <img src="{{$member->picture}}" class="@if(($key+2) % 2 == 0)left @else right @endif" alt="{{$member->name}}">
                                    <h4>{{$member->name}}</h4>

                                    <p class="position">{{$member->function}}</p>

                                    <p>
                                        {{$member->description}}
                                    </p>
                                </div>
                        @endforeach
                    @else
                        Er zijn op dit moment geen bestuurders
                    @endif
                    </div>
                </div>
            </div>
    </div> <!-- container -->
@stop

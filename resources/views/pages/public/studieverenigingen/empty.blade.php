@extends('layouts.public.master')

@section('title')
    OSHU - {{$association->title}}
@stop

@section('content')

    <section class="animated fadeIn">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">{{$association->title}}</h2>
                    {!! $association->body !!}
                </div>
                @include('includes.public.svmenu', ['collapse' => 'in'])
            </div>
        </div>
        <!-- container -->
    </section>
@stop

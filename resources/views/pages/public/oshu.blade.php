@extends('layouts.public.master')

@section('title')
    OSHU
@stop

@section('content')
    <section class="animated fadeIn">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">{{ $page->title }}</h2>
                    {!! $page->body !!}
                </div>
                @include('includes.public.svmenu')
            </div>
        </div> <!-- container -->
    </section>
@stop
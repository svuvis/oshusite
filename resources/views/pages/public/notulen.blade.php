@extends('layouts.public.master')

@section('title')
    OSHU - Notulen
@stop

@section('content')
    <section class="animated fadeIn">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">Notulen</h2>
                    @if(count($notulen) != 0)
                        @foreach($notulen as $notule)
                            <div class="well well-lg clearfix" style="line-height: 3em;font-size: 16px;font-weight: bold">{{$notule->date}}<a href="{{$notule->url}}" target="_blank" class="btn btn-lg btn-primary pull-right">Download</a></div>
                        @endforeach
                    @else
                        Er zijn op dit moment geen notulen
                    @endif
                </div>
                @include('includes.public.svmenu')
            </div>
        </div> <!-- container -->
    </section>
@stop
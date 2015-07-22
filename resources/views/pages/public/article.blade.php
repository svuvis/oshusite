@extends('layouts.public.master')

@section('title')
    OSHU - Artikel
@stop

@section('content')
    <div class="container" style="margin-top:30px;margin-bottom: 30px">
        <div class="row">
            <div class="col-md-8">
                <section>
                    @if($article)
                    <h2 class="post-title">{{ $article->title }}</h2>
                    <div style="padding-bottom: 15px"><i class="fa fa-clock-o"></i> {!! Carbon\Carbon::parse($article->created_at)->diffForHumans() !!}</div>
                    {!! $article->body !!}
                    @else
                        <h2 class="post-title">Dit artikel bestaat niet (meer)</h2>
                    @endif
                </section>
            </div>
            @include('includes.public.svmenu')
        </div>
    </div>
@stop
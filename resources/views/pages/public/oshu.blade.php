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
                <div class="col-md-4">
                    <h2 class="section-title">Voorbeelden</h2>
                    @if(count($examples) != 0)
                        <div class="panel-group" id="accordion">
                            @foreach($examples as $example)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$example->id}}" class="collapsed">
                                                {{$example->title}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{$example->id}}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="list-group" style="border:0; margin-bottom: 0;">
                                                {!! $example->body !!}
                                            </div>
                                            <!--list-group -->
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        Er zijn op dit moment geen voorbeelden
                    @endif
                </div>
            </div>
        </div> <!-- container -->
    </section>
@stop
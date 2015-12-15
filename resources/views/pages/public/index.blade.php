@extends('layouts.public.master')

@section('title')
    OSHU - Home
@stop

@section('content')
    <section>
        <div id="oshusitehomeslider" class="carousel carousel-mind slide" data-ride="carousel" data-interval="5000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($sliders as $key=>$slider)
                    @if($key == 0)
                        <li data-target="#oshusitehomeslider" data-slide-to="0" class="active"></li>
                    @else
                        <li data-target="#oshusitehomeslider" data-slide-to="{{$key}}"></li>
                    @endif
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($sliders as $key=>$slider)
                    @if($key == 0)
                        <div class="item active">
                    @else
                        <div class="item ">
                    @endif

                        <div class="container">
                            <div class="row" style="height:430px;">
                                <div class="col-xs-12 carousel-img-wrap">
                                    {!! HTML::image($slider->picture,'Image',array('class' => '"img-responsive animated bounceInUp', 'style' => 'display:block;margin-left: auto; margin-right: auto; margin-top: 10px; margin-bottom: 10px')) !!}
                                    <p class="animated fadeInDownBig slidertx">{{$slider->title}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#oshusitehomeslider" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#oshusitehomeslider" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
            </div>
            </div>
    </section> <!-- carousel -->

    <section class="animated fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">Laatste Nieuws</h2>
                    @if(count($news) != 0)
                        @foreach($news as $new)
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">{{ $new->title }}</h3>
                                </div>
                                <div class="panel-body">
                                    <div style="padding-bottom: 10px"><i
                                                class="fa fa-clock-o"></i> {!! Carbon\Carbon::parse($new->created_at)->diffForHumans() !!}
                                    </div>
                                    {!! $new->body !!}
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>Er zijn op dit moment geen nieuws artikelen</p><br/><br/>
                    @endif
                </div>
                @include('includes.public.svmenu')
            </div>
        </div> <!-- container -->
    </section>
@stop
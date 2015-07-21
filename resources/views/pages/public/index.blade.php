@extends('layouts.public.master')

@section('title')
    OSHU - Nieuws
@stop

@section('nieuwsactive')
    active
@stop

@section('content')
<section>
    <div id="oshusitehomeslider" class="carousel carousel-mind slide" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#oshusitehomeslider" data-slide-to="0" class="active"></li>
            <li data-target="#oshusitehomeslider" data-slide-to="1"></li>
            <li data-target="#oshusitehomeslider" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row" style="height: 400px">
                        <div class="col-xs-12 carousel-img-wrap">
                            {!! HTML::image('img/Custom/logo.png','Image',array('class' => '"img-responsive animated bounceInUp', 'style' => 'display: block; width: 337px; margin-left: auto; margin-right: auto; margin-top: 10px;')) !!}
                            <p class="animated fadeInDownBig slidertx">Stichting OSHU</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="row" style="height: 400px">
                        <div class="col-xs-12 carousel-img-wrap">
                            {!! HTML::image('img/Custom/slide2.png','Image',array('class' => 'img-responsive animated bounceInUp', 'style' => 'width: 452px; margin-left: auto; margin-right: auto; margin-top: 10px; margin-bottom: 10px')) !!}
                            <p class="animated fadeInDownBig slidertx" >Besturendag 2014</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="row" style="height: 400px">
                        <div class="col-xs-12 carousel-img-wrap">
                            {!! HTML::image('img/Custom/slide3.png','Image',array('class' => 'img-responsive animated bounceInUp', 'style' => 'width:452px; margin-left: auto; margin-right: auto; margin-top: 10px; margin-bottom: 10px')) !!}
                            <p class="animated fadeInDownBig slidertx" >Trainig Conflicthantering</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#oshusitehomeslider" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#oshusitehomeslider" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</section> <!-- carousel -->

<section class="animated fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="section-title">Nieuws</h2>
                @foreach($news as $new)
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $new->title }}</h3>
                    </div>
                    <div class="panel-body">
                        {!! $new->body !!}
                    </div>
                </div>
                @endforeach
            </div>
            @include('includes.public.svmenu')
        </div>
    </div> <!-- container -->
</section>
@stop
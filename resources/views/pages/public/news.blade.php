@extends('layouts.public.master')

@section('title')
    OSHU - Nieuws
@stop

@section('content')
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section-title">Nieuws</h2>
                @if(count($news) != 0)
                @foreach($news as $new)
                    <article class="post animated fadeInDown">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3 class="post-title"><a href="{{action('PublicController@article', [$new->slug])}}" class="transicion">{{ $new->title }}</a></h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        {!! Str::words(strip_tags($new->body), 50, '...') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <i class="fa fa-clock-o"></i> {!! Carbon\Carbon::parse($new->created_at)->diffForHumans() !!}
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                        <a href="{{action('PublicController@article', [$new->slug])}}" class="pull-right">Lees meer <i class="fa fa-forward"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
                <section>
                    <ul class="pagination">
                        <li @if($page == 1)class="disabled"@endif><a @if($page != 1)href="{{action('PublicController@news', [$page - 1])}}"@endif><i class="fa fa-caret-left fa-lg"></i></a></li>
                        @for($i = 1; $i <= $pages; $i++ )
                            <li @if($i == $page)class="active"@endif><a href="{{action('PublicController@news', [$i])}}">{{ $i }}</a></li>
                        @endfor
                        <li @if($page == $pages)class="disabled"@endif><a @if($page != $pages)href="{{action('PublicController@news', [$page + 1])}}"@endif><i class="fa fa-caret-right fa-lg"></i></a></li>

                    </ul>
                </section>
                @else
                    <p>Er zijn op dit moment geen nieuws artikelen</p><br /><br />
                @endif
            </div> <!-- col-md-8 -->
        </div> <!-- row -->
    </div>
@stop
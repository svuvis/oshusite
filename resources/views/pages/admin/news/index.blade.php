@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Nieuwsberichten
@stop


@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="margin-bottom: 0px">Nieuwsberichten
                    <a href="{{action('NewsController@create')}}" class="btn btn-success btn-circle btn-lg">
                        <i class="fa fa-plus" style="line-height: 30px"></i>
                    </a>
                </h1>

            </div>
        </div>
        <div class="row">
            <div class="panel-body">
                <div class="panel-group" id="accordion">
                @if(count($news) != 0)
                    @foreach($news as $new)
                        <div class="panel panel-default" style="margin-top: 5px !important;">
                            <div class="panel-heading">
                                <h4 class="panel-title" style="height: 34px;line-height: 34px">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$new->id}}" style="color: #428bca">{!! $new->title !!}</a>
                                    {!! Form::model($news, ['method' => 'DELETE', 'action' => ['NewsController@destroy', $new->id], 'style' => 'float: right']) !!}
                                        {!! Form::submit('Verwijderen', ['class' => 'btn btn-danger', 'style' => 'float: right']) !!}
                                    {!! Form::close() !!}
                                    <a href="{{action('NewsController@edit',$new->id)}}" class="btn btn-warning" style="float: right; margin-right: 15px;color: white">Aanpassen</a>
                                </h4>
                            </div>
                            <div id="collapse{{$new->id}}" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {!! $new->body !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>Er zijn op dit moment geen nieuws artikelen</p><br /><br />
                @endif
                </div>
            </div>
        </div>
    </div>
@stop
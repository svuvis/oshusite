@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Voorbeelden
@stop


@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="margin-bottom: 0px">Voorbeelden
                    <a href="{{action('ExamplesController@create')}}" class="btn btn-success btn-circle btn-lg">
                        <i class="fa fa-plus" style="line-height: 30px"></i>
                    </a>
                </h1>

            </div>
        </div>
        <div class="row">
            <div class="panel-body">
                <div class="panel-group" id="accordion">
                @if(count($examples) != 0)
                    @foreach($examples as $example)
                        <div class="panel panel-default" style="margin-top: 5px !important;">
                            <div class="panel-heading">
                                <h4 class="panel-title" style="height: 34px;line-height: 34px">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$example->id}}" style="color: #428bca">{!! $example->title !!}</a>
                                    {!! Form::model($examples, ['method' => 'DELETE', 'action' => ['ExamplesController@destroy', $example->id], 'style' => 'float: right']) !!}
                                        {!! Form::submit('Verwijderen', ['class' => 'btn btn-danger', 'style' => 'float: right']) !!}
                                    {!! Form::close() !!}
                                    <a href="{{action('ExamplesController@edit',$example->id)}}" class="btn btn-warning" style="float: right; margin-right: 15px;color: white">Aanpassen</a>
                                </h4>
                            </div>
                            <div id="collapse{{$example->id}}" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {!! $example->body !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>Er zijn op dit moment geen nieuws voorbeelden</p><br /><br />
                @endif
                </div>
            </div>
        </div>
    </div>
@stop
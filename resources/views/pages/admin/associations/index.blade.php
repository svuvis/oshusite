@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Verenigingen
@stop


@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="margin-bottom: 0px">Verenigingen
                    @if(count($faculties) != 0)
                    <a href="{{action('AssociationController@create')}}" class="btn btn-success btn-circle btn-lg">
                        <i class="fa fa-plus" style="line-height: 30px"></i>
                    </a>
                    @endif
                </h1>

            </div>
        </div>
        <div class="row">
            <div class="panel-body">
                <div class="panel-group" id="accordion">
                    @if(count($faculties) != 0)
                        @if(count($associations) != 0)
                            @foreach($associations as $association)
                                <div class="panel panel-default" style="margin-top: 5px !important;">
                                    <div class="panel-heading">
                                        <h4 class="panel-title" style="height: 34px;line-height: 34px">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$association->id}}" style="color: #428bca">{!! $association->title !!} - {!! $association->faculty->title !!}</a>
                                            {!! Form::model($association, ['method' => 'DELETE', 'action' => ['AssociationController@destroy', $association->id], 'style' => 'float: right']) !!}
                                                {!! Form::submit('Verwijderen', ['class' => 'btn btn-danger', 'style' => 'float: right']) !!}
                                            {!! Form::close() !!}
                                            <a href="{{action('AssociationController@edit',$association->id)}}" class="btn btn-warning" style="float: right; margin-right: 15px;color: white">Aanpassen</a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{$association->id}}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            {!! $association->body !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Er zijn op dit moment geen verenigingen</p><br /><br />
                        @endif
                    @else
                        <p>Voeg eerst een faculteit toe</p><br /><br />
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop
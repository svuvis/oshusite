@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Faculteiten
@stop


@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="margin-bottom: 0px">Faculteiten
                    <a href="{{action('FacultyController@create')}}" class="btn btn-success btn-circle btn-lg">
                        <i class="fa fa-plus" style="line-height: 30px"></i>
                    </a>
                </h1>

            </div>
        </div>
        <div class="row">
            <div class="panel-body">
                <div class="panel-group" id="accordion">
                @if(count($faculties) != 0)
                    @foreach($faculties as $faculty)
                        <div class="panel panel-default" style="margin-top: 5px !important;">
                            <div class="panel-heading">
                                <h4 class="panel-title" style="height: 34px;line-height: 34px">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faculty->id}}" style="color: #428bca">{!! $faculty->title !!}</a>
                                    {!! Form::model($faculty, ['method' => 'DELETE', 'action' => ['FacultyController@destroy', $faculty->id], 'style' => 'float: right']) !!}
                                        {!! Form::submit('Verwijderen', ['class' => 'btn btn-danger', 'style' => 'float: right']) !!}
                                    {!! Form::close() !!}
                                    <a href="{{action('FacultyController@edit',$faculty->id)}}" class="btn btn-warning" style="float: right; margin-right: 15px;color: white">Aanpassen</a>
                                </h4>
                            </div>
                            <div id="collapse{{$faculty->id}}" class="panel-collapse collapse">
                                <div class="panel-body">
                                    @if(count($faculty->associations) != 0)
                                        <ul>
                                        @foreach($faculty->associations as $association)
                                            <li>{{$association->title}}</li>
                                        @endforeach
                                        </ul>
                                    @else
                                        Deze faculteit heeft op dit moment geen verenigingen
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>Er zijn op dit moment geen faculteiten</p><br /><br />
                @endif
                </div>
            </div>
        </div>
    </div>
@stop
@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Bestuursleden
@stop


@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="margin-bottom: 0px">Bestuursleden
                    <a href="{{action('BoardMembersController@create')}}" class="btn btn-success btn-circle btn-lg">
                        <i class="fa fa-plus" style="line-height: 30px"></i>
                    </a>
                </h1>

            </div>
        </div>
        <div class="row">
            <div class="panel-body">
                <div class="panel-group" id="accordion">
                    @if(count($members) != 0)
                        @foreach($members as $member)
                            <div class="panel panel-default" style="margin-top: 5px !important;">
                                <div class="panel-heading">
                                    <h4 class="panel-title" style="height: 34px;line-height: 34px">
                                        {!! $member->name !!}
                                        {!! Form::model($member, ['method' => 'DELETE', 'action' => ['BoardMembersController@destroy', $member->id], 'style' => 'float: right']) !!}
                                        {!! Form::submit('Verwijderen', ['class' => 'btn btn-danger', 'style' => 'float: right']) !!}
                                        {!! Form::close() !!}
                                        <a href="{{action('BoardMembersController@edit',$member->id)}}" class="btn btn-warning" style="float: right; margin-right: 15px;color: white">Aanpassen</a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>Er zijn op dit moment geen bestuursleden</p><br /><br />
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop
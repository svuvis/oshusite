@extends('layouts.admin.master')

@section('css')
    {!! HTML::style('/css/timeline.css') !!}
    {!! HTML::style('/css/morris.css') !!}
    @yield('mcss')
@stop

@section('title')
    @yield('mtitle')
@stop

@section('content')
    <div id="wrapper">
        @include('includes.admin.menu')
        <div id="page-wrapper">
            @yield('mcontent')
        </div>
    </div>
@stop

@section('js')
    <script>
        $(document).ready(function(){
            $("[rel=tooltip]").tooltip({ placement: 'right'});
        });
    </script>
    @yield('mjs')
@stop
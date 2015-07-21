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
    <!-- Morris Charts JavaScript -->
{{--    {!! HTML::script('js/raphael-min.js') !!}--}}
{{--    {!! HTML::script('js/morris.min.js') !!}
    {!! HTML::script('js/morris-data.js') !!}--}}
    @yield('mjs')
@stop
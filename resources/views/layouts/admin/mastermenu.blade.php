@extends('layouts.admin.master')

@section('css')
    {!! HTML::style('/css/timeline.css') !!}
    {!! HTML::style('/css/morris.css') !!}
    {!! HTML::style('/css/toastr.min.css') !!}
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
    {!! HTML::script('js/toastr.min.js') !!}
    @if(Session::has('flash_notification.message'))
        <script>
            @if(Session::get('flash_notification.level') == 'danger')
                toastr.error('{{ Session::get('flash_notification.message') }}')
            @else
                toastr.{{ Session::get('flash_notification.level') }}('{{ Session::get('flash_notification.message') }}')
            @endif
        </script>
    @endif
    <script>
        $(document).ready(function(){
            $("[rel=tooltip]").tooltip({ placement: 'right'});
        });
    </script>
    @yield('mjs')
@stop
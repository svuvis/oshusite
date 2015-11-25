@extends('layouts.admin.master')

@section('title')
    @yield('mtitle')
@stop

@section('content')
    <div id="wrapper">
        @include('includes.admin.menu')
        <div id="page-wrapper" style="min-height: 920px;">
            @yield('mcontent')
        </div>
    </div>
@stop

@section('js')
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
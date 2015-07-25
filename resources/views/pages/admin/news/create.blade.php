@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Nieuwsberichten
@stop

@section('mcss')
    {!! HTML::style('/css/redactor.css') !!}
@stop

@section('mjs')
    {!! HTML::script('js/redactor2.js') !!}
    {!! HTML::script('js/table.js') !!}
    {!! HTML::script('js/video.js') !!}
    <script type="text/javascript">
        $(function () {
            $('#body').redactor({
                focus: true,
                imageUpload: '{{ url() }}/image/upload?_token=' + '{{ csrf_token() }}',
                plugins: ['table', 'video'],
                maxHeight: 300,
                minHeight: 300,
            });
        });
    </script>
    {!! HTML::script('js/speakingurl.min.js') !!}
    {!! HTML::script('js/slugify.min.js') !!}
    <script>
        jQuery(function($) {
            $.slugify("Ätschi Bätschi"); // "aetschi-baetschi"
            $('#slug').slugify('#title'); // Type as you slug
        });
    </script>
@stop


@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nieuwsbericht Toevoegen</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                {!! Form::open(['url' => 'admin/news']) !!}
                @include('includes.admin.newsform',['submitButtonText' => 'Opslaan'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
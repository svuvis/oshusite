@extends('layouts.public.master')

@section('title')
    OSHU - Mad
@stop

@section('content')
    <section class="animated fadeIn">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">SV Mad</h2>

                    <p class="p-lg"><a href="http://svmad.nl/">http://svmad.nl/</a></p>
                </div>
                @include('includes.public.svmenu', ['collapseFCJ' => 'in'])
            </div>
        </div>
        <!-- container -->
    </section>
@stop

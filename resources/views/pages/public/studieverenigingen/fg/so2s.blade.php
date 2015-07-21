@extends('layouts.public.master')

@section('title')
    OSHU - SO2S
@stop

@section('content')
    <section class="animated fadeIn">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">SV SO2S</h2>

                    <p class="p-lg"><a href="http://so2s.nl/">http://so2s.nl/</a></p>

                    <p class="p-lg">De SO2S, Society of Optometry and Orthoptic Students, is de studievereniging voor de
                        studenten van de opleidingen Optometrie en Orthoptie. Wij zorgen er voor dat je studentenleven
                        leuker en makkelijker wordt! Dit doen we door studiemateriaal met korting aan te bieden, en
                        natuurlijk organiseren wij regelmatig feestjes, borrels en andere leuke activiteiten. En wat je
                        zeker moet onthouden: het INTROKAMP! 4 superleuke dagen waarin je je nieuwe medestudenten al
                        kunt leren kennen voordat je naast elkaar in de collegebanken zit.</p>
                </div>
                @include('includes.public.svmenu', ['collapseFG' => 'in'])
            </div>
        </div>
        <!-- container -->
    </section>
@stop

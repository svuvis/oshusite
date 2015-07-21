@extends('layouts.public.master')

@section('title')
    OSHU - Haerem
@stop

@section('content')
    <section class="animated fadeIn">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">SV Haerem</h2>
                    <p class="p-lg"><a href="http://svhaerem.nl/">http://svhaerem.nl/</a></p>
                    <p class="p-lg">Studievereniging Haerem is een jonge studieverenging die in Februari 2014 is opgericht. De naam is een verlening van de opleiding HRM (Human Resource Management) en heeft een knipoog naar de man/vrouw ratio binnen de opleiding. De vereniging is dan ook bedoeld voor elke student zowel haar als hem.</p>
                    <p class="p-lg">De vereniging staat voor het versterken van de binding van de HRM-studenten met elkaar, de opleiding, alumni en het beroep. Haerem heeft dan ook als doel een ontmoetingsplatform te zijn voor studenten van HRM van de HU, verbreden van het professionele netwerk van de student en een meerwaarde te zijn bij de studie HRM. Haerem isde link tussen de studenten, de studie en de praktijk.  Studenten kunnen bij ons terecht met vragen over hun studie en andere zaken. Door middel van studiegebonden activiteiten in de vorm van workshops en masterclasses probeert studievereniging Haerem haar leden in contact te brengen met het werkveld en de praktijk. Natuurlijk zorgt Haerem ook voor ontspanning door middel van niet-studiegebonden activiteiten zoals onder andere borrels, feesten en andere activiteiten.</p>
                    <p class="p-lg">De vereniging bestaat momenteel uit drie bestuursleden, vier commissies en vijfentachtig leden. Het bestuur bestaat uit een Voorzitter, Secretaris en Penningmeester en wordt aangevuld met een educatiecommissie, feestcommissie, introductiecommissie en activiteitencommissie.</p>
                    <p class="p-lg">Haerem is gevestigd in de Faculteit Maatschappij en Recht van Hogeschool Utrecht. Binnen het gebouw is er een kamer beschikbaar gesteld waarin het bestuur en de commissies hun werk kunnen doen.  Ook kunnen leden hier terecht voor vragen en inschrijvingen voor activiteiten of de vereniging. Veel activiteiten en vergaderingen vinden plaats binnen de muren van de faculteit. De borrels van Haerem vinden plaats in café Cobus, gelegen in de stad Utrecht.</p>
                    <p class="p-lg">Voor meer informatie of vragen kun je ons vinden op <a href="http://www.facebook.com/svhaerem">facebook.com/svhaerem.</a></p>
                </div>
                @include('includes.public.svmenu', ['collapseFMR' => 'in'])
            </div>
        </div> <!-- container -->
    </section>
@stop

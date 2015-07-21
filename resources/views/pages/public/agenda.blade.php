@extends('layouts.public.master')

@section('title')
    OSHU - Agenda
@stop

@section('agendaactive')
    active
@stop

@section('content')
    <div class="container">
        <section style="margin-top: 40px">
            <h3 class="timeline-title"><span>2015</span></h3>

            <div class="row timeline">
                <div class="col-sm-6 timeline-left">
                    {{--@include('includes.agendaleft', ['delay' => '7', 'heading' => 'OSHU Koepeloverleg 6 - 18 Februari', 'tijd' => 'Woensdag 18 Februari 2015, 07:00pm - 09:00pm', 'locatie' => 'Locatie : F.C.'])
                    @include('includes.agendaleft', ['delay' => '11', 'heading' => 'OSHU Koepeloverleg 8 - 22 April', 'tijd' => 'Woensdag 22 April 2015, 07:00pm - 09:00pm', 'locatie' => 'Locatie : FNT Nijenoord'])
                    @include('includes.agendaleft', ['delay' => '7', 'heading' => 'OSHU Eindejaars bbq - 4 Juli', 'tijd' => 'Zaterdag 4 Juli 2015, 04:00pm - 08:00pm', 'locatie' => 'Locatie : Oudenoord 330, Utrecht, The Netherlands'])--}}
                </div>
                <div class="col-sm-6 timeline-right">
                    {{--@include('includes.agendaright', ['delay' => '9', 'heading' => 'OSHU Koepeloverleg 7: Workshop Bestuursaansprakelijkheid', 'tijd' => 'Woensdag 18 Maart 2015, 07:00pm - 09:00pm', 'locatie' => 'Locatie : FNT'])
                    @include('includes.agendaright', ['delay' => '13', 'heading' => 'OSHU Koepeloverleg 9 - 22 Mei', 'tijd' => 'Woensdag 22 Mei 2015, 07:00pm - 09:00pm', 'locatie' => 'Locatie : F.C. Dondersstraat 65, Utrecht, The Netherlands'])--}}
                </div>
            </div>
        </section>
    </div> <!-- container -->
@stop
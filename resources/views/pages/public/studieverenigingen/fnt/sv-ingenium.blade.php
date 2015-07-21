@extends('layouts.public.master')

@section('title')
    OSHU - SV Ingenium
@stop

@section('content')
    <section class="animated fadeIn">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">SV Ingenium</h2>

                    <p class="p-lg"><a href="http://www.svingenium.nl/">http://www.svingenium.nl/</a></p>

                    <p class="p-lg">Sv. Ingenium is de studievereniging voor alle studenten op het Instituut Engineering
                        &amp; Design (IED) van de Hogeschool Utrecht (Werktuigbouwkunde, Elektrotechniek en Technische
                        Bedrijfskunde). Ons doel is om alle studenten een nog leukere en leerzamere tijd op de
                        hogeschool te bieden. Als vereniging organiseren we veel studie gerelateerde activiteiten, zoals
                        studiereizen, bedrijfsbezoeken en workshops. Zo zie je ook eens hoe het er in de bedrijven zelf
                        aan toe gaat. Naast de studie gerelateerde activiteiten organiseren we ook regelmatig een
                        borrel, BBQ of netwerkdag. Voor meer informatie kan je kijken op <a
                                href="http://www.svingenium.nl/">http://www.svingenium.nl/.</a></p>
                </div>
                @include('includes.public.svmenu', ['collapseFNT' => 'in'])
            </div>
        </div>
        <!-- container -->
    </section>
@stop

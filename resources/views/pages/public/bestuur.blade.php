@extends('layouts.public.master')

@section('title')
    OSHU - Bestuur
@stop

@section('bestuuractive')
    active
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <section style="margin-top:40px">
                    <div class="panel panel-default  animated fadeInDown animation-delay-8">
                        <div class="panel-body">
                            <h3 class="section-title">Mireille Barkmeijer <small class="pull-right">Voorzitter</small><div class="clearfix"></div></h3>
                            <div class="clearfix"></div>
                            {!! HTML::image('/img/Custom/voorzitter.jpg','voorzitter',array('class' => 'alignleft imageborder')) !!}
                            <p class="no-margin-top">
                                Hoi, mijn naam is Mireille Barkmeijer, ik ben 23 jaar en ik studeer HBO-Rechten aan de Hogeschool Utrecht. De afgelopen jaren ben ik actief geweest bij studievereniging Codex, de studievereniging voor HBO-rechten en SJD studenten. Hier heb ik achtereenvolgens de functies van secretaris, vice-voorzitter en voorzitter mogen vervullen.
                            </p>
                            <p>
                                Ik heb het enorm naar mijn zin gehad bij Codex. Daarnaast heb ik ook ontzettend veel geleerd. Deze kennis wil ik dit jaar graag inzetten bij de OSHU zodat wij het komende studiejaar verschillende besturen kunnen ondersteunen en begeleiden bij HU-brede zaken, maar ook de wat meer simpele vragen die binnen verenigingen spelen.
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section style="margin-top:40px">
                    <div class="panel panel-default  animated fadeInDown animation-delay-11">
                        <div class="panel-body">
                            <h3 class="section-title">Alessio Sprockel <small class="pull-right">Penningmeester</small><div class="clearfix"></div></h3>
                            <div class="clearfix"></div>
                            {!! HTML::image('/img/Custom/penningmeester.jpg','penningmeester',array('class' => 'alignleft imageborder')) !!}
                            <p class="no-margin-top">
                                Hallo, mijn naam is Alessio Sprockel. Ik ben 22 jaar en studeer Chemie aan de Hogeschool Utrecht. Ik ben twee jaar geleden bij V.V.S. Uranymus actief geweest als vice-voorzitter en heb het daar zo naar mijn zin gehad dat ik mij graag actief wou blijven inzetten voor de studenten en hun studieverenigingen.
                            </p>
                            <p>
                                Afgelopen jaar heb ik datgedaan vanuit mijn functie als secretaris-extern bij de OSHU. Dit jaar wil ik dat doen vanuit de functie van penningmeester. Ik denk dat met de aankomende veranderingen de OSHU een cruciale rol moet gaan vervullen in het ondersteunen van alle verenigingen aan de Hogeschool Utrecht.
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section>
                    <div class="panel panel-default  animated fadeInDown animation-delay-14">
                        <div class="panel-body">
                            <h3 class="section-title">Joëlle Lufueni <small class="pull-right">Secretaris-intern</small><div class="clearfix"></div></h3>
                            <div class="clearfix"></div>
                            {!! HTML::image('/img/Custom/secretaris-intern.jpg','secretaris-intern',array('class' => 'alignleft imageborder')) !!}
                            <p class="no-margin-top">
                                Mijn naam is Joëlle Lufueni. Ik ben 24 jaar en studeer Logopedie. De afgelopen drie jaar ben ik actief geweest bij de Studievereniging Paramedus, met name in de Galacommissie. Daarnaast heb ik ook in de vereniging mijn steentje bijgedragen, met het gevolg dat ik met verschillende verenigingen in aanraking ben gekomen.
                            </p>
                            <p>
                                Het heeft me altijd een uitdaging geleken om iets voor de verenigingen te kunnen betekenen en hun belangen te behartigen. Afgelopen jaar vervulde ik ook al de functie van de secretaris-intern en ik hoop dit jaar mijn takenpakket te kunnen verbreden en iets moois achter te kunnen laten voor mijn opvolgers en zo studieverenigingen nog beter te kunnen ondersteunen en begeleiden.
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section>
                    <div class="panel panel-default  animated fadeInDown animation-delay-17">
                        <div class="panel-body">
                            <h3 class="section-title">Maarten Penard <small class="pull-right">Secretaris-extern</small><div class="clearfix"></div></h3>
                            <div class="clearfix"></div>
                            {!! HTML::image('/img/Custom/secretaris-extern.jpg','secretaris-extern',array('class' => 'alignleft imageborder')) !!}
                            <p class="no-margin-top">
                                Mijn naam is Maarten Penard, 21 jaar en studeer Ruimtelijke Ordening en Planologie aan de Faculteit Natuur en Techniek aan de Hogeschool Utrecht. Ik ben afgelopen jaar actief geweest binnen het bestuur der Utrechtse Technische Verenging(hierna: U.T.V.) hier heb ik de functie van Algemeen Bestuurslid mogen bekleden.
                            </p>
                            <p>
                                In dit jaar (en voorgaande jaren bij de U.T.V.) heb ik zo veel kennis en ervaringen opgedaan dat ik mij graag in wil blijven zetten voor de studenten en verenigingen. Met het oogpunt op de verhuizing denk ik dat de OSHU aankomend jaar/jaren een cruciale rol zal gaan vervullen, in het ondersteunen van de verenigingen en hier wil ik mij dit jaar inzetten.
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div> <!-- container -->
@stop
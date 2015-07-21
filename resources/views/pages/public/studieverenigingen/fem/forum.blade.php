@extends('layouts.public.master')

@section('title')
    OSHU - Forum
@stop

@section('content')
    <section class="animated fadeIn">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">Sv Forum</h2>

                    <p class="p-lg"><a href="http://www.svforum.nl/">http://www.svforum.nl/</a></p>

                    <p class="p-lg">S.v. Forum is dé studievereniging van de Faculteit Economie & Management (FEM).</p>

                    <p>
                    </p>

                    <p class="p-lg">We faciliteren een optimale combinatie tussen gezelligheid en studiesucces.
                        Dit doen we door middel van het organiseren van (netwerk)borrels, (thema)feesten, karaoke
                        avonden, en vele andere activiteiten. Daarnaast gaan we ook elk jaar met een leuke groep op
                        wintersport en organiseren we het inmiddels befaamde introductiekamp voor eerstejaars
                        studenten.</p>

                    <p>
                    </p>

                    <p class="p-lg">Ook leggen wij de focus op vele verschillende studie-activiteiten, waaronder
                        bedrijfsbezoeken, workshops, lezingen, en grote evenementen als symposia, Utrecht College Tour
                        sessies, en het jaarlijks terugkerende junior marketing congres.
                        Om ervoor te zorgen dat onze leden het maximale uit hun studie op de FEM kunnen halen helpen we
                        ze natuurlijk ook met al hun vragen, klachten, en problemen, zodat ze zich compleet op hun
                        studie kunnen focussen.</p>

                    <p>
                    </p>

                    <p class="p-lg">Een lidmaatschap bij S.v. Forum is vrijblijvend, en geheel gratis omdat we door een
                        goed financieel beleid en een nauwe samenwerking met sponsoren alle activiteiten kunnen
                        bekostigen. Hierdoor kunnen onze leden gratis gebruik maken van alle extra’s die S.v. Forum
                        biedt.</p>

                    <p>
                    </p>

                    <p class="p-lg">Naast een gewoon lidmaatschap kan je ook lid zijn van een van onze disputen. Dit
                        zijn verticale dames- en herengenootschappen, hechte vriendengroepen die samen veel leuke dingen
                        doen. Lees hierover meer op onze website.</p>

                    <p>
                    </p></div>
                @include('includes.public.svmenu', ['collapseFEM' => 'in'])
            </div>
        </div>
        <!-- container -->
    </section>
@stop

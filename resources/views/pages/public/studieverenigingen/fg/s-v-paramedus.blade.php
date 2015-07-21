@extends('layouts.public.master')

@section('title')
    OSHU - Paramedus
@stop

@section('content')
    <section class="animated fadeIn">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">S.V. Paramedus</h2>

                    <p class="p-lg"><a href="http://www.sv-paramedus.nl/">http://www.sv-paramedus.nl/</a></p>

                    <p class="p-lg">Paramedus is de studievereniging van de Faculteit Gezondheidszorg. Meer dan 1000
                        studenten zijn lid van Paramedus.</p>

                    <p class="p-lg">Paramedus organiseert educatieve activiteiten die specifiek op de opleidingen zijn
                        gericht zoals een bezoek aan de snijzaal zodat je live kunt zien wat je anders uit de boeken
                        moet leren, een tapecursus en een workshop efficiënt studeren. Daarnaast organiseert Paramedus
                        feesten en huis-/parkfeesten, een wekelijkse borrel in het eFGe café, 1 keer per jaar een gala,
                        een zeilweekend, een liftwedstrijd, een wintersportvakantie, etc.. Sinds dit jaar bieden we ook
                        stage plekken aan in Afrika.</p>

                    <p class="p-lg">Voor €20,- per jaar ben je lid. Lees meer of schrijf je in via <a
                                href="http://www.sv-paramedus.nl/">de website van sv Paramedus</a></p>
                </div>
                @include('includes.public.svmenu', ['collapseFG' => 'in'])
            </div>
        </div>
        <!-- container -->
    </section>
@stop

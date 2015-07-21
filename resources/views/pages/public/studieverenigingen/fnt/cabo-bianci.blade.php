@extends('layouts.public.master')

@section('title')
    OSHU - Cabo Bianci
@stop

@section('content')
    <section class="animated fadeIn">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">Cabo Bianci</h2>

                    <p class="p-lg"><a href="http://www.cabobianci.nl/">http://www.cabobianci.nl/</a></p>

                    <p class="p-lg">De studentenvereniging Cabo Bianci (letterlijk: paarden wit) is opgericht op 18
                        november 1982 als studentenvereniging van de HTS in Hilversum. Na een fusie binnen de
                        HBO-opleidingen is de Hogeschool Utrecht ontstaan en is de locatie in Hilversum naar Utrecht
                        verhuisd. Initieel zat de vereniging zonder ontmoetingsruimte maar na jaren actief te zijn
                        geweest op de Hogeschool werd "Het Witte Paard II" de nieuwe soos van Cabo Bianci. Na twee jaar
                        werd een tweede gedeelte aangebouwd, "Het Veulen II", maar in januari 2006 kreeg de vereniging
                        te horen dat de hogeschool ging verbouwen, en daarmee de soos vernield werd. Sinds augustus 2006
                        zit Cabo Bianci gehuisvest op Nijenoord 1. Het toenmalige U.T.V.-café werd uitgebreid en het
                        Cabo-U.T.V. café was ontstaan. Dit café wordt nu gebruikt als soos voor U.T.V.(Utrechtse
                        Technische Vereniging) en Cabo Bianci.</p>

                    <p class="p-lg">Sinds 14 juni 2010 is Studentenvereniging Cabo Bianci veranderd in
                        faculteitsvereniging Cabo Bianci. Hierdoor is Cabo Bianci de officiële faculteitsvereniging
                        geworden van de Faculteit Natuur &amp; Techniek (FNT).</p>
                </div>
                @include('includes.public.svmenu', ['collapseFNT' => 'in'])
            </div>
        </div>
        <!-- container -->
    </section>
@stop

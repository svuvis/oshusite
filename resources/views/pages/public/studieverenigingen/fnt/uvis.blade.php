@extends('layouts.public.master')

@section('title')
    OSHU - UVIS
@stop

@section('content')


    <section class="animated fadeIn">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">UVIS</h2>

                    <p class="p-lg"><a href="http://uvis.nl/">http://uvis.nl/</a></p>

                    <p class="p-lg">UVIS staat voor Utrechtse Vereniging Informatica Studenten. Dit betekend echter niet
                        dat wij er alleen zijn voor de Informatica student, maar voor alle ICT opleidingen die te volgen
                        zijn op de HU.</p>

                    <p class="p-lg">GESCHIEDENIS</p>

                    <p class="p-lg">Een klein stukje historie gewoon omdat het kan. UVIS bestaat al sinds 6 mei 1998 en
                        is opgericht door de heren 'Edo Meinema, Marc de Vries, Erik de Groot, Peter Bootsma, Chris
                        Neddermeijer, Bas Welman en Robert van de Meulen. Sinds dien is er een hoop veranderd binnen de
                        vereniging. Zo kwam het een jaar geleden erg dichtbij om de verniging op te doeken. Gelukkig is
                        dat niet gebeurd en zijn we nu weer een erg actieve vereniging!</p>

                    <p class="p-lg">DOEL</p>

                    <p class="p-lg">UVIS heeft als doel om iedereen een leuke en gezellige studie te laten beleven.
                        Daarnaast bieden wij net dat beetje meer naast je opleiding. Wij doen niet aan ontroening en
                        dergelijke. Zo organiseren wij LAN-party's, bedrijfsbezoeken, stage mogelijkheden en natuurlijk
                        ook diverse feestjes. Daarnaast hebben we bij UVIS de ervaring van 100 ICT'ers bij elkaar die je
                        een stuk gerichter kunnen helpen met je studie dan Google. Dus kom gezellig langs want het
                        UVIS-hok wordt o.a. gebruik als werkruimte.</p>

                    <p class="p-lg">LID WORDEN?</p>

                    <p class="p-lg">Dus jij ziet lidmaatschap van UVIS wel zitten? Kom eens langs in onze
                        verenigingsruimte op Nijenoord 1, ruimte A.-1.08. en geniet direct van de gezelligheid en de
                        kennis! Of schrijf je nu direct in via <a href="http://uvis.nu/inschrijven">deze pagina</a>.</p>
                </div>
                @include('includes.public.svmenu', ['collapseFNT' => 'in'])
            </div>
        </div>
        <!-- container -->
    </section>

@stop

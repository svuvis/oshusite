@extends('layouts.public.master')

@section('title')
    OSHU - Lef
@stop

@section('content')
    <section class="animated fadeIn">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">SV Lef</h2>

                    <p class="p-lg"><a href="http://www.lefsvj.nl/">http://www.lefsvj.nl/</a></p>

                    <p class="p-lg">Studievereniging Letterlijk en Figuurlijk wil iets toevoegen aan je studie
                        Journalistiek. Dat doen we sinds 2004, voor elke student van de School voor Journalistiek in
                        Utrecht. Gedoe met contributie of papierwerk is niet nodig: elke SvJ-student is automatisch lid.
                        Daardoor telt LeF meer dan 1200 leden.</p>

                    <p class="p-lg">LeF bestaat uit vier commissies. Zo organiseren de mensen van het Bonusprogramma
                        elke donderdag een interview met een journalist en verzorgt de reiscommissie eens of twee keer
                        per jaar een reis naar het buitenland. Dat zouden we niet kunnen zonder actieve studenten. Voor
                        elke commissie zoeken we aan het eind van het jaar nieuwe mensen. Houd daarvoor de posters op
                        school, ons Twitter-account en onze Facebook-pagina in de gaten.</p>

                    <p class="p-lg" style="font-weight: bold">Bonusprogramma</p>

                    <p class="p-lg">Altijd al willen weten hoe een dag van een nieuwslezer eruit ziet? Nieuwsgierig naar
                        de tips en trucs van een topinterviewer? Kom iedere donderdagmiddag (tijdens normale lesweken)
                        om 15.30 uur naar het Bonusprogramma en je hoort het allemaal. Commissieleden van het
                        Bonusprogramma interviewen elke week een journalist of persoon uit de media over zijn of haar
                        werk in de journalistiek. Want hoe leuk is dat vak nu eigenlijk? Op onze posters en in de agenda
                        kun je iedere week zien welke gast er komt. De afgelopen jaren hebben we al meer dan 100 gasten
                        in het Bonusprogramma mogen ontvangen, van Jeroen Pauw en Paul Witteman tot Rob Wijnberg en van
                        Eva Jinek tot Eric Corton.</p>

                    <p class="p-lg" style="font-weight: bold">Reizen</p>

                    <p class="p-lg">Marrakech, Krakau en Madrid, het zijn maar een paar van de plekken waar LeF de
                        afgelopen jaren is geweest. De reiscommissie organiseert voor de studenten een of twee keer per
                        jaar een stedentrip. Daarbij worden altijd enkele journalistiek relevante activiteiten
                        ondernomen. Zo regelt de commissie een lokale journalist of correspondent om mee te praten, of
                        doen de reizigers een lokale School voor Journalistiek aan. Het hostel en de vlucht betalen de
                        studenten zelf. Doordat we als groep gaan, kunnen deze kosten laag worden gehouden. LeF betaalt
                        de activiteiten tijdens het tripje. Hierdoor hoeft het helemaal niet duur te zijn om met 29
                        medestudenten naar het buitenland te gaan.</p>

                    <p class="p-lg" style="font-weight: bold">Feesten</p>

                    <p class="p-lg">Dat journalisten kunnen drinken en dansen, bewijzen ze wel tijdens de feesten van
                        LeF. Drie keer per jaar organiseert het ‘ministerie van Feest’ een feestje in de Utrechtse
                        binnenstad. De laatste jaren vinden deze plaats in Club Poema en in LUX. Voor 6,50 euro ben je
                        binnen, voor maximaal 2 euro heb je een biertje (de precieze prijs is afhankelijk van de
                        locatie). Thema’s? Ja, daar doen we aan, maar we houden het breed en verplichten niets. In het
                        verleden hebben we onder andere de dresscodes ‘Hoe pooier, hoe mooier’, ‘Hoe pooierder, hoe
                        mooierder‘ en ‘Dirty Fitness’ gehanteerd. Genoeg vrijheid voor een leuke outfit dus.</p>

                    <p class="p-lg" style="font-weight: bold">Activiteiten</p>

                    <p class="p-lg">Van karaokeavonden tot een dag met freelanceworkshops, en van de liftwedstrijd tot
                        een voetbaltoernooi. Alles wat geen feest, reis of Bonusprogramma is, wordt georganiseerd door
                        de activiteitencommissie. Hierdoor is deze commissie verantwoordelijk voor een ontzettend
                        gevarieerde ratjetoe aan activiteiten. Of het onderwijsinhoudelijk of ‘gewoon leuk’ is, dat
                        maakt niet uit voor de commissie. We staan bovendien het hele jaar open voor jouw ideeën. De
                        meeste activiteiten die we nu organiseren, zijn te danken aan studenten die een goed plan hadden
                        en daarmee naar LeF stapten. Heb jij ook zo’n geniaal idee? Neem dan contact met ons op via <a
                                href="mailto:activiteiten@lefsvj.nl">activiteiten@lefsvj.nl</a></p>

                    <p class="p-lg">Meer weten over LeF? Kijk op <a href="http://www.lefsvj.nl/">www.lefsvj.nl</a>, mail
                        naar <a href="mailto:contact@lefsvj.nl">contact@lefsvj.nl</a> of kom langs in het LeF-hok, kamer
                        1F160.</p>
                </div>
                @include('includes.public.svmenu', ['collapseFCJ' => 'in'])
            </div>
        </div>
        <!-- container -->
    </section>
@stop

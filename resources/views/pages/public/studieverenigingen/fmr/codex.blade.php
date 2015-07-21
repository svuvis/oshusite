@extends('layouts.public.master')

@section('title')
    OSHU - Codex
@stop

@section('content')
    <section class="animated fadeIn">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">SV Codex</h2>

                    <p class="p-lg"><a href="http://www.svcodex.nl/">http://www.svcodex.nl/</a></p>

                    <p class="p-lg">Beste student,</p>

                    <p class="p-lg">Codex is dé studievereniging voor studenten van de opleidingen HBO-Rechten en
                        Sociaal Juridische Dienstverlening. Codex organiseert veel studie-gerelateerde activiteiten,
                        zoals uitstapjes naar de gevangenis, de rechtbank in Antwerpen en opnames van de rijdende
                        rechter. Daarnaast organiseert Codex eenmaal per jaar een grote studiereis naar het buitenland.
                        Zo is Codex al in één reis naar Brussel, Straatsburg en Geneve geweest met een groep van zestig
                        studenten en vier docenten!</p>

                    <p class="p-lg">Daarnaast organiseert Codex natuurlijk ook niet studiegerelateerde activiteiten.
                        Twee keer per maand is er een ledenborrel, op onze feestjes kun je lekker los gaan en na de
                        tentamens kun je even relaxen tijdens de welbekende periodieke kroegentocht. Daarnaast behoren
                        ook activiteiten als lasergamen of een sporttoernooi tot de mogelijkheden.</p>

                    <p class="p-lg">Dit alles kan je studententijd binnen je opleiding een stuk leuker en leerzamer
                        maken. Voor slechts € 15,- per jaar ben je lid en kun je deelnemen aan alle activiteiten welke
                        Codex organiseert.</p>

                    <p class="p-lg">Wil je eens kijken wie wij zijn of wil je je meteen inschrijven, bezoek dan onze <a
                                href="http://www.facebook.com/svcodex">facebookpagina</a> SV Codex of de website <a
                                href="http://www.svcodex.nl/">http://www.svcodex.nl/</a>. Heb je vragen of opmerkingen
                        dan staat er uiteraard altijd iemand voor je klaar op de FMR. Ook kun je mailen naar <a
                                href="mailto:info@svcodex.nl">info@svcodex.nl</a> of <a
                                href="mailto:voorzitter@svcodex.nl">voorzitter@svcodex.nl</a></p>

                    <p class="p-lg">We’ll see you at Codex!!</p>
                </div>
                @include('includes.public.svmenu', ['collapseFMR' => 'in'])
            </div>
        </div>
        <!-- container -->
    </section>
@stop

@extends('layouts.public.master')

@section('title')
    OSHU - Vesta
@stop

@section('content')
    <section class="animated fadeIn">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">SV Vesta</h2>
                    <p class="p-lg"><a href="http://www.svvesta.nl/">http://www.svvesta.nl/</a></p>
                    <p class="p-lg">Zonder twijfel, S.v. Vesta is de veiligste studievereniging die verbonden is aan de Hogeschool Utrecht. Wij bestaan sinds 2013 en onze groeiende vereniging telt nu zo'n 100 leden. Onder dit gezelschap bevinden zich IVK'ers vanuit alle studiejaren. Ook enkele oud IVK'ers zijn lid van onze vereniging.</p>
                    <p class="p-lg">Vesta is een studievereniging, dus geen studentenvereniging. Saai? Nee! Want naast leerzame activiteiten is binnen onze vereniging ook veel gezelligheid te vinden. Het voordeel? Geen ontgroening of aanwezigheidsplicht, en het kost je (bijna) niets!</p>
                    <p class="p-lg">Wij geloven dat netwerken en kennis van het werkveld de belangrijkste vaardigheden zijn voor een beginnend IVK'er. Of het nou is om mensen te leren kennen of bijvoorbeeld om een stage te verwerven, het is ons doel om studenten Integrale Veiligheidskunde hierin te ondersteunen. Om dit te kunnen bereiken organiseren wij veel leuke activiteiten, uiteenlopend van bedrijfsbezoeken tot gezellige feesten!</p>
                    <p class="p-lg">Wij zijn altijd opzoek naar enthousiaste studenten die ons willen helpen bij het organiseren van leuke activiteiten! Openheid is één van onze speerpunten, spreek ons dus gewoon een keer aan als je een goed idee hebt!</p>
                    <p class="p-lg">Wij zijn te vinden op Facebook en via onze website!</p>
                    <p class="p-lg">Interesse gekregen? Kijk dan even op <a href="http://www.svvesta.nl/">http://www.svvesta.nl/</a> of neem contact op met onze Commissaris Intern, Jeroen. Hij is te bereiken op: 06-11416987, een e-mail sturen naar <a href="mailto:info@svvesta.nl">info@svvesta.nl</a> kan natuurlijk ook.</p>
                    <p class="p-lg">Tot snel!<br> Het team van S.v. Vesta</p>
                </div>
                @include('includes.public.svmenu', ['collapseFMR' => 'in'])
            </div>
        </div> <!-- container -->
    </section>
@stop

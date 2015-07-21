@extends('layouts.public.master')

@section('title')
    OSHU - Vox
@stop

@section('content')
    <section class="animated fadeIn">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">SV Vox</h2>

                    <p class="p-lg"><a href="http://www.introductievox.nl/studievereniging-vox/">http://www.introductievox.nl/studievereniging-vox/</a>
                    </p>

                    <p class="p-lg">Wij zijn de studievereniging van studenten, voor studenten van de opleidingen
                        communicatiemanagement en bedrijfscommunicatie. Vox is de studievereniging waarin verschillende
                        commissies veel en hecht samenwerken met elkaar en de HU zelf, om dingen te organiseren zoals
                        evenementen die studie-gerelateerd zijn, gastcolleges, feesten en studiereizen. De
                        studievereniging is handig omdat je dan makkelijk kunt netwerken binnen school, je bouwt een
                        band op met andere Vox’ers en docenten. Daarnaast is Vox er ook om je te helpen met jouw studie.
                        Kortom: Vox is een goede plek om je studie te beginnen, waar jij jouw creatieve ideeën kwijt
                        kunt om leuke evenementen, uitjes, gastcolleges en nog veel meer te bedenken, organiseren en de
                        plek waar je nieuwe leuke mensen leert kennen.</p>

                    <p class="p-lg">Binnen Vox heb je een bestuur en algemeen leden. Het bestuur bestaat het dagelijks
                        bestuur, de algemeen voorzitter, secretaris en penningmeester, en de voorzitters van onze
                        commissies. Wij hebben binnen onze vereniging drie commissies: de reis- en activiteiten
                        commissie, de promo commissie en de public relations commissie. Met deze samenstelling proberen
                        wij voor onze leden en belanghebbende te zorgen dat ze zich kunnen profileren op sociaal vlak en
                        het beroepen veld. Met deze combinatie hopen wij alles te kunnen bieden aan onze leden en
                        studenten van onze opleidingen.</p>
                    {{--<p class="p-lg"><img src="/img/Custom/vox.png"></p>--}}
                </div>
                @include('includes.public.svmenu', ['collapseFCJ' => 'in'])
            </div>
        </div>
        <!-- container -->
    </section>
@stop

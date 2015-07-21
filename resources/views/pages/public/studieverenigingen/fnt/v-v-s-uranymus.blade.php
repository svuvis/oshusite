@extends('layouts.public.master')

@section('title')
    OSHU - V.V.S. Uranymus
@stop

@section('content')
    <section class="animated fadeIn">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">V.V.S. Uranymus</h2>

                    <p class="p-lg"><a href="http://www.uranymus.nl/">http://www.uranymus.nl/</a></p>

                    <p class="p-lg">Over Uranymus</p>

                    <p class="p-lg">V.V.S. Uranymus is dé gezelligheids- en studievereniging van het Institute for Life
                        Sciences &amp; Chemistry van de Hogeschool Utrecht. De vereniging heeft een eigen sociëteit bar
                        in de kelder van de school, en van hieruit organiseren wij dan ook onze meeste activiteiten.</p>

                    <p class="p-lg">De vereniging telt zo’n 602 leden, waarvan er ongeveer 120 elk jaar actief zijn in
                        een van onze tien commissies. In deze commissies zijn tal van dingen te doen. Zo hebben we een
                        commissie die 4 keer per jaar ons verenigingsblad het Musje schrijft en publiceert, een
                        commissie die onze sociëteit “de Poli” onderhoudt, of als je van feestjes houdt hebben we ook
                        een feestcommissie die 3 keer per jaar een groot feest in de binnenstad organiseert waar ook
                        altijd veel niet-leden en leden van andere verenigingen op af komen.</p>

                    <p class="p-lg">Naast onze feesten organiseren wij jaarlijks 3 kampen, waaronder een (gezelligheids)
                        introductie kamp voor de aankomende eerstejaars en een zeil weekend. Ook organiseren wij
                        activiteiten als LaserQuest, een Wintersport vakantie, BBQ’s en nog meer andere
                        activiteiten!</p>
                    <table style="height: 219px; width: 533px;">
                        <tbody>
                        <tr>
                            <td>&nbsp;
                                <p class="p-lg"><span>Met vriendelijke groet,</span></p>

                                <p class="p-lg"><span>Tamara Borsboom<br>Voorzitter<br>--<span>V.V.S. Uranymus<br>F.C. Dondersstraat 65<br>3572 JE Utrecht<br>T: 088-4818794<br>E :</span><span><span><a
                                                        href="mailto:voorzitter@uranymus.nl">voorzitter@uranymus
                                                    .nl</a><br></span>I:&nbsp;</span><span><span><a
                                                        href="http://www.uranymus.nl/">http://www.uranymus.nl/</a></span></span></span>
                                </p>
                            </td>
                            <td><br><span><img src="/img/Custom/Uranymus.png" alt="" width="171" height="167"
                                               border="0"></span>&nbsp;</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                @include('includes.public.svmenu', ['collapseFNT' => 'in'])
            </div>
        </div>
        <!-- container -->
    </section>
@stop

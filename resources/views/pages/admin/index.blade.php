@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Uitleg
@stop


@section('mcontent')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Hallo {{ $name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Nieuwsberichten
                </div>
                <div class="panel-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Slugs</a>
                        </li>
{{--                        <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Profile</a>
                        </li>
                        <li class=""><a href="#messages" data-toggle="tab" aria-expanded="false">Messages</a>
                        </li>
                        <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Settings</a>
                        </li>--}}
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="home">
                            <br/>

                            <p>Een slug is een stuk van de URL om een specifiek stuk data te identificeren.
                                Voorveeld slug: enquete-invulling-clustercafe. Je krijgt dan
                                http://oshu.nl/nieuws/artikel/enquete-invulling-clustercafe wat een stuk duidelijker is
                                dan http://oshu.nl/nieuws/artikel/1</p>

                            <p>Een slug mag geen Hoofdletters, speciale tekens of spaties(gebruik -) bevatten dus
                                Enqu&ecirc;te Invulling Clustercaf&eacute; word enquete-invulling-clustercafe. Ook moet een slug niet
                                te lang of te kort zijn dus 3
                                tot 5 woorden. De slug wordt voor je gemaakt uit de titel en
                                spaties etc worden er allemaal voor je uitgehaalt.
                                Meestal hoef je de slug dus niet aan te passen maar als je titel erg lang of kort is dan is
                                het aan te raden dit wel te doen om de URLs mooi duidelijk en consistent te houden</p>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <h4>Profile Tab</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade" id="messages">
                            <h4>Messages Tab</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade" id="settings">
                            <h4>Settings Tab</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('/img/Custom/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/img/Custom/favicon.ico') }}" type="image/x-icon">
    <!-- CSS -->
    {!! HTML::style('/css/bootstrap.min.css') !!}
    {!! HTML::style('css/font-awesome.min.css') !!}
    {!! HTML::style('css/animate.min.css') !!}
    {!! HTML::style('css/lightbox.css') !!}
    {!! HTML::style('css/syntax/shCore.css') !!}
    {!! HTML::style('css/syntax/shThemeDefault.css') !!}
    {!! HTML::style('css/style.css') !!}
    {!! HTML::style('css/color-default.css') !!}
    {!! HTML::style('css/width-full.css') !!}
    {!! HTML::style('css/custom/style.css') !!}
    @yield('css')


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    {!! HTML::script('js/html5shiv.js') !!}
    {!! HTML::script('js/respond.min.js') !!}
    <![endif]-->

</head>

<body>
<div class="boxed animated fadeIn animation-delay-5">

    <header id="header" class="hidden-xs">

        <div class="container">
            <div id="header-title">
                {!! HTML::image('/img/Custom/logo.png','Logo',array('style' => 'margin-top: 10px; height: 100px;')) !!}
                <p class="animated fadeInLeft" style="margin-top: 0; margin-left: 12px">Overleg Studieverenigingen Hogeschool Utrecht</p>
            </div>

            <div id="social-header" class="hidden-xs">
                <!-- <a href="#" class="social-icon soc-twitter animated fadeInDown animation-delay-1"><i class="fa fa-twitter"></i></a>
                 <a href="#" class="social-icon soc-google-plus animated fadeInDown animation-delay-2"><i class="fa fa-google-plus"></i></a>-->
                <a href="https://www.facebook.com/oshuNL" target="_blank" class="social-icon soc-facebook animated fadeInDown animation-delay-3"><i class="fa fa-facebook"></i></a>
                <!--                    <a href="#" class="social-icon soc-instagram animated fadeInDown animation-delay-4"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="social-icon soc-pinterest animated fadeInDown animation-delay-5"><i class="fa fa-pinterest"></i></a>
                                    <a href="#" class="social-icon soc-linkedin animated fadeInDown animation-delay-6"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="social-icon soc-github animated fadeInDown animation-delay-7"><i class="fa fa-github"></i></a>-->
            </div>

        </div> <!-- container -->
    </header> <!-- header -->

    <nav class="navbar navbar-static-top navbar-mind" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand visible-xs" href="/" style="padding: 5px 5px;">{!! HTML::image('img/Custom/logo.png','Logo',array('style' => 'height: 50px;')) !!}</a>
                <div style="float: left; margin-top: 7px;" class="visible-xs">Overleg Studieverenigingen<br /> Hogeschool Utrecht</div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-mind-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars fa-inverse"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-mind-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown @yield('nieuwsactive')">
                        {!! HTML::link('/', 'Nieuws', ['class'=>'dropdown-toggle']) !!}
                    </li> <!-- dropdown -->
                    <li class="dropdown @yield('oshuactive')">
                        {!! HTML::link('/oshu', 'Wat doet de OSHU', ['class'=>'dropdown-toggle']) !!}
                    </li> <!-- dropdown -->
                    <li class="dropdown @yield('bestuuractive')">
                        {!! HTML::link('/bestuur', 'OSHU Bestuur', ['class'=>'dropdown-toggle']) !!}
                    </li> <!-- dropdown -->
                    <li class="dropdown @yield('agendaactive')">
                        {!! HTML::link('/agenda', 'Agenda', ['class'=>'dropdown-toggle']) !!}
                    </li> <!-- dropdown -->
                </ul> <!-- nav nabvar-nav -->

                <ul class="nav navbar-nav navbar-right">
                    <!--                        <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inloggen</a>
                                                <div class="dropdown-menu dropdown-login animated fadeInUp">
                                                    <form role="form">
                                                        <h4 class="section-title">Login Formulier</h4>

                                                        <div class="form-group">
                                                            <div class="input-group login-input">
                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                <input type="text" class="form-control" placeholder="Gebruikersnaam">
                                                            </div>
                                                            <br>
                                                            <div class="input-group login-input">
                                                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                                <input type="password" class="form-control" placeholder="Wachtwoord">
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox"> Onthoud mij
                                                                </label>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary pull-right">Login</button>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li> &lt;!&ndash; dropdown &ndash;&gt;-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
                        <div class="dropdown-menu dropdown-profile animated fadeInUp" style="text-align: center;padding-bottom: 0;padding-top: 16px;">
                            <p style="margin-bottom: 0">Mail naar bestuur@oshu.nl</p>
                            <a href="mailto:bestuur@oshu.nl" style="background-color: transparent !important;margin-top: 0"><i class="fa fa-envelope" id="mail"></i></a>
                        </div>
                    </li>
                </ul> <!-- nav nabvar-nav -->
            </div><!-- navbar-collapse -->
        </div> <!-- container -->
    </nav> <!-- navbar navbar-default -->

    @yield('content')

    <footer id="footer">
        <p>&copy; 2015 <a href="#">Stichting OSHU</a>, All rights reserved.</p>
    </footer>

</div> <!-- boxed -->

<div id="back-top">
    <a href="#header"><i class="fa fa-chevron-up"></i></a>
</div>


<!-- Scripts -->
{!! HTML::script('js/jquery.min.js') !!}
{!! HTML::script('js/jquery.cookie.js') !!}
{!! HTML::script('js/bootstrap.min.js') !!}
{!! HTML::script('js/jquery.mixitup.min.js') !!}
{!! HTML::script('js/lightbox-2.6.min.js') !!}
{!! HTML::script('js/holder.js') !!}
{!! HTML::script('js/app.js') !!}

{!! HTML::script('js/syntax/shCore.js') !!}
{!! HTML::script('js/syntax/shBrushXml.js') !!}
{!! HTML::script('js/syntax/shBrushJScript.js') !!}

<script type="text/javascript">
    SyntaxHighlighter.all()
</script>

@yield('js')

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    {!! HTML::style('/css/bootstrap.min.css') !!}

    <!-- MetisMenu CSS -->
    {!! HTML::style('/css/metisMenu.min.css') !!}

    <!-- Custom CSS -->
    {!! HTML::style('/css/sb-admin-2.css') !!}

    <!-- Custom Fonts -->
    {!! HTML::style('/css/font-awesome.min.css') !!}

    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {!! HTML::script('js/html5shiv.js') !!}
    {!! HTML::script('js/respond.min.js') !!}
    <![endif]-->

</head>

<body>

@yield('content')

<!-- jQuery -->
{!! HTML::script('js/jquery.min.js') !!}

<!-- Bootstrap Core JavaScript -->
{!! HTML::script('js/bootstrap.min.js') !!}

<!-- Metis Menu Plugin JavaScript -->
{!! HTML::script('js/metisMenu.min.js') !!}

<!-- Custom Theme JavaScript -->
{!! HTML::script('js/sb-admin-2.js') !!}

@yield('js')

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    {!! HTML::style('css/admin-all.css') !!}

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

{!! HTML::script('js/admin-all.js') !!}

@yield('js')

</body>

</html>

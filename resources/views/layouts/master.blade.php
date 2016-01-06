<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="UTF-8">
    <title>App Star-Wars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="{{url('assets/css/foundation.css')}}" media="all">
    <link rel="stylesheet" href="{{url('assets/css/foundation.min.css')}}" media="all">
    <link rel="stylesheet" href="{{url('assets/css/app.min.css')}}" media="all">
    <link rel="stylesheet" href="{{url('assets/css/app.css')}}" media="all">
</head>
<body>

<header id="header" role="banner" class="row line pam">
    @include('partials.nav')
</header>

@yield ('content','default value')

@include('partials.footer')




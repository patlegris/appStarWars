<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="UTF-8">
    <title>App Star-Wars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{url('assets/css/foundation.css')}}" media="all">
    <link rel="stylesheet" href="{{url('assets/css/foundation.min.css')}}" media="all">
    <link rel="stylesheet" href="{{url('assets/css/app.min.css')}}" media="all">
    <link rel="stylesheet" href="{{url('assets/css/app.css')}}" media="all">
</head>
<body>
{{--comment--}}
<header id="header" role="banner" class="line pam">
    <div class="top-bar" id="main-menu">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text">e-Star-Wars</li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu vertical medium-horizontal" data-responsive-menu="drilldown medium-dropdown">
                <li><a href="{{url('/')}}">{{trans('app.backHome')}}</a></li>
                <li><a href="{{url('logout')}}">{{trans('app.logout')}}</a></li>
                {{$menu}}
            </ul>
        </div>
    </div>
</header>
<div id="main" role="main" class="line pam">
    @yield('content')
</div>
</body>
<footer id="footer" role="contentinfo" class="line pam txtcenter">
</footer>
</html>
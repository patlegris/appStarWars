<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <title>App Name - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('assets/css/knacss.min.css')}}" media="all">
    <link rel="stylesheet" href="{{url('assets/css/app.min.css')}}" media="all">
</head>
<body>
{{--comment--}}
<header id="header" role="banner" class="line pam">
    @include('partials.admin_nav')

</header>
<div id="main" role="main" class="line pam">
    @yield('content')
</div>
<footer id="footer" role="contentinfo" class="line pam txtcenter">
</footer>
</body>
</html>
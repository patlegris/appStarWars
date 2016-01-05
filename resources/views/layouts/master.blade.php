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
<body>
<header id="header" role="banner" class="row line pam">
    <!-- Navigation -->
    <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle></button>
        <div class="title-bar-title">Menu</div>
    </div>

    <div class="top-bar" id="main-menu">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text">Catalogue produit e-Star-Wars</li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu vertical medium-horizontal" data-responsive-menu="drilldown medium-dropdown">
                <li><a href="#">One</a></li>
                <li><a href="#">Two</a></li>
                <li><a href="#">Three</a></li>
                <li><a href="#">Four</a></li>
                <li><a href="#">Five</a></li>
            </ul>
        </div>
    </div><!-- /navigation -->
</header>
{{--@include('partials/front.header.blade.php')--}}

@yield ('content','default value')

{{--@include('partials/front.footer.blade.php')--}}
<footer id="footer" role="contentinfo" class="row line pam txtcenter">
    <div class="bottom-right">
        <ul class="menu vertical medium-horizontal" data-responsive-menu="drilldown medium-dropdown">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Mentions</a></li>
            <li><a href="#">Contacts</a></li>
        </ul>
    </div><!-- /navigation -->
</footer>

<script src="{{url('assets/js/app.min.js')}}"></script>
<script src="{{url('assets/js/vendor/jquery.min.js')}}"></script>
<script src="{{url('assets/js/vendor/what-input.min.js')}}"></script>
<script src="{{url('assets/js/foundation.min.js')}}"></script>
<script src="{{url('assets/js/app.js')}}"></script>

</body>
</html>

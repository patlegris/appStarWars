<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="UTF-8">
    <title>App Star-Wars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('assets/css/knacss.min.css')}}" media="all">
    <link rel="stylesheet" href="{{url('assets/css/app.min.css')}}" media="all">
    <link rel="stylesheet" href="{{url('assets/css/app.css')}}" media="all">
<body>
<header id="header" role="banner" class="line pam">
    <nav id="navigation" role="navigation">
        <ul class="pam">
            <li class="pam inbl">Accueil</li>
            <li class="pam inbl">Lasers</li>
            <li class="pam inbl">Casques</li>
            <li class="pam inbl">contact</li>
            <li class="pam inbl">login</li>
        </ul>
    </nav>
</header>
{{--@include('partials/front.header.blade.php')--}}

<h1>Catalogue produit</h1>
@yield ('content','default value')

{{--@include('partials/front.footer.blade.php')--}}
<footer id="footer" role="contentinfo" class="line pam txtcenter">
    <nav id="footer_nav" role="navigation">
        <ul class="pam">
            <li class="pam inbl">Accueil</li>
            <li class="pam inbl">Mentions</li>
            <li class="pam inbl">Contacts</li>
        </ul>
    </nav>
</footer>

<script src="{{url('assets/js/app.min.js')}}"></script>
</body>
</html>
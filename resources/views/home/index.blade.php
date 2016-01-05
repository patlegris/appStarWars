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
<h1>Hello Home</h1>
@forelse($products as $product)
    <div class="product">
        @if($picture = $product->picture)
            <img class="picture" src="{{url('uploads',$picture->uri)}}">
        @endif
        <h2><a href="{{url('product', $product->id)}}">{{$product->name}}</a></h2>
        {{$product->abstract}}
        <p>Tags:
            @forelse($product->tags as $tag)
                <small>{{$tag->name}}</small>
            @empty
                <small>No tag</small>
            @endforelse
        </p>
    </div>
@empty
    <p>No product</p>
@endforelse
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
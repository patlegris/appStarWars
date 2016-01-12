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
<header>
</header>
<body>
{{--comment--}}
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
            <li><a href="{{url('store')}}">{{storeProduct}}</a></li>
            {{$menu}}
        </ul>
    </div>
</div>

<table class="table">
    <thead>
    <tr>
        <th>status</th>
        <th>Name</th>
        <th>Price</th>
        <th>quantity</th>
        <th>date</th>
        <th>category</th>
        <th>tags</th>
        <th>action</th>
    </tr>
    <p><a class="button" href="{{url('product/create')}}">Create product</a></p>
    </thead>
</table>


<div id="main" role="main" class="line pam">
    <form method="POST" action="{{url('product')}}>
    {!! csrf_field() !!}

<div class="form-text">
    <label class="label" for="name">name</label>
    <input class="input-text" id="name" name="name" type="text" value="{{old('name')}}" >
</div>

    <td>
        <form method="POST" action="{{url('product', $product->id)}}">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="delete">
        </form>
    </td>
</div>
</body>
<footer id="footer" role="contentinfo" class="line pam txtcenter">
</footer>
</html>
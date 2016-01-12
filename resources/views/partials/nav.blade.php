<div class="title-bar " data-responsive-toggle="main-menu " data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle></button>
    <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="main-menu">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text">e-Star-Wars</li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu vertical medium-horizontal" data-responsive-menu="drilldown medium-dropdown">
            <li><a href="/">Accueil</a></li>
            @forelse($categories as $id => $title)
                <li><a href="{{url('cat', [$cat->id, $cat->slug])}}">{{$title}}</a></li>
            @empty
                <li>{{trans('app.nocategory')}}</li>
            @endforelse
            <li><a href="{{url('contact')}}">Contact</a></li>
            <li><a href="login">Login</a></li>
            <li><a href="product">Dashboard</a></li>
        </ul>
        {{--@if(Auth::check())--}}
        {{--@else--}}
        {{--@endif--}}
    </div>
</div>
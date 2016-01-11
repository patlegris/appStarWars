<nav id="navigation" role="navigation">
    <ul class="navigation">
        <li><a href="{{url('/')}}">{{trans('app.backHome')}}</a></li>
        <li><a href="{{url('logout')}}">{{trans('app.logout')}}</a></li>
        {{$menu}}
    </ul>
</nav>
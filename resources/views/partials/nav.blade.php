<nav id="navigation" role="navigation">
    <ul class="navigation">
        <li><a href="{{url('/')}}">{{trans('app.home')}}</a></li>
        @forelse($categories as $id => $title)
            <li><a href="{{url('category',$id )}}">{{$title}}</a></li>
        @empty
            <li>{{trans('app.noCategory')}}</li>
        @endforelse
        <li><a href="{{url('contact')}}">{{trans('app.contact')}}</a></li>

        @if(Auth::check())
            <li><a href="{{url('dashboard')}}">{{trans('app.dashboard')}}</a></li>
            <li><a href="{{url('logout')}}">{{trans('app.logout')}}</a></li>
        @else
            <li><a href="{{url('login')}}">{{trans('app.login')}}</a></li>
        @endif
    </ul>
</nav>
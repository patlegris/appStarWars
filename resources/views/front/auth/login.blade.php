@extends('layouts.master')

@section('content')
    @if(Session::has('message'))
        @include('front.partials.flash')
    @endif
    <form method="POST" action="{{url('login')}}">
        {!! csrf_field() !!}
        <div class="form-text">
            <label class="label" for="email">{{trans('app.email')}}</label>
            <input class="input-text" id="email" name="email" type="email" value="{{old('email')}}" >
            @if($errors->has('email')) <span class="error">{{$errors->first('email')}}</span> @endif
        </div>
        <div class="form-text">
            <label class="label" for="password">{{trans('app.password')}}</label>
            <input class="input-text" id="password" name="password" type="password">
            @if($errors->has('password')) <span class="error">{{$errors->first('password')}}</span> @endif
        </div>

        <div class="checkbox">
            <label class="label" for="remember">{{trans('app.remember')}}</label>
            <input type="checkbox" name="remember" value="true"/>
        </div>

        <div class="form-submit">
            <input type="submit" value="login" >
        </div>
    </form>
@stop
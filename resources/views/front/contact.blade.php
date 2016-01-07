@extends('layouts.master')

@section('content')
    {{--@if(Session::has('form'))--}}
        {{--@include('front.partials.flash')--}}
    {{--@else--}}
        <form class="form row" method="POST" action="{{url('storeContact')}}">

            <div class="form-text">
                <label class="label" for="email">Email :</label>
                <input class="input-text" id="email" name="email" type="text" value="" >
                {{--@if($errors->has('email'))--}}
                    {{--<span class="error-message">{{$errors->first('email')}}</span>--}}
                {{--@endif--}}
            </div>

            <div class="content">
                <label class="label" for="contenu">Contenu :</label>
            <textarea row="50" cols="50" name="content"></textarea>
            </div>

            <div class="form-submit">
            <input type="submit" value="ok" >
            </div>

        </form>
    {{--@endif--}}
@stop


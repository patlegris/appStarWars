@extends('layouts.master')

@section('content')
    {{--@if(Session::has('form'))--}}
        {{--@include('front.partials.flash')--}}
    {{--@else--}}
        <form class="form row" method="POST" action="{{url('storeContact')}}">

            <div class="form-text">
                <label class="label" for="email">Email :</label>
                <input class="input-text" id="email" name="email" type="text" value="{{old('email')}}" >
            </div>

            <div class="content">
                <label class="label" for="contenu">Contenu :</label>
            <textarea row="50" cols="50" name="">{{old('contenu')}}</textarea>
            </div>

            <div class="form-submit">
            <input type="submit" value="ok" >
            </div>

            <session>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </session>

        </form>
    {{--@endif--}}
@stop


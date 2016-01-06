@extends('layouts.master')
@section('content')
        <div class="row product clear">
            @if($picture = $product->picture)
                <img class="row" src="{{url('uploads',$picture->uri)}}">
            @endif
            <h2 class="row"><a href="{{url('product', $product->id)}}">{{$product->name}}</a></h2>
            {{$product->abstract}}
            <p class="">{{trans('app.tag')}}
                @forelse($product->tags as $tag)
                    <small>{{$tag->name}}</small>
                @empty
                    {{trans('app.notag')}}
                @endforelse
            </p>
            <br>
        </div>

@stop

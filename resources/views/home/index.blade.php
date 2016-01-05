@extends('layouts.master')
@section('content')
    <div id="main" role="main" class="line pam">
        @forelse($products as $product)
            <div class="product clear">
                @if($picture = $product->picture)
                    <img class="picture" src="{{url('uploads',$picture->uri)}}">
                @endif
                <h2><a href="{{url('product', $product->id)}}">{{$product->name}}</a></h2>
                {{$product->abstract}}
                <p class="">Tags:
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
    </div>
@stop

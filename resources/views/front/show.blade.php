@extends('layouts.master')

@section('content')
    <h2 class="">{{$product->name}}</h2>
    <div class="product clearfix">
        {{ $product->abstract }}
        @if($picture = $product->picture)
            <figure class="fl figure">
                <a href="{{url('product', $product->id)}}"><img src="{{url('uploads',$picture->uri)}}"></a>
            </figure>
        @endif
        @include('front.partials.meta', compact('product'))
    </div>
@stop
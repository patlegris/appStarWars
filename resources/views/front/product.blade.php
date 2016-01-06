@extends('layouts.master')
@section('content')
    @forelse($products as $product)
        <div class="row product">
        @if($pictures = $product->pictures)
            <img class="row" src="{{url('uploads',$picture->uri)}}">
        @endif
        <h2 class="row"><a href="{{url('/product/',$product['$id'])}}">{{$product['name']}}</a></h2>
        <ul>
            <li>Description : {{$product['content']}}</li>
            <li>Prix unitaire TTC : {{$product['price']}}</li>
            <li>Quantités : {{$product['quantity']}}</li>
            <li>Disponibilités : {{$product['status']}}</li>
        </ul>
        <p class="">{{trans('app.tag')}}
            @forelse($product->tags as $tag)
                <small>{{$tag->name}}</small>
            @empty
                {{trans('app.notag')}}
            @endforelse
        </p>
    </div>
    @empty
        <p>Pas de produit</p>
    @endforelse
    <div class="row column">
        {!! $products->links() !!}
    </div>
@stop

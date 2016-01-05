@extends('layouts.master')
@section('content')
    {{--<div id="main" role="main" class="line pam">--}}
        @forelse($products as $product)
            <div class="row product clear">
                @if($picture = $product->picture)
                    <img class="picture large-3 medium-3 columns " src="{{url('uploads',$picture->uri)}}">
                @endif
                <h2 class="large-9 medium-9 columns"><a href="{{url('product', $product->id)}}">{{$product->name}}</a></h2>
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
        @empty
            <p>Pas de produit</p>
        @endforelse
    {{--</div>--}}
    <div class="row column">
    {!! $products->links() !!}
    </div>
@stop

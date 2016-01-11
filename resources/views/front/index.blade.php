@extends('layouts.master')

@section('content')
    @forelse($products as $product)
        <div class="product clearfix">
            <h2 class=""><a href="{{url('product', $product->id)}}">{{$product->name}}</a></h2>
            {{ $product->abstract }}
            @if($picture = $product->picture)
                <figure class="fl figure">
                    <a href="{{url('product', $product->id)}}"><img width="200"  src="{{url('uploads',$picture->uri)}}"></a>
                </figure>
            @endif
            @if($cat=$product->category)
                <p>{{trans('app.catName')}}<a href="{{url('category', [str_slug($cat->title), $cat->id])}}">{{trans('app.category')}}{{$cat->title}}</a></p>
            @endif
            @include('front.partials.meta', compact('product'))
        </div>
    @empty
        <p>No product</p>
    @endforelse
    {!! $products->links() !!}
@stop
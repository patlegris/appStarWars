@extends('layouts.master')

@section('content')
    @forelse($products as $product)
        <div class="row product clearfix">
            <h2 class="row"><a href="{{url('prod', [$product->id, $product->slug])}}">{{$product->name}}</a></h2>
            @if($picture = $product->picture)
                <figure class="fl figure">
                    <a class="picture large-3 medium-3 columns" href="{{url('product', $product->id)}}"><img width="300" src="{{url('uploads',$picture->uri)}}"></a>
                </figure>
            @endif
            {{ $product->abstract }}
            @if($cat=$product->category)
                <p>{{trans('app.catName')}}<a
                            href="{{url('cat', [$cat->id, $cat->slug])}}">{{trans('app.category')}}{{$cat->title}}</a>
                </p>
            @endif
{{--            @include('front.partials.meta', compact('product'))--}}
        </div>
    @empty
        <p>No product</p>
    @endforelse
    {!! $products->links() !!}
@stop
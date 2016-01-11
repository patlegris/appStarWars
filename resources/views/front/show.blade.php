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
        <form method="POST" action="{{url('command')}}">
            {!! csrf_field() !!}
            <div class="div-select">
                <label for="quantity">{{trans('app.choiceQuantity')}}</label>
                <select name="quantity" class="select">
                    @foreach($quantities as $quantity)
                        <option value="$quantity">{{$quantity}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-submit">
                <input type="submit" value="{{trans('app.command')}}" >
            </div>
        </form>

    </div>
@stop
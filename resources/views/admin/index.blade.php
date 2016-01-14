@extends('layouts.admin')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>status</th>
            <th>Name</th>
            <th>Price</th>
            <th>quantity</th>
            <th>date</th>
            <th>category</th>
            <th>tags</th>
            <th>action</th>
        </tr>
        </thead>
        @forelse($products as $product)
            <tr>
                <td><a class="btn btn-{{$product->status}}" href="{{url('product',['status', $product->id])}}">{{$product->status}}</td>
                <td><a href="{{url('product', [$product->id, 'edit'])}}">{{$product->name}}</a></td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->published_at}}</td>
                <td>{{($cat = $product->category->title)? $cat : 'No category'}}</td>
                <td>@if($tags = $product->tags)@foreach($tags as $tag ) {{$tag->name}} @endforeach @endif</td>
                <td>
                    <form method="POST" action="{{url('product', $product->id)}}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
        @empty
        @endforelse
        {{$products->links()}}
    </table>
@stop

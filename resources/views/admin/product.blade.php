@extends('layouts.master')

@section('content')

    <table>
        <caption>Catalogue des produits</caption>
        <tr>
            <th scope="column">Status</th>
            <th scope="column">Name</th>
            <th scope="column">Price</th>
            <th scope="column">Quantity</th>
            <th scope="column">Date</th>
            <th scope="column">Category</th>
            <th scope="column">Tags</th>
            <th scope="column">Action</th>
        </tr>
        <tr>
            @forelse($products as $product)
                <td scope="row">{{$product(status)}}</td>
                <td scope="row">{{$product(name)}}</td>
                <td scope="row">{{$product(price)}}</td>
                <td scope="row">{{$product(quantity)}}</td>
                <td scope="row">{{$product(date_create())}}</td>
                <td scope="row">{{$product(category_id)}}</td>
                <td scope="row">{{$product(tags_id)}}</td>
                <td scope="row"></td>
            @empty
                <p>No product</p>
            @endforelse
        </tr>
    </table>
    {{--@endforelse--}}
    {!! $products->links() !!}
@stop
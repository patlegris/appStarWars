@extends('layouts.admin')

@section('content')
    Hello Admin
    <a class="link" href="{{url('product')}}">{{trans('app.allProduct')}}</a>
@stop
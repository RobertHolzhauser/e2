@extends('templates/master')

@section('title')
All Products
@endsection

@section('content')
<h2>All Products</h2>

@foreach($products as $product)
{{ $product['name'] }}<br>
@endforeach

@endsection
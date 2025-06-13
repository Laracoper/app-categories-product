@extends('inc.layout')

@section('title','one product')

@section('content')
<h1>show product</h1>
<p>{{ $product->category_name }}</p>
@endsection
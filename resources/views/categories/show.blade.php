@extends('inc.layout')

@section('title','one category')

@section('content')
<h1>show category</h1>
<p class="fs-1">категория: {{ $category->category }}</p>



        @foreach ($categories as $category)
        <p class="fs-2">{{ $category->category }}</p>
        @foreach ($category->products as $name)
        <p>{{ $name->category_name }}</p>
        @endforeach
        @endforeach

@endsection
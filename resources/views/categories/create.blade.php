@extends('inc.layout')

@section('title','create categories')

@section('content')
<h1 class="mb-5">create category</h1>
<form action="{{ route('categories.store') }}" method="post">
    @csrf
    <input type="text" class="form-control mb-3" placeholder="enter category" name="category">
    <button type="submit" class="btn btn-info">create</button>
</form>

@endsection
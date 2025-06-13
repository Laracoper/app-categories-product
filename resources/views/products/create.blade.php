@extends('inc.layout')

@section('title','create product')

@section('content')
<h1>create product</h1>
<form action="{{ route('products.store') }}" method="post">
    @csrf
    <input type="text" class="form-control mb-3" placeholder="enter product" name="category_name">
    <select name="category_id" class="form-select mb-3" aria-label="Default select example">
        <option selected>ВЫБЕРИТЕ категорию продукта</option>
      
        @foreach ($categories as $cat)
          <option value="{{ $cat->id }}"><p>{{ $cat->category }}</p></option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-info">create product</button>
</form>
@endsection
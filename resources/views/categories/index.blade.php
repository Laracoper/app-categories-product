@extends('inc.layout')

@section('title','all categories')

@section('content')
<div class="row">
  <div class="col-md-3">
    <p class="fs-3 fw-bolder">Aside</p>
    <!-- @include('inc.accordion') -->
  </div>
  <div class="col-md-9">
    <h1>all categories</h1>
    <p><a class="btn btn-info" href="{{ route('categories.create') }}">create category</a></p>

 <div class="accordion" id="accordionExample">
        <div class="accordion-item">

            @foreach ($categories as $id=> $category)

            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $id }} " aria-expanded="true" aria-controls="{{ $id }}">
                    <p class="fs-3">{{ $category->category }}</p>
                </button>
            </h2>

            @foreach ($category->products as $product)
            <div id="{{ $id }}" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p><a href="{{ route('products.show',[ $product->id ]) }}">{{ $product->category_name }}</a></p>
                </div>
            </div>
            @endforeach
            @endforeach

        </div>
    </div>



  </div>
</div>

@endsection


<!-- <div class="accordion" id="accordionExample">

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>

    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
    ......
      </div>
    </div>
  </div>
 
</div> -->
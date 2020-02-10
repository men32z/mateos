@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
{{--      <div class="col-12 col-md-4 col-lg-3">
        Filtros
      </div>--}}
      <div class="col-12 col-md-8 offset-md-2 row">
        @if (count($products)<1)
          <h3>Aun no hay productos, vuelve más tarde </h3>
        @endif
        @foreach ($products as $key => $product)
          <div class="col-6 col-md-4 product">
            <div class="img-container" >
              @if ($product->images() && $product->images()->first())
                <img src="{{ $product->images()->first()->url }}" alt="">
              @else
                <img src="/images/no-image.jpg" alt="">
              @endif
             </div>
            <h3>{{$product->name}}</h3>
          </div>
        @endforeach
      </div>
      {{ $products->links() }}
    </div>
  </div>
@endsection
@extends('layouts.app', ['settings' => [
  'menu_admin' => true
  ]])

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 col-md-6 offset-md-3 bg-white p-2">
      <h2>Productos</h2>
      <br> <a href="{{route('products.create')}}" class="btn btn-success">Nuevo</a>
    </div>
    <div class="col-12 col-md-6 offset-md-3 bg-white p-2">
      <table class="table table-striped">
        <thead>
          <th scope="col">Nombre</th>
        </thead>
        <tbody>
          @foreach ($products as $product)
            <tr>
              <td>
                {{ $product->name }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      {{ $products->links() }}
    </div>
  </div>
</div>
@endsection

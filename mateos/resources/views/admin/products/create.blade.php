@extends('layouts.app', ['settings' => [
  'menu_admin' => true
  ]])

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 col-md-6 offset-md-3 bg-white p-2">
      <h2>Nuevo Producto</h2>
    </div>
    <div class="col-12 col-md-6 offset-md-3 bg-white p-2">
      <form action="{{route('products.store')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="product_name">Nombre</label>
          <input type="text" id="product_name" name="name" class="form-control" value="">
        </div>
        <div class="form-group">
          <label for="product_description">Descripcion</label>
          <textarea id="product_description" name="description" class="form-control">
          </textarea>
        </div>
        <image-upload-component></image-upload-component>
        <input type="submit" value="Guardar" class="btn btn-success mt-2">
      </form>
    </div>
  </div>
</div>
@endsection

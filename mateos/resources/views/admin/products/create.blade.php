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
      <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="product_name">Nombre</label>
          @include('partials.error', ['in_error' => 'name'])
          <input type="text" id="product_name" name="name" class="form-control" value="">

        </div>
        <div class="form-group">
          <label for="product_description">Descripcion</label>
          @include('partials.error', ['in_error' => 'description'])
          <textarea id="product_description" name="description" class="form-control">

          </textarea>
        </div>

        <image-upload-component></image-upload-component>
        @if ($errors->has('images.*'))
          @foreach ($errors->get('images.*') as $message)
            @if (is_array($message))
              @foreach ($message as $mmg)
                <span class="text-danger small">
                    <strong>{{$mmg}}</strong><br>
                </span>
              @endforeach
            @else
              <span class="text-danger small">
                  <strong>{{$message}}</strong>
              </span>
            @endif
          @endforeach
        @endif
        <input type="submit" value="Guardar" class="btn btn-success mt-2">
      </form>
    </div>
  </div>
</div>
@endsection

@extends('layouts.app',  ['settings' => [
  'grecaptcha' => true,
  'disable_app_vue' => true,
  ]])

@section('content')
  <div class="container-fluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3707.5843837129246!2d-102.58750714933085!3d21.680019285578854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429b999bc025553%3A0xe5d190338b642726!2sLas%20Palmas%20Centro%20Comercial%20de%20Villa%20Hidalgo!5e0!3m2!1ses!2smx!4v1579800027556!5m2!1ses!2smx"
    frameborder="0" style="border:0; width:100%; height:400px;" allowfullscreen=""></iframe>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Datos de contacto</h2>
        <p class="mt-2">
          <i class="fas fa-map-marker-alt"></i> Local 81 segunda sección, Centro comercial las palmas, Villa Hidalgo, Jalisco.
        </p>
        <div class="d-flex social-links">
          <a href="https://wa.me/4491684618">
            <i class="fab fa-whatsapp"></i> 449 168 4618
          </a>

          <a href="https://www.facebook.com/villahidalgoenlinea">
            <i class="fab fa-facebook-square"></i> villahidalgoenlinea
          </a>

          <a href="https://www.facebook.com/ventas.villahidalgo">
            <i class="fab fa-facebook-square"></i> ventasvillahidalgo
          </a>
        </div>
      </div>
      <div class="col-md-6" id="contact2">
        <h3>Contactanos</h3>
        @if(Session::has('success'))
           <div class="alert alert-success">
             {{ Session::get('success') }}
           </div>
        @endif
        @if(Session::has('error'))
           <div class="alert alert-danger">
             {{ Session::get('error') }}
           </div>
        @endif
        <form action="{{route('email.send')}}" method="post" id="contactForm">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" name="name" class="form-control" placeholder="Juan Perez">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Correo Electronico</label>
            <input type="email" name="email" class="form-control" placeholder="ejemplo@ejemplo.com">
          </div>


          <div class="form-group">
            <label for="exampleTextarea">Mensaje</label>
            <textarea class="form-control" id="exampleTextarea" rows="3" name="message"></textarea>
          </div>

          <script>
          grecaptcha.ready(function() {
          grecaptcha.execute('6Lc2e3gUAAAAALTIDINpKs-UYUHrTi4kDeRzTzbF', {action: 'contact_fesyen'})
          .then(function(token) {
            let inputs = document.createElement('div');
            inputs.innerHTML = '<input type="hidden" name="token" value="' + token + '">'+
            '<input type="hidden" name="action" value="create_comment">';
            document.querySelector('#contactForm').prepend(inputs);
            document.querySelector('#submitButton').disabled = false;
          });
          });
          </script>

          <button type="submit" class="btn btn-primary" id="submitButton">Enviar</button>
        </form>
      </div>
    </div>
  </div>
@endsection
@section('footer')
  <script>
    document.querySelector('#submitButton').disabled = true;
  </script>
@endsection
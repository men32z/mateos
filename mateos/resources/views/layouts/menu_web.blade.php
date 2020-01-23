@php
  $current_route_name = Route::current()->getName();
  $current_tag_text = '<span class="sr-only">(current)</span>';
@endphp
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item {{$current_route_name == 'home' ? 'active':''}}">
        <a class="nav-link" href="/index">Inicio @php echo $current_route_name == 'home' ?$current_tag_text:'';@endphp</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('aboutus')}}">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('catalog')}}">Catalogo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contact')}}">Contacto</a>
      </li>
    </ul>

  </div>
</nav>
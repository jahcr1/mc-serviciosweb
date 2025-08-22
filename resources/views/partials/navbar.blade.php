<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Servicios</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Nosotros</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('portfolio') }}">Proyectos</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>

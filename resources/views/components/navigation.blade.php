<nav class="navbar navbar-expand-lg navbar-dark bg-transparent rounded-3 shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">

      {{-- Botón hamburguesa en móviles --}}
      <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
        aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      {{-- Menú colapsable --}}
      <div class="collapse navbar-collapse flex-grow-0" id="mainNavbar">
        <ul class="navbar-nav ms-auto text-center text-lg-start">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Sobre Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}">Proyectos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contacto</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

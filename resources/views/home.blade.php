@include('layouts.header')

<main class="container">
    <div class="text-center py-5">
        <h1>Bienvenido a {{ config('app.name') }}</h1>
        <p>Desarrollo web profesional para hacer crecer tu negocio</p>
        <a href="{{ route('contact') }}" class="btn btn-danger">Solicita tu presupuesto</a>
      </div>
</main>



@include('layouts.footer')

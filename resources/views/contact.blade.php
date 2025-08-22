@include('layouts.header')

@section('title', 'Contacto')

@section('content')
<h2>Contáctanos</h2>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form method="POST" action="{{ route('contact.send') }}">
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" name="name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Correo</label>
    <input type="email" name="email" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Mensaje</label>
    <textarea name="message" class="form-control" rows="5" required></textarea>
  </div>
  <button type="submit" class="btn btn-success">Enviar</button>
</form>
@endsection

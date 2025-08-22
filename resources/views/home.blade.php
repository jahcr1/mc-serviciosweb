@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="text-center py-5">
  <h1>Bienvenido a {{ config('app.name') }}</h1>
  <p>Desarrollo web profesional para hacer crecer tu negocio</p>
  <a href="{{ route('contact') }}" class="btn btn-primary">Solicita tu presupuesto</a>
</div>
@endsection

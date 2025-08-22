<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'MC Servicios Web') }}</title>

  {{-- Bootstrap desde CDN --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

  {{-- Estilos propios --}}
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  <header class="container py-3">
    <img src="/imgs/image1.png" alt="Logo">

    <x-navigation></x-navigation>
  </header>

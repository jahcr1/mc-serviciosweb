<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', config('app.name'))</title>
  <link href="{{ asset('build/assets/app.css') }}" rel="stylesheet">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  @include('partials.navbar')

  <main class="container my-4">
    @yield('content')
  </main>

  @include('partials.footer')

  <script src="{{ asset('build/assets/app.js') }}"></script>
</body>
</html>

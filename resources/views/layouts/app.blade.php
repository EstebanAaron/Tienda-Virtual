<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Tienda Virtual')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @stack('styles')
</head>
<body>
  <header>
    <h1>Tienda Virtual</h1>
  </header>
  <nav>
    <ul>
    @include('layouts.menu')
    </ul>
  </nav>
  <main>
    @yield('content')
  </main>
  <footer>
    <p>&copy; {{ date('Y') }} Tienda Virtual</p>
  </footer>
</body>
</html>

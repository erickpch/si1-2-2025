<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>@yield('titulo')</title>
  <link rel="stylesheet" href="{{asset('css\navbar.css')}}">
</head>
<body>
    
  <nav class="navbar">
    <a href="#" class="active">HOME </a>
    <a href="{{ route('i.rol') }}">Rol </a>
    <a href="{{ route('i.user') }}">Usuario </a>
    <a href="{{ route('i.producto') }}">Producto </a>
    <a href="#">Categoria </a>
    <a href="#">venta </a>
    
    <a href="{{ route('logout') }}">Logout </a>
  </nav>

  <div class="contenedor">
    @yield('contenido')
  </div>

</body>
</html>

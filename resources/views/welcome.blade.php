<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Comercio</title>
  <link rel="stylesheet" href={{ asset('css/login.css') }}>
</head>
<body>
  <div class="login-container">
    <h2>INICIAR SESIÓN</h2>


    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="form-group">
        <label for="email">Usuario</label>
        <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" required>
      </div>

      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
      </div>

      

      <button type="submit" class="btn-login">Entrar</button>
    </form>



    <p class="extra-text">¿No tienes cuenta? <a href="#">Regístrate</a></p>
  </div>
</body>
</html>

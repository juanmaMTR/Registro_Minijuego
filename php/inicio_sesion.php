<?php
    //Juan Manuel Toscano Reyes
    require 'operaciones_bd.php';
    $operaciones=new Operaciones();
    $operaciones->inicio_sesion();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Juan Manuel Toscano Reyes <jtoscanoreyes.guadalupe@alumnado.fundacionloyola.net>">
        <link rel="shortcut icon" href="../img/icon2.png" mce_href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://kit.fontawesome.com/f77d830886.js" crossorigin="anonymous"></script>
        <title>Minijuegos</title>
    </head>
    <body>
        <header>
            <a href="../index.html"><img src="../img/icon.png" /></a>
            <nav>
                <ul>
                    <li><a href="registro.php">Registro</a></li>
                    <li><a href="inicio_sesion.php">Inicio Sesión</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>INICIO SESION</h1>
            <form action="form" method="post">
                <input type="text" name="nombreUsuario" placeholder="Username" /><br>
                <input type="text" name="contrasena" placeholder="Password" /><br>
                <input type="submit" name="enviar" />
            </form>
        </main>
        <footer>
            <div id="footerWrapper">
                <div id="footerMenu">
                  <h3>Menú</h3>
                  <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="about.html">Nosotros</a></li>
                  </ul>
                </div>
                <div id="contactar">
                    <h3>Contactar</h3>
                    <p><i class="fas fa-location-arrow"></i>C/ Corte de Peleas, 79</p>
                    <p><i class="fas fa-phone-alt"></i>+34 924 25 17 61</p>
                </div>
                <div id="social">
                  <a href="https://www.instagram.com/edvguadalupe/"><img src="../img/social1.png"></a>
                  <a href="https://twitter.com/escuelaevg"><img src="../img/social2.png"></a>
                  <a href="https://www.facebook.com/EscuelaVirgendeGuadalupe/"><img src="../img/social3.png"></a>
                </div>
            </div>
            <div id="footerdown">
                <div id="privacidad">
                    <a href="https://www.aepd.es/es/politica-de-privacidad-y-aviso-legal">Política de privacidad</a>
                </div>
                <div id="licencia">
                    <span>© 2021 Todos los Derechos Reservados | </span>
                    <a class="evg" href="https://fundacionloyola.com/vguadalupe/">EVG</a>
                </div>
            </div>
        </footer>
    </body>
</html>
<?php
    $operaciones->cerrarconexion();
?>
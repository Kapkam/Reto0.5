<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <title>MaxCenter</title>
  </head>
  <body>
    <section class="navbar">
      <div class="nav">
        <ul>
          <li class="pags"><a href="#top">Inicio</a></li>
          <li class="pags">
            <div class="dropdown">
              <a class="dropbtn" href="#">Tiendas</a>
              <div class="dropdown-content">
              <a href="#">Zara</a>
              <a href="#">Game</a>
              <a href="#">Mediamarkt</a>
              </div>
            </div>
          </li>
          <li><a href="#top"><img src="{{ url('/img/logo.jpg') }}" alt="logo"></a></li>
          <li class="pags"><a href="#horario">Horario</a></li>
          <li class="pags"><a href="#contacto">Contáctenos</a></li>
        </ul>
      </div>
    </section>
    <section class="body">
      <div class="banner"></div>
      <div class="newsletter">
        <form class="suscribe" action="home.blade.php" method="post">
          <p>Suscríbete para recibir información todas las semanas.</p>
          <input type="text" name="nombre" placeholder="Nombre">
          <input type="email" name="email" placeholder="Email">
          <button type="button" name="button">Suscribirse</button>
        </form>
      </div>
      <div class="tiendas">
        <div class="tarjeta">
          <img src="../img/zara.jpg" alt="zara">
          <h1>ZARA</h1>
          <a href="#">Ver más.</a>
        </div>
        <div class="tarjeta">
          <img src="../img/mediamarkt.jpg" alt="mediamarkt">
          <h1>MediaMarkt</h1>
          <a href="#">Ver más.</a>
        </div>
        <div class="tarjeta">
          <img src="../img/game.jpg" alt="game">
          <h1>GAME</h1>
          <a href="#">Ver más.</a>
        </div>
      </div>
    </section>
    <section class="footer">

    </section>
  </body>
</html>

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
              <a class="dropbtn" href="#">Ropa</a>
              <div class="dropdown-content">
              <a href="#">Zara</a>
              <a href="#">Pull&Bear</a>
              <a href="#">Springfield</a>
              </div>
            </div>
          </li>
          <li class="pags">
            <div class="dropdown">
              <a class="dropbtn" href="#">Ocio</a>
              <div class="dropdown-content">
              <a href="#">Cines</a>
              <a href="#">Bolera</a>
              </div>
            </div>
          </li>
          <li><a href="#top"><img src="{{ url('/img/logo.png') }}" alt="logo"></a></li>
          <li class="pags">
            <div class="dropdown">
              <a class="dropbtn" href="#">Restaurantes</a>
              <div class="dropdown-content">
              <a href="#">Burguerking</a>
              <a href="#">Brasa y Leña</a>
              <a href="#">Foster's Hollywood</a>
              </div>
            </div>
          </li>
          <li class="pags">
            <div class="dropdown">
              <a class="dropbtn" href="#">Centro</a>
              <div class="dropdown-content">
              <a href="#horario">Horario</a>
              <a href="#mapa">Mapa</a>
              </div>
            </div>
          </li>
          <li class="pags"><a href="#contacto">Contáctenos</a></li>
        </ul>
      </div>
    </section>
    <section class="body">
      <div class="banner"></div>
      <div class="newsletter">
        <form class="suscribe" action="home.blade.php" method="post">
          <p>Suscríbete para no perderte nada.</p>
          <input type="text" name="nombre" placeholder="Nombre">
          <input type="email" name="email" placeholder="Email">
          <button type="button" name="button">Suscribirse</button>
        </form>
      </div>
      <div class="container">
        <div class="tiendas">
          <div class="info-titulo">
            <h1>Tiendas destacadas</h1>
            <hr>
          </div>
          <div class="tarjeta">
            <img src="../img/zara.jpg">
            <div class="info">
            <h3><strong>ZARA</strong></h3>
            <p>Publicado el: <span><?php echo date("Y-m-d") ?></span></p>
            <button type="button" name="button">Leer Más</button>
            </div>
          </div>
          <div class="tarjeta">
            <img src="../img/pullbear.jpg">
            <div class="info">
            <h3><strong>Pull&Bear</strong></h3>
            <p>Publicado el: <span><?php echo date("Y-m-d") ?></span></p>
            <button type="button" name="button">Leer Más</button>
            </div>
          </div>
          <div class="tarjeta">
            <img src="../img/maxbowling.png">
            <div class="info">
            <h3><strong>Max Bowling</strong></h3>
            <p>Publicado el: <span><?php echo date("Y-m-d") ?></span></p>
            <button type="button" name="button">Leer Más</button>
            </div>
          </div>
          <div class="tarjeta">
            <img src="../img/cinesa.png">
            <div class="info">
            <h3><strong>Cinesa</strong></h3>
            <p>Publicado el: <span><?php echo date("Y-m-d") ?></span></p>
            <button type="button" name="button">Leer Más</button>
            </div>
          </div>
          <div class="tarjeta">
            <img src="../img/king.jpg">
            <div class="info">
            <h3><strong>Burguer King</strong></h3>
            <p>Publicado el: <span><?php echo date("Y-m-d") ?></span></p>
            <button type="button" name="button">Leer Más</button>
            </div>
          </div>
          <div class="tarjeta">
            <img src="../img/mediamarkt.jpg">
            <div class="info">
            <h3><strong>MediaMarkt</strong></h3>
            <p>Publicado el: <span><?php echo date("Y-m-d") ?></span></p>
            <button type="button" name="button">Leer Más</button>
            </div>
          </div>
          <div class="tarjeta">
            <img src="../img/game.jpg">
            <div class="info">
            <h3><strong>GAME</strong></h3>
            <p>Publicado el: <span><?php echo date("Y-m-d") ?></span></p>
            <button type="button" name="button">Leer Más</button>
            </div>
          </div>
        </div>
      </div>
      <div class="promocion">
        <p>Las mejores ofertas de MaxCenter</p>
        <button class="btn-promocion"type="button" name="button">Más Promociones</button>
      </div>
      <div class="contactenos">
        <div id="mapa">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2585.667578605696!2d-3.008300760871674!3d43.288570257662386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e5098f8e89c49%3A0x92c3d3370aab5dfc!2sCentro%20Comercial%20Max%20Center!5e0!3m2!1ses!2ses!4v1571297495856!5m2!1ses!2ses" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="contact-form">
            <div class="row">
              <form class="con-form">
                <h1 id="contacto">Contáctenos</h1>
                <input type="email" class="form-control" placeholder="Your E-mail">
                <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                <button type="submit" class="btn btn-primary" name="Send">Send</button>
              </form>
              <div class="horario">
                <div>
                  <label>Tel:</label><input type="text" name="con-tel" readonly value="(+34) 94 499 73 00">
                  <label>E-mail</label><input type="text" name="con-email" readonly value="info@adm.maxcenter.com">
                </div>
                <div>
                  <h2>Horario</h2>
                  <div class="cc">
                    <h3>Centro Comercial</h3>
                    <p>Lun - Sab desde 10:00 hasta 22:00</p>
                    <p>Dom Cerrado(Los domingos las zonas de Ocio y Restauración permanecen abiertas (las Tiendas cierran))</p>
                  </div>
                  <div class="zo">
                    <h3>Zona Ocio</h3>
                    <p>Lun - Jue desde 12:00 hasta 01:30</p>
                    <p>Vie - Sab desde 12:00 hasta 03:30</p>
                    <p>Dom desde 12:00 hasta 01:30</p>
                  </div>
                  <div class="taquillas">
                    <h3>Taquillas</h3>
                    <p>Lun - Dom desde 15:30 hasta 23:00</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <section class="footer">

    </section>
  </body>
</html>

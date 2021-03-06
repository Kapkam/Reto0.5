<?php session_start();
  $_SESSION["shops"] = $shops;?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <script src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
	  <script type="text/javascript" src="{{ URL::asset('js/jquery.translate.js') }}"></script>
	  <script type="text/javascript" src="{{ URL::asset('js/translatejs.jquery.js') }}"></script>
	  <script type="text/javascript" src="{{ URL::asset('js/JavaScript.js') }}"></script>
	  <script type="text/javascript" src="{{ URL::asset('js/diccionario.js') }}"></script>
    <title>MaxCenter</title>
    <link rel="icon" type="image/png" href="{{url('/img/favicon.png')}}" sizes="32x32">
  </head>
  <body>
    <section class="navbar">
      <div id="myTopnav" class="nav">
        <ul>
          <li class="pags active"><a class="trn" data-trn-key="Home" href="{{route('home')}}">Inicio</a></li>
          <?php $cont = 0; ?>
            @foreach ($_SESSION["shops"] as $shop)
              <li class='pags'><a id=" <?php echo($shop->id); ?>" href="{{route('productos',$shop->id)}}"><?php echo($shop->name); ?></a></li>
              @if ($cont === 1)
                <li><a id="logo" href="#top"><img src="{{ url('/img/logo.png') }}" alt="logo"></a></li>
              @endif
              <?php $cont ++; ?>
            @endforeach
          <li class="pags dropdown">
            <a class="dropbtn trn" data-trn-key="Mall" href="{{route('home')}}">Centro</a>
            <div class="dropdown-content">
              <a class="trn" data-trn-key="Schedule" href="#horario">Horario</a>
              <a class="trn" data-trn-key="Map" href="#mapa">Mapa</a>
              <a class="trn" data-trn-key="Contact us" href="#contacto">Contáctanos</a>
            </div>
          </li>
          <li class="pags dropdown last">
            <a class="dropbtn trn" data-trn-key="Languages" href="#top">Idiomas</a>
            <div id="idiomas" class="dropdown-content">
              <img style="width:40px; height:25px; cursor:pointer; padding: 10px;" class="trad" src="{{ url('/img/ingles.png') }}" value="Ingles" name="Ingles" onclick="ingles()" alt="ingles">
              <img style="width:40px; height:25px; cursor:pointer; padding: 10px;" class="trad" src="{{ url('/img/español.png') }}" value="Castellano" name="Castellano" onclick="castellano()" alt="castellano">
            </div>
          </li>
          <li class="icon"><a href="javascript:void(0);" onclick="myFunction()"><img src="{{ url('/img/bars.png') }}" alt="bras"></a></li>
        </ul>
      </div>
    </section>
    <section class="body">
      <div class="banner"></div>
      <div class="newsletter">
        <form class="suscribe" action="home.blade.php" method="post">
          <p class="trn" data-trn-key="Subscribe" >Suscríbete para no perderte nada.</p>
          <input type="text" name="nombre" placeholder="Nombre">
          <input type="email" name="email" placeholder="Email">
          <button class="trn" data-trn-key="suscribe btn" type="button" name="button">Leer Más</button>
        </form>
      </div>
      <div id="tiendas" class="container">
        <div class="tiendas">
          <div class="info-titulo">
            <h1 class="trn" data-trn-key="Feature shops">Tiendas Destacadas</h1>
            <hr>
          </div>
          <div class="tarjeta">
            <img src="{{ asset('img/zara.jpg') }}">
            <div class="info">
            <h3><strong>ZARA</strong></h3>
            <button class="trn" data-trn-key="Read More" type="button" name="button">Leer Más</button>
            </div>
          </div>
          <div class="tarjeta">
            <img src="{{ asset('img/pullbear.jpg') }}">
            <div class="info">
            <h3><strong>Pull&Bear</strong></h3>
            <button class="trn" data-trn-key="Read More" type="button" name="button">Leer Más</button>
            </div>
          </div>
          <div class="tarjeta">
            <img src="{{ asset('img/maxbowling.png') }}">
            <div class="info">
            <h3><strong>Max Bowling</strong></h3>
            <button class="trn" data-trn-key="Read More" type="button" name="button">Leer Más</button>
            </div>
          </div>
          <div class="tarjeta">
            <img src="{{ asset('img/cinesa.png') }}">
            <div class="info">
            <h3><strong>Cinesa</strong></h3>
            <button class="trn" data-trn-key="Read More" type="button" name="button">Leer Más</button>
            </div>
          </div>
          <div class="tarjeta">
            <img src="{{ asset('img/king.jpg') }}">
            <div class="info">
            <h3><strong>Burguer King</strong></h3>
            <button class="trn" data-trn-key="Read More" type="button" name="button">Leer Más</button>
            </div>
          </div>
          <div class="tarjeta">
            <img src="{{ asset('img/mediamarkt.jpg') }}">
            <div class="info">
            <h3><strong>MediaMarkt</strong></h3>
            <button class="trn" data-trn-key="Read More" type="button" name="button">Leer Más</button>
            </div>
          </div>
          <div class="tarjeta">
            <img src="{{ asset('img/game.jpg') }}">
            <div class="info">
            <h3><strong>GAME</strong></h3>
            <button class="trn" data-trn-key="Read More" type="button" name="button">Leer Más</button>
            </div>
          </div>
        </div>
      </div>
      <div class="promocion">
        <p class="trn" data-trn-key="MaxOffers">Las mejores ofertas de MaxCenter</p>
        <button class="btn-promocion trn" data-trn-key="MaxOffers-btn" type="button" name="button">Más Promociones</button>
      </div>
      <div class="contactenos">
        <div id="mapa">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.222951106496!2d-3.0102398848727794!3d43.28865248394533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e5098f8e89c49%3A0x92c3d3370aab5dfc!2sCentro%20Comercial%20Max%20Center!5e0!3m2!1ses!2ses!4v1571382115335!5m2!1ses!2ses" width="400" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div id="contacto" class="contact-form">
          <div class="row">
            <form class="con-form">
              <h1 class="trn" data-trn-key="Contact us">Contáctenos</h1>
              <input type="email" class="form-control" placeholder="Your E-mail">
              <textarea class="form-control" rows="4" placeholder="Message"></textarea>
              <button type="submit" class="btn btn-primary" name="Send">Send</button>
            </form>
            <div class="horario">
              <div id="telEmail">
                <h2>Info:</h2>
                <label>Tel:</label><input type="text" name="con-tel" readonly value="(+34) 94 499 73 00"><br>
                <label>E-mail:</label><input type="text" name="con-email" readonly value="info@adm.maxcenter.com">
              </div>
              <div>
                <h1 class="trn" data-trn-key="Schedule" href="#horario" id="horario">Horario</h1>
                <table class="tg">
                  <tr>
                    <th class="tg-c3ow trn" data-trn-key="Mall" href="#horario">Centro comercial</th>
                    <th class="tg-baqh trn" data-trn-key="Leisure Zone">Zona Ocio</th>
                    <th class="tg-baqh trn" data-trn-key="Ticket office">Tquillas</th>
                  </tr>
                  <tr>
                    <td class="tg-baqh trn" data-trn-key="horario1">Lun - Sab desde 10:00 hasta 22:00</td>
                    <td class="tg-lqy6 trn" data-trn-key="horario2">Lun - Jue desde 12:00 hasta 01:30</td>
                    <td class="tg-baqh trn" data-trn-key="horario3">Lun - Dom desde 15:30 hasta 23:00</td>
                  </tr>
                  <tr>
                    <td class="tg-baqh trn" data-trn-key="horario4">Dom Cerrado</td>
                    <td class="tg-baqh trn" data-trn-key="horario5">Vie - Sab desde 12:00 hasta 03:30</td>
                    <td class="tg-baqh trn"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td class="tg-baqh trn" data-trn-key="horario7">Dom desde 12:00 hasta 01:30</td>
                    <td></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="footer">
      <div class="tgfo">
        <div class="tgfo1">
          <h2>Soporte</h2>
          <p>Correo electrónico</p>
          <p>Asistencia Tel.</p>
        </div>
        <div class="tgfo2">
          <h2>Servicios</h2>
          <p>Cines</p>
          <p>Bolera</p>
          <p>Tiendas/Restaurantes</p>
        </div>
        <h1>MAXCENTER</h1>
        <div class="tgfo3">
          <h2>Síguenos</h2>
          <p>Facebook</p>
          <p>Twitter</p>
          <p>Instagram</p>
        </div>
        <div class="tgfo4">
          <h2>Términos Legales</h2>
          <p>Política de Privacidad</p>
          <p>Condiciones de compra</p>
          <p>© Sonae Sierra 2019 Todos los derechos reservados</p>
        </div>
      </div>
    </section>
  </body>
</html>

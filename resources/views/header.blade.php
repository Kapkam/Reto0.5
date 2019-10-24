<section class="navbar">
  <div id="myTopnav" class="nav">
    <ul>
      <li class="pags active"><a class="trn" data-trn-key="Home" href="<?php echo route('home'); ?>">Inicio</a></li>
      <?php
        $cont = 0;
      ?>
      @foreach ($shops as $shop)
      <li class='pags'><a href="{{route('productos',$shop->id)}}"><?php echo($shop->name); ?></a></li>
        @if ($cont === 1)
          <li><a id='logo' href='#top'><img src="{{ asset('img/logo.png') }}" alt='logo'></a></li>
        @endif
        <?php
        $cont ++;
        ?>
      @endforeach
      <li class="pags dropdown">
        <a class="dropbtn trn" data-trn-key="Mall" href="<?php echo route('home'); ?>">Centro</a>
        <div class="dropdown-content">
          <a class="trn" data-trn-key="Schedule" href="#horario">Horario</a>
          <a class="trn" data-trn-key="Map" href="#mapa">Mapa</a>
          <a class="trn" data-trn-key="Contact us" href="#contacto">Contáctanos</a>
        </div>
      </li>
      <li class="pags dropdown last">
        <a class="dropbtn trn" data-trn-key="Languages" href="#top">Idiomas</a>
        <div class="dropdown-content">
          <input class="trad" type="image" src="../../img/ingles.png" width="20em" value="Ingles" name="Ingles" onclick="ingles()">
          <input class="trad" type="image" src="../../img/español.png" width="20em"value="Castellano" name="Castellano" onclick="castellano()">            </div>
      </li>
      <li class="icon"><a href="javascript:void(0);" onclick="myFunction()"><img src="{{ url('/img/bars.png') }}" alt="bras"></a></li>
    </ul>
  </div>
</section>

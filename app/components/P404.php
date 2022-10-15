<?php

class P404
{

  static function renderP404($title = "Página no encontrada", $classNames = "", $description = "La página que intentas ver no se encuentra disponible por el momento o no existe.")
  {
?>
<div id="notfound" class="<?php echo $classNames ?>">
  <div class="notfound">
    <div class="notfound-404"></div>
    <h2 class="t404">404</h2>
    <h2>Oops! <?php echo $title ?></h2>
    <p><?php echo $description ?></p>
    <a href="#">Regresar al inicio</a>
  </div>
</div>
<?php
  }
}
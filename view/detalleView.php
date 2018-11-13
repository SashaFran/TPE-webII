<?php
require_once('libs/Smarty.class.php');

class DetalleView
{

  function mostrarDet($detalles)
  {
    /* detalle: trae toda la informacion del juego seleccionado en index*/
    $smarty = new Smarty();
    $smarty->assign('detalle',$detalles);
    $smarty->display('templates/detalle.tpl');
  }
}



 ?>

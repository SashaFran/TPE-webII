<?php

require_once('libs/Smarty.class.php');

class EdicionView
{
  function Edicion($juego, $generos){
    $smarty = new Smarty();
    $smarty->assign('juego', $juego);
    $smarty->assign('generos', $generos);

    $smarty->display('templates/edicion.tpl');
}
}

 ?>

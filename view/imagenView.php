<?php

require_once('libs/Smarty.class.php');

class imagenView
{
//  function Imagen($juego, $Imgs, $error_message){
  function Imagen($juego, $Imgs){
    $smarty = new Smarty();
    $smarty->assign('juego', $juego);
    $smarty->assign('imgs', $Imgs);
//   $smarty->assign('error', $error_messages);

    $smarty->display('templates/imagenes.tpl');
}
}

 ?>

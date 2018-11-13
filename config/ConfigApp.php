<?php

define('ADMIN',"Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/administrador");
define('HOME',"Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
define('REGISTER',"Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/register");
define('LOGOUT',"Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/logout");
define('EDICION',"Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/edicion");


class ConfigApp{

  public static $ACTION = "action";
  public static $PARAMS = "params";
  public static $ACTIONS = [
      ''=>'homeController#HomeController',
      'home'=>'homeController#HomeController',
      'mostrarDetalle'=>'homeController#mostrarDetalle',
      'administrador'=>'adminController#admin',
      'signIn'=>'homeController#verifyUser',
      'register'=>'homeController#signUp',
      'agregar'=>'adminController#InsertJuego',
      'borrar'=>'adminController#BorrarJuego',
      'editar'=>'adminController#EditarJuego',
      'edicion'=>'adminController#Edicion',
      'genero'=>'adminController#InsertGenero',
      'borrarGen'=>'adminController#BorrarGenero',
      'editGen'=>'adminController#EditarGenero',
      'cargarRegistro'=>'signUpController#cargarRegistro',
      'filtrar'=>'homeController#HomeController',
      'filtrarAdmin'=>'adminController#Admin',
      'logout'=>'securedController#logout',
      'borrarimg'=>'adminController#BorrarImg',
      'agregarimg'=>'adminController#AgregarImg',
      'imagen'=>'adminController#Imagen'
  ];
}

 ?>

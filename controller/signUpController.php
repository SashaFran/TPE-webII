<?php

require_once './model/userModel.php';
require_once './view/registerView.php';

class signUpController
{

  private $userMod;
  private $registerView;

  function __construct()
  {
    $this->registerView = new registerView();
    $this->userMod = new userModel();
  }

  function cargarRegistro(){
    $user = $_POST['ingresarUsuario'];
    $pass =$_POST['ingresarPassword'];
    $rePass =$_POST['repetirPassword'];
    $error_message ="";
    if((!empty($user))&&(!empty($pass))&&(!empty($rePass)) ) {
        if($pass == $rePass){
          $this->userMod->CargarUsuario($user,$pass);
          header(HOME);
          }else{
            $error_message = "Las contraseñas no coinciden. Por favor, inténtelo de nuevo.";
            $this->registerView->register($error_message);
      }}
      else{
        $error_message = "Algunos campos estan incompletos. Por favor, inténtelo de nuevo.";
        $this->registerView->register($error_message);
      }
    }
}



 ?>

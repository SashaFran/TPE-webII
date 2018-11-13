<?php

require_once './view/registerView.php';

class userModel
{
  private $db;
  private $registerView;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_dgames;charset=utf8'
    , 'root', '');
    $this->registerView = new registerView();
  }

  function GetUsers($user)  {
    $sentencia= $this->db->prepare("select* from usuarios where Usuario = ?");
    $sentencia->execute(array($user));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function CargarUsuario($user,$pass){
    $hash_pass=password_hash($pass, PASSWORD_DEFAULT);
    $sentencia= $this->db->prepare("INSERT INTO usuarios(Usuario,Password) VALUES (?,?)");
    $sentencia->execute (array($user,$hash_pass));
  }


}


 ?>

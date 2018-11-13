<?php

class adminModel
    {

  private $db;

  function __construct()  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_dgames;charset=utf8'
    , 'root', '');
  }

  function GetJuegos()  {
    $sentencia= $this->db->prepare("select juegos.*, genero.* from juegos, genero where juegos.id_Genero = genero.id_Genero");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetDetalle($id){
    $sentencia= $this->db->prepare("select juegos.*, genero.Genero from juegos, genero where  juegos.id_Juego = ? and juegos.id_Genero = genero.id_Genero");
    $sentencia->execute(array($id));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertJuego(){
    $consola=$_POST['cargaConsola'];
    $titulo=$_POST['cargaTitulo'];
    $id_Genero=$_POST['selectGen'];
    $descripcion=$_POST['cargaDescripcion'];
    $precio=$_POST['cargaPrecio'];
    $imagen=$_POST['cargaImagen'];
    $sentencia = $this->db->prepare("INSERT INTO juegos(Consola,id_Genero,Titulo,Descripcion,Precio,img_path) VALUES (?,?,?,?,?,?)" );
    $sentencia->execute (array($consola,$id_Genero,$titulo,$descripcion,$precio,$imagen));
    $lastId = $this->db->lastInsertId();

    return $this->GetJuegos($lastId);
  }

  function BorrarJuego(){
    $id_juego = $_GET['idBorrar'];
    $task = $this->GetJuegos($id);
    if(isset($task)){
    $sentencia = $this->db->prepare("DELETE FROM juegos where id_Juego=?");
    $sentencia -> execute(array($id_juego));
    return $task;
}
  }

  function EditarJuego(){
    $id_juego = $_POST['idEditar'];
    $consola=$_POST['editConsola'];
    $titulo=$_POST['editTitulo'];
    $id_Genero=$_POST['editGenero'];
    $descripcion=$_POST['editDescripcion'];
    $precio=$_POST['editPrecio'];
    $imagen=$_POST['editImagen'];
    $sentencia = $this->db->prepare("UPDATE juegos SET Consola=?,Titulo=?,Descripcion=?,id_Genero=?,Precio=?,img_path=? where id_Juego=?");
    $sentencia->execute(array($consola,$titulo,$descripcion,$id_Genero,$precio,$imagen,$id_juego));
  }

  function AgregarImg($rutaTempImagenes){
  $destino_final = 'image/upload' . uniqid() . '.jpg';
  move_uploaded_file($rutaTempImagenes, $destino_final);
  $sentencia = $this->db->prepare("INSERT INTO imagenes(Img_path) VALUES(?)");
  $sentencia->execute($destino_final, $rutaTempImagenes);
  }

  function BorrarImg(){
    $task = $this->GetJuegos($id);
    if(isset($task)){
    $sentencia = $this->db->prepare("DELETE FROM imagenes where id_Juego=?");
    $sentencia -> execute(array($id));
    return $task;
  }
}
  function GetImage($id){
    $sentencia = $this->db->prepare("SELECT imagenes*, juegos* FROM imagenes, juegos WHERE juegos.id_Juego = imagenes.id_Juego");
    $sentencia->execute(array($id));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}
 ?>

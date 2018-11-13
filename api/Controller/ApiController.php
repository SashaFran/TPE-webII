<?php

require_once "Api.php";
require_once "./../model/adminModel.php";
//la idea seria tenerla en la carpeta api para que quede todo junto.
//Solo que separado se entiende mejor


class ApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new adminModel();
  }

function GetJuegos(){
  if(isset($params)){
  $id = $param[RESOURCE];

  $data = $this->model->GetJuegos($id);
    }else{
  $data = $this->model->GetJuegos();
//trae todos los juegos;
}
if(isset($data)){
  return $this->json_response($data, 200);
}else{
  return $this->json_response(null, 404);
    }
  }

function DeleteJuego($param){
  if(count($params) == 1){
      //si tiene un valor el arreglo
      $id = $param[RESOURCE];
      $r = $this->model-BorrarJuego($id);
      if($r == false){
        return $this->json_response($r, 300);
      }else{
        return $this-json_response($r, 200);
      }
  }else{
  $this->json_response("Tarea no especifica", 300);

    }
  }
function InsertJuego($param){
  //hacer ifs
  $OJ = $this->getJSONData();
     $r = $this->model->InsertaJuego($OJ->$consola,$OJ->$id_Genero,$OJ->$titulo,$OJ->$descripcion,$OJ->$precio,$OJ->$imagen);

     return $this->json_response($r, 200);
   }

function UpdateJuego($param){

  if(count($param) == 1);
    $id = $param[RESOURCE];
    $OJ = $this->getJSONData();
    $r = $this->model->EditarJuego($OJ->$consola,$OJ->$id_Genero,$OJ->$titulo,$OJ->$descripcion,$OJ->$precio,$OJ->$imagen, $id);
    return $this->json_response($r, 200);
  }else{
    return $this->json_response("Ninguna tarea especifica", 300);

  }
}
}
?>

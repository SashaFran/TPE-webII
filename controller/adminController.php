<?php


require_once './view/adminView.php';
require_once './model/adminModel.php';
require_once './view/indexView.php';
require_once './model/userModel.php';
require_once './view/registerView.php';
require_once './view/edicionView.php';
require_once './model/generoModel.php';
require_once 'securedController.php';
require_once './view/imagenView.php';

class adminController extends SecuredController
{
  private $view;
  private $titulo;
  private $genModel;
  private $adminModel;
  private $index;
  private $userMod;
  private $registerView;
  private $arrCat;
  private $categoria;
  private $edicionView;
  private $juego;
  private $generos;
  private $imagenView;

  function __construct(){
    parent::__construct();

    $this->view = new adminView();
    $this->titulo = "DigitalGames";
    $this->index = new indexView();
    $this->registerView = new registerView();
    $this->userMod = new userModel();
    $this->adminModel = new adminModel();
    $this->genModel = new generoModel();
    $this->edicionView = new EdicionView();
    $this->imagenView = new imagenView();
  }

  function Admin(){
    if(isset($_GET['seleccionarGenAdmin'])){
      $this->categoria = $_GET['seleccionarGenAdmin'];
      $this->arrCat=$this->genModel->FiltroGen($this->categoria);
      $juegos = $this->adminModel->GetJuegos();
      $generos = $this->genModel->GetGeneros();
      $this->view->Mostrar($this->arrCat,$this->titulo,$juegos,$generos);
    }else{
    $juegos = $this->adminModel->GetJuegos();
    $generos = $this->genModel->GetGeneros();
    $this->view->Mostrar($this->arrCat,$this->titulo,$juegos,$generos);
  }
  }

  function InsertJuego(){
    $this->adminModel->InsertJuego();
    header(ADMIN);
  }

  function BorrarJuego(){
    $this->adminModel->BorrarJuego();
    header(ADMIN);
  }

  function Edicion(){
  $id=$_POST['idEditar'];
  $this->generos = $this->genModel->GetGeneros();
  $this->juego = $this->adminModel->GetDetalle($id);
  $this->edicionView->Edicion($this->juego, $this->generos);
  }

  function EditarJuego(){
    $id=$_POST['idEditar'];
    $this->id = $this->adminModel->EditarJuego();
    $this->generos = $this->genModel->GetGeneros();
    $this->juego = $this->adminModel->GetDetalle($id);
    $this->edicionView->Edicion($this->juego,$this->generos);
  }

  function BorrarGenero(){
    $this->genModel->BorrarGenero();
    header(ADMIN);
  }

  function InsertGenero(){
    $this->genModel->InsertGenero();
    header(ADMIN);
  }

  function EditarGenero(){
    $this->genModel->EditarGenero();
    header(ADMIN);
  }

  function Imagen(){
    $id = $_GET['idImagen'];
    $juego = $this->adminModel->GetDetalle($id);
    $Imgs =  $this->adminModel->GetImage($id);
    $this->imagenView->Imagen($juego,$Imgs);
    }

  function AgregarImg(){
    $rutaTempImagenes = $_FILES['imagen']['tmp_name'];
    $this->adminModel->AgregarImg($rutaTempImagenes);
  //  $rutaTempImagen = $_FILES['imagen']['tmp_name'];
  //$this->adminModel->AgregarImg($rutaTempImagen);
    header(ADMIN);
  }

  function BorrarImg(){
    $this->adminModel->BorrarImg();

  }

    function GetImg(){
   $detalle = $this->adminModel->GetImage();
   $this->detalleView->mostrarDet($detalle);
  }
  function Temporal(){

  //      $name = basename($_FILES["pictures"]["temporal"]);
        $rutaTempImagenes = $_FILES['imagen']['tmp_name'];
        if ($_FILES['imagen']['type'] == 'image/jpeg'){
          $this->adminModel->AgregarImg($rutaTempImagenes);
          header(ADMIN);
        }else{
          $error_message = "La imagen debe ser JPG";
          $this->edicionView->Edicion($error_message);
        }
        move_uploaded_file($tmp_name, "$direccion/$temporal");

  }


}
 ?>

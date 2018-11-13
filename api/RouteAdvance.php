<?php

define('RESOURCE', 0);
define('PARAMS', 1);

require_once "Config/ConfigApi.php";
require_once "Controller/ApiController.php";


function parseURL($url){
  //"Parse": Analisala y devolveme algo
  //devuelve un arreglo de dos posiciones; 1:Accion, 2: Los parametros.
  $urlExploded = explode('/', $url);
  //ESTO DEVULVE ARREGLO LA PRIMERA POSICION LA URL QUE TIENE, CON EL METODO # Y EL METODO QUE VIENE.
  //Y LA SEGUNDA PARTE, LOS PARAAMETROS, SI ES QUE TIENE.
  //SI EXISTE LA URL #, HACE LO QUE VIENE ABAJO.
  $arrayReturn [ConfigApi::$RESOURCE] = $urlExploded[RESOURCE].'#'.$_SERVER['REQUEST_METHOD'];
  //en accion coloca lo que venga (la action a realizar) ej: borrar.
  $arrayReturn [ConfigApi::$PARAMS] = isset($urlExploded [PARAMS]) ? array_slice($urlExploded,1) : null;
  //en parametros, todos los parametros. Si estan seteados, entonces hace esto. Si no, pone null.
  //Slice: De todo lo que este posterior a la barra, agarralo y colocalo aca.
  //el otro route no soportaba mas de una barra y un parametro.
  return $arrayReturn;
}

//si esta seteada hace algo, si no, no muestra nada.
if(isset($_GET['resource'])){
   $urlData = parseURL($_GET['resource']);
   $resource = $urlData[ConfigApi::$RESOURCE]; //home?

if(array_key_exists($resource,ConfigApi::$RESOURCES)){
//si en array de actiones, existe esa action: hace algo. (configApp)
  $params = $urlData [ConfigApi::$PARAMS];
  //parametros que voy a pasar
  $resource = explode('#', ConfigApi::$RESOURCES[$resource]);
//la action que voy a ejecutar
//hago un explote para separar con un # la accion y luego el parametro.
  $controller = new $resource[0]();
  //el controlador esta en la posicion 0
  //new action = metaprogromacion (ej: "tareascontroller")
  //es metaprogromacion porque php lo permite.
  $metodo = $resource[1];
  if(isset($params) && $params != null){
    //si tiene parametros, traigo el metodo con parametros.
    echo $controller->$metodo($params);
    //siempre llamo al metodo con un arreglo de parametros.
  }else{
//si no, uso el metodo derecho.
echo $controller->$metodo();
}
}
}
 ?>

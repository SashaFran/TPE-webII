
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title> </title>

  <link rel="stylesheet" type="text/css" href="./style/estilo.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

  <div class="Navegador">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="home" id="Home">Home</a>
  </li>
  <li class="nav-item">
  <div class="dropdown ">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador</button>
  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">

    {if isset ($smarty.session.User)}
    {include file="logout.tpl"}
    {/if}
  </form>
  </div>
  </div>
  </li>
  </ul>
  </div>
<div class="formulario formEdicion">
  <h2>Agregue una o mas imagenes: </h2>
      {foreach from=$imgs item=Im}
  <li> Imagenes: {$Im['Img_path']} <a href="borrarimg/{$Im['id_Imagen']}"> Borrar Imagen </a></li>
  <li> <img src="{$Im['Img_path']}" alt="Imagen del juego {$Im['id_Juego']}"> </li>
      {/foreach}
  <form class="formCarga" action="agregarimg" method="post" enctype="multipart/form-data">
    <input class="inputCarga" type="file" name="imagen" value="{$Im['Img_path']}" placeholder="Direccion de Imagen para juego: {$Im['id_Imagen']}">
<!--    <small class="form-text text-muted">{$error}</small>-->
    <button class="btn" type="submit" value="{$game['id_Juego']}">Subir</button>
  </form>
</div>
{include file="footer.tpl"}

</body>
</html>


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

<div class="cuerpo">
<div class="rowEdicion">

<div class="formulario formEdicion">
  <h2>Edicion de Datos</h2>
  <form class="formCarga" action="editar" method="post">
    {foreach from=$juego item=game}
    <input class="inputCarga" type="text" name="editConsola" value="{$game['Consola']}">
    <p>Seleccione Genero
    <select class="inputCarga" name="editGenero">
      <option selected value="{$game['id_Genero']}">{$game['Genero']}</option>
      {foreach from=$generos item=genero}
        <option value= "{$genero['id_Genero']}" >{$genero['Genero']}</option>
      {/foreach}
    </select>
  </p>
    <input class="inputCarga" type="text" name="editTitulo" value="{$game['Titulo']}">
    <input class="inputCarga" type="number" name="editPrecio" value="{$game['Precio']}">
    <textarea name="editDescripcion" rows="4" cols="54">{$game['Descripcion']}</textarea>
    <input class="inputCarga" type="text" name="editImagen" value="{$game['img_path']}" placeholder="ingrese la direccion de la imagen">
    {/foreach}
    <button class="btn" type="submit"name="idEditar" value="{$game['id_Juego']}">Editar</button>
  </form>
</div>
<div class="cuerpoEdicion" id="Cuerpo">

{foreach from=$juego item=det}
<div class="infoTitulo">
  <h2>{$det['Titulo']}</h2>
</div>
<figure class="gameFig" >
  <img class="gameImg" src="{$det['img_path']}" alt="Shadow of the colossus">
</figure>
<div class="descripcion">
<div class="info">
  <h5 class="infoGame">Genero: {$det['Genero']} |</h5>
  <h5 class="infoGame">Consola: {$det['Consola']} |</h5>
  <h5 class="infoGame">Precio: $ {$det['Precio']}</h5>
</div>
  <h5>Descripcion:</h5>
  {$det['Descripcion']}<br>
</div>
{/foreach}

</div>
</div>
</div>
{include file="footer.tpl"}

</body>
</html>

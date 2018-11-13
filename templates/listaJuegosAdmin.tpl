
<div class="listaJuegos">
  <h2 class="items">Lista de juegos</h2>
  <ul class='tablaJuegos'>
  {foreach from=$juegos item=juego}
  <li> Id: {$juego['id_Juego']}<br>
    <div class="genRow">
    <h4 class="parr">Titulo: {$juego['Titulo']}</h4>
  <form class="boton btnLista" action="borrar" method="get">
    <button class="btn" type="submit" name="idBorrar" value="{$juego['id_Juego']}">Borrar</button>
    <button class="btn" type="submit" name="idEditar" formaction="edicion" formmethod="post" value="{$juego['id_Juego']}">Editar</button>
  </form>
  <form action="imagen" method="get">
    <button class="btn" type="submit" name="idImagen" value="{$juego['id_Juego']}">Edicion Imagen</button>
  </form>
</div>
  <hr>Consola: {$juego['Consola']}<br>Genero: {$juego['Genero']}<br>Precio: ${$juego['Precio']}<br>Descripcion: <br>{$juego['Descripcion']}<br><br>
  <hr></li>
  {/foreach}
  </ul>
</div>

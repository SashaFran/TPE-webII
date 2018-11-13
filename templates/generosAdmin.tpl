<div class="listaJuegos">
<h2 class="items">Lista de Items</h2>
<ul class='tablaJuegos'>
{foreach from=$categorias item=categoria}
<li> Id: {$categoria['id_Juego']} <br>
  <div class="genRow">
  <h4 class="parr">Titulo: {$categoria['Titulo']}</h4>
  <form class="boton btnLista" action="borrar" method="get">
    <button class="btn" type="submit" name="idBorrar" value="{$categoria['id_Juego']}">Borrar</button>
    <button class="btn" type="submit" name="idEditar" formaction="edicion" formmethod="post" value="{$categoria['id_Juego']}">Editar</button>
  </form>
</div>
  <hr>Consola: {$categoria['Consola']}<br>Genero: {$categoria['Genero']} (Id: {$categoria['id_Genero']}) <br>Descripcion: {$categoria['Descripcion']}<br>Precio: ${$categoria["Precio"]}<br>
<hr></li>
{/foreach}
</ul>
</div>

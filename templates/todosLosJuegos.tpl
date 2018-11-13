<h2>Todos los juegos</h2>
  <form action="mostrarDetalle" method="get">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Titulo</th>
          <th scope="col">Consola</th>
          <th scope="col">Genero</th>
        </tr>
      </thead>
      <tbody>
          {foreach from=$juegos item=juego}
          <tr>
          <td class="tdCategoria"><button type="submit" class="btnDet" name="checkDetalle" value="{$juego['id_Juego']}">{$juego['Titulo']}</button></td>
          <td class="tdCategoria">{$juego['Consola']}</td>
          <td class="tdCategoria"><button type="submit" class="btnDet" formaction="filtrar" method="get" name="seleccionarGen" value="{$juego['id_Genero']}">{$juego['Genero']}</td>
          </tr>
          {/foreach}
      </tbody>
    </table>
  </form>

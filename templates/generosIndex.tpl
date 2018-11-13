<h2>Juegos por genero</h2>

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
          {foreach from=$categorias item=categoria}
          <tr>
          <td class="tdCategoria"><button type="submit" class="btnDet" name="checkDetalle" value="{$categoria['id_Juego']}">{$categoria['Titulo']}</button></td>
          <td class="tdCategoria">{$categoria['Consola']}</td>
          <td class="tdCategoria">{$categoria['Genero']}</td>
          </tr>
          {/foreach}
      </tbody>
    </table>
  </form>

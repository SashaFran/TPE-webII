<?php
/* Smarty version 3.1.33, created on 2018-11-13 02:38:33
  from 'C:\xampp\htdocs\TPE\TPE\templates\todosLosJuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bea2b19e0c7b8_67023947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd97eb8e9c4ea72e18b3d7aa543d429f2aa47d7f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\TPE\\templates\\todosLosJuegos.tpl',
      1 => 1540415889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bea2b19e0c7b8_67023947 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Todos los juegos</h2>
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
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
?>
          <tr>
          <td class="tdCategoria"><button type="submit" class="btnDet" name="checkDetalle" value="<?php echo $_smarty_tpl->tpl_vars['juego']->value['id_Juego'];?>
"><?php echo $_smarty_tpl->tpl_vars['juego']->value['Titulo'];?>
</button></td>
          <td class="tdCategoria"><?php echo $_smarty_tpl->tpl_vars['juego']->value['Consola'];?>
</td>
          <td class="tdCategoria"><button type="submit" class="btnDet" formaction="filtrar" method="get" name="seleccionarGen" value="<?php echo $_smarty_tpl->tpl_vars['juego']->value['id_Genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['juego']->value['Genero'];?>
</td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
  </form>
<?php }
}

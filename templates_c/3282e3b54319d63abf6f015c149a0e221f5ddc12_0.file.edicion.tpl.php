<?php
/* Smarty version 3.1.33, created on 2018-11-12 21:59:19
  from 'C:\xampp\htdocs\TPE\TPE\templates\edicion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be9e9a70103a5_50889757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3282e3b54319d63abf6f015c149a0e221f5ddc12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\TPE\\templates\\edicion.tpl',
      1 => 1542056126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:logout.tpl' => 1,
    'file:imagenes.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5be9e9a70103a5_50889757 (Smarty_Internal_Template $_smarty_tpl) {
?>
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

    <?php if (isset($_SESSION['User'])) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:logout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
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
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juego']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
    <input class="inputCarga" type="text" name="editConsola" value="<?php echo $_smarty_tpl->tpl_vars['game']->value['Consola'];?>
">
    <p>Seleccione Genero
    <select class="inputCarga" name="editGenero">
      <option selected value="<?php echo $_smarty_tpl->tpl_vars['game']->value['id_Genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value['Genero'];?>
</option>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
        <option value= "<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_Genero'];?>
" ><?php echo $_smarty_tpl->tpl_vars['genero']->value['Genero'];?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
  </p>
    <input class="inputCarga" type="text" name="editTitulo" value="<?php echo $_smarty_tpl->tpl_vars['game']->value['Titulo'];?>
">
    <input class="inputCarga" type="number" name="editPrecio" value="<?php echo $_smarty_tpl->tpl_vars['game']->value['Precio'];?>
">
    <textarea name="editDescripcion" rows="4" cols="54"><?php echo $_smarty_tpl->tpl_vars['game']->value['Descripcion'];?>
</textarea>
    <input class="inputCarga" type="text" name="editImagen" value="<?php echo $_smarty_tpl->tpl_vars['game']->value['img_path'];?>
" placeholder="ingrese la direccion de la imagen">
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div class="EdicionImagen">
      <button class="btn" type="submit" name="idImagen" formaction="imagen" formmethod="post" value="<?php echo $_smarty_tpl->tpl_vars['juego']->value['id_Juego'];?>
">Edicion Imagen</button>
    </div>
    <button class="btn" type=button> Edicion Imagen</button>
    <?php $_smarty_tpl->_subTemplateRender("file:imagenes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
    <button class="btn" type="submit"name="idEditar" value="<?php echo $_smarty_tpl->tpl_vars['game']->value['id_Juego'];?>
">Editar</button>
  </form>
</div>
<div class="cuerpoEdicion" id="Cuerpo">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juego']->value, 'det');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['det']->value) {
?>
<div class="infoTitulo">
  <h2><?php echo $_smarty_tpl->tpl_vars['det']->value['Titulo'];?>
</h2>
</div>
<figure class="gameFig" >
  <img class="gameImg" src="<?php echo $_smarty_tpl->tpl_vars['det']->value['img_path'];?>
" alt="Shadow of the colossus">
</figure>
<div class="descripcion">
<div class="info">
  <h5 class="infoGame">Genero: <?php echo $_smarty_tpl->tpl_vars['det']->value['Genero'];?>
 |</h5>
  <h5 class="infoGame">Consola: <?php echo $_smarty_tpl->tpl_vars['det']->value['Consola'];?>
 |</h5>
  <h5 class="infoGame">Precio: $ <?php echo $_smarty_tpl->tpl_vars['det']->value['Precio'];?>
</h5>
</div>
  <h5>Descripcion:</h5>
  <?php echo $_smarty_tpl->tpl_vars['det']->value['Descripcion'];?>
<br>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}

<?php
/* Smarty version 3.1.33, created on 2018-11-13 03:07:52
  from 'C:\xampp\htdocs\TPE\TPE\templates\imagenes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bea31f8d448b7_35591185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58786604ee3fca7f689b35ce5ce570487584a23a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\TPE\\templates\\imagenes.tpl',
      1 => 1542074825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:logout.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bea31f8d448b7_35591185 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="formulario formEdicion">
  <h2>Agregue una o mas imagenes: </h2>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imgs']->value, 'Im');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Im']->value) {
?>
  <li> Imagenes: <?php echo $_smarty_tpl->tpl_vars['Im']->value['Img_path'];?>
 <a href="borrarimg/<?php echo $_smarty_tpl->tpl_vars['Im']->value['id_Imagen'];?>
"> Borrar Imagen </a></li>
  <li> <img src="<?php echo $_smarty_tpl->tpl_vars['Im']->value['Img_path'];?>
" alt="Imagen del juego <?php echo $_smarty_tpl->tpl_vars['Im']->value['id_Juego'];?>
"> </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <form class="formCarga" action="agregarimg" method="post" enctype="multipart/form-data">
    <input class="inputCarga" type="file" name="imagen" value="<?php echo $_smarty_tpl->tpl_vars['Im']->value['Img_path'];?>
" placeholder="Direccion de Imagen para juego: <?php echo $_smarty_tpl->tpl_vars['Im']->value['id_Imagen'];?>
">
<!--    <small class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</small>-->
    <button class="btn" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['game']->value['id_Juego'];?>
">Subir</button>
  </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}

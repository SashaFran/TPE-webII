<?php
/* Smarty version 3.1.33, created on 2018-11-13 06:05:55
  from 'C:\xampp\htdocs\TPE\TPE\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bea5bb33239a7_77053061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51f075ccd071371b3a8a2ef57bbbc3f73e04deea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\TPE\\templates\\detalle.tpl',
      1 => 1542085553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bea5bb33239a7_77053061 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title></title>

  <link rel="stylesheet" type="text/css" href="./style/estilo.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="Navegador">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="home" id="Home">Home</a>
  </li>
  </ul>
  </div>

<div class="cuerpoDetalle" id="Cuerpo">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detalle']->value, 'det');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['det']->value) {
?>
<div class="infoTitulo">
  <h2><?php echo $_smarty_tpl->tpl_vars['det']->value['Titulo'];?>
</h2>
</div>
<figure class="gameFig" >
  <img class="gameImg" src="<?php echo $_smarty_tpl->tpl_vars['det']->value['Img_path'];?>
" alt="juego <?php echo $_smarty_tpl->tpl_vars['det']->value['id_Juego'];?>
">
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
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}

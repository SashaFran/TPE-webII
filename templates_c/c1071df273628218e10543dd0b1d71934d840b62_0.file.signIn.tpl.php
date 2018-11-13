<?php
/* Smarty version 3.1.33, created on 2018-11-10 18:43:13
  from 'C:\xampp\htdocs\TPE\TPE\templates\signIn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be718b1313885_76293791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1071df273628218e10543dd0b1d71934d840b62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\TPE\\templates\\signIn.tpl',
      1 => 1540415889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be718b1313885_76293791 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="signIn" action="signIn" method="post">
<div class="form-group">
  <label for="exampleInputEmail1">Email</label>
  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Documento" placeholder="Ingrese email">
</div>
<div class="form-group">
  <label for="exampleInputPassword1">Password</label>
  <input type="password" class="form-control" id="exampleInputPassword1" name="Contraseña" placeholder="Password">
</div>
<button type="submit" class="btn btn-primary">Sign in</button>
<small id="emailHelp" class="form-text text-muted">¿No estas registrado?</small>
<button type="submit" formaction="register" class="btn btn-primary">Sign up</button>
<?php }
}

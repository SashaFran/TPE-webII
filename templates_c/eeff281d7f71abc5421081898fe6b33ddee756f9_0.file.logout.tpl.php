<?php
/* Smarty version 3.1.33, created on 2018-11-12 21:59:19
  from 'C:\xampp\htdocs\TPE\TPE\templates\logout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be9e9a75306b2_15604910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeff281d7f71abc5421081898fe6b33ddee756f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\TPE\\templates\\logout.tpl',
      1 => 1540415889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be9e9a75306b2_15604910 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post">
  <button type="submit" class="dropdown-item" formaction="administrador">Administrar contenido</button>
  <button type="submit" class="dropdown-item" formaction="logout">Logout</button>
</form>
<?php }
}

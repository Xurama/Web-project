<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 10:22:52
  from 'C:\laragon\www\projet web\templates\succes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc4c7fc821556_65346821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b6500043b648e1d783fa9845027c696ef9e31e9' => 
    array (
      0 => 'C:\\laragon\\www\\projet web\\templates\\succes.tpl',
      1 => 1606491500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc4c7fc821556_65346821 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
   </head>
    <body>
        <p><?php echo $_smarty_tpl->tpl_vars['route']->value;?>
</p>
        <p>Vous êtes maintenant inscris !</p>
        <a href="./">Revenir à l'accueil</a>
   </body>
</html><?php }
}

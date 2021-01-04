<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-04 08:27:25
  from 'C:\laragon\www\projet web\templates\candidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff2d16d57c261_52723984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6135d991df2ba32026df5d6ce29c04eb6667e5a' => 
    array (
      0 => 'C:\\laragon\\www\\projet web\\templates\\candidature.tpl',
      1 => 1609748803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff2d16d57c261_52723984 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Javascript -->

    <?php echo '<script'; ?>
 style="text/javascript"src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"><?php echo '</script'; ?>
>  

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
  </head>
   <header class="pb-1 text-center bg-dark text-white">
      
      <h1> Candidature festival de musique associatif pour les <span id="typed"></span>
        <?php echo '<script'; ?>
>
          var typed = new Typed('#typed', {
            strings:["chanteurs.", "producteurs.", "danseurs."],
            typeSpeed : 100,
            backSpeed : 50,
            loop : true
          })
        <?php echo '</script'; ?>
> 
      </h1>
    </header>
    <body>
    
        <p><?php echo $_smarty_tpl->tpl_vars['route']->value;?>
</p>
        <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['error'])))) {?>
          <span><?php echo $_smarty_tpl->tpl_vars['error']->value['error'];?>
</span>
        <?php }?>
        <form action="connexion" method="post">
            <div>
                <p><label for="name">Nom</label>
                <input type="text" id="name" name="nom" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_nom']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Nom"></p>
            </div>
            <div>
                <p><label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_mail']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Adresse valide"></p>
                <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['email'])))) {?>
                  <span><?php echo $_smarty_tpl->tpl_vars['error']->value['email'];?>
</span>
                <?php }?>
            </div>
            <div>
                <p><label for="password">MotDePasse</label>
                <input type="password" id="password" name="motdepasse" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_mdp']->value)===null||$tmp==='' ? '' : $tmp);?>
" minlength="8" placeholder="Minimum 8 caractères">
                <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['motdepasse'])))) {?>
                  <span><?php echo $_smarty_tpl->tpl_vars['error']->value['motdepasse'];?>
</span>
                <?php }?>
            </div>
            <div>
                <p><input class="button" type="submit"></p>            
            </div>
        </form>
   </body>
   <footer class="footer fixed-bottom border-top text-center ">
      <blockquote class="blockquote text-center ">  
        <p class="mb-0">Made by PHILIPPE Lucas, MARCEAU Eric, DAGNICOURT Louis, BENBETKA Logan.</p>
        <footer class="blockquote-footer">A famous group in <cite title="Source title">IUT Amiens France</cite></footer>    
    </footer>
</html><?php }
}

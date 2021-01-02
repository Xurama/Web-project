<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 18:12:15
  from 'C:\laragon\www\projet web\templates\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc7d8ffc6a5f4_39790722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37cb0a2bf2dc47c9b97d56574fe4a39742d52053' => 
    array (
      0 => 'C:\\laragon\\www\\projet web\\templates\\inscription.tpl',
      1 => 1606932735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc7d8ffc6a5f4_39790722 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Javascript -->

    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>

    <!--CSS -->
    <link rel="stylesheet" href="style/inscription.css">
  </head>
  <body >
    <header >
      <nav class="pb-2 navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="./">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </nav>

    </header>
    <main>
      <p><?php echo $_smarty_tpl->tpl_vars['route']->value;?>
</p>
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="card text-center mt-5">
            <div class="card-header">
              Inscription
            </div>
            <div class="card-body">
              <form class="container mt-5 " action="inscription" method="post">
                <div class="form-group row justify-content-center  ">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text " id="basic-addon1">Nom d'utilisateur</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Utilisateur" aria-label="Username" id="name" name="nom"  aria-describedby="basic-addon1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_nom']->value)===null||$tmp==='' ? '' : $tmp);?>
" >
                  </div>
                  <?php if (((isset($_smarty_tpl->tpl_vars['erreur']->value['nom'])))) {?><p><?php echo $_smarty_tpl->tpl_vars['erreur']->value['nom'];?>
</p><?php }?>
                  <div class="input-group mb-3 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Adresse email</span>
                    </div>
                    <input type="email" id="email" name="email" class="form-control" placeholder="exemple@gmail.com" aria-label="Email" aria-describedby="basic-addon1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_mail']->value)===null||$tmp==='' ? '' : $tmp);?>
">
                  </div>
                  <?php if (((isset($_smarty_tpl->tpl_vars['erreur']->value['email'])))) {?><p><?php echo $_smarty_tpl->tpl_vars['erreur']->value['email'];?>
</p><?php }?>
                  <div class="input-group mb-3 ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Mot de passe</span>
                    </div>
                    <input type="password" id="password" name="motdepasse" class="form-control" placeholder="Minimum 8 caractères" aria-label="Password" aria-describedby="basic-addon1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_mdp']->value)===null||$tmp==='' ? '' : $tmp);?>
">
                  </div>
                  <div>
                    <?php if (((isset($_smarty_tpl->tpl_vars['erreur']->value['motdepasse'])))) {?><p><?php echo $_smarty_tpl->tpl_vars['erreur']->value['motdepasse'];?>
</p><?php }?>
                  </div>
                  <div class="form-group">
                      <div class="btn-group ">
                        <p><input class="btn btn-primary btn-link btn-lg" type="submit"></p>  
                      </div>
                  </div>
                </div>
              </form>           
            </div>
            <div class="card-footer text-muted">
              <p>Vous avez un compte ?<a href="#" class=" ml-2 btn btn-primary">Connectez vous.</a></p>
            </div>
          </div>
        </div>
      </div>
    <footer class="footer fixed-bottom border-top text-center ">
      <blockquote class="blockquote text-center ">  
        <p class="mb-0">Made by PHILIPPE Lucas, MARCEAU Eric, DAGNICOURT Louis, BENBETKA Logan.</p>
        <footer class="blockquote-footer">A famous group in <cite title="Source title">IUT Amiens France</cite></footer>    
    </footer>
  </body>
</html>

<?php }
}

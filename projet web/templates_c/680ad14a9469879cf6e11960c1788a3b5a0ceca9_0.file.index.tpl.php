<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-06 09:35:43
  from 'C:\laragon\www\projet web\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff5846f8adf92_49009095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '680ad14a9469879cf6e11960c1788a3b5a0ceca9' => 
    array (
      0 => 'C:\\laragon\\www\\projet web\\templates\\index.tpl',
      1 => 1609925742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff5846f8adf92_49009095 (Smarty_Internal_Template $_smarty_tpl) {
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
  <body>
    <header class="pb-2 pt-2 bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="ml-5 pl-5"> Candidature festival de musique associatif pour les <span id="typed"></span>
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
            </h2>
          </div>
        </div>
      </div>
    </header>
    <main>
    <?php if ((isset($_smarty_tpl->tpl_vars['logged']->value))) {?>
      <?php if ($_smarty_tpl->tpl_vars['type']->value == "administrateur") {?>
      <section class="pt-5 mt-5 pt-md-11">
          <div class="container">
            <div class="row align-items-center ">
              <div class="col-12 col-md-5 col-lg-6 order-md-2">
                <img src="img/festival.jpg" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="Fluid image">
              </div>
              <div class="col-12 col-md-7 col-lg-6 order-md-1">
                <h1 class="display-4 text-center text-md-left">
                Bienvenue
                <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>.
                </h1>
                <p class="lead text-center text-md-left text-muted mb-6 mb-lg-8">Si vous souhaitez performer devant une foule de spectateurs, postulez au festival !</p>
                <div class="btn-group text-center text-md-left">
                  <a class="btn btn-primary btn-link btn-lg" href="./candidature">Voir liste candidature
                  <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
                  </a>
                  <a class="btn btn-primary btn-link btn-lg" href="./listecandidature">Editer
                  <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
                  </a>
                  <a class="btn btn-primary btn-link btn-lg" href="./deconnexion">Déconnexion
                  <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
                  </a> 
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php } else { ?>
        <section class="pt-5 mt-5 pt-md-11">
          <div class="container">
            <div class="row align-items-center ">
              <div class="col-12 col-md-5 col-lg-6 order-md-2">
                <img src="img/festival.jpg" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="Fluid image">
              </div>
              <div class="col-12 col-md-7 col-lg-6 order-md-1">
                <h1 class="display-4 text-center text-md-left">
                Bienvenue
                <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>.
                </h1>
                <p class="lead text-center text-md-left text-muted mb-6 mb-lg-8">Si vous souhaitez performer devant une foule de spectateurs, postulez au festival !</p>
                <div class="btn-group text-center text-md-left">
                  <a class="btn btn-primary btn-link btn-lg" href="./candidature">Candidature
                  <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
                  </a>
                  <a class="btn btn-primary btn-link btn-lg" href="./listecandidature">Liste candidature
                  <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
                  </a>
                  <a class="btn btn-primary btn-link btn-lg" href="./deconnexion">Déconnexion
                  <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
                  </a> 
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php }?>
    <?php } else { ?>
      <section class="pt-5 mt-5 pt-md-11">
        <div class="container">
          <div class="row align-items-center ">
            <div class="col-12 col-md-5 col-lg-6 order-md-2">
              <img src="img/festival.jpg" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="Fluid image">
            </div>
            <div class="col-12 col-md-7 col-lg-6 order-md-1">
              <h1 class="display-4 text-center text-md-left">
              Faîtes votre 
              <span class="text-primary">choix</span>.
              </h1>
              <p class="lead text-center text-md-left text-muted mb-6 mb-lg-8">Si vous souhaitez performer devant une foule de spectateurs, postulez au festival !</p>
              <div class="btn-group text-center text-md-left">
                <a class="btn btn-primary btn-link btn-lg" href="./inscription">Inscription
                <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
                </a>
                <a class="btn btn-primary btn-link btn-lg" href="./connexion">Connexion
                <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php }?>
    </main>
    <footer class="footer fixed-bottom border-top text-center ">
      <blockquote class="blockquote text-center ">  
        <p class="mb-0">Made by PHILIPPE Lucas, MARCEAU Eric, DAGNICOURT Louis, BENBETKA Logan.</p>
        <footer class="blockquote-footer">A famous group in <cite title="Source title">IUT Amiens France</cite></footer>    
    </footer>
  </body>
</html>

<?php }
}

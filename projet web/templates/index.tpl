{* Commentaire Smarty *}
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Javascript -->

    <script style="text/javascript"src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>  

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>{$titre}</title>
  </head>
  <body>
    <header class="pb-2 pt-2 bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="ml-5 pl-5"> Candidature festival de musique associatif pour les <span id="typed"></span>
            <script>
              var typed = new Typed('#typed', {
                strings:["chanteurs.", "producteurs.", "danseurs."],
                typeSpeed : 100,
                backSpeed : 50,
                loop : true
              })
            </script> 
            </h2>
          </div>
        </div>
      </div>
    </header>
    <main>
    {if isset($logged)}
      {if $type=="administrateur"}
      <section class="pt-5 mt-5 pt-md-11">
          <div class="container">
            <div class="row align-items-center ">
              <div class="col-12 col-md-5 col-lg-6 order-md-2">
                <img src="img/festival.jpg" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="Fluid image">
              </div>
              <div class="col-12 col-md-7 col-lg-6 order-md-1">
                <h1 class="display-4 text-center text-md-left">
                Bienvenue
                <span class="text-primary">{$username}</span>.
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
      {else}
        <section class="pt-5 mt-5 pt-md-11">
          <div class="container">
            <div class="row align-items-center ">
              <div class="col-12 col-md-5 col-lg-6 order-md-2">
                <img src="img/festival.jpg" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="Fluid image">
              </div>
              <div class="col-12 col-md-7 col-lg-6 order-md-1">
                <h1 class="display-4 text-center text-md-left">
                Bienvenue
                <span class="text-primary">{$username}</span>.
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
      {/if}
    {else}
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
    {/if}
    </main>
    <footer class="footer fixed-bottom border-top text-center ">
      <blockquote class="blockquote text-center ">  
        <p class="mb-0">Made by PHILIPPE Lucas, MARCEAU Eric, DAGNICOURT Louis, BENBETKA Logan.</p>
        <footer class="blockquote-footer">A famous group in <cite title="Source title">IUT Amiens France</cite></footer>    
    </footer>
  </body>
</html>


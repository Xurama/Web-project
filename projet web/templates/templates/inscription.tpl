{* Commentaire Smarty *}
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Javascript -->

    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>{$titre}</title>

    <!--CSS -->
    <link rel="stylesheet" href="style/inscription.css">
  </head>
  <body {*style="background-color: #ECFEF0;"*}>
    <header >
      <nav class="pb-2 navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="./">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </nav>

    </header>
    <main>
      <p>{$route}</p>
      <div class="card text-center mt-5 mx-auto">
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
                <input type="text" class="form-control" placeholder="Utilisateur" aria-label="Username" id="name" name="nom"  aria-describedby="basic-addon1" value="{$user_nom|default:''}" >
                {if (isset($erreur['nom']))}<p>{$erreur['nom']}</p>{/if}
              </div>
              <div class="input-group mb-3 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Adresse email</span>
                </div>
                <input type="email" id="email" name="email" class="form-control" placeholder="exemple@gmail.com" aria-label="Email" aria-describedby="basic-addon1" value="{$user_mail|default:''}">
                {if (isset($erreur['email']))}<p>{$erreur['email']}</p>{/if}
              </div>
              <div class="input-group mb-3 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Mot de passe</span>
                </div>
                <input type="password" id="password" name="motdepasse" class="form-control" placeholder="Minimum 8 caractères" aria-label="Password" aria-describedby="basic-addon1" value="{$user_mdp|default:''}">
                {if (isset($erreur['motdepasse']))}<p>{$erreur['motdepasse']}</p>{/if}
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
    <footer class="footer fixed-bottom border-top text-center">
      <blockquote class="blockquote text-center">  
        <p class="mb-0">Made by PHILIPPE Lucas, MARCEAU Eric, DAGNICOURT Louis, BENBETKA Logan.</p>
        <footer class="blockquote-footer">A famous group in <cite title="Source title">IUT Amiens France</cite></footer>    
    </footer>
  </body>
</html>


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
   <header class="pb-1 text-center bg-dark text-white">
      
      <h1> Candidature festival de musique associatif pour les <span id="typed"></span>
        <script>
          var typed = new Typed('#typed', {
            strings:["chanteurs.", "producteurs.", "danseurs."],
            typeSpeed : 100,
            backSpeed : 50,
            loop : true
          })
        </script> 
      </h1>
    </header>
    <body>
    
        <p>{$route}</p>
        {if (isset($error['error']))}
          <span>{$error['error']}</span>
        {/if}
        <form action="connexion" method="post">
            <div>
                <p><label for="name">Nom</label>
                <input type="text" id="name" name="nom" value="{$user_nom|default:''}" placeholder="Nom"></p>
            </div>
            <div>
                <p><label for="email">Email</label>
                <input type="email" id="email" name="email" value="{$user_mail|default:''}" placeholder="Adresse valide"></p>
                {if (isset($error['email']))}
                  <span>{$error['email']}</span>
                {/if}
            </div>
            <div>
                <p><label for="password">MotDePasse</label>
                <input type="password" id="password" name="motdepasse" value="{$user_mdp|default:''}" minlength="8" placeholder="Minimum 8 caractères">
                {if (isset($error['motdepasse']))}
                  <span>{$error['motdepasse']}</span>
                {/if}
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
</html>
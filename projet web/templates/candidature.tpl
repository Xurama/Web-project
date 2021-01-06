{* Commentaire Smarty *}
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Javascript -->

    <script style="text/javascript"src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>  
    <script>
              var i=0;
              function addinput()
              {
                  i++;/*
                  document.getElementById("frm" ).innerHTML += "<br /><input name='txt"+i+"' type='text' value='' />";*/
                  
                  var frm = document.getElementById("frm"); //le noeud parent
                  
                  // creation d'un champ
                  var inpt = document.createElement('input');
                  inpt.setAttribute('name','txt'+i);
                  inpt.setAttribute('type','text');
                  frm.appendChild(inpt);
                  
                  // retour a la ligne aprés l'ajout
                  var br = document.createElement('br');
                  frm.appendChild(br);
                  
                  //Incrementation du compteur i (nombre de champ)
                  document.getElementById("cmp" ).value=i;
              }
          </script> 
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
        <form action="candidature" method="post">
            <div>
                <p><label for="namegroup">Nom du groupe</label>
                <input type="text" id="namegroup" name="nom" value="{$user_nomgroupe|default:''}" placeholder="NomGroupe"></p>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Scène</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Choisir...</option>
                <option value="1">Tribute</option>
                <option value="2">Acoustique/Folk</option>
                <option value="3">Amplifié/Rock</option>
              </select>
            </div>
            <div>
                <p><label for="scene">Scene</label>
                <input type="radio" id="scene" name="scene" value="{$user_scene|default:''}" placeholder="Adresse valide">Tribute
                <input type="radio" id="scene" name="scene" value="{$user_scene|default:''}" placeholder="Adresse valide">Acoustique/Folk
                <input type="radio" id="scene" name="scene" value="{$user_scene|default:''}" placeholder="Adresse valide">Amplifié/Rock</p>
                {if (isset($error['scene']))}
                  <span>{$error['scene']}</span>
                {/if}
            </div>
            <div>
                <p><label for="repgroupe">Representant du groupe</label>  
                <input type="text" id="repgroupe" name="nomrepgroupe" value="{$user_nomrepgroupe|default:''}" placeholder="Nom">
                <input type="text" id="repgroupe" name="prenomrepgroupe" value="{$user_prenomrepgroupe|default:''}" placeholder="Prenom">
                <input type="text" id="repgroupe" name="adresserepgroupe" value="{$user_adresserepgroupe|default:''}" placeholder="Adresse">
                <input type="text" id="repgroupe" name="codepostalrepgroupe" value="{$user_codepostalrepgroupe|default:''}" placeholder="Code Postal">
                <input type="text" id="repgroupe" name="emailrepgroupe" value="{$user_emailrepgroupe|default:''}" placeholder="Email">
                <input type="text" id="repgroupe" name="telrepgroupe" value="{$user_telrepgroupe|default:''}" placeholder="Téléphone">
                {if (isset($error['repgroupe']))}
                  <span>{$error['repgroupe']}</span>
                {/if}
            </div>
            <div>
                <p><label for="stylemusic">Style musical</label>
                <input type="text" id="stylemusic" name="stylemusic" value="{$user_stylemusic|default:''}") placeholder="StyleMusical">
                {if (isset($error['motdepasse']))}
                  <span>{$error['motdepasse']}</span>
                {/if}
            </div>
            <div>
                <p><label for="anneecreation">Année de la création</label>
                <input type="text" id="anneecreation" name="anneecreation" value="{$user_anneecreation|default:''}") placeholder="AnneeCreation">
                {if (isset($error['anneecreation']))}
                  <span>{$error['anneecreation']}</span>
                {/if}
            </div>
            <div>
                <p><label for="presentation">Présentation</label>
                <input type="text" id="presentation" name="presentation" value="{$user_presentation|default:''}") placeholder="Présentation">
                {if (isset($error['presentation']))}
                  <span>{$error['presentation']}</span>
                {/if}
            </div>
            <div>
                <p><label for="experience">Expériences</label>
                <input type="text" id="experience" name="experience" value="{$user_experience|default:''}") placeholder="Expériences">
                {if (isset($error['experience']))}
                  <span>{$error['experience']}</span>
                {/if}
            </div>
            <div>
                <p><label for="siteinternet">Site Internet</label>
                <input type="text" id="siteinternet" name="siteinternet" value="{$user_siteinternet|default:''}") placeholder="SiteInternet">
                {if (isset($error['siteinternet']))}
                  <span>{$error['siteinternet']}</span>
                {/if}
            </div>
            <div>
                <p><label for="siteinternet">Site Internet</label>
                <input type="text" id="siteinternet" name="siteinternet" value="{$user_siteinternet|default:''}") placeholder="SiteInternet">
                {if (isset($error['siteinternet']))}
                  <span>{$error['siteinternet']}</span>
                {/if}
            </div>
            <div>
                <p><label for="adressesoundcloud">Adresse Soundcloud</label>
                <input type="text" id="adressesoundcloud" name="adressesoundcloud" value="{$user_adressesoundcloud|default:''}") placeholder="adressesoundcloud">
                {if (isset($error['adressesoundcloud']))}
                  <span>{$error['adressesoundcloud']}</span>
                {/if}
            </div>
            <div>
                <p><label for="adresseyoutube">Adresse Youtube</label>
                <input type="text" id="adresseyoutube" name="adresseyoutube" value="{$user_adresseyoutube|default:''}") placeholder="AdresseYoutube">
                {if (isset($error['adresseyoutube']))}
                  <span>{$error['adresseyoutube']}</span>
                {/if}
            </div>
            <input type='button' id='ajIn' value=' ajouter ' onClick='addinput()' />
                <input  type="hidden" value="javascript:i;" name="cmp" id="cmp" />
                <div id="frm" ></div>
            <div>
                <p><label for="membresgroupe">Membres du groupe</label>
                <input type="text" id="membresgroupe" name="membresgroupe" value="{$user_membresgroupe|default:''}") placeholder="MembresGroupe">
                {if (isset($error['membresgroupe']))}
                  <span>{$error['membresgroupe']}</span>
                {/if}
            </div>
            <div>
                <p><label for="statutasso">Statut associatif</label>
                <input type="radio" id="statutasso" name="statutasso" value="{$user_statutasso|default:''}" placeholder="StatutAsso">Oui
                <input type="radio" d="statutasso" name="statutasso" value="{$user_statutasso|default:''}" placeholder="StatutAsso">Non</p>
                {if (isset($error['statutasso']))}
                  <span>{$error['statutasso']}</span>
                {/if}
            </div>
            <div>
              <p><label for="sacem">Inscrit à la SACEM</label>
              <input type="radio" id="sacem" name="sacem" value="{$user_sacem|default:''}" placeholder="SACEM">Oui
              <input type="radio" d="sacem" name="sacem" value="{$user_sacem|default:''}" placeholder="SACEM">Non</p>
              {if (isset($error['sacem']))}
                <span>{$error['sacem']}</span>
              {/if}
            </div>
            <div>
                <p><label for="producteur">Producteur</label>
                <input type="radio" id="producteur" name="producteur" value="{$user_producteur|default:''}" placeholder="producteur">Oui
                <input type="radio" d="producteur" name="producteur" value="{$user_producteur|default:''}" placeholder="producteur">Non</p>
                {if (isset($error['producteur']))}
                  <span>{$error['producteur']}</span>
                {/if}
            </div>
            <div>
              Fichiers MP3 : <form action="envoi" method="post" enctype="multipart/form-data">
              <input name="photogroupe" type="file">
            </div>
            <div>
              Dossier PDF : <form action="envoi" method="post" enctype="multipart/form-data">
              <input name="photogroupe" type="file">
            </div>
            <div>
              Photo du groupe : <form action="envoi" method="post" enctype="multipart/form-data">
              <input name="photogroupe" type="file">
            </div>
            <div>
              Fiche technique en PDF : <form action="envoi" method="post" enctype="multipart/form-data">
              <input name="photogroupe" type="file">
            </div>
            <div>
              Document de la SACEM : <form action="envoi" method="post" enctype="multipart/form-data">
              <input name="photogroupe" type="file">
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
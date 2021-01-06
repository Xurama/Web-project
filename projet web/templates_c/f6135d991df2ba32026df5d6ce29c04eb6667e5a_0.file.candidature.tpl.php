<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-06 12:23:10
  from 'C:\laragon\www\projet web\templates\candidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff5abae2308f4_34991843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6135d991df2ba32026df5d6ce29c04eb6667e5a' => 
    array (
      0 => 'C:\\laragon\\www\\projet web\\templates\\candidature.tpl',
      1 => 1609935646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff5abae2308f4_34991843 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
>
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
          <?php echo '</script'; ?>
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
        <form action="candidature" method="post">
            <div>
                <p><label for="namegroup">Nom du groupe</label>
                <input type="text" id="namegroup" name="nom" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_nomgroupe']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="NomGroupe"></p>
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
                <input type="radio" id="scene" name="scene" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_scene']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Adresse valide">Tribute
                <input type="radio" id="scene" name="scene" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_scene']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Adresse valide">Acoustique/Folk
                <input type="radio" id="scene" name="scene" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_scene']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Adresse valide">Amplifié/Rock</p>
                <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['scene'])))) {?>
                  <span><?php echo $_smarty_tpl->tpl_vars['error']->value['scene'];?>
</span>
                <?php }?>
            </div>
            <div>
                <p><label for="repgroupe">Representant du groupe</label>  
                <input type="text" id="repgroupe" name="nomrepgroupe" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_nomrepgroupe']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Nom">
                <input type="text" id="repgroupe" name="prenomrepgroupe" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_prenomrepgroupe']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Prenom">
                <input type="text" id="repgroupe" name="adresserepgroupe" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_adresserepgroupe']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Adresse">
                <input type="text" id="repgroupe" name="codepostalrepgroupe" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_codepostalrepgroupe']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Code Postal">
                <input type="text" id="repgroupe" name="emailrepgroupe" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_emailrepgroupe']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Email">
                <input type="text" id="repgroupe" name="telrepgroupe" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_telrepgroupe']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Téléphone">
                <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['repgroupe'])))) {?>
                  <span><?php echo $_smarty_tpl->tpl_vars['error']->value['repgroupe'];?>
</span>
                <?php }?>
            </div>
            <div>
                <p><label for="stylemusic">Style musical</label>
                <input type="text" id="stylemusic" name="stylemusic" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_stylemusic']->value)===null||$tmp==='' ? '' : $tmp);?>
") placeholder="StyleMusical">
                <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['motdepasse'])))) {?>
                  <span><?php echo $_smarty_tpl->tpl_vars['error']->value['motdepasse'];?>
</span>
                <?php }?>
            </div>
            <div>
                <p><label for="anneecreation">Année de la création</label>
                <input type="text" id="anneecreation" name="anneecreation" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_anneecreation']->value)===null||$tmp==='' ? '' : $tmp);?>
") placeholder="AnneeCreation">
                <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['anneecreation'])))) {?>
                  <span><?php echo $_smarty_tpl->tpl_vars['error']->value['anneecreation'];?>
</span>
                <?php }?>
            </div>
            <div>
                <p><label for="presentation">Présentation</label>
                <input type="text" id="presentation" name="presentation" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_presentation']->value)===null||$tmp==='' ? '' : $tmp);?>
") placeholder="Présentation">
                <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['presentation'])))) {?>
                  <span><?php echo $_smarty_tpl->tpl_vars['error']->value['presentation'];?>
</span>
                <?php }?>
            </div>
            <div>
                <p><label for="experience">Expériences</label>
                <input type="text" id="experience" name="experience" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_experience']->value)===null||$tmp==='' ? '' : $tmp);?>
") placeholder="Expériences">
                <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['experience'])))) {?>
                  <span><?php echo $_smarty_tpl->tpl_vars['error']->value['experience'];?>
</span>
                <?php }?>
            </div>
            <div>
                <p><label for="siteinternet">Site Internet</label>
                <input type="text" id="siteinternet" name="siteinternet" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_siteinternet']->value)===null||$tmp==='' ? '' : $tmp);?>
") placeholder="SiteInternet">
                <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['siteinternet'])))) {?>
                  <span><?php echo $_smarty_tpl->tpl_vars['error']->value['siteinternet'];?>
</span>
                <?php }?>
            </div>
            <div>
                <p><label for="siteinternet">Site Internet</label>
                <input type="text" id="siteinternet" name="siteinternet" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_siteinternet']->value)===null||$tmp==='' ? '' : $tmp);?>
") placeholder="SiteInternet">
                <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['siteinternet'])))) {?>
                  <span><?php echo $_smarty_tpl->tpl_vars['error']->value['siteinternet'];?>
</span>
                <?php }?>
            </div>
            <div>
                <p><label for="adressesoundcloud">Adresse Soundcloud</label>
                <input type="text" id="adressesoundcloud" name="adressesoundcloud" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_adressesoundcloud']->value)===null||$tmp==='' ? '' : $tmp);?>
") placeholder="adressesoundcloud">
                <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['adressesoundcloud'])))) {?>
                  <span><?php echo $_smarty_tpl->tpl_vars['error']->value['adressesoundcloud'];?>
</span>
                <?php }?>
            </div>
            <div>
                <p><label for="adresseyoutube">Adresse Youtube</label>
                <input type="text" id="adresseyoutube" name="adresseyoutube" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_adresseyoutube']->value)===null||$tmp==='' ? '' : $tmp);?>
") placeholder="AdresseYoutube">
                <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['adresseyoutube'])))) {?>
                  <span><?php echo $_smarty_tpl->tpl_vars['error']->value['adresseyoutube'];?>
</span>
                <?php }?>
            </div>
            <input type='button' id='ajIn' value=' ajouter ' onClick='addinput()' />
                <input  type="hidden" value="javascript:i;" name="cmp" id="cmp" />
                <div id="frm" ></div>
            <div>
                <p><label for="membresgroupe">Membres du groupe</label>
                <input type="text" id="membresgroupe" name="membresgroupe" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_membresgroupe']->value)===null||$tmp==='' ? '' : $tmp);?>
") placeholder="MembresGroupe">
                <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['membresgroupe'])))) {?>
                  <span><?php echo $_smarty_tpl->tpl_vars['error']->value['membresgroupe'];?>
</span>
                <?php }?>
            </div>
            <div>
                <p><label for="statutasso">Statut associatif</label>
                <input type="radio" id="statutasso" name="statutasso" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_statutasso']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="StatutAsso">Oui
                <input type="radio" d="statutasso" name="statutasso" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_statutasso']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="StatutAsso">Non</p>
                <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['statutasso'])))) {?>
                  <span><?php echo $_smarty_tpl->tpl_vars['error']->value['statutasso'];?>
</span>
                <?php }?>
            </div>
            <div>
              <p><label for="sacem">Inscrit à la SACEM</label>
              <input type="radio" id="sacem" name="sacem" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_sacem']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="SACEM">Oui
              <input type="radio" d="sacem" name="sacem" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_sacem']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="SACEM">Non</p>
              <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['sacem'])))) {?>
                <span><?php echo $_smarty_tpl->tpl_vars['error']->value['sacem'];?>
</span>
              <?php }?>
            </div>
            <div>
                <p><label for="producteur">Producteur</label>
                <input type="radio" id="producteur" name="producteur" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_producteur']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="producteur">Oui
                <input type="radio" d="producteur" name="producteur" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_producteur']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="producteur">Non</p>
                <?php if (((isset($_smarty_tpl->tpl_vars['error']->value['producteur'])))) {?>
                  <span><?php echo $_smarty_tpl->tpl_vars['error']->value['producteur'];?>
</span>
                <?php }?>
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
</html><?php }
}

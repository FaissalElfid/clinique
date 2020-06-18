<?php /* Smarty version Smarty-3.1.14, created on 2020-06-08 20:10:03
         compiled from "tpl\templates\sinscrire.html" */ ?>
<?php /*%%SmartyHeaderCode:15123134665ebc5ab458f746-55096366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f45562b7f282281ede99322dc3da5dd230860265' => 
    array (
      0 => 'tpl\\templates\\sinscrire.html',
      1 => 1591035478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15123134665ebc5ab458f746-55096366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ebc5ab4590ef9_65230027',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ebc5ab4590ef9_65230027')) {function content_5ebc5ab4590ef9_65230027($_smarty_tpl) {?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>S'inscrire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--boostrap-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!--pour les datepickers-->
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <!--css-->
    <link href="style/sinscrire.css" rel="Stylesheet" type="text/css">


  </head>

  <body>
    <div id="seconnecter-container">
      <div class="text-center mb-4">
        <a href="index.php"><img class="mb-4" id="logo" src="image/logos.png" alt="" ></a>
        <h1 class="h3 mb-3 font-weight-normal">S'inscrire</h1>
        <p>Inscriver vous pour profiter de nos services online !!</p>
      </div>
    <form method="POST" onsubmit="sinscrire();return false;">   
      <div class="row">
        
      </div>   
      <div class="text form-group  row">
        <div class="input-field col s6">
        <input id="prenom" type="text" class="validate" required>
        <label for="prenom">Entrer votre prenom</label>
        <span class="helper-text" data-error="Veuillez entrer votre nom"></span>
      </div>
      <div class="input-field col s6">
        <input id="nom" type="text" class="validate">
        <label for="nom">nom de famille</label>
      </div>
    </div>
      <div class="text form-group">
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate" required>
            <label for="email">Adress email</label>
            <span class="helper-text" data-error="veuillez entrer une adress mail valide" data-success="valide"></span>
          </div>
        </div>      
      </div>

      <div class="text form-group">
        <div class="row">
          <div class="input-field col s12">
            <input id="inputPassword" type="password" class="validate" required>
            <label for="inputPassword">Mot de passe</label>
          </div>
        </div>      
      </div>
      
      <div class="text form-group">
        <div class="row">
          <div class="input-field col s12">
            <input id="inputPasswordConf" type="password" class="validate" required>
            <label for="inputPasswordConf">Confirmer le mot de passe</label>
            <span id="confirmationPsswd" class="helper-text" data-error="veuiller entrer le même mot de pass" data-success="valide"></span>
          </div>
        </div>      
      </div>

        <div class="text form-group">
          <div class="row">
            <div class="input-field col s12">
              <label for="date_naissance">date de naissance</label>
           <input type="text" id="date_naissance" class="datepicker validate" required>
          </div>
          </div>
          </div>
      <div class="buttons">
        <button id="signin" class="btn btn-lg btn-primary" type="submit">S'inscrire</button><br>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2020-2019 ELFID Faissal</p>
      </div>
      
    </form>
  </div>



<script src="js/jquery.js"></script>
<script src="materialize/js/materialize.min.js"></script>
<script src="js/sinscrire.js"></script>
  </body>
</html><?php }} ?>
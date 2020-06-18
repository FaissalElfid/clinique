<?php /* Smarty version Smarty-3.1.14, created on 2020-06-15 12:27:44
         compiled from "tpl\templates\seconnecter.html" */ ?>
<?php /*%%SmartyHeaderCode:20236769705ebc59ff62d8f2-63003455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '481c667f9f9870387bec08e1867c3f7f4c8956c8' => 
    array (
      0 => 'tpl\\templates\\seconnecter.html',
      1 => 1592224056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20236769705ebc59ff62d8f2-63003455',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ebc59ff6b28a0_69651167',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ebc59ff6b28a0_69651167')) {function content_5ebc59ff6b28a0_69651167($_smarty_tpl) {?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link href="style/seconnecter.css" rel="Stylesheet" type="text/css">
    <title>Se connecter</title>

  </head>
<!--
  <form id="myForm" action="login.php" method="POST" style="background-color: white;">
    username: <input type="text" name="username" id="username"/><br />
    password: <input type="password" name="password" password/><br />
    <button id="submit">Login</button>
    </form>
     
    <div id="ack"></div>
-->
  <body>
    <div id="seconnecter-container">
    <form id="myForm" action="login.php" method="POST" class="form-signin" >
      <div class="text-center mb-4">
        <a href="index.php"><img class="mb-4" id="logo" src="image/logos.png" alt="" ></a>
        <h1 class="h3 mb-3 font-weight-normal">Se connecter</h1>
        <p>Connecter vous pour profiter de nos services online !!</p>
        <div id="resultat"></div>
      </div>
      
      <div class="text form-label-group">
        <label for="email">Email address</label>
        <input type="email" name="username" id="username" class="form-control" placeholder="Email address" required autofocus>
        
      </div>

      <div class="text form-label-group">
        <label for="inputPassword">mot de passe :</label>
        <input type="password" name="password"  class="form-control" placeholder="Password" required>
        
      </div>
      <div id="ack" style="color: red;" class="text-center"></div>
      <div class="text-center" style="padding-top: 15px;text-align: center;">
        <button id="submit" class="btn btn-lg btn-primary">Se connecter</button><br>
      </div>
      </form>
        <form action="sinscrire.php" class="text-center">
        <button id="nvcompte" class="btn btn-lg btn-dark">Créer un nouveau compte</button>
      </form>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2020-2019 ELFID Faissal</p>
      </div>

<script src="js/jquery.js"></script>
<script src="js/seconnecter.js"></script>

  </body>
</html>
<?php }} ?>
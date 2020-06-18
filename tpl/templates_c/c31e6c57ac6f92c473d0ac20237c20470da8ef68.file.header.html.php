<?php /* Smarty version Smarty-3.1.14, created on 2020-05-28 21:46:40
         compiled from "tpl\templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:709294685eb1b202ef59b2-12639368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c31e6c57ac6f92c473d0ac20237c20470da8ef68' => 
    array (
      0 => 'tpl\\templates\\header.html',
      1 => 1590702345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '709294685eb1b202ef59b2-12639368',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5eb1b2030a9061_71783045',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb1b2030a9061_71783045')) {function content_5eb1b2030a9061_71783045($_smarty_tpl) {?><head><link href="style/styleHeader.css" rel="Stylesheet" type="text/css"></head>
<html>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a href="index.php"><img src="image/logos.png" id="logo" alt="irisi" style="width: 100px;"></a>
          <a class="navbar-brand sousligner" href="index.php" style="margin-left: 30px;">  Acceuil</a>
          <!-- style="width: 100px;height: ;" style=""position: fixed;top:100px;width:100%;(or à for the simple level);width=100%-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item sousligner">
                <a class="nav-link " href="presentation.php">La clinique</a>
              </li>
              
              <li class="nav-item dropdown sousligner">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Nos Spécialité
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Pole médicale</a>
                  <a class="dropdown-item" href="#">Pole chirurgie</a>
                  <a class="dropdown-item" href="#">Laboratoire</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Administration</a>
                </div>
              </li>
              <li class="nav-item sousligner"><!--we can add active for the class Patients & visiteurs-->
                <a class="nav-link " href="services.php">Nos services online</a>
              </li>
              <li class="nav-item sousligner"><!--we can add active for the class-->
                <a class="nav-link " href="index.php#contact-form">Contact</a>
              </li>
              <!--
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Utilisation de la base de données avec Smarty</a>
              </li>-->
            </ul>
            <?php if (!isset($_SESSION['user'])){?>
            <form class="form-inline my-2 my-lg-0" action="seconnecter.php">
              <button class="btn btn-outline-info my-2 my-sm-0 connecterButton" type="submit" data-toggle="tooltip" data-placement="top" title="Connecter vous pour profiter des services distant de notre clinique">SE CONNECTER</button>
            </form>
            <form class="form-inline my-2 my-lg-0" action="sinscrire.php">
              <button class="btn btn-info my-2 my-sm-0" type="submit">S'INSCRIRE</button>
            </form>
            <?php }else{ ?>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php echo $_SESSION['nom'];?>
 <?php echo $_SESSION['prenom'];?>
</a>
            </li>
            <div class="dropdown">
              <button class="btn dropdown button_avatar" type="button" id="avatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><h4><?php echo $_SESSION['initials'];?>
</h4></button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="avatar">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Paramètres</a>
                <a class="dropdown-item" href="deconnecter.php">Se deconnecter</a>
  
              </div>
            </div>
            <?php }?>
            
          </div>
        </nav>
                </header>
                <script src="js/header.js"></script>
                <!--
            <?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>-->

</html><?php }} ?>
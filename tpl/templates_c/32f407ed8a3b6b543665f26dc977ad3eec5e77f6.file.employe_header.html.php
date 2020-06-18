<?php /* Smarty version Smarty-3.1.14, created on 2020-06-15 20:40:03
         compiled from "tpl\templates\employe_header.html" */ ?>
<?php /*%%SmartyHeaderCode:12192584425ed543227f8424-87905608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32f407ed8a3b6b543665f26dc977ad3eec5e77f6' => 
    array (
      0 => 'tpl\\templates\\employe_header.html',
      1 => 1592253591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12192584425ed543227f8424-87905608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ed54322e2f2e2_10206300',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed54322e2f2e2_10206300')) {function content_5ed54322e2f2e2_10206300($_smarty_tpl) {?><head><link href="style/styleHeader.css" rel="Stylesheet" type="text/css"></head>
<html>
        <header >
            <nav style="height: 110px;" class="navbar navbar-expand-lg navbar-light bg-light">
                <a href="index.php"><img src="image/logos.png" id="logo" alt="irisi" style="width: 100px;"></a>
          <a class="navbar-brand sousligner" href="admin.php" style="margin-left: 30px;">  Acceuil</a>
          <!-- style="width: 100px;height: ;" style=""position: fixed;top:100px;width:100%;(or à for the simple level);width=100%-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item sousligner">
                <a class="nav-link " href="employe.php">Médecins</a>
              </li>
              <li class="nav-item sousligner"><!--we can add active for the class Patients & visiteurs-->
                <a class="nav-link " href="meeting.php">Rendez-vous</a>
              </li>
              <li class="nav-item sousligner"><!--we can add active for the class Patients & visiteurs-->
                <a class="nav-link " href="users.php">Utilisateurs</a>
              </li>
              <!--
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Utilisation de la base de données avec Smarty</a>
              </li>-->
            </ul>
            <?php if (isset($_SESSION['admin'])){?>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php echo $_SESSION['nom'];?>
 <?php echo $_SESSION['prenom'];?>
</a>
            </li>
            <div class="dropdown">
              <button class="btn dropdown button_avatar" type="button" id="avatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 18%;"><h4><?php echo $_SESSION['initials'];?>
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
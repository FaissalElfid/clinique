<?php /* Smarty version Smarty-3.1.14, created on 2020-05-05 23:21:30
         compiled from "..\tpl\templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:14236732305eb1f4583913d5-24250497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '531e8d91b79f43e447267c9437c92b447af6ae63' => 
    array (
      0 => '..\\tpl\\templates\\header.html',
      1 => 1588720888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14236732305eb1f4583913d5-24250497',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5eb1f458393ff3_06107230',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb1f458393ff3_06107230')) {function content_5eb1f458393ff3_06107230($_smarty_tpl) {?><html>

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <img src="../image/logo.png" alt="irisi" style="width: 50px;height: auto;padding-bottom: 5px;">
          <a class="navbar-brand" href="pages/affichage.php" style="padding-left: 10px;">  IRISI</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="../pages/affichage.php">Affichage </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php">Enregistrer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../pages/update.php">Modifier</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Utilisation de la base de données avec Smarty</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
                </header>
                <!--
            <?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>-->

</html><?php }} ?>
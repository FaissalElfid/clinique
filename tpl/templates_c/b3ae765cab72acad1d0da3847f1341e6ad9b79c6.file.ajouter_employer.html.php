<?php /* Smarty version Smarty-3.1.14, created on 2020-06-15 19:23:23
         compiled from "tpl\templates\ajouter_employer.html" */ ?>
<?php /*%%SmartyHeaderCode:11612262205ed54706b8d456-62426521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3ae765cab72acad1d0da3847f1341e6ad9b79c6' => 
    array (
      0 => 'tpl\\templates\\ajouter_employer.html',
      1 => 1592249001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11612262205ed54706b8d456-62426521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ed54706bdf932_10155554',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed54706bdf932_10155554')) {function content_5ed54706bdf932_10155554($_smarty_tpl) {?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ajouter un employer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--pour les datepickers-->
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <!--boostrap-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    
    <link href="fontawesome/css/all.css" rel="stylesheet">

    <!--css-->
    <link href="style/ajouter_employer.css" rel="Stylesheet" type="text/css">
    <link href="style/table_employer.css" rel="Stylesheet" type="text/css">
    
    

  </head>

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ('employe_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="font-size: 1.5rem;">
      <li class="nav-item">
        <a class="nav-link active" id="update-tab" data-toggle="tab" href="#update" role="tab" aria-controls="update" aria-selected="true">Modifier ou Supprimer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="false">Ajouter</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="update" role="tabpanel" aria-labelledby="update-tab">
        <?php echo $_smarty_tpl->getSubTemplate ('table_employer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      </div>
      
      <div class="tab-pane fade" id="add" role="tabpanel" aria-labelledby="add-tab">    <?php echo $_smarty_tpl->getSubTemplate ('body_ajouter_employer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      </div>
    </div>

  <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
<script src="js/jquery.js"></script>

<script src="materialize/js/materialize.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="js/ajouteremploye.js"></script>
<script defer src="fontawesome/js/all.js"></script>

  </body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2020-05-28 21:46:48
         compiled from "tpl\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:18800246295e95ac47623aa9-58389842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f24779b0c56c5989d221fff96d09fed55a5ea4b' => 
    array (
      0 => 'tpl\\templates\\index.html',
      1 => 1590702352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18800246295e95ac47623aa9-58389842',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5e95ac4820a093_54247454',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e95ac4820a093_54247454')) {function content_5e95ac4820a093_54247454($_smarty_tpl) {?>
    <html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
            <link rel="stylesheet" href="fontawesome/css/all.css">
            <link rel="icon" href="image/logos.png" type="image/x-icon">
            <title>ELFID Clinique</title>
        </head>
        <body>
                <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ('acceuil.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ('contact.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ('localisation.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <!--<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>-->
                <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                
                <script src="js/jquery.js"></script>

                <script src="bootstrap/js/bootstrap.js"></script>
                <script src="fontawesome/css/all.js"></script>
        </body>

    </html><?php }} ?>
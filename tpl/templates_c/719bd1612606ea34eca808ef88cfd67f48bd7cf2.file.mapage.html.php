<?php /* Smarty version Smarty-3.1.14, created on 2020-04-21 10:28:13
         compiled from "mapage.html" */ ?>
<?php /*%%SmartyHeaderCode:20020715375e9ec9e43aef40-17742423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '719bd1612606ea34eca808ef88cfd67f48bd7cf2' => 
    array (
      0 => 'mapage.html',
      1 => 1587464720,
      2 => 'file',
    ),
    '9f24779b0c56c5989d221fff96d09fed55a5ea4b' => 
    array (
      0 => 'tpl\\templates\\index.html',
      1 => 1587464890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20020715375e9ec9e43aef40-17742423',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5e9ec9e4886983_39224833',
  'variables' => 
  array (
    'data' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9ec9e4886983_39224833')) {function content_5e9ec9e4886983_39224833($_smarty_tpl) {?><html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Smarty</title>
        </head>
        <body>
            <header>
                <a href="#">acceuil</a><a href="#">irisi</a>
                <h1>Mon premier site smarty <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</h1>
                
                <?php echo $_smarty_tpl->tpl_vars['val']->value;?>
 est pair
                fin header
                <hr>

                
<h1>premier détail</h1>
du détail

                <hr>
                footer doit etre inserer ici :)

            </header>
        </body>
    </html><?php }} ?>
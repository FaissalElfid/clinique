<?php /* Smarty version Smarty-3.1.14, created on 2020-05-05 01:17:32
         compiled from "tpl\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7225344925eb0beacd87da3-03210448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfdf20f111dcbddf554a9a603abe2f2a56f7239c' => 
    array (
      0 => 'tpl\\templates\\index.tpl',
      1 => 1588641386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7225344925eb0beacd87da3-03210448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'etudiants' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5eb0beacdfa686_67313480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb0beacdfa686_67313480')) {function content_5eb0beacdfa686_67313480($_smarty_tpl) {?>
    <html>
        <head>
            <meta charset="utf-8">
            <link href="style/style.css" rel="Stylesheet" type="text/css">
            <title>Smarty</title>
        </head>
        <body>
            <h1 Style="text-align: center;">La prise en main de l'outil Smarty</h1>
            <hr>
            <table border="2px">
                L'affichage du tableau des notes des etudiants
                <tr>
                    <th>Nom    </th>
                    <th>Note   </th>
                    <th>Module</th>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['etudiants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value[1];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value[2];?>
</td>
                </tr>
                <?php } ?>
                </table>
                
                <br><br><br>
                afficher un formulaire de saisie de notes pour un tableau de d’étudiants<br><br>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['etudiants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <div style= "border: black 2px solid; border-radius: 3px;margin: 2px;padding: 2px;margin-right: 60%;margin-bottom: 20px;" >
                Veuiller entrer le module et la note de <?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
:
                <form >
                    <label>Module  :<input type="text" placeholder="module"></input></label>
                    <label>note  :<input type="text" placeholder="note"></input></label><br><br>
                </form>
            </div>
                <?php } ?>
                <div class="page-region-content">
                    
                </div> 
                <?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
                toto
        </body>
    </html><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2020-05-05 23:19:39
         compiled from "..\tpl\templates\indexAffichage.html" */ ?>
<?php /*%%SmartyHeaderCode:6035172345eb1f4580b9be8-53738063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc1ebd47111bed412e8ba2f60f2395ea70dd638b' => 
    array (
      0 => '..\\tpl\\templates\\indexAffichage.html',
      1 => 1588720775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6035172345eb1f4580b9be8-53738063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5eb1f4581f0919_44846561',
  'variables' => 
  array (
    'personnes' => 0,
    'ligne' => 0,
    'champ' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb1f4581f0919_44846561')) {function content_5eb1f4581f0919_44846561($_smarty_tpl) {?><html>
        <head>
            <meta charset="utf-8">
            <link href="../style.css" rel="Stylesheet" type="text/css">
            <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
            <title>Base de données</title>
            <style>
                body{
                    text-align: center;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    
    strong{
        text-align: center;
    }
    section{
        margin-top: 20px;
        width: 70%;
        display: inline-block;
        border: black 1px solid;
        border-radius: 4px;
        box-shadow: 2px 3px 3px 0 black;
        padding: 50px;
        padding-right: 70px;
    }
    .text1{
        padding-left: 20px;
        transition: 0.8s;
        border: 1.5px solid #aaa;
        padding: 5px;
        border-radius: 8px;
        outline: none;
    }
    .text1:focus{
        border-color: dodgerblue;
        box-shadow: 0 0 8px 0 dodgerblue;
    }
    
    .btnS{
        display: inline-table;
        margin-top: 20px;
        margin-left: 80%;
        padding: 10px 20px;
        border: 1px solid #3498db;
        color:  #3498db;
        background: none;
        cursor: pointer;
        transition :0.4s;
        position: relative;
        overflow: hidden;
    }
    .btnS:hover{
        color: #fff;
    }
    .btnS::before{
        content: "";
        position: absolute;
        left: 0;
        width: 100%;
        height: 0%;
        background: #3498db;
        z-index: -1;
        transition: 0.8s;
        top: 0;;
        border-radius: 0 0 50% 50%;
    }
    .btnS:hover::before{
        height:180%;
    }
    
            </style>
        </head>
        <body>
                <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <section>
                    <form method="POST">
        <strong> Veuillez entrer l'email de la personne que vous cherchez :</strong><br><br><br>
                        <label> Email    :<input class="text1" type="text"     name="emailT"    placeholder="Email"  ></label><br><br>
                        <button name="trouver" class="btnS" type="submit">Rechercher</button>
                        <button name="tout" class="btnS" type="submit">tout afficher</button>
                    </form>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Nationnalité</th>
                            <th scope="col">Email</th>
                            <th scope="col">Adress</th>
                            
                          </tr>
                        </thead>
                        
                        <tbody>
                            <?php  $_smarty_tpl->tpl_vars['ligne'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ligne']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['personnes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->key => $_smarty_tpl->tpl_vars['ligne']->value){
$_smarty_tpl->tpl_vars['ligne']->_loop = true;
?>
                          <tr>
                            <?php  $_smarty_tpl->tpl_vars['champ'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['champ']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ligne']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['champ']->key => $_smarty_tpl->tpl_vars['champ']->value){
$_smarty_tpl->tpl_vars['champ']->_loop = true;
?>
                            <td><?php echo $_smarty_tpl->tpl_vars['champ']->value;?>
</td>
                            <?php } ?>
                          </tr>
                          <?php } ?>
                        </tbody>
                        
                    </table>
                </section>
                
                <!--<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>-->
                <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </body>
    </html><?php }} ?>
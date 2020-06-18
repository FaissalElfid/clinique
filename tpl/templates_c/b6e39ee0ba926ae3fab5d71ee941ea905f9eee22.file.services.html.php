<?php /* Smarty version Smarty-3.1.14, created on 2020-06-17 21:48:25
         compiled from "tpl\templates\services.html" */ ?>
<?php /*%%SmartyHeaderCode:3351695825eced88e832851-45258734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6e39ee0ba926ae3fab5d71ee941ea905f9eee22' => 
    array (
      0 => 'tpl\\templates\\services.html',
      1 => 1592430454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3351695825eced88e832851-45258734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5eced88ecd8ad8_44591359',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eced88ecd8ad8_44591359')) {function content_5eced88ecd8ad8_44591359($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link href="style/services.css" rel="Stylesheet" type="text/css">
        <title>ELFID Clinique</title>
    </head>
    <body>
            <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php if (!isset($_SESSION['user'])){?>
            <div class="non-connecter">
                <form action="seconnecter.php">
                <h1>Veuillez se connecter pour utiliser nos services online</h1><br>
                <button type="submit" class="btn btn-outline-light"><h2>Se connecter</h2></button>
            </form>
            </div>
            <?php }?>
            <section>
                <form>
                <button id="btn1" type="button" class="btn  btn-lg btn-block menu" onclick="meeting()"><h1>Prendre un rendez-vous</h1></button>
            </form>
            <form>
                <button id="btn2" type="button" class="btn  btn-lg btn-block menu" onclick="contact()"><h2>Contacter un médecin</h2></button>
            </form>
        <form>
                <button id="btn3" type="button" class="btn  btn-lg btn-block menu" onclick="map()"><h2>L'itinéraire vers la clinique</h2></button>
            </form>
                <!--
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>-->
            </section>
            <!--<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>-->
            <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <script src="js/jquery.js"></script>
            <script src="js/services.js"></script>
            <script src="bootstrap/js/bootstrap.min.js"></script>

    </body>
</html><?php }} ?>
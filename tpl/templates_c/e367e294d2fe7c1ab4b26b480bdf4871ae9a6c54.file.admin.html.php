<?php /* Smarty version Smarty-3.1.14, created on 2020-06-18 14:00:04
         compiled from "tpl\templates\admin.html" */ ?>
<?php /*%%SmartyHeaderCode:11994129495ed542e1f35615-86370267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e367e294d2fe7c1ab4b26b480bdf4871ae9a6c54' => 
    array (
      0 => 'tpl\\templates\\admin.html',
      1 => 1592488800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11994129495ed542e1f35615-86370267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ed542e20caa07_18989268',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed542e20caa07_18989268')) {function content_5ed542e20caa07_18989268($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="fontawesome/css/all.css">
        <link rel="icon" href="image/logos.png" type="image/x-icon">
        <title>ELFID Clinique</title>
    </head>
    <body>
            <?php echo $_smarty_tpl->getSubTemplate ('employe_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div id="card" style="text-align: center;margin-top: 10px;padding-bottom: 20px;">
                    <div class="card-group" style="margin-top: 50px;padding-left: 10%;padding-right: 10%;">
                        <div class="card">
                          <img class="card-img-top" src="image/consulte.png" height="400" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Nos médecins</h5>
                            <p class="card-text">Ajouter, modifier, supprimer et voir les données saisie pour chaque médecin.</p>
                            <p class="card-text">Pour chaque médecin vous pourriez lui réserver les rendez vous que vous souhaitez (il sera automatiquement proposer lors que vous saisissez les infomations concernant le rendez-vous) </p>
                            <a href="employe.php" class="btn btn-primary">Savoir plus</a>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="image/time.jpg" height="400" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Rendez-vous</h5>
                            <p class="card-text">Vous pouver organniser vos rendez-vous pour pouvoir à un nombre précis de vos clients de reserver leurs places a distance en payant par paypal.</p>
                            <p class="card-text">1- cliquer sur le rendez-vous souhaiter pour savoir qui à déja reserver sa place.</p>
                            <p class="card-text">2- selectionner le crénos souhaité pour ajouter un rendez-vous.</p>
                            <a href="meeting.php" class="btn btn-primary">Savoir plus</a>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="image/chirurgie.png" height="400" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Utilisateurs</h5>
                            <p class="card-text">Manipulez les comptes clients créer sur votre site.</p>
                            <p class="card-text">Visonner ou supprimer</p>
                            <a href="users.php" class="btn btn-primary">Savoir plus</a>
                          </div>
                        </div>
                      </div>
                    
    
                </div>
                 <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
              
              
            
            <script src="js/jquery.js"></script>
            <script src="bootstrap/js/bootstrap.js"></script>
    </body>

</html><?php }} ?>
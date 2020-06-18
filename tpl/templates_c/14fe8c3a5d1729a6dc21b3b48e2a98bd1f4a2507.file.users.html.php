<?php /* Smarty version Smarty-3.1.14, created on 2020-06-16 11:10:11
         compiled from "tpl\templates\users.html" */ ?>
<?php /*%%SmartyHeaderCode:12415925525ee7dcb8991192-19294263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14fe8c3a5d1729a6dc21b3b48e2a98bd1f4a2507' => 
    array (
      0 => 'tpl\\templates\\users.html',
      1 => 1592305017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12415925525ee7dcb8991192-19294263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ee7dcba12c8b1_78889767',
  'variables' => 
  array (
    'users' => 0,
    'emp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee7dcba12c8b1_78889767')) {function content_5ee7dcba12c8b1_78889767($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="fontawesome/css/all.css">
        <link rel="icon" href="image/logos.png" type="image/x-icon">
        <title>ELFID Clinique</title>
    </head>
    <body>
            <?php echo $_smarty_tpl->getSubTemplate ('employe_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div style="text-align: center;margin-top: 50px;margin-bottom: 80px;">
                <h3 style="text-decoration: underline;">Les comptes utilisateurs</h3>
                <h4>les utilisateurs qui sont inscrit dans votre compte</h4>
            </div>
            <div class="container">
                <div class="row">
                  <div class="col-12">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nom complet</th>
                          <th scope="col">Email</th>
                          <th scope="col">Date de naissance</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  $_smarty_tpl->tpl_vars['emp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['emp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['emp']->key => $_smarty_tpl->tpl_vars['emp']->value){
$_smarty_tpl->tpl_vars['emp']->_loop = true;
?>
                        <tr>
                          <th scope="row"><?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
</th>
                          <td><?php echo $_smarty_tpl->tpl_vars['emp']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['emp']->value['prenom'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['emp']->value['email'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['emp']->value['dateNaissance'];?>
</td>
                          <td>
                            <button type="button" class="btn btn-primary plusUser" id="p<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
" data_id="<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
"><i class="far fa-eye"></i></button>
                          <button type="button" class="btn btn-danger deleteUser" id="d<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
" data_id="<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
"><i class="far fa-trash-alt"></i></button>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div class="modal fade" id="plusInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Users</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                      <h2 style="text-decoration: underline;">Plus d'information</h2>
                      <div class="table-responsive">
                        <table id="table" class="table table-bordered">
                          <tr>
                              <td width="30%">
                                <label>id</label></td>
                                <td id="td_id" width="70%"></td>
                          </tr>
                          <tr>
                            <td width="30%">
                              <label>Nom complet</label></td>
                              <td id="td_med" width="70%"></td>
                        </tr>
                          <tr>
                              <td width="30%">
                                <label>Email </label></td>
                                <td id="td_email" width="70%"></td>
                          </tr>
                          <tr>
                              <td width="30%">
                                <label>Date de naissance : </label></td>
                                <td id="td_naissance" width="70%"></td>
                          </tr>
                          
                        </thead>
                        </table>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            <script src="js/jquery.js"></script>
            <script src="bootstrap/js/bootstrap.js"></script>
            <script src="js/users.js"></script>
    </body>

</html><?php }} ?>
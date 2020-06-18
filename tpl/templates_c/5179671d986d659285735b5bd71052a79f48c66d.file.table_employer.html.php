<?php /* Smarty version Smarty-3.1.14, created on 2020-06-15 20:40:11
         compiled from "tpl\templates\table_employer.html" */ ?>
<?php /*%%SmartyHeaderCode:8410146595ee76593e0d8e2-00567540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5179671d986d659285735b5bd71052a79f48c66d' => 
    array (
      0 => 'tpl\\templates\\table_employer.html',
      1 => 1592251386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8410146595ee76593e0d8e2-00567540',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ee76593e2f877_76225703',
  'variables' => 
  array (
    'employes' => 0,
    'emp' => 0,
    'specs' => 0,
    'spe' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee76593e2f877_76225703')) {function content_5ee76593e2f877_76225703($_smarty_tpl) {?><div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nom complet</th>
              <th scope="col">Specialité</th>
              <th scope="col">Prix</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php  $_smarty_tpl->tpl_vars['emp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['emp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['employes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['emp']->key => $_smarty_tpl->tpl_vars['emp']->value){
$_smarty_tpl->tpl_vars['emp']->_loop = true;
?>
            <tr>
              <th scope="row"><?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['emp']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['emp']->value['prenom'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['emp']->value['specialite'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['emp']->value['prix'];?>
</td>
              <td>
                <button type="button" class="btn btn-primary plus" id="p<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
" data_id="<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
"><i class="far fa-eye"></i></button>
                <button type="button" class="btn btn-success edit" id="e<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
" data_id="<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
"><i class="fas fa-edit"></i></button>
              <button type="button" class="btn btn-danger delete" id="d<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
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
  <div class="modal fade" id="plusInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Employés</h5>
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
                    <label>Prix </label></td>
                    <td id="td_prix" width="70%"></td>
              </tr>
              <tr>
                  <td width="30%">
                    <label>Email </label></td>
                    <td id="td_email" width="70%"></td>
              </tr>
              <tr>
                  <td width="30%">
                    <label>Telephone </label></td>
                    <td id="td_telephone" width="70%"></td>
              </tr>
              <tr>
                  <td width="30%">
                    <label>Specialité </label></td>
                    <td id="td_specialite" width="70%"></td>
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
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Employés</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="text-align: center;">
          <h2 style="text-decoration: underline;">Modifier</h2>
          <form method="POST" onsubmit="return false;">   
            <div class="text form-group  row">
              <div class="input-field col s6">
              <input id="prenom" type="text" class="validate" required>
              <label for="prenom">Prenom</label>
              <span class="helper-text" data-error="Veuillez entrer votre nom"></span>
            </div>
            <div class="input-field col s6">
              <input id="nom" type="text" class="validate">
              <label for="nom">Nom de famille</label>
            </div>
          </div>
          <div class="text form-group row">
              <div class="input-field col s6">
                  <label for="date_naissance">date de naissance</label>
                 <input type="text" id="date_naissance" class="datepicker validate" required>
              </div>
              <div class="input-field col s6">
                  <label style="padding-left: 10px;">Sexe :  </label>
                  <p>
                    <label>
                      <input class="with-gap" name="group1" type="radio" id="r1" value="M" checked />
                      <span>Masculin</span>
                    </label>
                  </p>
                  <p>
                    <label>
                      <input class="with-gap" name="group1" type="radio" id="r2" value="F" />
                      <span>Féminin</span>
                    </label>
                  </p>
              </div>
          </div>
                <div class="text form-group row">
                      <div class="input-field col s12">
                        <select id="spec" name="specialite"  required>
                          <?php  $_smarty_tpl->tpl_vars['spe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['spe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['specs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['spe']->key => $_smarty_tpl->tpl_vars['spe']->value){
$_smarty_tpl->tpl_vars['spe']->_loop = true;
?>
                          <option value=<?php echo $_smarty_tpl->tpl_vars['spe']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['spe']->value['specialite'];?>
</option>
                          <?php } ?>
                        </select>
                        <label>Spécialité</label>
                      </div>
          </div>
            <div class="text form-group">
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate" name="email" required>
                  <label for="email">Adress email</label>
                  <span class="helper-text" data-error="veuillez entrer une adress mail valide" data-success="valide"></span>
                </div>
              </div>      
            </div>
            <div class="text form-group">
              <div class="row">
            <div class="input-field col s12">
              <input id="tel" type="tel" name="Telephone" class="validate" required>
              <label for="icon_telephone">Telephone</label>
            </div>
          </div>
        </div>
              <div class="text form-group">
                <div class="row">
                      <div class="input-field col s12">
                          <textarea id="autre" class="materialize-textarea"></textarea>
                          <label for="autre">Informations supplémentaire</label>
                      </div>
                    </div>
                    <div class="row">
        
                      <div class="input-field col s12">
        
                        <input id="prix" type="number" class="validate"></input>
                        <label for="prix">Prix :</label>
                    </div>
                  </div>
              </div>
            <div class="buttons">
              <button id="ajouter" class="btn btn-lg btn-primary" type="submit">Ajouter</button><br>
            </div>
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div><?php }} ?>
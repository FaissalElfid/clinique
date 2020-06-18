<?php /* Smarty version Smarty-3.1.14, created on 2020-06-15 19:24:40
         compiled from "tpl\templates\body_ajouter_employer.html" */ ?>
<?php /*%%SmartyHeaderCode:7680724795ede91572e5e13-90923436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fda9adbda7f7d09d314c53a418d4631eeeb9a91' => 
    array (
      0 => 'tpl\\templates\\body_ajouter_employer.html',
      1 => 1592249078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7680724795ede91572e5e13-90923436',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ede9157353c36_95395462',
  'variables' => 
  array (
    'specs' => 0,
    'spe' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ede9157353c36_95395462')) {function content_5ede9157353c36_95395462($_smarty_tpl) {?><head></head>
<section>
<div id="seconnecter-container" style="position: relative;">
    <div class="text-center mb-4">
      <h1 class="h3 mb-3 font-weight-normal">Ajouter employer</h1>
      <p>Ces informations vont être afficher directement aux clients</p>
    </div>
  <form method="POST" onsubmit="add();return false;">   
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

</section><?php }} ?>
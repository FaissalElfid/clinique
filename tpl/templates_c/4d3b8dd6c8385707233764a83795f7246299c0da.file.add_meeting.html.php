<?php /* Smarty version Smarty-3.1.14, created on 2020-06-18 13:20:33
         compiled from "tpl\templates\add_meeting.html" */ ?>
<?php /*%%SmartyHeaderCode:16239248025ed6c36abcaf79-51083062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d3b8dd6c8385707233764a83795f7246299c0da' => 
    array (
      0 => 'tpl\\templates\\add_meeting.html',
      1 => 1592486429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16239248025ed6c36abcaf79-51083062',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ed6c36aca38f4_27498980',
  'variables' => 
  array (
    'medecins' => 0,
    'medecin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed6c36aca38f4_27498980')) {function content_5ed6c36aca38f4_27498980($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="fontawesome/css/all.css">
        <link href="style/addMeeting.css" rel="Stylesheet" type="text/css">
        <link rel="icon" href="image/logos.png" type="image/x-icon">
        <!--fullcalendar-->
        <link href='fullcalendar/core/main.css' rel='stylesheet' />
        <link href='fullcalendar/daygrid/main.css' rel='stylesheet' />
        <link href='fullcalendar/timegrid/main.css' rel='stylesheet' />
        <link href='fullcalendar/list/main.css' rel='stylesheet' />
        <title>ELFID Clinique</title>
    </head>
    <body>
            <?php echo $_smarty_tpl->getSubTemplate ('employe_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div style="text-align: center;margin-top: 50px;margin-bottom: 80px;">
              <h3 style="text-decoration: underline;">Réserver les rendez-vous</h3>
              <h4>1- Veuillez selectionner dans le calendrier la periode que vous voulez reserver pour un rendez-vous </h4>
              <h5>Veuillez choisir l'affichage par jour "<strong>day</strong>" pour selectionner une période entre deux heures </h5>
              <h4>2- Veuillez cliquer sur les evennements que vous souhaitez pour voir les client qui ont pris ce rendez-vous.</h4>
            </div>
            <section>
            <div id='wrap' >

                <div id='external-events'>
                  <h4>Rendez-vous frequent</h4>
            
                  <div id='external-events-list'>
                    <div class='fc-event'>My Event 1</div>
                    <div class='fc-event'>My Event 2</div>
                    <div class='fc-event'>My Event 3</div>
                    <div class='fc-event'>My Event 4</div>
                    <div class='fc-event'>My Event 5</div>
                  </div>
            
                  <p>
                    <input type='checkbox' id='drop-remove' />
                    <label for='drop-remove'>remove after drop</label>
                  </p>
                </div>
                
            
                <div id='calendar'></div>
                <div style='clear:both'></div>
               
              </div>
             
            </section>
            
            <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


            <div class="modal" id="addmodal" tabindex="-1" role="dialog">
              <form method="POST" onsubmit="onsubmit=rendezvous() ;return false;">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Programmer un rendez-vous</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="text-align: center;">

                    <div class="form-group">
                      <label>Médecin :
                      <select class="custom-select" placeholder="Médecin" id="medecin" required>
                        <option disabled selected value="">Médecins</option>
                        <?php  $_smarty_tpl->tpl_vars['medecin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['medecin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['medecins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['medecin']->key => $_smarty_tpl->tpl_vars['medecin']->value){
$_smarty_tpl->tpl_vars['medecin']->_loop = true;
?>
                        <option value=<?php echo $_smarty_tpl->tpl_vars['medecin']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['medecin']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['medecin']->value['prenom'];?>
</option>
                        <?php } ?>

                      </select>
                      <div class="invalid-feedback">Veuillez choisir un médecin</div></label><br>
                     </div>
                    
                    <label>Nombre de patients : <input id="patients" class="form-control" value=9 type="number" required></label><br>
                    <label>Prix : <input id="prix" class="form-control" value=<?php echo $_smarty_tpl->tpl_vars['medecin']->value['prix'];?>
 type="number" required></label><br><!--il faut ajouter cet attribus aux médecins-->
                    <label>Numéro de chambre :<input id="chambre" class="form-control" type="number"></label><br>
                    <div class="form-group">
                      <label>couleur :
                      <select name="couleur" class="form-control" id="couleur">
                        <option disabled selected value="">Couleur</option>
                        <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                        <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                        <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
                        <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                        <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                        <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                        <option style="color:#000;" value="#000">&#9724; Black</option>
                      </select></label></div>
                      <label for="start" class="control-label">Debut :
                        <input type="text" name="start" class="form-control" id="start" readonly>
</label>

                      <label for="end" class="control-label">Fin :
                        <input type="text" name="end" class="form-control" id="end" readonly> 
</label>
                    <p id="allday"></p>
                 
                  </div>
                  
                  <div class="modal-footer">
                    <button id="send" type="submit" class="btn btn-primary" >Ajouter</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="close()">Annuler</button>
                  </div>
                </div>
              </div>
            </form>
            </div>


  <!-- Modal -->
  <div class="modal fade" id="info_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Les réservations</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="text-align: center;">
          <h2 style="text-decoration: underline;">Les réservations</h2>
          <h6>Les clients qui ont payer pour réserver un rendez vous.</h6>
          <div class="table-responsive">
            <table id="table" class="table table-bordered">
              <thead>
                  <tr width="30%">
                    <label>Réference Rendez vous</label></tr>
                  <td width="30%">
                    <label>Client</label></td>
                  <td width="30%">
                    <label>Nom complet</label></td>
                  <td width="30%">
                    <label>Adress mail client</label></td>
            </thead>
            <tbody id="reserve">
              
            </tbody>
            </table>
            <p id="affichage"></p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
            
            <!--rrule external-dragin  timezone-->
            <script src="js/jquery.js"></script>
            <script src="bootstrap/js/bootstrap.js"></script>
            <!--<script src="fontawesome/css/all.js"></script>-->
            <!--fullcalendar-->
            <script src='fullcalendar/core/main.js'></script>
            <script src='fullcalendar/moment/main.min.js'></script>
            <script src='fullcalendar/interaction/main.js'></script>
            <script src='fullcalendar/daygrid/main.js'></script>
            <script src='fullcalendar/timegrid/main.js'></script>
            <script src='fullcalendar/list/main.js'></script>
            <script src="js/addMeeting.js"></script>

    </body>

</html><?php }} ?>
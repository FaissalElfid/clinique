<?php /* Smarty version Smarty-3.1.14, created on 2020-06-18 12:28:37
         compiled from "tpl\templates\services_meeting.html" */ ?>
<?php /*%%SmartyHeaderCode:19375769155edf719ee3f0d1-97550542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9474301cc35801865bc378f7e22867c991eff9c' => 
    array (
      0 => 'tpl\\templates\\services_meeting.html',
      1 => 1592433831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19375769155edf719ee3f0d1-97550542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5edf719f555424_75580159',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5edf719f555424_75580159')) {function content_5edf719f555424_75580159($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="fontawesome/css/all.css">
        <link rel="icon" href="image/logos.png" type="image/x-icon">
        <link href="style/services_meeting.css" rel="Stylesheet" type="text/css">

        <link href='fullcalendar/core/main.css' rel='stylesheet' />
        <link href='fullcalendar/daygrid/main.css' rel='stylesheet' />
        <link href='fullcalendar/timegrid/main.css' rel='stylesheet' />
        <link href='fullcalendar/list/main.css' rel='stylesheet' />
        <title>ELFID Clinique</title>
    </head>
    <body>
            <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="font-size: 1.5rem;">
                <li class="nav-item">
                  <a class="nav-link active" id="meeting-tab" data-toggle="tab" href="#meeting" role="tab" aria-controls="meeting" aria-selected="true">Rendez-vous</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="meeting" role="tabpanel" aria-labelledby="meeting-tab">
                    
                    <div id='wrap' >
                        <div id='calendar'></div>
                        <div style='clear:both'></div>
                       
                      </div>
                </div>
                
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><?php echo $_smarty_tpl->getSubTemplate ('contact.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
              </div>
            <!--<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>-->
            
            <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            

            <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Prendre un rendez-vous</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="text-align: center;">
          <h2 style="text-decoration: underline;">Votre rendez-vous</h2>
          <h6>Vous devez payer 50% du prix de la consultation pour reserver votre rendez-vous</h6>
          <div class="table-responsive">
            <table id="table" class="table table-bordered">
              <tr>
                  <td width="30%">
                    <label>Réference</label></td>
                    <td id="td_ref" width="70%"></td>
              </tr>
              <tr>
                  <td width="30%">
                    <label>Prix </label></td>
                    <td id="td_prix" width="70%"></td>
              </tr>
              <tr>
                  <td width="30%">
                    <label>Médecin</label></td>
                    <td id="td_med" width="70%"></td>
              </tr>
            </thead>
            </table>
            <div id="paypal-button"></div>
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
            <script src="https://www.paypalobjects.com/api/checkout.js"></script>

            <script src='fullcalendar/core/main.js'></script>
            <script src='fullcalendar/moment/main.min.js'></script>
            <script src='fullcalendar/interaction/main.js'></script>
            <script src='fullcalendar/daygrid/main.js'></script>
            <script src='fullcalendar/timegrid/main.js'></script>
            <script src='fullcalendar/list/main.js'></script>
            <script src="js/services_meeting.js"></script>



    </body>

</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2020-05-19 12:22:57
         compiled from "tpl\templates\contact.html" */ ?>
<?php /*%%SmartyHeaderCode:5274780615ebc39ceb206a7-88173602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c396de56f988ccab024ae5df09519316220430d0' => 
    array (
      0 => 'tpl\\templates\\contact.html',
      1 => 1589890953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5274780615ebc39ceb206a7-88173602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ebc39cec3b2f8_27306695',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ebc39cec3b2f8_27306695')) {function content_5ebc39cec3b2f8_27306695($_smarty_tpl) {?><header><link href="style/acceuil.css" rel="Stylesheet" type="text/css">
</header>
<div class="section-background-contact">
	<div class="box">
		<div id = "contact-form"class="contact-form">
	<h2>Contact</h2>
	<form id="formContact" method="POST" onsubmit="mail();return false;">
		
		<div class="form-group  row">
			<input class="form-control col-md-5" type="text" placeholder="Votre Nom" id="nomContact" name="nomContact">
			<input class="form-control col-md-6" type="text" placeholder="Sujet" id="sujetContact" name="sujetContact">
		</div>
		<div class="form-group">
			<label for="inputEmail">Email address</label>
			<input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email" name="inputEmail">
			<small style="color: black;">We'll never share your email with anyone else.</small>
			<br><small id='mailverif' style='color: red;'>.</small>
		  </div>
		  <div class="form-group">
			<label for="messageEmail">Votre Message</label>
			<textarea class="form-control" id="messageEmail" rows="4" placeholder="Votre message"  name="messageEmail"></textarea>
			<br><small id='messagevrif' style='color: red;'>.</small>
		  </div>
		<div class="form-check">
		  <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkContact">
		  <label class="form-check-label" for="exampleCheck1">S'abonner a notre newsletter</label>
		  
		</div>
		<button class="btn btn-light" type="submit" id="submitMessage" name="envoyer" onclick="mail()" >Envoyer Message</button>
		<br><small id='res' style='color: #AAD4AA;'>.</small>
	</form>
	</div>
	</div>
</div>
<script src="js/contact.js"></script>

<?php }} ?>
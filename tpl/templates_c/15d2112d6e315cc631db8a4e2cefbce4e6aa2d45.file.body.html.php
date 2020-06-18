<?php /* Smarty version Smarty-3.1.14, created on 2020-05-08 14:12:28
         compiled from "tpl\templates\body.html" */ ?>
<?php /*%%SmartyHeaderCode:10489644465eb1cabc13f872-82225581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15d2112d6e315cc631db8a4e2cefbce4e6aa2d45' => 
    array (
      0 => 'tpl\\templates\\body.html',
      1 => 1588945250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10489644465eb1cabc13f872-82225581',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5eb1cabc173580_25082799',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb1cabc173580_25082799')) {function content_5eb1cabc173580_25082799($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8">
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
    top: 0;
    border-radius: 0 0 50% 50%;
}
.btnS:hover::before{
    height:180%;
}

        </style>
    </head>
    <body>
        <section>
            <form method="POST">
<strong> Veuillez saisir les données suivantes :</strong><br><br><br>
                <label> Nom      :<input class="text1" type="text"     name="nom"      placeholder="Nom"   ></label><br><br>
                <label> Prenom   :<input class="text1" type="text"     name="prenom"   placeholder="Prenom"></label><br><br>
                <label> Nationalité :<input class="text1" type="text" name="nationalite" placeholder="nationalité">   </label><br><br>
                <label> Email    :<input class="text1" type="text"     name="email"    placeholder="Email"  ></label><br><br>
                <label> Adress   :<input class="text1" type="text"     name="adress"   placeholder="Adress" ></label><br><br><br>
                <button name="envoyer" class="btnS" type="submit">Envoyer</button>
            </form>
        </section>
            </body>
                </html><?php }} ?>
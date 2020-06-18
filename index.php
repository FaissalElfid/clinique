<?php
include_once '_config.inc.php';

/*les intiales affiches dans l'avatare*/ 
session_start();
if(isset($_SESSION['nom'])){
    $avatar = ucfirst(substr($_SESSION['nom'], 0, 1));
    if(isset($_SESSION['prenom'])){
        $avatar .= ucfirst(substr($_SESSION['prenom'], 0, 1));
        $_SESSION['initials'] = $avatar;
    }
    else{
        $_SESSION['initials'] = $avatar;
    }
}
$tpl->display('index.html');


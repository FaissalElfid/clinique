<?php
include_once '_config.inc.php';
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
if(isset($_SESSION['admin'])){
    $tpl->display('admin.html');
}

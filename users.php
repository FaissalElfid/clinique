<?php
include_once '_config.inc.php';
session_start();
require_once('connexion.inc.php');
$pdo = connexion::getConnexion();
$pdostat = $pdo->prepare("select * from personne order by id");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute();
$users = $pdostat->fetchAll();
$tpl->assign('users', $users);

if(isset($_SESSION['admin'])){
    $tpl->display('users.html');
}
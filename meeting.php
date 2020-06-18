<?php
include_once '_config.inc.php';
require_once('connexion.inc.php');

session_start();
$pdo = connexion::getConnexion();
$pdostat = $pdo->prepare("select * from employe order by nom");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute();
$liste = $pdostat;



$tpl->assign('medecins',$liste);

$tpl->display("add_meeting.html");
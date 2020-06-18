<?php
include_once '_config.inc.php';
session_start();
require_once('connexion.inc.php');
$pdo = connexion::getConnexion();
$pdostat = $pdo->prepare("select * from employe order by id");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute();
$employe = $pdostat->fetchAll();
for($i =0 ;$i<count($employe);$i++){
    $pdostat = $pdo->prepare("select specialite from specialite where id='".$employe[$i]["specialite"]."'");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute();
$spec = $pdostat->fetch();
$employe[$i]["specialite"] = $spec['specialite'];
    }
    $pdostat = $pdo->prepare("select * from specialite order by id");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute();
$specialite = $pdostat->fetchAll();
$tpl->assign('specs', $specialite);
$tpl->assign('employes', $employe);
$tpl->display('ajouter_employer.html');

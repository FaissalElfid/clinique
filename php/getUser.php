<?php
require_once('../connexion.inc.php');
$pdo = connexion::getConnexion();
$med = $_POST['id'];
$pdostat = $pdo->prepare("select * from personne where id = '".$med."'");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute();
$emp = $pdostat->fetch();
$emp['password'] = '';
echo json_encode($emp);
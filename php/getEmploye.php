<?php
require_once('../connexion.inc.php');
$pdo = connexion::getConnexion();
$med = $_POST['id'];
$pdostat = $pdo->prepare("select * from employe where id = '".$med."'");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute();
$emp = $pdostat->fetch();
$pdostat = $pdo->prepare("select specialite from specialite where id='".$emp["specialite"]."'");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute();
$spec = $pdostat->fetch();
$emp["spec"] = $spec['specialite'];
echo json_encode($emp);
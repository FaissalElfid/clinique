<?php
require_once('../connexion.inc.php');
$pdo = connexion::getConnexion();

$pdostat = $pdo->prepare("select * from specialite");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute();
$spec = $pdostat->fetchAll();
echo json_encode($spec);
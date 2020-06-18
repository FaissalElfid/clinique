<?php
require_once('../connexion.inc.php');
$pdo = connexion::getConnexion();
$id=$_POST['id_emp'];
$pdostat = $pdo->prepare("DELETE from employe where id = $id");
$bool = $pdostat->execute();
echo $id;
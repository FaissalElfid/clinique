<?php
require_once('../connexion.inc.php');
$pdo = connexion::getConnexion();
$med = $_POST['x'];
$pdostat = $pdo->prepare("select * from meeting where id = '".$med."'");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute();
$meetings = $pdostat->fetch();
$pdostat = $pdo->prepare("select med.* from meeting m, employe med where m.id='".$med."' and m.medecin = med.id and med.specialite=1 order by med.id");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute();
$medecins = $pdostat->fetch();
$ev = 1;
$event=[];
$event["id"] =$meetings["id"];
$event["medecin"] =$medecins["nom"].' '.$medecins["prenom"];
$event["prix"] =$meetings["prix"];
$event["places_dispo"]=$meetings["patients"];

//$eventultat = array("meeting"=>$meeting,"medecins"=>$medecins);
echo json_encode($event);
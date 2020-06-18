<?php
require_once('../connexion.inc.php');
$pdo = connexion::getConnexion();
$meet = $_POST['x'];
$pdostat = $pdo->prepare("select * from meeting where id = '".$meet."'");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute();
$meetings = $pdostat->fetch();
$pdostat = $pdo->prepare("select per.* from personne per, reservations res where res.meeting='".$meet."' and res.personne = per.id order by per.id");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute();
$personnes = $pdostat->fetchAll();
$i = 0;
$event=array();
for($i =0 ;$i<count($personnes);$i++){
$event[$i]["id"] =$meetings["id"];
$event[$i]["nom"] =$personnes[$i]["nom"].' '.$personnes[$i]["prenom"];
$event[$i]["email"] =$personnes[$i]["email"];
}
//$eventultat = array("meeting"=>$meeting,"medecins"=>$medecins);
echo json_encode($event);
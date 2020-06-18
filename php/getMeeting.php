<?php
require_once('../connexion.inc.php');
$pdo = connexion::getConnexion();
$pdostat = $pdo->prepare("select * from meeting order by medecin");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute();
$meetings = $pdostat->fetchAll();
$pdostat = $pdo->prepare("select med.* from meeting m, employe med where m.medecin = med.id order by med.id");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute();
$medecins = $pdostat->fetchAll();
$i = 0;
$res=array();
for($i =0 ;$i<count($meetings);$i++){
    $pdostat = $pdo->prepare("select specialite from specialite where id='".$medecins[$i]["specialite"]."'");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute();
$spec = $pdostat->fetch();
$medecins[$i]["specialite"] = $spec['specialite'];


$res[$i]["id"] =$meetings[$i]["id"];
$res[$i]["title"] =$medecins[$i]["specialite"].': '.$medecins[$i]["nom"].' '.$medecins[$i]["prenom"];
$res[$i]["start"] =$meetings[$i]["debut"];
$res[$i]["end"] =$meetings[$i]["fin"];
$res[$i]["color"] =$meetings[$i]["couleur"];
}
//$resultat = array("meeting"=>$meeting,"medecins"=>$medecins);
echo json_encode($res);
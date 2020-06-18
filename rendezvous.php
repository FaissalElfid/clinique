<?php
include_once '_config.inc.php';
require_once('connexion.inc.php');
$pdo = connexion::getConnexion();
// ******** insert **************
$sql = "INSERT INTO meeting (medecin, prix, patients, chambre, couleur, debut, fin, allday) VALUES (?,?,?,?,?,?,?,?)";
$stmt= $pdo->prepare($sql);
    $medecin = $_POST['medecin'];
    $prix = $_POST['prix'];
    $chambre = $_POST['chambre'];
    $patients = $_POST['patients'];
    $couleur = $_POST['couleur'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $allday = $_POST['allday'];
    $stmt->execute([$medecin, $prix, $chambre, $patients,$couleur, $start, $end, $allday]);
<?php
require_once('../connexion.inc.php');
$pdo = connexion::getConnexion();
session_start();
// ******** insert **************
$sql = "INSERT INTO reservations ( meeting, personne, dateReservation) VALUES (?,?,NOW())";
$stmt= $pdo->prepare($sql);
    $meeting = $_POST['meeting'];
    $client = $_SESSION['user'];
    $stmt->execute([$meeting, $client]);
$sql = "select patients from meeting where id= ?";
$pdostat= $pdo->prepare($sql);
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
$pdostat->execute([$meeting]);
    $patient = $pdostat->fetch();
    $res = $patient['patients'] - 1 ;
$sql = "UPDATE meeting SET patients=? WHERE id=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$res, $meeting]);
echo "success";
<?php
include_once '_config.inc.php';
require_once('connexion.inc.php');
$pdo = connexion::getConnexion();
// ******** insert **************
$sql = "INSERT INTO employe (nom, prenom, email, telephone, sexe, specialite, autres, dateNaissance, prix) VALUES (?,?,?,?,?,?,?,?,?)";
$stmt= $pdo->prepare($sql);
    $nom = ltrim($_POST['nom']);
    $prenom = ltrim($_POST['prenom']);
    $email = $_POST['email'];
    $sexe = $_POST['sexe'];
    $tel = $_POST['tel'];
    $spec = $_POST['spec'];
    $date_naissance = $_POST['date_naissance'];
    $autre = $_POST['autre'];
    $prix = $_POST['prix'];
    $stmt->execute([$nom, $prenom, $email, $tel,$sexe, $spec, $autre, $date_naissance,$prix]);
<?php
include_once '_config.inc.php';
require_once('connexion.inc.php');
$pdo = connexion::getConnexion();
// ******** insert **************
$sql = "INSERT INTO personne (nom, prenom, password, dateNaissance, email) VALUES (?,?,?,?,?)";
$stmt= $pdo->prepare($sql);
    $nom = ltrim($_POST['nom']);
    $prenom = ltrim($_POST['prenom']);
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $date_naissance = $_POST['date_naissance'];
    $email = $_POST['email'];

    $stmt->execute([$nom, $prenom, $password, $date_naissance, $email]);


$tpl->display('sinscrire.html');
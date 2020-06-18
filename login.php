<?php
//print_r($_POST);
require_once('connexion.inc.php');
$pdo = connexion::getConnexion();
$pdostat = $pdo->prepare("select * from personne where email = ?");
$inputEmail = $_POST['username'];
$inputPassword = $_POST['password'];
$pdostat->fetch(PDO::FETCH_ASSOC);
$pdostat->execute(array($inputEmail));
$liste = $pdostat->fetch();

if ($pdostat->rowCount() > 0) {
    if(password_verify($inputPassword, $liste["password"])){
    session_unset();
    session_start();
    
    $_SESSION['nom'] = $liste["nom"];
    $_SESSION['prenom'] = $liste["prenom"];
    if(strcmp($inputEmail,"admin@clinique.ma")==0){
      $_SESSION['admin'] = $liste["id"];
      $res = array("result"=>"admin");
    echo json_encode($res);}
    else{
    $_SESSION['user'] = $liste["id"];
    $res = array("result"=>"valide");
    echo json_encode($res);
  }
  } else {
    $res = array("result"=>"password invalide");
     echo json_encode($res);
  }
}else{
    $res = array("result"=>"email invalide");
    echo json_encode($res);
  }



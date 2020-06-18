<?php 
class connexion{
function getConnexion(){
try{
    $pdo = new PDO('mysql:host=localhost;dbname=clinique', 'root', '');
    return $pdo;
}
catch (Exception $e){
    die("impossible de se connecter");
}
}
}
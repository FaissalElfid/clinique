<?php
include_once '_config.inc.php';

    $message = $_POST['message'];
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    $subject = $_POST['sujet'];
$email_to = "faissal.devtest@gmail.com";
$headers = "From: ".$nom." <faissal.elfid@gmail.com>";
$message .= "\r\n this mail was sent from :".$email;


if(mail($email_to,$subject,$message,$headers)){
    echo'sent';
}
else{
    die("erreur d'envoi");
}

/*
$message = $_POST['messageEmail'];
$email = $_POST['inputEmail'];
$nom = $_POST['nomContact'];
$subject = $_POST['sujetContact'];
//$template_file ="tpl/templates/index.html";
$email_to = "faissal.devtest@gmail.com";
$headers = "From: ".$nom." <faissal.elfid@gmail.com>";
$message .= "\r\n this mail was sent from :".$email;


if(mail($email_to,$subject,$message,$headers)){
    echo'sent';
}
else{
    die("erreur d'envoi");
}*/
?>

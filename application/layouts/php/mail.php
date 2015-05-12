<?php

$mail = "info@comediestar.ca, audreyjacques@icloud.com";
$prenom  = $_POST['prenom'];
$nom  = $_POST['nom'];
$telephone  = $_POST['telephone'];
$courriel  = $_POST['courriel'];
$message  = $_POST['message'];


if(!empty($prenom) && !empty($nom) && !empty($courriel)){


    $headers = "Content-type: text/html; charset=UTF-8\r\n"; 

    $subject = 'Formulaire Comediestar ';
    $body = "Quelqu'un désire contacter Comediestar. Voici ses informations : <br /><br />
    Prenom : <b>$prenom</b><br />
    Nom : <b>$nom</b><br />
    Courriel : <b>$courriel</b><br />
    Telephone : <b>".(empty($telephone)?'--':$telephone)."</b><br />
    MEssage : <br>".nl2br($message)."<br />";

    //mail($mail, $subject, $body, $headers)
    if (mail("rossc@globalia.ca", $subject, $body, $headers)) {
        echo "true";
    }
    else {
        echo "false";
    }

}
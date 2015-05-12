<?php
$site_name = "Palmarès";

$section = (isset($_GET['section'])) ? $_GET['section'] : null;
$content = (isset($_GET['content'])) ? $_GET['content'] : null;
$element = (isset($_GET['element'])) ? $_GET['element'] : null;
$ville = (isset($_GET['ville'])) ? $_GET['ville'] : null;

$title = "";
switch ($content) {
    case "accueil":
    $title = "Gala Comédie Star - Humour Québec";
    break;

    case "forfait":
    $title = "Comédie Star - Forfait - Humour Québec";
    break;

    case "galas":
    $title = "Gala Comédie Star - Humour Québec";
    break;

    case "agence":
    $title = "Comédie Star - Agence - Humour Québec";
    break;

    case "contact":
    $title = "Comédie Star - Contact - Humour Québec";
    break;
    
    case "ville":
    $title = "Comédie Star - ".ucfirst($ville)." - Humour Québec";
    break;
}

?>

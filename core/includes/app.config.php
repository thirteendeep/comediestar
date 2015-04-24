<?php
$site_name = "Palmarès";

$section = (isset($_GET['section'])) ? $_GET['section'] : null;
$content = (isset($_GET['content'])) ? $_GET['content'] : null;
$element = (isset($_GET['element'])) ? $_GET['element'] : null;

$title = "";
switch ($content) {
    case "index":
        $title = "Accueil";
    break;
}

?>
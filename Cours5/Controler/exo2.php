<?php

include("../Fonctions/fonctions.php");

//2
if(isset($_GET["Nom"]) && isset($_GET["Prenom"])){
    $bonjour = bonjour($_GET["Nom"], $_GET["Prenom"]);
}

header("Location: ../Vue/exo2.php?bonjour=".$bonjour);

?>
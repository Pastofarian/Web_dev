<?php

include("../Fonctions/fonctions.php");

//3
if(isset($_GET["Nom2"]) && isset($_GET["Prenom2"])){
    $expRegul = expRegul($_GET["Nom2"], $_GET["Prenom2"]);
 }

 header("Location: ../Vue/exo3.php?expRegul=".$expRegul);

 ?>
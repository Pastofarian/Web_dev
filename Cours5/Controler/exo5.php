<?php
session_start();

if(isset($_GET['Nom']) && isset($_GET['Prenom']) && isset($_GET['Age'])){
    $display = $_GET['Nom'] . " " . $_GET['Prenom'] . " est agé de " . $_GET['Age'] . " ans. " . "<br>Sexe : " . $_GET['Sexe'] . " " . "<br>Etat Civil : " . $_GET['Etat_Civil'];
}

$_SESSION["displayForm"] = $display;
header("Location: ../Vue/exo5.php");
?>
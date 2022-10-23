<?php
session_start();

include("../Fonctions/fonctions.php");

$tableau1 = ["pomme", "poire","Banane"];

if(empty($_SESSION["sessionArray"])){
    $_SESSION["sessionArray"] = $tableau1;
}
//var_dump($_SESSION["sessionArray"]);
$_SESSION["sessionArray"] = addItem($_SESSION["sessionArray"], $_GET['item']);

header("Location: ../Vue/exo6.php");

?>
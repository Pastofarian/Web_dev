<?php
//1
include("../Fonctions/fonctions.php");

if(isset($_GET["age"])){
     $check = isAdult($_GET["age"]);
}

header("Location: ../Vue/exo1.php?check=".$check);

?>
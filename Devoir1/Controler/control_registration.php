<?php
session_start();
include("../Functions/functions.php");

$registration = '../View/registration_form.php';
$login = '../View/login_form.php';

$_SESSION["checkEmpty"] = checkEmpty($_POST);
$_SESSION["checkPassword"] = checkPassword($_POST["pass1"],$_POST["pass2"]);

// if(!preg_match("/^[A-Za-z '-]+$/",$_POST["prenom"]) && !strlen($_POST["prenom"]) < 25){
//     $_SESSION["error"] = "Erreur dans le prénom";
//     header("Location: " . $registartion);
// }

if(!empty($_SESSION["checkEmpty"]) || !empty($_SESSION["checkPassword"])) {
    header("Location: " . $registration); 
}else{
    addDatasCsv();
    header("Location: " . $login);
}

//var_dump($_SESSION["checkEmpty"]);

//session_destroy();
?>
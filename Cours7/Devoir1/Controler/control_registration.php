<?php
session_start();
include("../Functions/functions.php");
include("../Model/insert.php");

$registration = '../View/registration_form.php';
$login = '../View/login_form.php';

$csvFile = 'datas.csv'; // Set path to CSV file
$csv = readCSV($csvFile); 

$_SESSION["checkEmpty"] = checkEmpty($_POST);
$_SESSION["matchPassword"] = MatchPassword($_POST["pass1"],$_POST["pass2"]);
$_SESSION["checkIdFn"] = validateUserId($_POST["prenom"], "prénom");
$_SESSION["checkIdLn"] = validateUserId($_POST["nom"], "nom");
$_SESSION["checkEmail"] = checkEmail($_POST["email"]);
$_SESSION["checkDob"] = checkDob($_POST["dob"]);
$_SESSION["checkPassword"] = checkPassword($_POST["pass1"]);
$_SESSION["checkDuplicates"] = duplicates($_POST["email"], $csv);

if(
    !empty($_SESSION["checkEmpty"]) || 
    !empty($_SESSION["matchPassword"]) || 
    !empty($_SESSION["checkIdFn"]) || 
    !empty($_SESSION["checkIdLn"]) || 
    !empty($_SESSION["checkEmail"]) ||
    !empty($_SESSION["checkPassword"]) ||
    !empty($_SESSION["checkDob"]) ||
    !empty($_SESSION["checkDuplicates"])
    ) {
    header("Location: " . $registration); 
}else{
    insertDB($_POST["nom"], $_POST["prenom"], $_POST["dob"], $_POST["email"], $_POST["pass1"], $_POST["pass2"]);
    //addDatasCsv(); //si ok on enregistre les données
    //unset($_SESSION["checkEmpty"]);
    header("Location: " . $login);
}

//var_dump($_SESSION["checkDuplicates"]);

//session_destroy();
?>
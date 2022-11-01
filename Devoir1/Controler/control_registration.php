<?php
session_start();
include("../Functions/functions.php");

$registration = '../View/registration_form.php';
$login = '../View/login_form.php';

$_SESSION["checkEmpty"] = checkEmpty($_POST);
$_SESSION["matchPassword"] = MatchPassword($_POST["pass1"],$_POST["pass2"]);
$_SESSION["checkIdFn"] = validateUserId($_POST["prenom"], "prénom");
$_SESSION["checkIdLn"] = validateUserId($_POST["nom"], "nom");
$_SESSION["checkEmail"] = checkEmail($_POST["email"]);
$_SESSION["checkDob"] = checkDob($_POST["dob"]);
$_SESSION["checkPassword"] = checkPassword($_POST["pass1"]);

//switch difficile à implémenter ici...
if(
    !empty($_SESSION["checkEmpty"]) || 
    !empty($_SESSION["matchPassword"]) || 
    !empty($_SESSION["checkIdFn"]) || 
    !empty($_SESSION["checkIdLn"]) || 
    !empty($_SESSION["checkEmail"]) ||
    !empty($_SESSION["checkPassword"]) ||
    !empty($_SESSION["checkDob"])
    ) {
        //header("Location: " . $registration); 
}else{
    addDatasCsv();
    //header("Location: " . $login);
}
$test = checkDob($_POST["dob"]);
echo $test;
//var_dump($_SESSION["checkEmpty"]);
//

//session_destroy();
?>
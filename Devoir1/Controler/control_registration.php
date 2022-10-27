<?php
session_start();
include("../Functions/functions.php");

// $registration = '../View/registration_form.php';
// $login = '../View/login_form.php';

$_SESSION["checkEmpty"] = checkEmpty($_GET);
$_SESSION["checkPassword"] = checkPassword($_GET["pass1"],$_GET["pass2"]);

if(!empty($_SESSION["checkEmpty"]) || !empty($_SESSION["checkPassword"])) {
    header("Location: ../View/registration_form.php"); 
}else{
    header("Location: ../View/login_form.php");
}

// if(!empty($_SESSION["checkPassword"])){
//     header("Location: ../View/registration_form.php");
//   }else{
//     header("Location: ../View/login_form.php");
// }

//headers in the file

// $fp = fopen("devoir1.csv", "a");
// if ($fp) {
//     while (($buffer = fgets($fp, 4096)) == false) {
//         $header_data=array('Nom','Prenom','Naissance', 'mail', 'pass1', 'pass2');
//         fputcsv($out,$header_data);
//     }
//     fclose($fp);
// }

//open the file
$out = fopen('datas.csv', 'a+');
//Data to be inserted
fputcsv($out, $_GET);
//Closing the file
fclose($out);

//var_dump($_SESSION["checkEmpty"]);

//session_destroy();
?>
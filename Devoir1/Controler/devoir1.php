<?php
session_start();
$redirect = false;
$location = '../View/registration_form.php';

function checkEmpty($data){
    $error = array();
    foreach ($data as $key => $value) {
      if(empty($value)){
        $error[$key]='Veuillez remplir le champ ' . $key;
      } else {
        $redirect = true;
      }
    }
        return $error;
  }

// if(!$redirect && !empty($location)){
//     //$bonjour = "bonjour";
//     $_SESSION["checkEmpty"] = checkEmpty($_GET);
//     //var_dump($_SESSION["checkEmpty"]);
//     header("Location: ". $location);
//     exit;
// }

  function checkPassword($pass1, $pass2){
    $error = "";
    if($pass1 != $pass2){
        $error = "Erreur dans le mot de passe, recommencez !";
        $redirect = true;
    }
    return $error;
  }

if(!$redirect && !empty($location)){
    $_SESSION["checkPassword"] = checkPassword($_GET['pass1'], $_GET['pass2']);
    header("Refresh:0");
}
//var_dump($_GET);

header("Location: ../View/login_form.php");
//session_destroy();
?>
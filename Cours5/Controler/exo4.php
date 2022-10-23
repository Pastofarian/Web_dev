<?php

session_start();

function checkEmpty($data){
  $error=array();
  foreach ($data as $key => $value) {
    if(empty($value)){
      $error[$key]='le champ est vide';
    }
  }
  return $error;
}

$_SESSION["checkEmpty"] = checkEmpty($_GET);

header("Location: ../Vue/exo4.php");


//var_dump($_SESSION["checkEmpty"]);
?>
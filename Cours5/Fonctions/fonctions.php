<?php

function isAdult($age){
    if($age >= 18){
        return "majeur !";
    }else {
        return "mineur !";
    }
}

function bonjour($a, $b){
    return $a . " " . $b;
}
  
  function expRegul($name, $firstName){
    $pattern = "#^[a-z0-9]+$#i";
    $error = "Tout est ok";
    if (!preg_match($pattern , $name)){
         $error = "Il y à une erreure dans le nom";
    }
    if (!preg_match($pattern , $firstName)){
         $error = "Il y à une erreure dans le prenom";
    }
    return $error;
}

function checkEmpty($data){
    $error=array();
    foreach ($data as $key => $value) {
      if(empty($value)){
        $error[$key]='le champ est vide';
      }
    }
    if(!empty($error)){
      foreach($error as $key => $value){
        echo $key.' -> '.$value.'<br>';
    }
  }
}

function addItem($array, $item){
    array_push($array, $item);
    return $array;
}
?>
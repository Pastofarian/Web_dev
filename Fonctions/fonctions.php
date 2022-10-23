<?php

function helloWorld($text){
$text = "Hello World";
return $text;
}
// 1 - Créer une fonction qui permet d'ajouter un element à un tableau.
// Return le tableau complété.
// (2 arg : le tableau / l'élement à ajouter) [$tableau1]
function addItem($array, $item){
    array_push($array, $item);
    return $array;
}

// 2 - Créer une fonction qui retourne le nombre d'elements dans le tableau.
//     le tableau doit être donné en paramètre.
//     ( Ne pas utiliser les fonctions de PHP) [$tableau1]

function numOfElements($tab1){
    $count = 0;
    foreach ($tab1 as $key => $value) {
        $count ++;
    }
    return $count;
}

function numOfElements2($tab1){
    $count = 0;
    for ($i=0; $i < count($tab1); $i++) { 
        $count ++;
    }
    return $count;
}

/****Correction */

function nbElemTab($tab){
    $cpt=0;
    foreach ($tab as $elem) {
      $cpt++;
    }
    return $cpt;
  }

// 3 - Créer une fonction qui va merge 2 tableaux de 1 dimension.
//     return du tableau merge.
//     ( Ne pas utiliser array_merge) [$tableau1] & [$tableau2]

function mergingArray($tab1, $tab2){
    foreach ($tab2 as $key => $value) {
        array_push($tab1, $value);
    }
    return $tab1;
}


// 4 - Créer une fonction qui vérifie si un tableau à des éléments vides, si oui,
//     Elle retournera le tableau des clés vides. [$tableau3]
//     !!! pour tableau dynamique !!!

function isEmpty($tab1){
    $tab2 = array();
    foreach ($tab1 as $key => $value) {
        if($value == NULL){
            array_push($tab2, $key);
        }
    }
    return $tab2;
}


/*************** Correction **** */
function checkEmpty($tab){
    $error=array();
    foreach ($tab as $key => $value) {
      if(empty($value)){
        $error[$key]='le champ est vide';
      }
    }
    return (!empty($error)) ? $error : "vide";
  }
  
//  $tabEmpty = checkEmpty($tableau3);
//  var_dump($tabEmpty);

// 7 - Ecrire un programme qui signale si vous êtes majeure ou pas en fonction d'un age.

function isAdult($age){
    if($age >= 18){
        echo "Vous êtes majeur !";
    }else {
        echo "Vous êtes mineur !";
    }
}

//  2 - Faire un formulaire qui demande d'entrer un nom et prenom
//      et afficher "Bonjour 'nom Prenom !'"
//      (tant que rien n'est entrer, ne pas afficher de message) 

function bonjour($a, $b){
    return "Bonjour " . $a . " " . $b;
}

// 3 - Faire un formulaire qui demande d'entrer un nom et prenom
//      et verifier qu'il n'y ai pas de chiffres ni accents dans ceux-ci
//      (tant que rien n'est entrer, ne pas afficher de message)

//Voir générateur d'expression réguliere!!
function expressionRegul($a, $b){
    if (preg_match('~^[À-ÖØ-öø-ÿœŒ0-9]+$~u', $a) || preg_match('~^[À-ÖØ-öø-ÿœŒ0-9]+$~u', $b)){
      return ' Erreur de saisie ';
    } else {
      return $a . " " . $b;
    }
  }


?>
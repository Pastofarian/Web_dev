<?php
/*
1 - Faite en sorte que la fonction HelloWorld retourne exactement la valeur Hello World!
2 - Créer une fonction qui s'appelle jeRetourneMonArgument(). Exemple : Arg = "abc" ==> Return abc Arg = 123 ==> Return 123
3 - Créer une fonction qui s'appelle concatenation(). Elle prendra deux arguments de type string. Elle devra retourner la concatenation des deux.
4 - Créer une fonction qui s'appelle multiplication(). Elle prendra deux arguments de type int. Elle devra retourner la somme des deux
5 - Créer une fonction qui s'appelle estIlMajeure(). Elle prendra un argument de type int. Elle devra retourner un boolean.
6 - Créer une fonction qui s'appelle plusGrand(). Elle prendra deux arguments de type int. Elle devra retourner le plus grand des deux.
7 - Créer une fonction qui s'appelle plusPetit(). Elle prendra trois arguments de type int. Elle devra retourner le plus petit des trois.
8 - Créer une fonction qui s'appelle plusGrandTab(). Elle prendra un argument de type array. Elle devra retourner le plus grand des élements présent dans l'array. Si l'array est vide, il faudra retourner null;*/


//1
function helloWorld(){
  return 'Hello World!';
}

//2
function jeRetourneMonArgument($arg1){
  return $arg1;
}

//3
function concatenation($arg1, $arg2){
  return $arg1.' '.$arg2;
}

//4
function multiplication($nb1, $nb2){
  return $nb1*$nb2;
}

//5
function estIlMajeure($age){
/*  if($age>=18){
    return true;
  }else{
    return false;
  }
*/
  return ($age>=18) ? true : false;
}


//6
function plusGrand($nb1, $nb2){
  return ($nb1>=$nb2) ? $nb1 : $nb2;
}

//7
function plusPetit($nb1, $nb2, $nb3){
  return min($nb1, $nb2, $nb3);
  function plusPetit($arg1, $arg2, $arg3) {
                    return ($arg1 > $arg2) ? (($arg2 > $arg3) ? $arg3 : $arg2) : (($arg1 > $arg3) ? $arg3 : $arg1);
                    /*if ($arg1 > $arg2) { //arg1 > arg2
                        if ($arg2 > $arg3) { //arg1 > arg2 > arg3
                            return $arg3;
                        } else { // arg1 > arg3 > arg2
                            return $arg2;
                        }
                    } else { // arg2 > arg1
                        if ($arg1 > $arg3) { //arg2 > arg1 > arg3
                            return $arg3;
                        } else { // arg2 > arg3 > arg1
                            return $arg1;
                        }
                    }
                }*/
}

//8
function plusGrandTab($tab){
  /*
  if(empty($tab)){
    return 'NULL';
  }else{
    return max($tab);
  }
  */
  return (empty($tab)) ? 'NULL': max($tab);
}

?>

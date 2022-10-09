<?php

// function moyenne($nb1, $nb2, $nb3){
//     echo($nb1 + $nb2 + $nb3)/3;
// }

// moyenne(5, 8, 9);

// function moyenne2($nb1, $nb2, $nb3){
//     $resultat = ($nb1 + $nb2 + $nb3)/3;
//     return $resultat;
// }

// $resultat = moyenne2(5, 8, 9);
// echo $resultat;

/************************************************************************************** */

// 1 - Faite en sorte que la fonction HelloWorld retourne exactement la valeur Hello World!
function helloWorld($text){
$text = "Hello World";
return $text;
}
$abc = "Hello World";
echo helloWorld($abc);

echo "<br>";
echo "<br>";

// function HelloWorld(){
//     echo "Hello world";
// }
// HelloWorld();

// 2 - Créer une fonction qui s'appelle jeRetourneMonArgument(). 
// Exemple : Arg = "abc" ==> Return abc Arg = 123 ==> Return 123

function jeRetourneMonArgument($test){
    return $test;
}
$test = 5;
$retour = jeRetourneMonArgument($test);
echo $retour;


echo "<br>";
echo "<br>";

// function jeRetourneMonArgument($argument){
//     return $argument;
// }
// $word = "test";
// echo jeRetourneMonArgument($word);

// 3 - Créer une fonction qui s'appelle concatenation(). 
// Elle prendra deux arguments de type string. Elle devra retourner la concatenation des deux.

function concatenation($a,$b,$c){
    return $a.$b.$c;
}

$test1 = concatenation("j'ai","me"," php !");
echo $test1;
echo "<br>";
echo "<br>";

// function concatenation($a, $b){
//     return $a . " " . $b;
//     }
//     echo concatenation("Les", "fonctions");

// 4 - Créer une fonction qui s'appelle multiplication(). 
// Elle prendra deux arguments de type int. Elle devra retourner la somme des deux

function multiplication($num1,$num2){
return $num1 * $num2;
}

echo multiplication(4,5);

echo "<br>";
echo "<br>";

// 5 - Créer une fonction qui s'appelle estIlMajeure(). 
// Elle prendra un argument de type int. Elle devra retourner un boolean.
function estIlMajeure($age){

if($age >= 18){
    return true;
}else {
    return false;
}
}
echo estIlMajeure(50);

echo "<br>";
echo "<br>";


// 6 - Créer une fonction qui s'appelle plusGrand(). 
// Elle prendra deux arguments de type int. Elle devra retourner le plus grand des deux.
function plusGrand($num1, $num2){
return ($num1 >= $num2? $num1 : $num2);
}
//Rien si chiffre négatif ou égal
echo plusGrand(5,9);

echo "<br>";
echo "<br>";

// function plusGrand($a, $b){
//     if($a > $b){
//         return $a;
//     } else
//     return $b;
// }
// echo plusGrand(15, 18)
// 7 - Créer une fonction qui s'appelle plusPetit(). 
// Elle prendra trois arguments de type int. Elle devra retourner le plus petit des trois.

function plusPetit($a, $b, $c){

    if($a < $b && $a < $c){
            return $a;
        }
    elseif($b < $a && $b < $c){
            return $b;
    } else {
        return $c;
    }
}
echo plusPetit(14, 18, 15);
    
    echo "<br>";
    echo "<br>";

    
// 8 - Créer une fonction qui s'appelle plusGrandTab(). 
// Elle prendra un argument de type array. Elle devra retourner 
// le plus grand des élements présent dans l'array. Si l'array est vide, 
// il faudra retourner null;*/

function plusGrandTab($tab){
    $pg = 0;
    echo empty($tab) ? NULL : "";
       for ($i = 0; $i < count($tab); $i++) { 
          if($pg == 0){
             $pg = $tab[$i];
          }
          elseif($tab[$i] > $pg){
            $pg = $tab[$i];
          }
       }
    return $pg;
    }
    
    $myArray1 = [2, 24, 8, 12, 1, 44, 48];
    $myArray2 = [];
    echo plusGrandTab($myArray1);
    echo "<br>";
    echo plusGrandTab($myArray2);

    /*****************Code Mathieu**************** */
    function plusGrandTab2(array $array1){
        $pg = 0;
        foreach($array1 as $i){
            $i > $pg ? $pg = $i : $pg = $pg;
        }
        return $pg;
    }
    echo $test = plusGrandTab2(array(8,5,2,3));

    /*****************Correction******** */
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
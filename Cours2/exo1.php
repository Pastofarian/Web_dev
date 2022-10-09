<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// 1 - Calculer la moyenne de 5 variables
$nombre1 = 12;
$nombre2 = 15;
$nombre3 = 16;
$nombre4 = 19;
$nombre5 = 20;

$result = 0;

$result = $nombre1 + $nombre2 + $nombre3 + $nombre4 + $nombre5 ;
echo $result / 5 ;

echo "<br>";
echo "<br>";

// $num1 = 5;
// $num2 = 10;
// $num3 = 15;
// $num4 = 20;
// $num5 = 10;

// $result = ($num1 + $num2 + $num3 + $num4 + $num5) / 5;
// echo $result;


// 2 - Définir 2 variables et afficher les deux avec un seul echo (concaténation)

$first = "J'aime";
$second= "php";

echo $first." ".$second;
echo "<br>";
echo "<br>";



// 3 - Réaliser une boucle qui affiche tous les nombres pair jusqu'à 50 (SANS utiliser l'incrémentation +2)

for($i=0; $i<=50; $i++){
    if($i % 2 == 0){ 
        echo $i.' ';
    }
}

echo "<br>";
echo "<br>";

// for ($i=0; $i < 50; $i++) { 
//     echo $i;
//     $i++;
// }

// 4 - Réaliser une boucle qui affiche tous les multiples de 3 jusqu'à 60

for($i=0; $i<=60; $i++){
    if($i % 3 == 0){ 
        echo $i.' ';
    }
}

echo "<br>";
echo "<br>";

// 5 - En utilisant la boucle for, afficher la table de multiplication du chiffre 5.

for ($i=1; $i <= 10; $i++) { 
    $result = $i * 5;
    echo $result;
    echo "<br>";
}

echo "<br>";
echo "<br>";

// 6 - En utilisant la boucle while, afficher tous les codes postaux possibles pour les codes postaux 1300.

$postCode = 1300;

while($postCode <= 1400){
    echo $postCode.' ';
    $postCode++;
}

echo "<br>";
echo "<br>";

// 7 - Ecrire un programme qui signale si vous êtes majeure ou pas en fonction d'un age.

$age = 17;

if($age >= 18){
    echo "Vous êtes majeur !";
}else {
    echo "Vous êtes mineur !";
}

echo "<br>";
echo "<br>";

// 8 - Déclarer une variable $sexe qui contient une chaîne de caractères. Créer une condition qui affiche un message différent en fonction de la valeur de la variable.

$sexe = "male";

if($sexe == "male"){
    echo "Vous êtes un homme";
}else{
    echo "Vous êtes une femme";
}

echo "<br>";
echo "<br>";

// 9 - Déclarer une variable $heure qui contient la valeur de type integer de votre choix comprise entre 0 et 24. Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.

$heure = 21;
if($heure > 24){
    echo "Pouet";
}
elseif($heure > 6 && $heure <= 12){
    echo "matin";
}elseif($heure > 12 && $heure <= 20){
    echo "après-midi";
}else{
    echo "nuit";
}

echo "<br>";
echo "<br>";
?>    


</body>
</html>


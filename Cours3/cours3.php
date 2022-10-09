<?php

// include('Fonction.php'); //Avoir un fichier séparé de fonctions

// $abc = "Hello World";
// echo helloWorld($abc);

$tab = array(); // Déclarer un tableau

$tab1=["pomme", "poire", "peche"];
var_dump($tab1);

array_push($tab1,"fraise", "cerise",4);
var_dump($tab1);

$tabPers=
[
    "nom"=>"Verheyen", 
    "prenom"=>"Raphael", 
    "age"=>31,
    "pointure"=>46,
    "info"=>
    [
        "nomEnfant" => "Verheyen",
    "prenomEnfant" => "Elena"
    ]
];
echo'<pre>';
var_dump($tabPers);
echo'<\pre>';

echo $tabPers["prenom"];

foreach ($tabPers as $key => $value) {
    echo $key;
    echo '<br>';


}


?>
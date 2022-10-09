
<?php
include('../Fonctions/fonctions.php');

$tableau1 = ["pomme", "poire","Banane"];
$tableau2 = ["abricot", "framboise","cerise"];

$tableau3 = ["nom"=>"",
             "prenom"=>"Raphael",
             "age"=>31,
             "etat_civil"=>"Celibataire",
             "metier"=>"Prof"];

$tableau5 = [0, 1, [3,[4,5]],[3,[4,[5,6]]]];

$tableau6 = ["nom"=>"Jocé",
             "prenom"=>"Po",
             "age"=>8];

$tableau7 = ["nom"=>"Elèou",
            "prenom"=>"Jeanne",
            "age"=>18];

            
/************************************************************ */

echo "1 - Créer une fonction qui permet d'ajouter un element à un tableau.";
//     Return le tableau complété.
 //   (2 arg : le tableau / l'élement à ajouter) [$tableau1]
echo "<br>"; 
echo "<br>";

$fruit = "Poire";
$tableau1 = addItem($tableau1, "cerise");
//$tableau1 = addItem($tableau1, $fruit);

echo'<pre>';
var_dump($tableau1);
echo'</pre>';

/* ****************************************/

echo "2 - Créer une fonction qui retourne le nombre d'elements dans le tableau.";
echo "<br>"; //     le tableau doit être donné en paramètre.
echo "<br>"; //   ( Ne pas utiliser les fonctions de PHP) [$tableau1]
     
echo "boucle foreach : " . numOfElements($tableau1);
echo "<br>";
echo "<br>";

echo "boucle for : " .  numOfElements2($tableau1);
echo "<br>";
echo "<br>";

/* ****************************************/

echo "3 - Créer une fonction qui va merge 2 tableaux de 1 dimension.";
echo "<br>"; //     return du tableau merge.
echo "<br>"; //     ( Ne pas utiliser array_merge) [$tableau1] & [$tableau2]

$tableau1 = mergingArray($tableau1, $tableau2);
echo'<pre>';
var_dump($tableau1);
echo'</pre>';

/* ****************************************/

echo "4 - Créer une fonction qui vérifie si un tableau à des éléments vides, si oui, Elle retournera le tableau des clés vides.";
echo "<br>";// [$tableau3]
echo "<br>";//     !!! pour tableau dynamique !!!

isEmpty($tableau3);

echo'<pre>';
var_dump (isEmpty($tableau3));;
echo'</pre>';

/* ****************************************/

echo "5 - Création d'un tableau par rapport au fichier reçu";//(tableauAFaire). [$tableau4]
echo "<br>";
echo "<br>";

$tableau4 = 
[
    "Intitulé du cours" => "5WID4",
    "Local" => "106",
    "Heure" => "18",
    "NbrEleves" => "25",
    "Infos" =>
    [
        "Etudiant1" => 
        [
            "Nom" => "Verheyen",
            "Prenom" => "Raphael",
            "age" => "31"
        ],
        "Etudiant2" =>
        [
            "Nom" => "Delbar",
            "Prenom" => "Benjamin",
            "age" => "31"
        ],
        "Etudiant3" =>
        [
            "Nom" => "Lacroix",
            "Prenom" => "Alexandre",
            "age" => "31"
        ],
        "Etudiant4" =>
        [
            "Nom" => "Coucou",
            "Prenom" => "Hibou",
            "age" => "1337"
        ]
    ]
        ];

echo'<pre>';
print_r ($myArray);;
echo'</pre>';


/* ****************************************/

echo "6 - Afficher le tableau(exos5) comme dans l'image(tablExos6) 
    (imaginer qu'il y à un grand nombre d'etudiants)";
echo "<br>";
echo "<br>";
?>
Intitulé du cours : <?= $tableau4["nomCours"];?>
<br>
Local : <?= $tableau4["Local"];?>
<br>
Nombre d'élèves : <?= $tableau4["nbrEleves"];?>
<br>
 <table border="1">
    <tr>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Age</td>
    </tr>
    <?php foreach ($tableau4["Infos"] as $tab) {?>
    <tr>
      <?php foreach ($tab as $key => $info) {?>
            <td><?= $info; ?></td>
      <?php }?>
    </tr>
  <?php }?>
</table>
<?php

/* ****************************************/

/*
(Exos défi!)
7 - Ajouter deux etudiants($tableau6 & $tableau7) au $tableau4
 !!!!!! Mettre a jour la clé 'etudiant....'!!!!!!!!!
*/

function addEtudiant($tab,$etudiant){
    array_push($tab,$etudiant);
    $cpt=1;
    foreach ($tab as $key => $value) {
      $check = "etudiant".$cpt;
      if($key !== "etudiant".$cpt){
        $arrayTmp = $tab[$key];
        unset($tab[$key]);
        $tab[$check]=$arrayTmp;
      }
      $cpt++;
    }
    return $tab;
  }
  
  $tableau4["infosCours"]["infosEleves"] = addEtudiant($tableau4["infosCours"]["infosEleves"],$tableau6);
  $tableau4["infosCours"]["infosEleves"] = addEtudiant($tableau4["infosCours"]["infosEleves"],$tableau7);
/*
8 - Créer une fonction qui retournera la dimension
    du tableau qu'elle recevra en argument.
    [$tableau5] 
    */
    function dimension($tab) {
        $dimension = 1;
        foreach($tab as $subtab) {
            if (is_array($subtab)) {
                $temp_dimension = dimension($subtab) +1;
                $dimension = $temp_dimension > $dimension ? $temp_dimension : $dimension;
            }
        }
        return $dimension;
    }
    //echo dimension($tab);
?>
<!--
1 - Créer une fonction qui permet d'ajouter un element à un tableau.
    Return le tableau complété.
  (2 arg : le tableau / l'élement à ajouter) [$tableau1]

2 - Créer une fonction qui retourne le nombre d'elements dans le tableau.
    le tableau doit être donné en paramètre.
    ( Ne pas utiliser les fonctions de PHP) [$tableau1]

3 - Créer une fonction qui va merge 2 tableaux de 1 dimension.
    return du tableau merge.
    ( Ne pas utiliser array_merge) [$tableau1] & [$tableau2]

4 - Créer une fonction qui vérifie si un tableau à des éléments vides, si oui,
    Elle retournera le tableau des clés vides. [$tableau3]
    !!! pour tableau dynamique !!!

5 - Création d'un tableau par rapport au fichier reçu(tableauAFaire). [$tableau4]

6 - Afficher le tableau(exos5) comme dans l'image(tablExos6) [$tableau4]
    (imaginer qu'il y à un grand nombre d'etudiants)

(Exos défi!)
7 - Ajouter deux etudiants($tableau6 & $tableau7) au $tableau4
 !!!!!! Mettre a jour la clé 'etudiant....'!!!!!!!!!


8 - Créer une fonction qui retournera la dimension
    du tableau qu'elle recevra en argument.
    [$tableau5]
-->
<?php

$tableau1 = ["pomme", "poire","Banane"];
$tableau2 = ["abricot", "framboise","cerise"];

$tableau3 = ["nom"=>"Verheyen",
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


//1------------------------------------------------------------------------------
//-------------------------------------------------------------------------------

function addTab($tab, $elem){
  array_push($tab, $elem);
  return $tab;
}
$tableau = addTab($tableau1, "fraise");
var_dump($tableau);

//2------------------------------------------------------------------------------
//-------------------------------------------------------------------------------

function nbElemTab($tab){
  $cpt=0;
  foreach ($tab as $elem) {
    $cpt++;
  }
  return $cpt;
}

$nbElem=nbElemTab($tableau1);
echo $nbElem;


//3------------------------------------------------------------------------------
//-------------------------------------------------------------------------------

function mergeTab($tab1, $tab2){
  foreach ($tab1 as $val) {
    array_push($tab2, $val);
  }
  return $tab2;
}

$tabMerge = mergeTab($tableau1, $tableau2);
var_dump($tabMerge);

//4------------------------------------------------------------------------------
//-------------------------------------------------------------------------------

function checkEmpty($tab){
  $error=array();
  foreach ($tab as $key => $value) {
    if(empty($value)){
      $error[$key]='le champ est vide';
    }
  }
  return (!empty($error)) ? $error : "vide";
}

$tabEmpty = checkEmpty($tableau3);
var_dump($tabEmpty);

//5------------------------------------------------------------------------------
//-------------------------------------------------------------------------------

$tableau4 = ["nomCours"=>"5WID4",
             "infosCours"=>["local"=>"106",
                            "heure"=>"18h",
                            "nbEleves"=>25,
                            "infosEleves"=>["etudiant1"=>["nom"=>"Verheyen",
                                                          "prenom"=>"Raphael",
                                                          "age"=>31],
                                            "etudiant2"=>["nom"=>"Delbar",
                                                          "prenom"=>"Benjamin",
                                                          "age"=>31],
                                            "etudiant3"=>["nom"=>"Lacroix",
                                                         "prenom"=>"Alexandre",
                                                         "age"=>31],
                                            "etudiant4"=>["nom"=>"Coucou",
                                                          "prenom"=>"Hibou",
                                                          "age"=>31]
                                                         ]
                                            ]
            ];

  var_dump($tableau4);

//6------------------------------------------------------------------------------
//-------------------------------------------------------------------------------

?>
Intitulé du cours : <?= $tableau4["nomCours"];?>
<br>
Local : <?= $tableau4["infosCours"]["local"];?>
<br>
Nombre d'élèves : <?= $tableau4["infosCours"]["nbEleves"];?>
<br>
 <table border="1">
    <tr>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Age</td>
    </tr>
    <?php foreach ($tableau4["infosCours"]["infosEleves"] as $tab) {?>
    <tr>
      <?php foreach ($tab as $key => $info) {?>
            <td><?= $info; ?></td>
      <?php }?>
    </tr>
  <?php }?>
</table>
<?php


//7------------------------------------------------------------------------------
//-------------------------------------------------------------------------------


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



//8------------------------------------------------------------------------------
//-------------------------------------------------------------------------------
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

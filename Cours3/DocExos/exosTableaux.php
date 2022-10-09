
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

 ?>

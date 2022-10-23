

<!-- // 1 - Faire un formulaire qui demande d'entrer un age
//     et prévenir s'il est majeure ou non
//     (tant que rien n'est entrer, ne pas afficher de message)

// 2 - Faire un formulaire qui demande d'entrer un nom et prenom
//     et afficher "Bonjour 'nom Prenom !'"
//     (tant que rien n'est entrer, ne pas afficher de message)

// 3 - Faire un formulaire qui demande d'entrer un nom et prenom
//     et verifier qu'il n'y ai pas de chiffres ni accents dans ceux-ci
//     (tant que rien n'est entrer, ne pas afficher de message)

// 4 - Faire un formulaire qui demande d'entrer un nom, prenom et un age
//     et verifier que l'utilisateur a bien remplis TOUS les champs.
//     Si pas, alors prévenir quel champ(s) est vide.

// 5 - Faire une formulaire qui demande un nom/prenom/age/sex/etatCivil
//     comme dans l'image et afficher l'encodage une fois terminé.

// 6 - Faire un formulaire pour allimenter l'exercice 1 du cours3.

// 7 - Faire un formulaire pour allimenter l'exercice 7 du cours3. -->



1 - Faire un formulaire qui demande d'entrer un age et prévenir s'il est majeure ou non(tant que rien n'est entrer, ne pas afficher de message)

<!-- #signifie sur cette page -->
<form action="#" method="GET">  
<label>Age</label><br>
<input type="text" name="Age"><br>
            
<input type="submit" value="Envoyer">
</form>

<?php
include('../Fonctions/fonctions.php');

if(isset($_GET['Age'])){
    isAdult($_GET['Age']);
}
echo "<br>";
echo "<br>";
?>


 2 - Faire un formulaire qui demande d'entrer un nom et prenom
     et afficher "Bonjour 'nom Prenom !'"
     (tant que rien n'est entrer, ne pas afficher de message) 

<form action="#" method="GET">
<label>Nom</label><br>
<input type="text" name="Nom"><br>

<label>Prenom</label><br>
<input type="text" name="Prenom"><br>
            
<input type="submit" value="Envoyer">
</form>

<?php

if(isset($_GET['Nom']) && isset($_GET['Prenom'])){
   $hello = bonjour($_GET["Nom"], $_GET["Prenom"]);
   echo $hello;
}

echo "<br>";
echo "<br>";
?>
3 - Faire un formulaire qui demande d'entrer un nom et prenom
     et verifier qu'il n'y ai pas de chiffres ni accents dans ceux-ci
     (tant que rien n'est entrer, ne pas afficher de message)

<form action="#" method="GET">
<label>Nom</label><br>
<input type="text" name="Nom2"><br>

<label>Prenom</label><br>
<input type="text" name="Prenom2"><br>
            
<input type="submit" value="Envoyer">
</form>

<?php
if(isset($_GET['Nom2']) && isset($_GET['Prenom2'])){
    $hello = expressionRegul($_GET["Nom2"], $_GET["Prenom2"]);
    echo $hello;
 }


echo "<br>";
echo "<br>";

?>

4 - Faire un formulaire qui demande d'entrer un nom, prenom et un age
    et verifier que l'utilisateur a bien remplis TOUS les champs.
    Si pas, alors prévenir quel champ(s) est vide.

<form action="#" method="GET">
<label>Nom</label><br>
<input type="text" name="Nom3"><br>

<label>Prenom</label><br>
<input type="text" name="Prenom3"><br>

<label>Age</label><br>
<input type="text" name="Age3"><br> 

<input type="submit" value="Envoyer">
</form>

<?php
if(isset($_GET['Nom3']) && isset($_GET['Prenom3']) && isset($_GET['Age3'])){
    echo $_GET['Nom3'] . " " . $_GET['Prenom3'] . " est agé de " . $_GET['Age3'];
} 
if(empty($_GET['Nom3'])){
    echo "<br>";
    echo "Le champ Nom est manquant !";
}
if(empty($_GET['Prenom3'])){
    echo "<br>";
    echo "Le champ Prenom est manquant !";
}
if(empty($_GET['Age3'])){
    echo "<br>";
    echo "Le champ Age est manquant !";
}


echo "<br>";
echo "<br>";
?>

5 - Faire une formulaire qui demande un nom/prenom/age/sex/etatCivil
    comme dans l'image et afficher l'encodage une fois terminé.
    <br>
    <form action="#" method="GET">
<label>Nom :</label><br>
<input type="text" name="Nom4"><br>

<label>Prenom :</label><br>
<input type="text" name="Prenom4"><br>

<label>Age :</label><br>
<input type="text" name="Age4"><br> 
<br>
<br>
Sexe :
<br>
<input type="radio" name="Sexe" value="Homme">
<label for="Sexe">Homme</label>
<input type="radio" name="Sexe" value="Femme">
<label for="Sexe">Femme</label>
<input type="radio" name="Sexe" value="Autre">
<label for="Sexe">Autre</label>
<br>
<br>
Etat Civil: ?
        <select name="Etat_Civil">
            
                <option value="Marié">Marié</option>
                <option value="Cohabitant" selected="selected">Cohabitant</option>
                <option value="Célibataire">Célibataire</option>
                <option value="Bof">Bof</option>
                <option value="Blobfish">Blobfish</option>
                <option value="Cracoucass">Cracoucass</option>
        </select>
        <br>
        <br>
<input type="submit" value="Envoyer">
</form>
<?php
if(isset($_GET['Nom4']) && isset($_GET['Prenom4']) && isset($_GET['Age4'])){
    echo $_GET['Nom4'] . " " . $_GET['Prenom4'] . " est agé de " . $_GET['Age4'] . " ans. " . "<br>Sexe : " . $_GET['Sexe'] . " " . "<br>Etat Civil : " . $_GET['Etat_Civil'];
}

?>
<br>
<br>
6 - Faire un formulaire pour allimenter l'exercice 1 du cours 3.
<br>
<br>
    <form action="#" method="GET">
<label>Ajouter au tableau : </label><br>
<input type="text" name="item"><br>
<input type="submit" value="Envoyer">
</form>
<?php

$tableau1 = ["pomme", "poire","Banane"];
$tableau1 = addItem($tableau1, $_GET['item']);

echo'<pre>';
var_dump($tableau1);
echo'</pre>';
?>

7 - Faire un formulaire pour allimenter l'exercice 7 du cours3.

<form action="#" method="GET">
<label>Nom</label><br>
<input type="text" name="Nom5"><br>

<label>Prenom</label><br>
<input type="text" name="Prenom5"><br>

<label>Age</label><br>
<input type="text" name="Age5"><br>
            
<input type="submit" value="Envoyer">
</form>

<?php
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
  ?>
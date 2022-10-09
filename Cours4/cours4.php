

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
    echo "Le champ Nom est manqant !";
}
if(empty($_GET['Prenom3'])){
    echo "<br>";
    echo "Le champ Prenom est manqant !";
}
if(empty($_GET['Age3'])){
    echo "<br>";
    echo "Le champ Age est manqant !";
}


echo "<br>";
echo "<br>";
?>
?>
4 - Faire un formulaire qui demande d'entrer un nom, prenom et un age
    et verifier que l'utilisateur a bien remplis TOUS les champs.
    Si pas, alors prévenir quel champ(s) est vide.

<form action="#" method="GET">
<label>Nom</label><br>
<input type="text" name="Nom"><br>

<label>Prenom</label><br>
<input type="text" name="Prenom"><br>

<label>Age</label><br>
<input type="text" name="Age"><br> 

<input type="submit" value="Envoyer">
</form>

<?php

session_start();

if(isset($_GET['Nom']) && isset($_GET['Prenom']) && isset($_GET['Age'])){
    echo $_GET['Nom'] . " " . $_GET['Prenom'] . " est agé de " . $_GET['Age'];
} 
if(empty($_GET['Nom'])){
    echo "<br>";
    echo "Le champ Nom est manquant !";
}
if(empty($_GET['Prenom'])){
    echo "<br>";
    echo "Le champ Prenom est manquant !";
}
if(empty($_GET['Age'])){
    echo "<br>";
    echo "Le champ Age est manquant !";
}

echo "<br>";
echo "<br>";

var_dump($_SESSION[Age]);
?>
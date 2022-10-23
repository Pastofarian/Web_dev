4 - Faire un formulaire qui demande d'entrer un nom, prenom et un age
    et verifier que l'utilisateur a bien remplis TOUS les champs.
    Si pas, alors prévenir quel champ(s) est vide.

<form action="../Controler/exo4.php" method="GET">
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

if(!empty($_SESSION["checkEmpty"])){
    foreach($_SESSION["checkEmpty"] as $key => $value){
      echo $key.' -> '.$value.'<br>';
    }
}
//session_destroy();
//var_dump($_SESSION["checkEmpty"]);
?>
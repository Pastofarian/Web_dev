3 - Faire un formulaire qui demande d'entrer un nom et prenom
     et verifier qu'il n'y ai pas de chiffres ni accents dans ceux-ci
     (tant que rien n'est entrer, ne pas afficher de message)

<form action="../Controler/exo3.php" method="GET">
<label>Nom</label><br>
<input type="text" name="Nom2"><br>

<label>Prenom</label><br>
<input type="text" name="Prenom2"><br>
            
<input type="submit" value="Envoyer">
</form>

<?php
if(!empty($_GET["expRegul"])){
   echo $_GET["expRegul"];
} else {
    NULL;
}
echo "<br>";
echo "<br>"; 
//var_dump($_GET);
?>
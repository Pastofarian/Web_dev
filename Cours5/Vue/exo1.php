1 - Faire un formulaire qui demande d'entrer un age
     et prévenir s'il est majeure ou non
     (tant que rien n'est entrer, ne pas afficher de message)

<form action="../Controler/exo1.php" method="GET">
 <label >Age:</label><br>
 <input type="number" name="age"><br><br>
 <input type="submit" value="Envoyer">
</form>

<?php 
if(!empty($_GET["check"])){
    echo "La personne est " . $_GET["check"];
} else {
    NULL;
} 
echo "<br>";
echo "<br>";
?>




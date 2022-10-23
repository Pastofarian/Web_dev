2 - Faire un formulaire qui demande d'entrer un nom et prenom
     et afficher "Bonjour 'nom Prenom !'"
     (tant que rien n'est entrer, ne pas afficher de message) 

<form action="../Controler/exo2.php" method="GET">
<label>Nom</label><br>
<input type="text" name="Nom"><br>

<label>Prenom</label><br>
<input type="text" name="Prenom"><br>
            
<input type="submit" value="Envoyer">
</form>

<?php
if(!empty($_GET["bonjour"])){
   echo "Bonjour " . $_GET["bonjour"];
} else {
    NULL;
}
echo "<br>";
echo "<br>";
?>
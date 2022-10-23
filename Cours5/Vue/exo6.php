6 - Faire un formulaire pour allimenter l'exercice 1 du cours 3.
<br>
<br>
    <form action="../Controler/exo6.php" method="GET">
<label>Ajouter au tableau : </label><br>
<input type="text" name="item"><br>
<input type="submit" value="Envoyer">
</form>

<?php

session_start();

if(!empty($_SESSION["sessionArray"])){
    var_dump($_SESSION["sessionArray"]); 
}
//session_destroy();

?>
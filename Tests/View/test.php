1 - Faire un formulaire qui demande d'entrer un age
     et prévenir s'il est majeure ou non
     (tant que rien n'est entrer, ne pas afficher de message)

     <form action="../Controler/test.php" method="GET">

<label>Age</label><br>
<input type="number" name="age"><br>
<br>
<input type="submit" value="envoyer">
</form>
<?php
// (!empty($_GET['age']))? (echo $_GET['age']) : NULL;
if(!empty($_GET['age'])){
echo $_GET['age'];
}else{
NULL;
}
echo "<br>";
echo "<br>";
?>
5 - Faire une formulaire qui demande un nom/prenom/age/sex/etatCivil
    comme dans l'image et afficher l'encodage une fois terminé.
    <br>
    <form action="../Controler/exo5.php" method="GET">
<label>Nom :</label><br>
<input type="text" name="Nom"><br>

<label>Prenom :</label><br>
<input type="text" name="Prenom"><br>

<label>Age :</label><br>
<input type="text" name="Age"><br> 
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
session_start();

if(!empty($_SESSION["displayForm"])){
      echo $_SESSION["displayForm"];
}
session_destroy();
//var_dump($_SESSION["displayForm"]);
?>
<br>
<br>
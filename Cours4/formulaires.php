
<!--
Exemple d'un formulaire en HTML
-->
<form action="#" method="POST"> <!-- L'attribut action et metod sont les deux plus importants-->
  <!-- action => Cible du formulaire(lieu ou il est envoyé)
       method => La manière dont sont envoyés les données (post/get)-->
  <label>Prenom:</label><br>
  <input type="text" name="firstName"><br>
  <!-- l'attribut name est le plus important de la balise input
      il permet de donner le nom de la clé au tableau GET/POST
      Sans cet attribut, rien ne passe dans le tableau !!!-->
  <label >Nom:</label><br>
  <input type="text" name="name"><br><br>
  <input type="submit" value="Envoyer">
  <!-- L'attribut submit permet d'envoyer les données au lieu d'action
      avec la method selectionnee en appuyant sur le bouton !-->
</form>

<?php
var_dump($_POST);

 ?>

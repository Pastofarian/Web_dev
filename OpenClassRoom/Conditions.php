<?php

$userAge = 15;

$fullname = "Mathieu Nebra";
$email = 'mathieu.nebra@exemple.com';

$price = 57.3;

$isAuthor = true;
$isAdministrator = false;

$noValue = NULL;

echo "Bonjour $fullname et bienvenue sur le site !";

//lorsque vous utilisez des guillemets doubles, les variables qui se trouvent à l'intérieur sont analysées et remplacées par leur vraie valeur.

echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !';

//guillemet simple = couleur pour variable  et plus lisible !
?>
/************************************************************** */
<?php
//Conditions

$isEnabled = true;

if ($isEnabled == true) {
    echo "Vous êtes autorisé(e) à accéder au site ✅";
}
elseif ($isEnabled == "oui") {
    echo "ok"
}
else {
    echo "Accès refusé ❌ ";
}
?>
/******************************************************* */
<?php
//Or/AND
$isEnabled = true;
$isOwner = false;
$isAdmin = true;

if (($isEnabled && $isOwner) || $isAdmin) {
    echo 'Accès à la recette validé ✅';
} else {
    echo 'Accès à la recette interdit ! ❌';
}
?>
/************************************************************ */
<?php
//Il n'y a pas d'accolade.

    //On ajoute  :  après la parenthèse fermante de l'instruction  if  .

    //Et il faut ajouter une instruction  endif;  .

<?php $chickenRecipesEnabled = true; ?>

<?php if ($chickenRecipesEnabled): ?> // Ne pas oublier le ":"

<h1>Liste des recettes à base de poulet</h1>

<?php endif;  // Ni le ";" après le endif 
?>
/**************************************************************** */
<?php
//Switch

$grade = 10;

switch ($grade) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $grade vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas où $grade vaut 5
        echo "Tu es très mauvais";
    break;
    
    case 7: // dans le cas où $grade vaut 7
        echo "Tu es mauvais";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>
/******************************************************* */
//Ternaire
<?php
$userAge = 24;

$isAdult = ($userAge >= 18) ? true : false;

// Ou mieux, dans ce cas précis
$isAdult = ($userAge >= 18);
?>

/***************************************************************** */

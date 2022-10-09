<?php
$isAllowed = allowRecipe([
    'title' => 'Escalope milanaise',
    'recipe' => '',
    'author' => 'mathieu.nebra@exemple.com',
    'is_enabled' => true,
]);

if ($isAllowed) {
    echo 'La recette doit être affichée !';
} else {
    echo 'La recette doit être cachée !';
}

/*    La fonction allowRecipe est appelée avec un tableau en paramètre.

    Le résultat renvoyé par la fonction (lorsqu'elle a terminé) est stocké dans la variable  $isAllowed  .

La variable $isAllowed aura donc pour valeur true après l'exécution de cette ligne de code !*/

/*
https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912352-exploitez-toute-la-puissance-des-fonctions-php#/id/r-2173369
*/

//Manipulez du texte avec les fonctions

/******************************************************************************** */
// strlen pour calculer la longueur d'une chaîne de caractères ;

// str_replace pour rechercher et remplacer une chaîne de caractères ;

// sprintf pour formater une chaîne de caractères.

/********************************************************************************** */
<?php
$recipe = 'Etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine';
$length = strlen($recipe);
 
 
echo 'La phrase ci-dessous comporte ' . $length . ' caractères :' . PHP_EOL . $recipe;

/********************************* */
<?php
echo str_replace('c', 'C', 'le cassoulet, c\'est très bon');
/********************************** */
<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

echo sprintf(
    '%s par "%s" : %s',
    $recipe['title'],
    $recipe['author'],
    $recipe['recipe']
);

$ php exemple.php
Salade Romaine par "laurene.castor@exemple.com" : Etape 1 : Lavez la salade ; Etape 2 : euh ..

/********************************************* */

<?php
// Enregistrons les informations de date dans des variables

$day = date('d');
$month = date('m');
$year = date('Y');

$hour = date('H');
$minut = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . 'et il est ' . $hour. ' h ' . $minut;
?>
/************************************************************* */
<?php

function isValidRecipe(array $recipe) : bool
{
    if (array_key_exists('is_enabled', $recipe)) {
        $isEnabled = $recipe['is_enabled'];
    } else {
        $isEnabled = false;
    }

    return $isEnabled;
}

//Nous pouvons – et c'est une bonne pratique – définir le type de la variable attendue : ici, nous souhaitons un tableau donc nous préfixons la variable $recipe par le mot-clé   array 
//Notre fonction peut aussi – et c'est une deuxième bonne pratique – donner un type de retour, c'est-à-dire le type de valeur que la fonction doit retourner.

<?php

$recipes = [...]; // Les recettes

// AVANT

foreach ($recipes as $recipe) {
    if ($recipe['is_enabled']) {
        // echo $recipe['title'] ..
    }
}

// APRES

function getRecipes(array $recipes) : array
{
    $validRecipes = [];

    foreach($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $validRecipes[] = $recipe;
        }
    }

    return $validRecipes;
}

// construire l'affichage HTML des recettes
foreach(getRecipes($recipes) as $recipe) {
    // echo $recipe['title'] .. 
}
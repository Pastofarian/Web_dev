//Boucle while
<?php
$lines = 1;

while ($lines <= 100)
{
    echo 'Ceci est la ligne n°' . $lines . '<br />';
    $lines++;
}

?>
// Boucle for

<?php
for ($lines = 0; $lines <= 2; $lines++)
{
    echo $users[$lines][0] . ' ' . $users[$lines][1] . '<br />';
}
?>

/************************************************************** */
//Array
<?php

$recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',];

// La fonction array permet aussi de créer un array
$recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise');
?>
//Pour afficher « Couscous », on doit donc écrire :
<?php
echo $recipes[1]; // Cela affichera : Couscous
?>

/************************ */
//Tableaux associatif

<?php
// Une bien meilleure façon de stocker une recette !
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'john.doe@exemple.com',
    'enabled' => true,
];

//Vous remarquez qu'on écrit une flèche ( =>  ) pour dire « associé à ».

<?php
echo $recipe['title'];
?>
//Pour afficher un élément, il suffit d'indiquer le nom de cet élément entre crochets, ainsi qu'entre guillemets ou apostrophes, puisque l'étiquette du tableau associatif est un texte.
?>
/************************************************** */
//Boucle foreach

// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

foreach ($recipes as $recipe) {
    echo $recipe[0]; // Affichera Cassoulet, puis Couscous
}
//foreach passe en revue chaque ligne du tableau. Lors de chaque passage, elle met la valeur de cette ligne dans une variable temporaire (par exemple $element  ).

<?php
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'mickael.andrieu@exemple.com',
    'enabled' => true,
];

foreach ($recipe as $value) {
    echo $value;
}

/**
 * AFFICHE
 * CassouletEtape 1 : des flageolets, Etape 2 : ...mickael.andrieu@exemple.com1
 */
//L'avantage de foreach , c'est qu'il permet aussi de parcourir les tableaux associatifs.

//Toutefois, avec cet exemple, on ne récupère que la valeur. Or, on peut aussi récupérer la clé de l'élément. On doit dans ce cas écrire foreach  , comme ceci :
<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

foreach($recipe as $property => $propertyValue)
{
    echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
}

/*À chaque tour de boucle, on disposera non pas d'une, mais de deux variables :

    $property qui contiendra la clé de l'élément en cours d'analyse (« title », « author », etc.).

    $propertyValue qui contiendra la valeur de l'élément en cours (« Cassoulet », « laurene.castor@exemple.com », etc.).*/

/**************************************************** */
/*Affichez rapidement un tableau avec print_r */
//vous voulez juste savoir ce que contient le tableau, vous pouvez faire appel à la fonction print_r  . C'est une sorte de echo  spécialisé dans les tableaux.

<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
];

echo '<pre>';
print_r($recipes);
echo '</pre>';

//Voilà, c'est facile à utiliser : du moment qu'on n'oublie pas la balise <pre>  pour avoir un affichage correct.

/**************************************************** */

//Vérifiez si une clé existe dans un tableau avec array_key_exists
//La fonction renvoie un booléen : 
<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

if (array_key_exists('title', $recipe))
{
    echo 'La clé "title" se trouve dans la recette !';
}

if (array_key_exists('commentaires', $recipe))
{
    echo 'La clé "commentaires" se trouve dans la recette !';
}
/**************************************************** */

//Vérifiez si une valeur existe dans un tableau avec in_array

<?php
$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

if (in_array('Mathieu Nebra', $users))
{
    echo 'Mathieu fait bien partie des utilisateurs enregistrés !';
}

if (in_array('Arlette Chabot', $users))
{
    echo 'Arlette fait bien partie des utilisateurs enregistrés !';
}

/**************************************************** */
//Récupérez la clé d'une valeur dans un tableau avec array_search
/*Voici ce que renvoie la fonction :

    Si elle a trouvé la valeur, array_search renvoie la clé correspondante (dans le cas d'un tableau numéroté, la clé sera un numéro ; dans le cas d'un tableau associatif, la clé sera un nom).

    Si elle n'a pas trouvé la valeur, array_search renvoie false  .*/

    <?php
    $users = [
        'Mathieu Nebra',
        'Mickaël Andrieu',
        'Laurène Castor',
    ];
    
    $positionMathieu = array_search('Mathieu Nebra', $users);
    echo '"Mathieu" se trouve en position ' . $positionMathieu . PHP_EOL;
    
    $positionLaurène = array_search('Laurène Castor', $users);
    echo '"Laurène" se trouve en position ' . $positionLaurène . PHP_EOL;
        
/**************************************************** */
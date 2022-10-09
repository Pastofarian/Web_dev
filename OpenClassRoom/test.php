<?php
// function helloWorld($text){
//     $text = "Hello World";
//     return $text;
//     }
//     $abc = "Hello World";
//     echo helloWorld($abc);
    
//     echo "<br>";
//     echo "<br>";



if (!isset($_GET['email']) || !isset($_GET['message']))
{
	echo('Il faut un email et un message pour soumettre le formulaire.');
	
	// Arrête l'exécution de PHP
    return;
}


?>
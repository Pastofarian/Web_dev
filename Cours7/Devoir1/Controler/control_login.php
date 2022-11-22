<?php
session_start();

include("../Functions/functions.php");

// Set path to CSV file
$csvFile = 'datas.csv';

$csv = readCSV($csvFile);
// echo '<pre>';
// print_r($csv);
// echo '</pre>';

$birthDate;
$currentDate = date("Y-m-d");
$lastName;
$firstName;
$logLine; //1 user/password
$isPassAndLogOk = false;
$islogOk = false;
$error = false;
$email = $_POST["logMail"];
$pass = $_POST["logPass"];

// check si l'email est bien dans le fichier .csv
for($i = 0; $i < (count($csv)-1); $i++){ //dernière ligne vide crée une erreure
    if($email == $csv[$i][3]){
        $islogOk = true; //est présent dans le fichier
        $logLine = $i; //attribue la ligne log
        $lastName = $csv[$i][1]; //attribue le nom 
        $firstName = $csv[$i][0]; //attribue le prénom
        $birthDate = $csv[$i][2]; //attribue la date de naissance
        break; //si le trouve, s'arrête de boucler
    } else {
        $error = true; //si log(email) pas trouvé dans le .csv => erreur
    }
}
// check si le password correspond bien au log (2 users peuvent avoir le même pw)
for($i = 0; $i < (count($csv)-1); $i++){
    if($pass == $csv[$logLine][4]){
        $isPassAndLogOk = true;
        break;
    }else {
        $error = true;
    }
}

// si erreur, affiche dans le formulaire login
if($error){
    $_SESSION["error"] = "Erreur dans le mot de passe ou le login";
}

//pour une page de bienvenue personnalisée
$age = date_diff(date_create($birthDate), date_create($currentDate));
$_SESSION["lastName"] = $lastName;
$_SESSION["firstName"] = $firstName;
$_SESSION["age"] = $age->format("%y");


//si les flags sont ok -> welcome
if($islogOk && $isPassAndLogOk){
    $_SESSION["loggedIn"] = TRUE; //permets l'accès. Evite accès direct url
    header("Location: ../View/welcome_form.php");
} else {
    header("Location: ../View/login_form.php");
}


// echo "Current age is ".$age->format("%y");
// echo ' <br>';
// echo "currentDate : " . $currentDate;
// echo ' <br>';
// echo "birthDate : " . $birthDate;
// echo ' <br>';
// echo "isLogOk : " . $islogOk;
// echo ' <br>';
// echo "isPassOk : " . $isPassOk;
// echo ' <br>';
// echo "logLine : " . $logLine;
// echo ' <br>';
// //echo "passLine : " . $passLine;
// //echo ' <br>';
// echo "isPassAndLogOk : " . $isPassAndLogOk;
// echo ' <br>';
// echo "nom : " . $lastName;
// echo ' <br>';
// echo "prenom : " . $firstName;
// echo ' <br>';
//session_destroy();
?>
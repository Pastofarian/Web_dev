<?php
session_start();

include("../Functions/functions.php");
include("../Model/read.php");

$result = recupAllInfoAdmin();

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
for($i = 0; $i < (count($result)-1); $i++){ //dernière ligne vide crée une erreure
    if($email == $result[$i]['Email']){
        $islogOk = true; //est présent dans le fichier
        $logLine = $i; //attribue la ligne log
        $lastName = $result[$i]['LastName']; //attribue le nom 
        $firstName = $result[$i]['FirstName']; //attribue le prénom
        $birthDate = $result[$i]['DOB']; //attribue la date de naissance
        break; //si le trouve, s'arrête de boucler
    } else {
        $error = true; //si log(email) pas trouvé dans le .csv => erreur
    }
}
// check si le password correspond bien au log (2 users peuvent avoir le même pw)
//for($i = 0; $i < (count($result)-1); $i++){
    if($pass == $result[$logLine]['Password1']){
        $isPassAndLogOk = true;
        //break;
    }else {
        $error = true;
    }
//}

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
//echo $lastName;
//var_dump($result);

echo "Current age is ".$age->format("%y");
echo ' <br>';
echo "currentDate : " . $currentDate;
echo ' <br>';
echo "birthDate : " . $birthDate;
echo ' <br>';
echo "isLogOk : " . $islogOk;
echo ' <br>';
echo "logLine : " . $logLine;
echo ' <br>';
//echo "passLine : " . $passLine;
//echo ' <br>';
echo "isPassAndLogOk : " . $isPassAndLogOk;
echo ' <br>';
echo "nom : " . $lastName;
echo ' <br>';
echo "prenom : " . $firstName;
echo ' <br>';
//session_destroy();
?>
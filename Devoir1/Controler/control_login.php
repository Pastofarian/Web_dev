<?php
include("../Functions/functions.php");

// Set path to CSV file
$csvFile = 'datas.csv';

$csv = readCSV($csvFile);
// echo '<pre>';
// print_r($csv);
// echo '</pre>';

$passLine;
$logLine;
$isPassAndLogOk = false;
$islogOk = false;
$isPassOk = false;
$email = $_GET["logMail"];
$pass = $_GET["logPass"];
//echo $email;
//echo $pass;

for($i = 0; $i < (count($csv)-1); $i++){ //dernière ligne vide crée une erreure
    if($email == $csv[$i][3]){
        $islogOk = true;
        $logLine = $i;
        break;
    }
}
for($i = 0; $i < (count($csv)-1); $i++){
    if($pass == $csv[$i][4]){
        $isPassOk = true;
        $passLine = $i;
        break;
    }
}
if($passLine == $logLine){
    $isPassAndLogOk = true;
}
if($isPassOk && $islogOk && $isPassAndLogOk){
    header("Location: ../View/welcome_form.php");
}
//echo $islogOk;
//echo $isPassOk;
// echo $logLine;
// echo $passLine;
// echo $isPassAndLogOk;
?>
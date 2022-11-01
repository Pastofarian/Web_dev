<?php

//Check si toutes les données du formulaire sont bien remplie
function checkEmpty($data){
    $error = array();
    foreach ($data as $key => $value) {
      if(empty($value)){
        $error[$key]='Veuillez remplir le champ ' . $key;
      } 
    }
  return $error;
}

//Check si les le password et sa confirmation match
function matchPassword($pass1, $pass2){
    $error = "";
    if($pass1 != $pass2){
        $error = "Erreur dans le mot de passe, recommencez !";
    }
return $error;
}

//lit le fichier .csv pour en extraire les données sous forme de tableau
function readCSV($csvFile){
  $file_handle = fopen($csvFile, 'r');
  while (!feof($file_handle) ) {
      $line_of_text[] = fgetcsv($file_handle, 1024);
  }
  fclose($file_handle);
  return $line_of_text;
}

//ajoute les données du formulaire dans le fichier .csv
function addDatasCsv(){
  //open the file
  $out = fopen('datas.csv', 'a+');
  //Data to be inserted
  fputcsv($out, $_POST);
  //Closing the file
  fclose($out);
}

//Controle password
/*Stratégie de mot de passe :
    - 8 caractères minimum
    - 1 chiffre minimum
    - 1 majuscule minimum
    - 1 minuscule minimum*/
    function checkPassword($password){
      if (strlen($password) <= '8') {
          $error = "Votre mot de passe doit contenir au moins 8 caractères !";
      }
      elseif(!preg_match("#[0-9]+#",$password)) {
          $error = "Votre mot de passe doit contenir au moins 1 chiffre !";
      }
      elseif(!preg_match("#[A-Z]+#",$password)) {
          $error = "Votre mot de passe doit contenir au moins 1 majuscule minimum !";
      }
      elseif(!preg_match("#[a-z]+#",$password)) {
          $error = "Votre mot de passe doit contenir au moins 1 minuscule minimum !";
      }
      return $error;
  }
// check si le prenom et le nom sont correctes
/*    ^[a-zA-z] Can only start with letters. Either small or capital letter.
    [0-9a-zA-Z_]{2,23} Allowed length between 1 and 23. 
    [0-9a-zA-Z]$ Can only end with a number and a letters.
    https://www.businesstyc.com/php-preg_match-examples-to-validate-user-inputs/
*/

function validateUserId($userName, $id) {
  $error = "";
  if(!preg_match('/^[a-zA-Z][0-9a-zA-Z_]{1,23}[0-9a-zA-Z]$/', $userName)) {
    $error = "Erreur dans votre " . $id;
  }
  return $error;
}

//check la validité de l'email
function checkEmail($email) {
  $error = "";
  if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
    $error = "Erreur dans votre email";
  }
  return $error;
}

// function checkMatch($isPassOk, $islogOk, $isPassAndLogOk){
//     $error = "Erreur dans le mot de passe ou le login";
//     if(!$isPassOk && !$islogOk && !$isPassAndLogOk){
//         return $error;
//     }
// }

//controle de la date de naissance
//https://brainbell.com/php/validating-date-of-birth.html

function checkDob($dob){
 $message = '';

 # Validate Date of Birth

 if (!preg_match('~^([0-9]{2})/([0-9]{2})/([0-9]{4})$~', $dob, $parts)){
  # Check the format
  $message = 'The date of birth is not a valid date in the format MM/DD/YYYY';
 }
 elseif (!checkdate($parts[1],$parts[2],$parts[3])){
  $message = 'The date of birth is invalid. Please check that the month is between 1 and 12, and the day is valid for that month.';
 }
 
 if ($message == '') {
  # Convert date of birth to DateTime object
  $dob =  new DateTime($dob);

  $minInterval = DateInterval::createFromDateString('18 years');
  $maxInterval = DateInterval::createFromDateString('120 years');
 
  $minDobLimit = ( new DateTime() )->sub($minInterval);
  $maxDobLimit = ( new DateTime() )->sub($maxInterval);
 
  if ($dob <= $maxDobLimit)
   # Make sure that the user has a reasonable birth year
   $message = 'You must be alive to use this service.';
   # Check whether the user is 18 years old.
  elseif ($dob >= $minDobLimit) {
   $message = 'You must be 18 years of age to use this service.';
  }
 
  if ($message == '') {
   $today = new DateTime();
   $diff = $today->diff($dob);
   $message = $diff->format('You are %Y years, %m months and %d days old.');
  }
 }
 return $message;
}

?>
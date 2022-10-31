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
function checkPassword($pass1, $pass2){
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

// function checkMatch($isPassOk, $islogOk, $isPassAndLogOk){
//     $error = "Erreur dans le mot de passe ou le login";
//     if(!$isPassOk && !$islogOk && !$isPassAndLogOk){
//         return $error;
//     }
// }
?>
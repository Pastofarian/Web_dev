<?php

// if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['naissance'])){
//     $display = ();
//     $display = $_GET['nom'], $_GET['prenom'];
// }

//var_dump($_GET);






//headers in the file

// $fp = fopen("devoir1.csv", "a");
// if ($fp) {
//     while (($buffer = fgets($fp, 4096)) == false) {
//         $header_data=array('Nom','Prenom','Naissance', 'mail', 'pass1', 'pass2');
//         fputcsv($out,$header_data);
//     }
//     fclose($fp);
// }

//open the file
$out = fopen('devoir1.csv', 'a');
//Data to be inserted
fputcsv($out, $_GET);
//Closing the file
fclose($out);


//header("Location: ../View/registered.php");

?>
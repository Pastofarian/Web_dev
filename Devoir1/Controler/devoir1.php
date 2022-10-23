<?php

if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['naissance'])){

    $display = $_GET();
}

var_dump($display);
/*
$cfile = fopen('devoir1.csv', 'a');

//$header_data=array('Nom','Prenom','Naissance');

//fputcsv($cfile,$header_data);
 
//Data to be inserted
// $fdata = array(
// array('1','John','38'),
// array('2','Sid','72'),
// array('3','Jk','20')
// );
 
// save each row of the data
foreach ($display as $row)
{
fputcsv($cfile, $row);
}
 
// Closing the file
fclose($cfile);

//header("Location: ../View/devoir1.php?display=".$display);
*/
?>
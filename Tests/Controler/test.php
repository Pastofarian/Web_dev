<?php
include('../Fonctions/test.php');
$_GET['age'];

$age = isAdult($GET['age']);

header('Location: ../View/test.php?age='.$age);
?>
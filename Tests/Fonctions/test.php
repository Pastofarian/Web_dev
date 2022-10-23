<?php

function isAdult($age){
    if($age >= 18){
        return "majeur !";
    }else {
        return "mineur !";
    }
}

?>
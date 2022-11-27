<?php

function insertDB($LastName, $FirstName, $DOB, $Email, $Password1, $Password2){
    include('connection.php');
    $query = "INSERT INTO datas (LastName, FirstName, DOB, Email, Password1, Password2) VALUES(:LastName, :FirstName, :DOB, :Email, :Password1, :Password2)";
        $query_params = array(':LastName'=>$LastName,
                              ':FirstName'=>$FirstName,
                                ':DOB'=>$DOB,
                                ':Email'=>$Email,
                                ':Password1'=>$Password1,
                                ':Password2'=>$Password2);
        try{
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }
        catch(PDOException $ex){
            die("Failed query : " . $ex->getMessage());
        }
}

//insertDB("Doe", "John", "2022-08-05", "john.doe@outlook.com", "pass", "pass");
?>
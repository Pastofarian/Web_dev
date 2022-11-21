<?php
session_start();
error_reporting(0);
  if(!$_SESSION['loggedIn'])
    header("Location: ../View/login_form.php"); //redirect to the login page

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/millesime.css">
    <title>Welcome</title>
</head>

<body>
    <main role="main">
        <div class="container_welcome">
            <div class="container_child">
            <?php
                echo "Bienvenue " . $_SESSION["firstName"] . " " . $_SESSION["lastName"] . " " . $_SESSION["age"] . " ans";
                ?>
            </div>
        </div>
    </main>
</body>

</html>

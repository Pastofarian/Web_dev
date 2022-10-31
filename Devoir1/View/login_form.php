<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/millesime.css">
    <title>Contact - Le Millésime</title>
</head>

<body>
    <main role="main">
    <h1>Page d'enregistrement</h1>
            <div class="container_child">
                <form action="../Controler/control_login.php" method="POST">
                    <p class="input_form">
                        <label for="email">Adresse e-mail *</label>
                        <input type="email" id="email" name="logMail" autocomplete="on" required="required">
                    </p>
                    <p class="input_form">
                    <label for="pass">Entrez votre mot de passe *</label>
                    <input type="password" id="pass" name="logPass" required="required"><br>
                    </p>
                    <p>
                        <input type="submit" value="Envoyer" id="submit">
                    </p>
                </form>
                <?php
                    session_start();
                if(!isset($_SESSION["error"])){
                      echo $_SESSION["error"];
                      //session_destroy();
                }
                ?>
            </div>
    </main>
    <footer class="footer">
        <ul class="footer__nav">
            <li>
                <h2>Horaires d'ouverture</h2>
            </li>
            <li>
                <p>Mardi - Samedi</p>
            </li>

            <li>
                <p>12:00 - 14:00</p>
            </li>

            <li>
                <p>19:00 - 21:30</p>
            </li>
        </ul>
        <ul class="footer__nav">
            <li class="nav__item">
            <li>
                <h2>Fermeture annuelle</h2>
            </li>
            <li>
                <p>Le 7 & 8 juin
            </li>

            <li>
                <p>Du 17 au 31 juillet inclus</p>
            </li>

            <li>
                <p>Du 17 au 26 Septembre inclus</p>
            </li>
        </ul>
        <ul class="footer__nav">
            <li class="nav__item">
            <li>
                <h2>Le Millésime</h2>
            </li>
            <li>
                <p>1 rue Traversière
            </li>

            <li>
                <p>21220 Chambolle Musigny</p>
            </li>

            <li>
                <p>France</p>
            </li>
        </ul>
        <ul class="footer__nav">
            <li>
                <h2>Suivez-nous !</h2>
            </li>
            <li>
                <a class="nav__title" href="https://www.facebook.com/" target="_blank">Facebook</a>
            </li>

            <li>
                <a class="nav__title" href="https://www.instagram.com/" target="_blank">Instagram</a>
            </li>

            <li>
                <a class="nav__title" href="https://twitter.com/" target="_blank">Twitter</a>
            </li>
        </ul>
    </footer>
    <div>
        <p id="copyright">&copy; 2022 Le Millésime. All rights reserved.</p>
    </div>
</body>

</html>

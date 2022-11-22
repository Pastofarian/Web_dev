<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/millesime.css">
    <title>Forum Podologie Bovine</title>
</head>

<body>
    <header>
        <div class="container"><span id="phone_info">La passion du sabot</span>
        </div>
        <h1>Forum Podologie Bovine</h1>
        <nav>
            <ul class="navigation_menu">
                <li><a class="menu_link" href="login_form.php" title="LOGIN">LOGIN</a></li>
                <li>|</li>
                <!--Brochure opens in a blank page-->
                <li><a class="menu_link" href="../images/vdocument.in_bovine-anatomy.pdf" target="_blank" title="Brochure">BROCHURE</a></li>
                <li>|</li>
                <li><a class="menu_link" href="#" title="BLOG">BLOG</a></li>
                <li>|</li>
                <li><a class="menu_link" href="#" title="NOTRE HISTOIRE">NOTRE HISTOIRE</a></li>
                <li>|</li>
                <li><a class="menu_link" href="https://cornhub.fr/" title="LE FORUM">LE FORUM</a></li>
            </ul>
        </nav>
    </header>
    <main role="main">
        <div class="container_parent">
            <div class="container_child">
                <h2>Inscrivez vous !</h2>
                <form action="../Controler/control_registration.php" method="POST">
                    <p class="input_form"><label for="prenom">Prénom *</label>
                        <input type="text" name="prenom" id="prenom" autocomplete="on" required="required">&nbsp;&nbsp;&nbsp;
                        
                        <label for="nom">Nom *</label>
                        <input type="text" name="nom" id="nom" autocomplete="on" required="required">
                    </p>
                    <p class="input_form">
                        <label for="naissance">Date de naissance *</label>
                        <input type="date" id="naissance" name="dob" required="required">
                    </p>
                    <p class="input_form">
                        <label for="email">Adresse e-mail *</label>
                        <input type="email" id="email" name="email" autocomplete="on" required="required">
                    </p>
                    <p class="input_form">
                    <label for="pass">Entrez un mot de passe **</label>
                    <input type="password" id="pass1" name="pass1" required="required"><br>
                    <label for="pass">Confirmer votre mot de passe **</label>
                    <input type="password" id="pass2" name="pass2" required="required"><br>
                    </p>
                        <input type="submit" value="Envoyer" id="submit">
                    </p>
                    <p style="font-size:12px">(*) Champs requis</p>
                    <p style="font-size:12px"> (**) Le mot de passe doit comporter : 8 caractères minimum, 1 chiffre minimum, 1 majuscule minimum, 1 minuscule minimum</p>
                    <p>
                </form>
                <?php
                session_start();
                error_reporting(0);
                
                foreach($_SESSION["checkEmpty"] as $key => $value){
                    echo'<pre>';
                    echo $key.' -> '.$value.'<br>';
                }
                echo'<pre>';
                echo $_SESSION["checkPassword"];
                echo'<pre>';
                echo $_SESSION["checkIdFn"];
                echo'<pre>';
                echo $_SESSION["checkIdLn"];
                echo'<pre>';
                echo $_SESSION["checkEmail"];
                echo'<pre>';
                echo $_SESSION["checkDob"];
                echo'<pre>';
                echo $_SESSION["matchPassword"];
                echo'<pre>';
                echo $_SESSION["checkDuplicates"];

                //session_destroy();

                ?>
            </div>
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
                <h2>L'étable</h2>
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
        <p id="copyright">&copy; 2022 L'étable. All rights reserved.</p>
    </div>
</body>

</html>

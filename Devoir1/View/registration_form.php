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
    <header>
        <div class="container"><span id="phone_info">+33 (0) 380.62.80.37</span>
            <a href="https://www.facebook.com/" target="_blank"><img id="facebook"
                    src="/Web/Millesime/images/facebook-logo-circle-white.png" alt="facebook"></a><a
                href="https://www.instagram.com/" target="_blank"><img id="instagram"
                    src="/Web/Millesime/images/instagram-logo-black-transparent-381383913.png" alt="instagram"></a>
        </div>
        <h1>Le Millésime</h1>
        <nav>
            <ul class="navigation_menu">
                <!--Contact & réservations-->
                <li><a class="menu_link" href="#" title="Contact">CONTACT</a></li>
                <li>|</li>
                <!--Brochure opens in a blank page-->
                <li><a class="menu_link" href="../images/vdocument.in_bovine-anatomy.pdf" target="_blank" title="Brochure">BROCHURE</a></li>
                <li>|</li>
                <!--link "Les chambres" not in use-->
                <li><a class="menu_link" href="#" title="Les chambres">LES CHAMBRES</a></li>
                <li>|</li>
                <li><a class="menu_link" href="#" title="Carte & Menus">CARTE & MENU</a></li>
                <li>|</li>
                <li><a class="menu_link" href="https://cornhub.fr/" title="Le restaurant">LE RESTAURANT</a></li>
            </ul>
        </nav>
    </header>
    <main role="main">
        <div class="container_parent">
            <div class="container_child">
                
                <form action="../Controler/devoir1.php" method="GET">
                    <p class="input_form"><label for="prenom">Prénom *</label>
                        <input type="text" name="prenom" id="prenom" autocomplete="on" required>&nbsp;&nbsp;&nbsp;
                        <!-- add required !-->
                        <label for="nom">Nom *</label>
                        <input type="text" name="nom" id="nom" autocomplete="on">
                    </p>
                    <p class="input_form">
                        <label for="naissance">Date de naissance</label>
                        <input type="date" id="naissance" name="naissance">
                    </p>
                    <p class="input_form">
                        <label for="email">Adresse e-mail *</label>
                        <input type="email" id="email" name="mail" autocomplete="on">
                    </p>
                    <p class="input_form">
                    <label for="pass">Entrez un mot de passe *</label>
                    <input type="password" id="pass1" name="pass1"><br>
                    <label for="pass">Confirmer votre mot de passe *</label>
                    <input type="password" id="pass2" name="pass2"><br>
                    </p>
                    <p>
                        <input type="submit" value="Envoyer" id="submit">
                    </p>
                </form>
                <?php
                
                session_start();
                if(!empty($_SESSION["checkEmpty"])){
                    //echo $_GET["bonjour"];
                    foreach($_SESSION["checkEmpty"] as $key => $value){
                      echo $key.' -> '.$value.'<br>';
                    }
                }
                if(!empty($_SESSION["checkPassword"])){
                      echo $_SESSION["checkPassword"];
                }
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

    <?php 

// if(!empty($_GET["display"])){

//     echo "La personne est " . $_GET["display"];
// } else {
//     NULL;
// } 
// echo "<br>";
// echo "<br>";
?>
</body>

</html>

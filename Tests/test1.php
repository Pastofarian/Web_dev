<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Page de test</h2>
        
        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php /* Insérer du code PHP ici */ ?>
            Voici quelques petits tests :
        </p>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

        <?php

        $nombre1 = 12;
        $nombre2 = 13;

        $resultat = $nombre1 + $nombre2;

        echo $resultat;

        /* Encore du PHP
        Toujours du PHP */

        if($result > 26){
            echo 'trop grand'; //peut aussi fonctionner avec ""
        }elseif($resultat == 25){
            echo 'trop petit';
        }else{
            echo 'trop petit';
        }
        for($i=0; $i<=10; $i++){
            echo$i;
        }
        //foreach($variable as $key)

        empty($prenom);
        echo empty($prenom);

        isset($prenom);
        echo isset($prenom);

        var_dump($prenom);
        ?>
    </body>
</html>

<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 4 Partie 1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <input type="button" value="Exercice 1" onClick="javascript:document.location.href = 'http://partie1exo1/'" />
        <input type="button" value="Exercice 2" onClick="javascript:document.location.href = 'http://partie1exo2/'" />
        <input type="button" value="Exercice 3" onClick="javascript:document.location.href = 'http://partie1exo3/'" />
        <input type="button" value="Exercice 4" onClick="javascript:document.location.href = 'http://partie1exo4/'" />
        <input type="button" value="Exercice 5" onClick="javascript:document.location.href = 'http://partie1exo5/'" />
        <input type="button" value="Exercice 6" onClick="javascript:document.location.href = 'http://partie1exo6/'" />
        <input type="button" value="Exercice 7" onClick="javascript:document.location.href = 'http://partie1exo7/'" />
        <input type="button" value="Exercice 8" onClick="javascript:document.location.href = 'http://partie1exo8/'" />
        <p>
            <?php
            // Création des variables et inclusion dans une phrase.
            $nom_du_visiteur = "Leroy";
            $age_du_visiteur = 19;
            $poids_du_visiteur = 70;
            $je_suis_grand = true;
            $je_suis_petit = false;
            echo "Le visiteur $nom_du_visiteur a $age_du_visiteur ans et à un poids de  $poids_du_visiteur $je_suis_grand";
            ?>
        </p>
    </body>
</html>
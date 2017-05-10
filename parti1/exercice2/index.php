<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 2 Partie 1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <input type="button" value="Exercice 1" onClick="javascript:document.location.href = 'http://partie1exo1/'" />
            <input type="button" value="Exercice 2" onClick="javascript:document.location.href = 'http://partie1exo2/'" />
            <input type="button" value="Exercice 3" onClick="javascript:document.location.href = 'http://partie1exo3/'" />
            <input type="button" value="Exercice 4" onClick="javascript:document.location.href = 'http://partie1exo4/'" />
            <input type="button" value="Exercice 5" onClick="javascript:document.location.href = 'http://partie1exo5/'" />
            <input type="button" value="Exercice 6" onClick="javascript:document.location.href = 'http://partie1exo6/'" />
            <input type="button" value="Exercice 7" onClick="javascript:document.location.href = 'http://partie1exo7/'" />
            <input type="button" value="Exercice 8" onClick="javascript:document.location.href = 'http://partie1exo8/'" />
        </header>
        <h1>Exercice 2 Partie 1</h1>
        <h4>Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. Afficher leur contenu.</h4>
        <p>
            <?php
            $age_du_visiteur = 19;
            $nom_du_visiteur = 'Leroy';
            $prenom_du_visiteur = 'Nabil';
            ?>
        <p>Je m'appel <?php echo $nom_du_visiteur . ' ' . $prenom_du_visiteur ?></p>
        <p>j'ai <?php echo $age_du_visiteur ?>ans.</p>
    </p>
</body>
</html>
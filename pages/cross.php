<!DOCTYPE html>
<!-- 
     Page web créé dans le cadre du cours de web Dev le 01/09/2018
     Auteur : José GIL
     Email : jgil83000@gmail.com
-->

<html lang="fr-FR">

<head>
    <title>Casques Nolark : Sécurité et confort, nos priorités !</title>
    <meta charset="UTF-8">
    <meta name="author" content="José GIL">
    <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
    <link href="../css/casques.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../favicon.ico">
</head>

<body>
    <?php
    include('../includes/header.html.inc.php');
    ?>
    <nav>
        <ul>
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="route.php">Route</a></li>
            <li><a href="cross.php">Cross</a></li>
            <li><a href="piste.php">Piste</a></li>
            <li><a href="enfants.php">Enfants</a></li>
            <li><a href="nous-contacter.php">Nous contacter</a></li>
        </ul>
    </nav>
    </header>
    <section id="casques">
        <?php include('../includes/casques.inc.php'); ?>
    </section>
    <?php
    include("../includes/footer.inc.php");
    ?>
</body>

</html>
<?php
    require "session.php";
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Icone -->
        <link rel="icon" href="../Image/icone.ico">
        <link rel="apple-touch-icon" sizes="120x120" href="../Image/apple-touch-icon-120x120-precomposed.png" /> 
        <link rel="apple-touch-icon" sizes="152x152" href="../Image/apple-touch-icon-152x152-precomposed.png" />
        <!-- Lien CSS -->
        <link rel="stylesheet" href="../CSS/apropos.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Titre -->
        <title>Au Grain de Pollen - À propos - Fleuriste Les Grandes-Ventes</title>
        <meta name="description" content='Information sur le magazin "Au Grain de Pollen".'>
    </head>
    <body>
        <?php 
        if($_SESSION && $_SESSION['Connect'] ==true)
        { 
            include "menu_administration.php"; 
            ?>
            <p>
                <a href="pour_offrir_administration.php"> Lien Administration Section "Pour Offrir" </a>
            </p>

            <p>
                <a href="mariage_administration.php"> Lien Administration Section "Mariage" </a>
            </p>
            
            <p>
                <a href="deuil_administration.php"> Lien Administration Section "Deuil" </a>
            </p>
        <?php
        } else 
        {

        } ?>
    </body>
</html>
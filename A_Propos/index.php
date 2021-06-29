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
            include "../menu.php"; 
        ?>

        <div class="tout">

            <div class="horaire">
                <p> Lundi : Fermé </p>
                <p> Mardi : 9h - 12h30 / 14h30 - 19h </p>
                <p> Mercredi : 9h - 12h30 / 14h30 - 19h </p>
                <p> Jeudi : 9h - 12h30 / 14h30 - 19h </p>
                <p> Vendredi : 9h - 12h30 / 14h30 - 19h </p>
                <p> Samedi : 9h - 19h </p>
                <p> Dimanche : 9h - 12h30</p>
            </div>

            <img class="magazin" src="../Image/A_Propos/Devanture_Au_Grain_de_Pollen_Fleuriste_Les_Grandes_Ventes_2.JPG" alt="Devanture du magasin 'Au Grain de Pollen', fleuriste au Grandes-Ventes">

        </div>
        <?php
            date_default_timezone_set('Europe/Paris');
            $date = date('D m y G:i:s');

            $Ouverture = "Detecte aucun jour";
            $Jour = date('D');
            $Mois = date('m');
            $Annee = date ('y');
            $Heure = date ('G');
            $Minute = date ('i');
            //echo "Jour : ".$Jour.", Mois : ".$Mois.", Année : ".$Annee.", Heure : ".$Heure.", Minutes : ".$Minute;

            switch ($Jour)
            {
                //Lundi
                case "Mon" : 
                    $Ouverture = "Le magasin est fermé pour la journée.";
                break;
                //Samedi
                case "Sat" : 
                    if ($Heure >= 9 && $Heure < 19)
                    {
                        $Ouverture = "Le magasin est ouvert.";
                    } else 
                    {
                        $Ouverture = "Le magasin est fermé.";
                    }
                break;
                //Dimanche
                case "Sun" : 
                    if ($Heure >= 9 && $Heure < 12)
                    {
                        $Ouverture = "Le magasin est ouvert.";
                    } else if ($Heure = 12 && $Minute < 30)
                    {
                        $Ouverture = "Le magasin est ouvert.";
                    }
                    else 
                    {
                        $Ouverture = "Le magasin est fermé.";
                    }
                break;
                //Reste de la semaine
                default : 
                    if ($Heure >= 9 && $Heure < 12) //Matin
                    {
                        $Ouverture = "Le magasin est ouvert.";
                    } if ($Heure = 12)
                    {
                        if ($Heure = 12 && $Minute > 30)
                        {
                            $Ouverture = "Le magasin est fermé, il réouvrira à 14h30.";
                        } else
                        {
                            $Ouverture = "Le magasin est ouvert.";
                        }
                    } if ($Heure >= 13 && $Heure < 14) //Entre deux
                    {
                        $Ouverture = "Le magasin est fermé, il réouvrira à 14h30.";
                    } if ($Heure > 14 && $Heure < 19) //Après-midi
                    {
                        $Ouverture = "Le magasin est ouvert.";
                    } if ($Heure = 14) //14h
                    {
                        if ($Minute < 30)
                        {
                            $Ouverture = "Le magasin est fermé, il réouvrira à 14h30.";
                        } else
                        {
                            $Ouverture = "Le magasin est ouvert.";
                        } 
                    } else 
                    {
                        $Ouverture = "Le magasin est fermé.";
                    }
            }
            echo "<div class=ouverture>";
                echo $Ouverture;
            echo "</div>";
        ?>
        <div class="Facebook">
            <a href="https://www.facebook.com/augraindepollen.fleuristelesgrandesventes/"> <img class="image_presentation" src="../Image/Menu/Logo_Facebook.png" alt="Logo Facebook"> Retrouvez le magasin sur Facebook <strong>en cliquant ici</strong>.</a>
        </div>
        <div class=info2> 
            <p> <img class="image_presentation" src="../Image/Menu/Telephone.png" alt="Logo Facebook"> Contactez-nous au <strong>02 35 83 42 16</strong>. </p>
            <p> <img class="image_presentation" src="../Image/Menu/Adresse.png" alt="Logo Facebook"> Retrouvez le magazin au <strong>103 Route de Dieppe, 76950 Les Grandes-Ventes</strong>. </p>
            <p> <a href="https://www.facebook.com/augraindepollen.fleuristelesgrandesventes/"> <img class="image_presentation" src="../Image/Menu/Logo_Facebook.png" alt="Logo Facebook"> Retrouvez le magasin sur Facebook <strong>en cliquant ici</strong>. </a> </p>
        </div>
    </body>
</html>
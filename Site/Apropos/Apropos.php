<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Icone -->
        <link rel="icon" href="../../Image/icone.ico">
        <!-- Lien CSS -->
        <link rel="stylesheet" href="../../CSS/apropos.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Titre -->
        <title>Au Grain de Pollen - À propos</title>
    </head>
    <body>
        <?php 
            include "../../menu.php"; 
        ?>

        <div class="tout">

            <div class="horaire">
                <p> Lundi : Fermé </p>
                <p> Mardi : 9h - 12h30 / 14h30 - 17h45 </p>
                <p> Mercredi : 9h - 12h30 / 14h30 - 17h45 </p>
                <p> Jeudi : 9h - 12h30 / 14h30 - 17h45 </p>
                <p> Vendredi : 9h - 12h30 / 14h30 - 17h45 </p>
                <p> Samedi : 9h - 19h45 </p>
                <p> Dimanche : 9h - 12h30</p>
            </div>

            <img class="magazin" src="../../../Image/test/photo_9.JPG" alt="Devanture du magazin">

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
                    $Ouverture = "Le magazin est fermé pour la journée.";
                break;
                //Samedi
                case "Sat" : 
                    if ($Heure >= 9 && $Heure < 19)
                    {
                        $Ouverture = "Le magazin est ouvert.";
                    } else if ($Heure = 19 && $Minute < 45)
                    {
                        $Ouverture = "Le magazin est ouvert.";
                    } 
                    else 
                    {
                        $Ouverture = "Le magazin est fermée";
                    }
                break;
                //Dimanche
                case "Sun" : 
                    if ($Heure >= 9 && $Heure < 12)
                    {
                        $Ouverture = "Le magazin est ouvert.";
                    } else if ($Heure = 12 && $Minute < 30)
                    {
                        $Ouverture = "Le magazin est ouvert.";
                    }
                    else 
                    {
                        $Ouverture = "Le magazin est fermée";
                    }
                break;
                //Reste de la semaine
                default : 
                    //Matin
                    if ($Heure >= 9 && $Heure < 12)
                    {
                        $Ouverture = "Le magazin est ouvert.";

                    } else if ($Heure = 12 && $Minute > 30)
                    {
                    $Ouverture = "Le magazin est fermé, il réouvrira à 14h30.";
                    } else if ($Heure = 12 && $Minute <= 30)
                    {
                    $Ouverture = "Le magazin est ouvert.";

                    //Après-Midi
                    } else if ($Heure > 14 && $Heure < 17)
                    {
                        $Ouverture = "Le magazin est ouvert";
                    //Quand il est 14h : 
                    } else if ($Heure = 14 && $Minute < 30)
                    {
                        $Ouverture = "Le magazin est fermé, il réouvrira à 14h30.";
                    } else if ($Heure = 14 && $Minute >= 30)
                    {
                        $Ouverture = "Le magazin est ouvert.";
                    //Quand il est 17h :
                    } else if ($Heure = 17 && $Minute >= 45)
                    {
                        $Ouverture = "Le magazin est fermé";
                    } else if ($Heure = 17 && $Minute < 45)
                    {
                        $Ouverture = "Le magazin est ouvert";
                    } else 
                    {
                        $Ouverture = "Le magazin est fermé";
                    }
            }
            echo "<div class=ouverture>";
                echo $Ouverture;
            echo "</div>";
        ?>
    </body>
</html>
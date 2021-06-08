<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="../../Image/icone.ico">
        <link rel="stylesheet" href="../../CSS/index.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Au Grain de Pollen - Baptheme</title>
    </head>
    <body>
        <?php 
            include "../../menu.php"; 

            date_default_timezone_set('Europe/Paris');
            $date = date('D m y G:i:s');
            echo $date;

            /*
            Du mardi au vendredi : de 9h à 12h30 et de 14h30 à 17h45

            Samedi : de 9h à 19h45

            Dimanche : de 9h à 12h30
            */
            
        ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Icone -->
        <link rel="icon" href="Image/icone.ico">
        <!-- Lien CSS -->
        <link rel="stylesheet" href="CSS/index.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Script pour le deffilement d'image -->
        <script src="JS/index.js"> </script>
        <!-- Titre -->
        <title>Au Grain de Pollen</title>
    </head>
    <body>
        <?php 
            include "menu.php"; 
        ?>
        <!-- Image simple -->
        <div class=image1>
            <img class="image_presentation" src="Image/test/test.png" alt="Image page d'acceuil">
        </div> 

        <!-- Image deffilante, on peut en ajouter autant que l'on veux -->
        <div class=diapo>
            <script language="javascript">
                StartAnim();
            </script>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
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
        <title>Au Grain de Pollen - Fleuriste Les Grandes-Ventes</title>
    </head>
    <body>
        <?php 
            include "menu.php"; 
        ?>
        <!-- Image simple -->
        <div class=image1>
            <img class="image_presentation" src="Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_3.JPG" alt="Image Composition Pour Offrir">
        </div> 
        <!-- Image simple -->
        <div class=image2>
            <img class="image_presentation" src="Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_33.JPG" alt="Image Composition Mariage">
        </div> 

        <!-- Image deffilante, on peut en ajouter autant que l'on veux -->
        <div class=diapo>
            <script language="javascript">
                StartAnim();
            </script>
        </div>

        <!-- Image simple -->
        <div class=image3>
            <img class="image_presentation" src="Image/Deuil/Composition_Floral_Deuil_Au_Grain_de_Pollen_28.JPG" alt="Image Composition Deuil">
        </div> 
        <!-- Image simple -->
        <div class=image4>
            <img class="image_presentation" src="Image/test/photo_4.JPG" alt="Image page d'acceuil">
        </div> 
    </body>
</html>
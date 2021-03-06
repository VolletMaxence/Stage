<!DOCTYPE html>
<html>
    <head>
        <!-- Icone -->
        <link rel="icon" href="Image/icone.ico">
        <link rel="apple-touch-icon" sizes="120x120" href="Image/apple-touch-icon-120x120-precomposed.png" /> 
        <link rel="apple-touch-icon" sizes="152x152" href="Image/apple-touch-icon-152x152-precomposed.png" />
        <!-- Lien CSS -->
        <link rel="stylesheet" href="CSS/index.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Dans un océan de verdure et une ambiance chaleureuse, Agnès et Julliette vous prodiguent leurs conseil pour le choix de vos compositions.
        Que votre style de prédilection soit moderne ou classique, votre budget modeste ou généreux, elles vous guident afin d'harmoniser vos bouquets et agensements floraux.
        La vie est une succession d'événement dans les bons et les mauvais moment. Les fleurs ponctuent chacun d'eux. Agnès et Julliette vous accompagnent en toute circonstance.
        Vous habitez les Grandes-Ventes ? La livraison est gratuite. En périphérie, une contribution modérer vous sera demandée.">
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
            <a href="Pour_Offrir"> <img class="image_presentation" src="Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_3.JPG" alt="Image Composition Pour Offrir"> </a>
        </div> 
        <!-- Image simple -->
        <div class=image2>
        <a href="Mariage"> <img class="image_presentation" src="Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_33.JPG" alt="Image Composition Mariage"> </a>
        </div> 

        <!-- Image deffilante, on peut en ajouter autant que l'on veux -->
        <div class=diapo>
            <script language="javascript">
                StartAnim();
            </script>
        </div>

        <!-- Image simple -->
        <div class=image3>
        <a href="Deuil"> <img class="image_presentation" src="Image/Deuil/Composition_Floral_Deuil_Au_Grain_de_Pollen_28.JPG" alt="Image Composition Deuil"> </a>
        </div> 
        <!-- Image simple -->
        <div class=image4>
            <img class="image_presentation" src="Image/test/photo_4.JPG" alt="Image page d'acceuil">
        </div> 
    </body>
</html>
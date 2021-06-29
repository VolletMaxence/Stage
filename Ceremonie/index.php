<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="icon" href="../Image/icone.ico">
        <link rel="stylesheet" href="../CSS/Ceremonie.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Au Grain de Pollen - Cérémonie</title>
    </head>
    <body>
        <?php 
            include "../menu.php"; 

            //Selection random d'image pour rediriger vers les autres page

            //Random
            $random1 = rand(1,4);
            $random2 = rand(1,45);
            $random3 = rand(1,29);

            //echo $random;
            $image1 = "Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_".$random1;
            $image2 = "Composition_Floral_Mariage_Au_Grain_de_Pollen_".$random2;
            $image3 = "Composition_Floral_Deuil_Au_Grain_de_Pollen_".$random3;

            //echo $image;
            echo "<div class=image1>";
                echo "<a href=../Pour_Offrir/><img class='image_presentation' src='../Image/Pour_Offrir/".$image1.".JPG' alt='Image random'> </a>";
            echo "</div>";
            echo "<div class=image2>";
                echo "<a href=../Mariage/><img class='image_presentation' src='../Image/Mariage/".$image2.".JPG' alt='Image random'> </a>";
            echo "</div>";
            echo "<div class=image3>";
                echo "<a href=../Deuil/><img class='image_presentation' src='../Image/Deuil/".$image3.".JPG' alt='Image random'> </a>";
            echo "</div>";
        ?>
    </body>
</html>
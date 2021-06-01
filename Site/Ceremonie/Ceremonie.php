<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="../../Image/icone.ico">
        <link rel="stylesheet" href="../../CSS/autre.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Au Grain de Pollen - Baptheme</title>
    </head>
    <body>
        <?php 
            include "../../menu.php"; 

            //Selection random d'image pour rediriger vers les autres page

            //Random
            $random = rand(1,10);

            //echo $random;
            $image = "photo_".$random;

            //echo $image;

            echo "<img class='image_presentation' src='../../Image/test/".$image."' alt='Image random'>"
        ?>
    </body>
</html>
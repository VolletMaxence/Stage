<!DOCTYPE html>
<html lang="en">
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
            $random1 = rand(1,10);
            $random2 = rand(1,10);
            $random3 = rand(1,10);

            //echo $random;
            $image1 = "photo_".$random1;
            $image2 = "photo_".$random2;
            $image3 = "photo_".$random3;

            //echo $image;
            echo "<div class=image1>";
                echo "<a href=../Baptheme/Baptheme.php><img class='image_presentation' src='../Image/test/".$image1.".JPG' alt='Image random'> </a>";
            echo "</div>";
            echo "<div class=image2>";
                echo "<a href=../Mariage/Mariage.php><img class='image_presentation' src='../Image/test/".$image2.".JPG' alt='Image random'> </a>";
            echo "</div>";
            echo "<div class=image3>";
                echo "<a href=../Deuil/Deuil.php><img class='image_presentation' src='../Image/test/".$image3.".JPG' alt='Image random'> </a>";
            echo "</div>";
        ?>
    </body>
</html>
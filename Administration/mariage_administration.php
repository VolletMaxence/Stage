<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Icone -->
        <link rel="icon" href="../Image/icone.ico">
        <link rel="apple-touch-icon" sizes="120x120" href="../Image/apple-touch-icon-120x120-precomposed.png" /> 
        <link rel="apple-touch-icon" sizes="152x152" href="../Image/apple-touch-icon-152x152-precomposed.png" />
        <!-- Lien CSS -->
        <link rel="stylesheet" href="../CSS/administration.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Titre -->
        <title>Au Grain de Pollen - Administration - Fleuriste Les Grandes-Ventes</title>
        <meta name="description" content='Information sur le magazin "Au Grain de Pollen".'>
    </head>
    <body>
        <?php
            $path = getcwd();
            //echo $path;
            include "menu_administration.php";
        ?>
        <form class="form_administration" method="POST" enctype='multipart/form-data'>
            <p>
                <label for="file">Cliquez pour changer d'image</label>
                <input type="file" name="fichier">
            </p>
            <p>
                <select name="choix_image">
                    <option value=nada> --- Sélectionez une image --- </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_1.JPG>Image 1 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_2.JPG>Image 2 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_3.JPG>Image 3 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_4.JPG>Image 4 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_5.JPG>Image 5 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_6.JPG>Image 6 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_7.JPG>Image 7 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_8.JPG>Image 8 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_9.JPG>Image 9 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_10.JPG>Image 10 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_11.JPG>Image 11 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_12.JPG>Image 12 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_13.JPG>Image 13 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_14.JPG>Image 14 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_15.JPG>Image 15 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_16.JPG>Image 16 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_17.JPG>Image 17 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_18.JPG>Image 18 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_19.JPG>Image 19 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_20.JPG>Image 20 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_21.JPG>Image 21 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_22.JPG>Image 22 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_23.JPG>Image 23 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_24.JPG>Image 24 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_25.JPG>Image 25 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_26.JPG>Image 26 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_27.JPG>Image 27 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_28.JPG>Image 28 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_29.JPG>Image 29 </option>
                    <option value=/home/xencev/www/Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_30.JPG>Image 30 </option>
                </select>
            </p>
            <p>
                <input type=submit name="PSubmit" value='Changer l`image'>
            </p>
            </script>
        </form>
        <?php
        //Quand on appuit sur le bouton avec une localisation d'image a remplacer :
        //renomer le fichier selon son emplacement + le mettre en place mdr achevez moi il est 1H35 du matin
        //update : 4h22, rendez moi mon sommeil SVP, j ai pas encore fait la mise en place de l'image + la renommer
        //update : 7h17, après 9H de galère j ai reussi, nique ta mère PHP
            if(isset($_POST["PSubmit"]))
            { 
                $infosfichier = pathinfo($_FILES['fichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                    move_uploaded_file($_FILES['fichier']['tmp_name'], $_POST['choix_image']);
                    echo " Vous avez ajouté ".$_POST["choix_image"].", anciennement ".$_FILES['fichier']['name']." à la page 'Pour Offrir'.";
                }
            }
        ?>
        <!-- Toutes les images tel qu'elles sont montré sur la page -->
        <div class=image1>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_1.JPG" alt="Composition Floral 'Pour Offrir' 1 n'existe pas">
        </div> 
        <div class=image2>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_2.JPG" alt="Composition Floral 'Pour Offrir' 2 n'existe pas">
        </div> 
        <div class=image3>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_3.JPG" alt="Composition Floral 'Pour Offrir' 3 n'existe pas">
        </div> 

        <div class=image4>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_4.JPG" alt="Composition Floral 'Pour Offrir' 4 n'existe pas">
        </div> 
        <div class=image5>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_5.JPG" alt="Composition Floral 'Pour Offrir' 5 n'existe pas">
        </div> 
        <div class=image6>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_6.JPG" alt="Composition Floral 'Pour Offrir' 6 n'existe pas">
        </div>

        <div class=image7>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_7.JPG" alt="Composition Floral 'Pour Offrir' 7 n'existe pas">
        </div> 
        <div class=image8>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_8.JPG" alt="Composition Floral 'Pour Offrir' 8 n'existe pas">
        </div> 
        <div class=image9>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_9.JPG" alt="Composition Floral 'Pour Offrir' 9 n'existe pas">
        </div>

        <div class=image10>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_10.JPG" alt="Composition Floral 'Pour Offrir' 10 n'existe pas">
        </div> 
        <div class=image11>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_11.JPG" alt="Composition Floral 'Pour Offrir' 11 n'existe pas">
        </div> 
        <div class=image12>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_12.JPG" alt="Composition Floral 'Pour Offrir' 12 n'existe pas">
        </div>

        <div class=image13>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_13.JPG" alt="Composition Floral 'Pour Offrir' 13 n'existe pas">
        </div> 
        <div class=image14>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_14.JPG" alt="Composition Floral 'Pour Offrir' 14 n'existe pas">
        </div> 
        <div class=image15>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_15.JPG" alt="Composition Floral 'Pour Offrir' 15 n'existe pas">
        </div> 

        <div class=image16>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_16.jpg" alt="Composition Floral 'Pour Offrir' 16 n'existe pas">
        </div> 
        <div class=image17>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_17.JPG" alt="Composition Floral 'Pour Offrir' 17 n'existe pas">
        </div> 
        <div class=image18>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_18.JPG" alt="Composition Floral 'Pour Offrir' 18 n'existe pas">
        </div>

        <div class=image19>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_19.JPG" alt="Composition Floral 'Pour Offrir' 19 n'existe pas">
        </div> 
        <div class=image20>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_20.JPG" alt="Composition Floral 'Pour Offrir' 20 n'existe pas">
        </div> 
        <div class=image21>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_21.JPG" alt="Composition Floral 'Pour Offrir' 21 n'existe pas">
        </div>

        <div class=image22>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_22.JPG" alt="Composition Floral 'Pour Offrir' 22 n'existe pas">
        </div> 
        <div class=image23>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_23.JPG" alt="Composition Floral 'Pour Offrir' 23 n'existe pas">
        </div> 
        <div class=image24>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_24.JPG" alt="Composition Floral 'Pour Offrir' 24 n'existe pas">
        </div>

        <div class=image25>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_25.JPG" alt="Composition Floral 'Pour Offrir' 25 n'existe pas">
        </div>
        <div class=image26>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_26.JPG" alt="Composition Floral 'Pour Offrir' 26 n'existe pas">
        </div>
        <div class=image27>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_27.JPG" alt="Composition Floral 'Pour Offrir' 27 n'existe pas">
        </div>

        <div class=image28>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_28.JPG" alt="Composition Floral 'Pour Offrir' 28 n'existe pas">
        </div>
        <div class=image29>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_29.JPG" alt="Composition Floral 'Pour Offrir' 29 n'existe pas">
        </div>

        <div class=image30>
            <img class="image_presentation" src="../Image/Mariage/Composition_Floral_Mariage_Au_Grain_de_Pollen_30.JPG" alt="Composition Floral 'Pour Offrir' 30 n'existe pas">
        </div>
    </body>
</html>
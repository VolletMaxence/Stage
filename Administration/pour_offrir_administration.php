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
        <form class="form_administration" action="pour_offrir_administration.php" method="POST" enctype="multipart/form-data">
            <p>
                <label for="file">Cliquez pour changer d'image</label>
                <input type="file" name="file">
            </p>
            <p>
            <form class="choix_image">
                <select name="nom">
                    <option> --- Sélectionez une image ---
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_1>Image 1
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_2>Image 2
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_3>Image 3
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_4>Image 4
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_5>Image 5
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_6>Image 6
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_7>Image 7
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_8>Image 8
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_9>Image 9
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_10>Image 10
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_11>Image 11
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_12>Image 12
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_13>Image 13
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_14>Image 14
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_15>Image 15
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_16>Image 16
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_17>Image 17
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_18>Image 18
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_19>Image 19
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_20>Image 20
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_21>Image 21
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_22>Image 22
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_23>Image 23
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_24>Image 24
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_25>Image 25
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_26>Image 26
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_27>Image 27
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_28>Image 28
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_29>Image 29
                    <option value=Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_30>Image 30
                </select>
            </form>
            </p>
            <p>
                <button type="submit">Changer d'image</button>
            </p>
        </form>

        <!-- Quand on appuit sur le bouton avec une image a remplacer : -->

        <?php
            /*
            function lister_images($repertoire)
            {  
                if(is_dir($repertoire)) //Vérifier si c'est un repertoire
                {  
                    if($iteration = opendir($repertoire)) //Vérifier si il est accessible
                    {  
                        while(($fichier = readdir($iteration)) !== false) //Regarder tout ce qu'il y a dans le dossier
                        {  
                            if($fichier != "." && $fichier != "..") //Pour pas changer de fichier
                            { 
                                $fichier_info = finfo_open(FILEINFO_MIME_TYPE);
                                $mime_type = finfo_file($fichier_info, $repertoire.$fichier);

                                //list de toutes les images pour choisir laquel changer

                                if(strpos($mime_type, 'image/') === 0)  //Verifier si c est des image
                                {
                                    echo "<div class=info>";
                                        echo '<p> <img class="petite_image" src="' .$repertoire.$fichier. '" alt="">' .$fichier. '<p>'; //Afficher nom image
                                    echo "</div>";
                                }
                            }  
                        }  
                    closedir($iteration);  
                    }  
                }  
            } 
            lister_images("../Image/Pour_Offrir/"); */
        ?>
        <!-- Toutes les images tel qu'elles sont montré sur la page -->
        <div class=image1>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_1.JPG" alt="Composition Floral 'Pour Offrir' 1">
        </div> 
        <div class=image2>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_2.JPG" alt="Composition Floral 'Pour Offrir' 2">
        </div> 
        <div class=image3>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_3.JPG" alt="Composition Floral 'Pour Offrir' 3">
        </div> 

        <div class=image4>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_4.JPG" alt="Composition Floral 'Pour Offrir' 4">
        </div> 
        <div class=image5>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_5.JPG" alt="Composition Floral 'Pour Offrir' 5">
        </div> 
        <div class=image6>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_6.JPG" alt="Composition Floral 'Pour Offrir' 6">
        </div>

        <div class=image7>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_7.JPG" alt="Composition Floral 'Pour Offrir' 7">
        </div> 
        <div class=image8>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_8.JPG" alt="Composition Floral 'Pour Offrir' 8">
        </div> 
        <div class=image9>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_9.JPG" alt="Composition Floral 'Pour Offrir' 9">
        </div>

        <div class=image10>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_10.JPG" alt="Composition Floral 'Pour Offrir' 10">
        </div> 
        <div class=image11>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_11.JPG" alt="Composition Floral 'Pour Offrir' 11">
        </div> 
        <div class=image12>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_12.JPG" alt="Composition Floral 'Pour Offrir' 12">
        </div>

        <div class=image13>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_13.JPG" alt="Composition Floral 'Pour Offrir' 13">
        </div> 
        <div class=image14>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_14.JPG" alt="Composition Floral 'Pour Offrir' 14">
        </div> 
        <div class=image15>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_15.JPG" alt="Composition Floral 'Pour Offrir' 15">
        </div> 

        <div class=image16>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_16.jpg" alt="Composition Floral 'Pour Offrir' 16">
        </div> 
        <div class=image17>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_17.JPG" alt="Composition Floral 'Pour Offrir' 17">
        </div> 
        <div class=image18>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_18.JPG" alt="Composition Floral 'Pour Offrir' 18">
        </div>

        <div class=image19>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_19.JPG" alt="Composition Floral 'Pour Offrir' 19">
        </div> 
        <div class=image20>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_20.JPG" alt="Composition Floral 'Pour Offrir' 20">
        </div> 
        <div class=image21>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_21.JPG" alt="Composition Floral 'Pour Offrir' 21">
        </div>

        <div class=image22>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_22.JPG" alt="Composition Floral 'Pour Offrir' 22">
        </div> 
        <div class=image23>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_23.JPG" alt="Composition Floral 'Pour Offrir' 23">
        </div> 
        <div class=image24>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_24.JPG" alt="Composition Floral 'Pour Offrir' 24">
        </div>

        <div class=image25>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_25.JPG" alt="Composition Floral 'Pour Offrir' 25">
        </div>
        <div class=image26>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_26.JPG" alt="Composition Floral 'Pour Offrir' 26">
        </div>
        <div class=image27>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_27.JPG" alt="Composition Floral 'Pour Offrir' 27">
        </div>

        <div class=image28>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_28.JPG" alt="Composition Floral 'Pour Offrir' 28">
        </div>
        <div class=image29>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_29.JPG" alt="Composition Floral 'Pour Offrir' 29">
        </div>

        <div class=image30>
            <img class="image_presentation" src="../Image/Pour_Offrir/Composition_Floral_Pour_Offrir_Au_Grain_de_Pollen_30.JPG" alt="Composition Floral 'Pour Offrir' 30">
        </div>
    </body>
</html>
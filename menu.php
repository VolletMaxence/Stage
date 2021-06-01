<!-- !! CHANGER LE PATH DES SWITCH CASE LORS DE LA MISE EN LIGNE !!-->
<!-- Actuellement lié au PC -->
<!-- Changer nom des page pour index = plus propre -->
<html>
    <head>
        <?php
            $Path = getcwd();
            //echo $Path;

            //Changement direction du CSS
            switch ($Path)
            {
                case "C:\wamp64\www\Stage" :
                    ?>
                        <link rel="stylesheet" href="CSS/menu.css">
                    <?php
                break;
                default : 
                    ?>
                        <link rel="stylesheet" href="../../CSS/menu.css">
                    <?php
            }
        ?>
    </head>
    <body>
        <?php
            //Retirer l'acces à la page où on est déjà selon le path
            switch ($Path)
            {
                //Si c'est la page d'acceuil
                case "C:\wamp64\www\Stage" :
                    ?>
                    <div class=info>
                        <img class=Adresse src="Image/test/Adresse.png" alt="Adresse"> 103 Route de Dieppe, 76950 Les Grandes-Ventes , 
                        <img class=Telephone src="Image/test/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>

                    <h1>
                        <strong> Au Grain de Pollen </strong>
                    </h1>
                    <nav id="menu">
                        <ul>
                            <li> <a> <U> <strong> Accueil </strong> </U> </a> </li>
                            <li id="deroulant"> <a> Cérémonie ▼</a>
                                <ul>
                                    <li> <a href="Site/Baptheme/Baptheme.php"> Bapthême </a> </li>
                                    <li> <a href="Site/Mariage/Mariage.php"> Mariage </a> </li>
                                    <li> <a href="Site/Deuil/Deuil.php"> Deuil </a> </li>
                                </ul>
                            </li>
                            <li> <a href=Site/Colis/Colis.php> Colis </a></li>
                            <li> <a href="Site/Apropos/Apropos.php"> À propos </a> </li>
                        </ul>
                    </nav>
                    <?php
                    break;

                //SWITCH CASE POUR L'ONGLET CEREMONIE

                //Si c'est la page de bapthême
                case "C:\wamp64\www\Stage\Site\Baptheme" :
                    ?>
                    <div class=info>
                        <img class=Adresse src="../../Image/test/Adresse.png" alt="Adresse"> 103 Route de Dieppe, 76950 Les Grandes-Ventes , 
                        <img class=Telephone src="../../Image/test/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>
                    <h1> 
                        <strong> Au Grain de Pollen </strong> 
                    </h1>
                    <nav id="menu">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=../../index.php> Accueil </a> </li>
                            <li id="deroulant"> <a> Cérémonie ▼</a>
                                <ul>
                                    <li id="actuel"> <a> <U> <strong> Bapthême </strong> </U> </a> </li>
                                    <li> <a href="../../Site/Mariage/Mariage.php"> Mariage </a> </li>
                                    <li> <a href="../../Site/Deuil/Deuil.php"> Deuil </a> </li>
                                </ul>
                            </li>
                            <li> <a href=../../Site/Colis/Colis.php> Colis </a></li>
                            <li> <a href="../../Site/Apropos/Apropos.php"> À propos </a> </li>
                        </ul>
                    </nav>
                    <?php
                    break;
                //Si c'est la page de mariage
                case "C:\wamp64\www\Stage\Site\Mariage" :
                    ?>
                    <div class=info>
                        <img class=Adresse src="../../Image/test/Adresse.png" alt="Adresse"> 103 Route de Dieppe, 76950 Les Grandes-Ventes , 
                        <img class=Telephone src="../../Image/test/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>
                    <h1> 
                        <strong> Au Grain de Pollen </strong> 
                    </h1>
                    <nav id="menu">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=../../index.php> Accueil </a> </li>
                            <li id="deroulant"> <a> Cérémonie ▼</a>
                                <ul>
                                    <li> <a href="../../Site/Baptheme/Baptheme.php">Bapthême</a> </li>
                                    <li id="actuel"> <U> <strong> <a> Mariage </a> </U> </strong> </li>
                                    <li> <a href="../../Site/Deuil/Deuil.php"> Deuil </a> </li>
                                </ul>
                            </li>
                            <li> <a href=../../Site/Colis/Colis.php> Colis </a></li>
                            <li> <a href="../../Site/Apropos/Apropos.php"> À propos </a> </li>
                        </ul>        
                    </nav>
                    <?php
                    break;
                //Si c'est la page de deuil
                case "C:\wamp64\www\Stage\Site\Deuil" :
                    ?>
                    <div class=info>
                        <img class=Adresse src="../../Image/test/Adresse.png" alt="Adresse"> 103 Route de Dieppe, 76950 Les Grandes-Ventes , 
                        <img class=Telephone src="../../Image/test/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>
                    <h1> 
                        <strong> Au Grain de Pollen </strong> 
                    </h1>
                    <nav id="menu">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=../../index.php> Accueil </a> </li>
                            <li id="deroulant"> <a> Cérémonie ▼</a>
                                <ul>
                                    <li> <a href="../../Site/Baptheme/Baptheme.php">Bapthême </a> </li>
                                    <li> <a href="../../Site/Mariage/Mariage.php"> Mariage </a> </li>
                                    <li id="actuel"> <U> <strong> <a> Deuil </a> </U> </strong> </li>
                                </ul>
                            </li>
                            <li> <a href=../../Site/Colis/Colis.php> Colis </a></li>
                            <li> <a href="../../Site/Apropos/Apropos.php"> À propos </a> </li>
                        </ul>        
                    </nav>
                    <?php
                    break;
                //Si page Colis :
                case "C:\wamp64\www\Stage\Site\Colis" :
                    ?>
                    <div class=info>
                        <img class=Adresse src="Image/test/Adresse.png" alt="Adresse"> 103 Route de Dieppe, 76950 Les Grandes-Ventes , 
                        <img class=Telephone src="Image/test/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>
                    <h1> 
                        <strong> Au Grain de Pollen </strong> 
                    </h1>
                    <nav id="menu">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=../../index.php> Accueil </a> </li>
                            <li id="deroulant"> <a> Cérémonie ▼</a>
                                <ul>
                                    <li> <a href="../../Site/Baptheme/Baptheme.php">Bapthême </a> </li>
                                    <li> <a href="../../Site/Mariage/Mariage.php"> Mariage </a> </li>
                                    <li> <a href="../../Site/Deuil/Deuil.php"> Deuil </a> </li>
                                </ul>
                            </li>
                            <li id="actuel"> <U> <strong> <a> Colis </a> </U> </strong> </li>
                            <li> <a href="../../Site/Apropos/Apropos.php"> À propos </a> </li>
                        </ul>        
                    </nav>
                    <?php
                    break;
                //Si page A propos :
                case "C:\wamp64\www\Stage\Site\Apropos" :
                    ?>
                    <div class=info>
                        <img class=Adresse src="../../Image/test/Adresse.png" alt="Adresse"> 103 Route de Dieppe, 76950 Les Grandes-Ventes , 
                        <img class=Telephone src="../../Image/test/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>
                    <h1> 
                        <strong> Au Grain de Pollen </strong> 
                    </h1>

                    <nav id="menu">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=../../index.php> Accueil </a> </li>
                            <li id="deroulant"> <a> Cérémonie ▼</a>
                                <ul>
                                    <li> <a href="../../Site/Baptheme/Baptheme.php">Bapthême </a> </li>
                                    <li> <a href="../../Site/Mariage/Mariage.php"> Mariage </a> </li>
                                    <li> <a href="../../Site/Deuil/Deuil.php"> Deuil </a> </li>
                                </ul>
                            </li>
                            <li> <a href=../../Site/Colis/Colis.php> Colis </a></li>
                            <li id="actuel"> <U> <strong> <a> À propos </a> </U> </strong> </li>
                        </ul>        
                    </nav>
                    <?php
                    break;
            }
        ?>
    </body>
</html>
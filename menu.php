<!-- !! CHANGER LE PATH DES SWITCH CASE LORS DE LA MISE EN LIGNE !!-->
<!-- Actuellement lié au PC -->
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
                    <h1> <strong> Au Grain de Pollen </strong> </h1>
                    <nav id="menu">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a> <U> <strong> Accueil </strong> </U> </a> </li>
                            <li id="deroulant"> <a> Cérémonie ▼</a>
                                <ul>
                                    <li> <a href="Site/Baptheme/Baptheme.php"> Bapthême </a> </li>
                                    <li> <a href="Site/Mariage/Mariage.php"> Mariage </a> </li>
                                    <li> <a href="Site/Deuil/Deuil.php"> Deuil </a> </li>
                                </ul>
                            </li>
                            <li id="deroulant"><a> Menu2 ▼</a>
                                <ul>
                                    <li id="actuel"> <a href="Site/Test/test.php"> Test </a> </li>
                                    <li> <a href="Site/Test/test.php"> Test2 </a> </li>
                                </ul>
                                </li>
                            <li><a href="Site/truc/.php"> Menu3 </a> </li>
                            <li><a href="Site/truc/.php"> Menu4 </a> </li>
                            <li><a href="Site/truc/.php"> Menu5 </a> </li>
                        </ul>
                    </nav>
                    <?php
                    break;

                //SWITCH CASE POUR L'ONGLET CEREMONIE

                //Si c'est la page de bapthême
                case "C:\wamp64\www\Stage\Site\Baptheme" :
                    ?>
                    <h1> <strong> Au Grain de Pollen </strong> </h1>
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
                            <li id="deroulant"><a> Menu2 ▼</a>
                                <ul>
                                    <li> <a href="../../Site/Test/test.php"> Test </a> </li>
                                <li> <a href="../../Site/Test/test.php"> Test2 </a> </li>
                                </ul>
                                </li>
                            <li><a href="../../Site/truc/.php"> Menu3 </a> </li>
                            <li><a href="../../Site/truc/.php"> Menu4 </a> </li>
                            <li><a href="../../Site/truc/.php"> Menu5 </a> </li>
                        </ul>
                    </nav>
                    <?php
                    break;
                //Si c'est la page de mariage
                case "C:\wamp64\www\Stage\Site\Mariage" :
                    ?>
                    <h1> <strong> Au Grain de Pollen </strong> </h1>
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
                            <li id="deroulant"><a> Menu2 ▼</a>
                                <ul>
                                    <li> <a href="../../Site/Test/test.php"> Test </a> </li>
                                    <li> <a href="../../Site/Test/test.php"> Test2 </a> </li>
                                </ul>
                                </li>
                            <li><a href="../../Site/truc/.php"> Menu3 </a> </li>
                            <li><a href="../../Site/truc/.php"> Menu4 </a> </li>
                            <li><a href="../../Site/truc/.php"> Menu5 </a> </li>
                        </ul>        
                    </nav>
                    <?php
                    break;
                //Si c'est la page de deuil
                case "C:\wamp64\www\Stage\Site\Deuil" :
                    ?>
                    <h1> <strong> Au Grain de Pollen </strong> </h1>
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
                            <li id="deroulant"><a> Menu2 ▼</a>
                                <ul>
                                    <li> <a href="../../Site/Test/test.php"> Test </a> </li>
                                    <li> <a href="../../Site/Test/test.php"> Test2 </a> </li>
                                </ul>
                                </li>
                            <li><a href="../../Site/truc/.php"> Menu3 </a> </li>
                            <li><a href="../../Site/truc/.php"> Menu4 </a> </li>
                            <li><a href="../../Site/truc/.php"> Menu5 </a> </li>
                        </ul>        
                    </nav>
                    <?php
                    break;
            }
        ?>
    </body>
</html>
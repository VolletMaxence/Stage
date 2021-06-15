<!-- Changer nom des page pour index = plus propre -->
<html>
    <head>
        <?php
            $Path = getcwd();
            //echo $Path;

            //Changement direction du CSS
            switch ($Path)
            {
                //case "C:\wamp64\www\Stage" :
                case "/home/xencev/www" :
                    ?>
                        <link rel="stylesheet" href="CSS/menu.css">
                    <?php
                        include "Mobile_Detect.php";
                break;
                default : 
                    ?>
                        <link rel="stylesheet" href="../../CSS/menu.css">
                    <?php
                        include "../../Mobile_Detect.php";
            }
        ?>
    </head>
    <body>
        <?php
            $detect = new Mobile_Detect;

            //Retirer l'acces à la page où on est déjà selon le path
            switch ($Path)
            {
                //Si c'est la page d'acceuil
                //case "C:\wamp64\www\Stage" :
                case "/home/xencev/www" :
                    ?>
                    <div class=info>
                    <a href="https://www.google.com/maps/place/103+Route+de+Dieppe,+76950+Les+Grandes-Ventes/@49.7857715,1.2272386,18z/data=!4m5!3m4!1s0x47e0ba3f9b9ae8a9:0x134999d243debbe9!8m2!3d49.7860085!4d1.2272253?hl=fr" >
                            <img class=Adresse src="Image/Menu/Adresse.png" alt="Adresse"> <span> 103 Route de Dieppe, 76950 Les Grandes-Ventes </span>
                    </a>  ,                         
                    <img class=Telephone src="Image/Menu/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>

                    <h1>
                        <strong>AU GRAIN DE POLLEN</strong>
                    </h1>
                    <nav id="menu">
                        <ul>
                            <li> <a> <U> <strong> Accueil </strong> </U> </a> </li>
                            <?php
                            if ( $detect->isMobile() ) {
                                ?>
                                <li id="deroulant"> Cérémonie ▼
                                <?php
                            } else {
                                ?>
                                <li id="deroulant"> <a href="Site/Ceremonie/Ceremonie.php"> Cérémonie ▼</a>
                                <?php
                            }
                            ?>
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
                //Si c'est la page de Cérémonie
                //case "C:\wamp64\www\Stage\Site\Ceremonie" :
                case "/home/xencev/www/Site/Ceremonie" :
                    ?>
                    <div class=info>
                    <a href="https://www.google.com/maps/place/103+Route+de+Dieppe,+76950+Les+Grandes-Ventes/@49.7857715,1.2272386,18z/data=!4m5!3m4!1s0x47e0ba3f9b9ae8a9:0x134999d243debbe9!8m2!3d49.7860085!4d1.2272253?hl=fr" >
                            <img class=Adresse src="../../Image/Menu/Adresse.png" alt="Adresse"> <span> 103 Route de Dieppe, 76950 Les Grandes-Ventes </span>
                    </a>  ,                        
                    <img class=Telephone src="../../Image/Menu/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>
                    <h1> 
                        <strong>AU GRAIN DE POLLEN</strong> 
                    </h1>
                    <nav id="menu">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=../../index.php> Accueil </a> </li>
                            <li id="deroulant"> <a> <U> <strong> Cérémonie ▼ </strong> </U> </a>
                                <ul>
                                    <li> <a href="../../Site/Baptheme/Baptheme.php"> Bapthême </a> </li>
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
                //Si c'est la page de bapthême
                //case "C:\wamp64\www\Stage\Site\Baptheme" :
                case "/home/xencev/www/Site/Baptheme" :
                    ?>
                    <div class=info>
                        <a href="https://www.google.com/maps/place/103+Route+de+Dieppe,+76950+Les+Grandes-Ventes/@49.7857715,1.2272386,18z/data=!4m5!3m4!1s0x47e0ba3f9b9ae8a9:0x134999d243debbe9!8m2!3d49.7860085!4d1.2272253?hl=fr" >
                            <img class=Adresse src="../../Image/Menu/Adresse.png" alt="Adresse"> <span> 103 Route de Dieppe, 76950 Les Grandes-Ventes </span>
                        </a>  , 
                        <img class=Telephone src="../../Image/Menu/Telephone.png" alt="Telephone"><span> 02 35 83 42 16 </span>
                    </div>
                    <h1> 
                        <strong>AU GRAIN DE POLLEN</strong> 
                    </h1>
                    <nav id="menu">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=../../index.php> Accueil </a> </li>
                            <?php
                            if ( $detect->isMobile() ) {
                                ?>
                                <li id="deroulant"> <U> Cérémonie ▼ </U>
                                <?php
                            } else {
                                ?>
                                <li id="deroulant"> <a href="../../Site/Ceremonie/Ceremonie.php"> Cérémonie ▼</a>
                                <?php
                            }
                            ?>
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
                //case "C:\wamp64\www\Stage\Site\Mariage" :
                case "/home/xencev/www/Site/Mariage" :
                    ?>
                    <div class=info>
                        <a href="https://www.google.com/maps/place/103+Route+de+Dieppe,+76950+Les+Grandes-Ventes/@49.7857715,1.2272386,18z/data=!4m5!3m4!1s0x47e0ba3f9b9ae8a9:0x134999d243debbe9!8m2!3d49.7860085!4d1.2272253?hl=fr" >
                                <img class=Adresse src="../../Image/Menu/Adresse.png" alt="Adresse"> <span> 103 Route de Dieppe, 76950 Les Grandes-Ventes </span>
                        </a>  ,                         
                        <img class=Telephone src="../../Image/Menu/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>
                    <h1> 
                        <strong>AU GRAIN DE POLLEN</strong> 
                    </h1>
                    <nav id="menu">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=../../index.php> Accueil </a> </li>
                            <?php
                            if ( $detect->isMobile() ) {
                                ?>
                                <li id="deroulant"> <U> Cérémonie ▼ </U>
                                <?php
                            } else {
                                ?>
                                <li id="deroulant"> <a href="../../Site/Ceremonie/Ceremonie.php"> Cérémonie ▼</a>
                                <?php
                            }
                            ?>
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
                //case "C:\wamp64\www\Stage\Site\Deuil" :
                case "/home/xencev/www/Site/Deuil" :
                    ?>
                    <div class=info>
                    <a href="https://www.google.com/maps/place/103+Route+de+Dieppe,+76950+Les+Grandes-Ventes/@49.7857715,1.2272386,18z/data=!4m5!3m4!1s0x47e0ba3f9b9ae8a9:0x134999d243debbe9!8m2!3d49.7860085!4d1.2272253?hl=fr" >
                            <img class=Adresse src="../../Image/Menu/Adresse.png" alt="Adresse"> <span> 103 Route de Dieppe, 76950 Les Grandes-Ventes </span>
                    </a>  ,                         
                    <img class=Telephone src="../../Image/Menu/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>
                    <h1> 
                        <strong>AU GRAIN DE POLLEN</strong> 
                    </h1>
                    <nav id="menu">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=../../index.php> Accueil </a> </li>
                            <?php
                            if ( $detect->isMobile() ) {
                                ?>
                                <li id="deroulant"> <U> Cérémonie ▼ </U>
                                <?php
                            } else {
                                ?>
                                <li id="deroulant"> <a href="../../Site/Ceremonie/Ceremonie.php"> Cérémonie ▼</a>
                                <?php
                            }
                            ?>
                                <ul>
                                    <li> <a href="../../Site/Baptheme/Baptheme.php">Bapthême </a> </li>
                                    <li> <a href="../../Site/Mariage/Mariage.php"> Mariage </a> </li>
                                    <li id="actuel"> <strong> <U> <a> Deuil </a> </U> </strong> </li>
                                </ul>
                            </li>
                            <li> <a href=../../Site/Colis/Colis.php> Colis </a></li>
                            <li> <a href="../../Site/Apropos/Apropos.php"> À propos </a> </li>
                        </ul>        
                    </nav>
                    <?php
                    break;

                //Si page Colis :
                //case "C:\wamp64\www\Stage\Site\Colis" :
                case "/home/xencev/www/Site/Colis" :
                    ?>
                    <div class=info>
                    <a href="https://www.google.com/maps/place/103+Route+de+Dieppe,+76950+Les+Grandes-Ventes/@49.7857715,1.2272386,18z/data=!4m5!3m4!1s0x47e0ba3f9b9ae8a9:0x134999d243debbe9!8m2!3d49.7860085!4d1.2272253?hl=fr" >
                            <img class=Adresse src="../../Image/Menu/Adresse.png" alt="Adresse"> <span> 103 Route de Dieppe, 76950 Les Grandes-Ventes </span>
                    </a>  ,                         
                    <img class=Telephone src="../../Image/Menu/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>
                    <h1> 
                        <strong>AU GRAIN DE POLLEN</strong> 
                    </h1>
                    <nav id="menu" role="navigation">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=../../index.php> Accueil </a> </li>
                            <?php
                            if ( $detect->isMobile() ) {
                                ?>
                                <li id="deroulant"> Cérémonie ▼
                                <?php
                            } else {
                                ?>
                                <li id="deroulant"> <a href="../../Site/Ceremonie/Ceremonie.php"> Cérémonie ▼</a>
                                <?php
                            }
                            ?>
                                <ul>
                                    <li> <a href="../../Site/Baptheme/Baptheme.php">Bapthême </a> </li>
                                    <li> <a href="../../Site/Mariage/Mariage.php"> Mariage </a> </li>
                                    <li> <a href="../../Site/Deuil/Deuil.php"> Deuil </a> </li>
                                </ul>
                            </li>
                            <li id="actuel"> <strong> <U> <a> Colis </a> </U> </strong> </li>
                            <li> <a href="../../Site/Apropos/Apropos.php"> À propos </a> </li>
                        </ul>        
                    </nav>
                    <?php
                    break;

                //Si page A propos :
                //case "C:\wamp64\www\Stage\Site\Apropos" :
                case "/home/xencev/www/Site/Apropos" :
                    ?>
                    <div class=info>
                    <a href="https://www.google.com/maps/place/103+Route+de+Dieppe,+76950+Les+Grandes-Ventes/@49.7857715,1.2272386,18z/data=!4m5!3m4!1s0x47e0ba3f9b9ae8a9:0x134999d243debbe9!8m2!3d49.7860085!4d1.2272253?hl=fr" >
                            <img class=Adresse src="../../Image/Menu/Adresse.png" alt="Adresse"> <span> 103 Route de Dieppe, 76950 Les Grandes-Ventes </span>
                    </a>  ,                         
                    <img class=Telephone src="../../Image/Menu/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>
                    <h1> 
                        <strong>AU GRAIN DE POLLEN</strong> 
                    </h1>

                    <nav id="menu">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=../../index.php> Accueil </a> </li>
                            <?php
                            if ( $detect->isMobile() ) {
                                ?>
                                <li id="deroulant"> Cérémonie ▼
                                <?php
                            } else {
                                ?>
                                <li id="deroulant"> <a href="../../Site/Ceremonie/Ceremonie.php"> Cérémonie ▼</a>
                                <?php
                            }
                            ?>
                                <ul>
                                    <li> <a href="../../Site/Baptheme/Baptheme.php">Bapthême </a> </li>
                                    <li> <a href="../../Site/Mariage/Mariage.php"> Mariage </a> </li>
                                    <li> <a href="../../Site/Deuil/Deuil.php"> Deuil </a> </li>
                                </ul>
                            </li>
                            <li> <a href=../../Site/Colis/Colis.php> Colis </a></li>
                            <li id="actuel"> <strong> <U> <a> À propos </a> </U> </strong> </li>
                        </ul>        
                    </nav>
                    <?php
                    break;
            }
        ?>
    </body>
</html>
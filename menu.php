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
                        <link rel="stylesheet" href="../CSS/menu.css">
                    <?php
                        include "Mobile_Detect.php";
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
                                <li id="deroulant"> Composition ▼
                                <?php
                            } else {
                                ?>
                                <li id="deroulant"> <a href="Ceremonie"> Composition ▼</a>
                                <?php
                            }
                            ?>
                                <ul>
                                    <li> <a href="Pour_Offrir/"> Pour Offrir </a> </li>
                                    <li> <a href="Mariage/"> Mariage </a> </li>
                                    <li> <a href="Deuil/"> Deuil </a> </li>
                                </ul>
                            </li>
                            <li> <a href=Colis/> Colis </a></li>
                            <li> <a href="A_Propos/"> À propos </a> </li>
                        </ul>
                    </nav>
                    <?php
                    break;

                //SWITCH CASE POUR L'ONGLET CEREMONIE
                //Si c'est la page de Composition
                //case "C:\wamp64\www\Stage\Ceremonie" :
                case "/home/xencev/www/Ceremonie" :
                    ?>
                    <div class=info>
                    <a href="https://www.google.com/maps/place/103+Route+de+Dieppe,+76950+Les+Grandes-Ventes/@49.7857715,1.2272386,18z/data=!4m5!3m4!1s0x47e0ba3f9b9ae8a9:0x134999d243debbe9!8m2!3d49.7860085!4d1.2272253?hl=fr" >
                            <img class=Adresse src="../Image/Menu/Adresse.png" alt="Adresse"> <span> 103 Route de Dieppe, 76950 Les Grandes-Ventes </span>
                    </a>  ,                        
                    <img class=Telephone src="../Image/Menu/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>
                    <h1> 
                        <strong>AU GRAIN DE POLLEN</strong> 
                    </h1>
                    <nav id="menu">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=..> Accueil </a> </li>
                            <li id="deroulant"> <a> <U> <strong> Composition ▼ </strong> </U> </a>
                                <ul>
                                    <li> <a href="../Pour_Offrir/"> Pour Offrir </a> </li>
                                    <li> <a href="../Mariage/"> Mariage </a> </li>
                                    <li> <a href="../Deuil/"> Deuil </a> </li>
                                </ul>
                            </li>
                            <li> <a href="../Colis/"> Colis </a></li>
                            <li> <a href="../A_Propos/"> À propos </a> </li>
                        </ul>
                    </nav>
                    <?php
                    break;
                //Si c'est la page de Pour Offrir
                //case "C:\wamp64\www\Stage\Pour_Offrir" :
                case "/home/xencev/www/Pour_Offrir" :
                    ?>
                    <div class=info>
                        <a href="https://www.google.com/maps/place/103+Route+de+Dieppe,+76950+Les+Grandes-Ventes/@49.7857715,1.2272386,18z/data=!4m5!3m4!1s0x47e0ba3f9b9ae8a9:0x134999d243debbe9!8m2!3d49.7860085!4d1.2272253?hl=fr" >
                            <img class=Adresse src="../Image/Menu/Adresse.png" alt="Adresse"> <span> 103 Route de Dieppe, 76950 Les Grandes-Ventes </span>
                        </a>  , 
                        <img class=Telephone src="../Image/Menu/Telephone.png" alt="Telephone"><span> 02 35 83 42 16 </span>
                    </div>
                    <h1> 
                        <strong>AU GRAIN DE POLLEN</strong> 
                    </h1>
                    <nav id="menu">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=..> Accueil </a> </li>
                            <?php
                            if ( $detect->isMobile() ) {
                                ?>
                                <li id="deroulant"> <U> Composition ▼ </U>
                                <?php
                            } else {
                                ?>
                                <li id="deroulant"> <a href="/Ceremonie"> Composition ▼</a>
                                <?php
                            }
                            ?>
                                <ul>
                                    <li id="actuel"> <a> <U> <strong> Pour Offrir </strong> </U> </a> </li>
                                    <li> <a href="../Mariage/"> Mariage </a> </li>
                                    <li> <a href="../Deuil/"> Deuil </a> </li>
                                </ul>
                            </li>
                            <li> <a href=../Colis/> Colis </a></li>
                            <li> <a href="../A_Propos/"> À propos </a> </li>
                        </ul>
                    </nav>
                    <?php
                    break;
                //Si c'est la page de mariage
                //case "C:\wamp64\www\Stage\Mariage" :
                case "/home/xencev/www/Mariage" :
                    ?>
                    <div class=info>
                        <a href="https://www.google.com/maps/place/103+Route+de+Dieppe,+76950+Les+Grandes-Ventes/@49.7857715,1.2272386,18z/data=!4m5!3m4!1s0x47e0ba3f9b9ae8a9:0x134999d243debbe9!8m2!3d49.7860085!4d1.2272253?hl=fr" >
                                <img class=Adresse src="../Image/Menu/Adresse.png" alt="Adresse"> <span> 103 Route de Dieppe, 76950 Les Grandes-Ventes </span>
                        </a>  ,                         
                        <img class=Telephone src="../Image/Menu/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>
                    <h1> 
                        <strong>AU GRAIN DE POLLEN</strong> 
                    </h1>
                    <nav id="menu">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=..> Accueil </a> </li>
                            <?php
                            if ( $detect->isMobile() ) {
                                ?>
                                <li id="deroulant"> <U> Composition ▼ </U>
                                <?php
                            } else {
                                ?>
                                <li id="deroulant"> <a href="/Ceremonie"> Composition ▼</a>
                                <?php
                            }
                            ?>
                                <ul>
                                    <li> <a href="../Pour_Offrir/">Pour Offrir</a> </li>
                                    <li id="actuel"> <U> <strong> <a> Mariage </a> </U> </strong> </li>
                                    <li> <a href="../Deuil/"> Deuil </a> </li>
                                </ul>
                            </li>
                            <li> <a href=../Colis/> Colis </a></li>
                            <li> <a href="../A_Propos/"> À propos </a> </li>
                        </ul>        
                    </nav>
                    <?php
                    break;
                //Si c'est la page de deuil
                //case "C:\wamp64\www\Stage\Deuil" :
                case "/home/xencev/www/Deuil" :
                    ?>
                    <div class=info>
                    <a href="https://www.google.com/maps/place/103+Route+de+Dieppe,+76950+Les+Grandes-Ventes/@49.7857715,1.2272386,18z/data=!4m5!3m4!1s0x47e0ba3f9b9ae8a9:0x134999d243debbe9!8m2!3d49.7860085!4d1.2272253?hl=fr" >
                            <img class=Adresse src="../Image/Menu/Adresse.png" alt="Adresse"> <span> 103 Route de Dieppe, 76950 Les Grandes-Ventes </span>
                    </a>  ,                         
                    <img class=Telephone src="../Image/Menu/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>
                    <h1> 
                        <strong>AU GRAIN DE POLLEN</strong> 
                    </h1>
                    <nav id="menu">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=..> Accueil </a> </li>
                            <?php
                            if ( $detect->isMobile() ) {
                                ?>
                                <li id="deroulant"> <U> Composition ▼ </U>
                                <?php
                            } else {
                                ?>
                                <li id="deroulant"> <a href="../Ceremonie"> Composition ▼</a>
                                <?php
                            }
                            ?>
                                <ul>
                                    <li> <a href="../Pour_Offrir/">Pour Offrir </a> </li>
                                    <li> <a href="../Mariage/"> Mariage </a> </li>
                                    <li id="actuel"> <strong> <U> <a> Deuil </a> </U> </strong> </li>
                                </ul>
                            </li>
                            <li> <a href=../Colis/> Colis </a></li>
                            <li> <a href="../A_Propos/"> À propos </a> </li>
                        </ul>        
                    </nav>
                    <?php
                    break;

                //Si page Colis :
                //case "C:\wamp64\www\Stage\Colis" :
                case "/home/xencev/www/Colis" :
                    ?>
                    <div class=info>
                    <a href="https://www.google.com/maps/place/103+Route+de+Dieppe,+76950+Les+Grandes-Ventes/@49.7857715,1.2272386,18z/data=!4m5!3m4!1s0x47e0ba3f9b9ae8a9:0x134999d243debbe9!8m2!3d49.7860085!4d1.2272253?hl=fr" >
                            <img class=Adresse src="../Image/Menu/Adresse.png" alt="Adresse"> <span> 103 Route de Dieppe, 76950 Les Grandes-Ventes </span>
                    </a>  ,                         
                    <img class=Telephone src="../Image/Menu/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>
                    <h1> 
                        <strong>AU GRAIN DE POLLEN</strong> 
                    </h1>
                    <nav id="menu" role="navigation">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=..> Accueil </a> </li>
                            <?php
                            if ( $detect->isMobile() ) {
                                ?>
                                <li id="deroulant"> Composition ▼
                                <?php
                            } else {
                                ?>
                                <li id="deroulant"> <a href="../Ceremonie"> Composition ▼</a>
                                <?php
                            }
                            ?>
                                <ul>
                                    <li> <a href="../Pour_Offrir/">Pour Offrir </a> </li>
                                    <li> <a href="../Mariage/"> Mariage </a> </li>
                                    <li> <a href="../Deuil/"> Deuil </a> </li>
                                </ul>
                            </li>
                            <li id="actuel"> <strong> <U> <a> Colis </a> </U> </strong> </li>
                            <li> <a href="../A_Propos/"> À propos </a> </li>
                        </ul>        
                    </nav>
                    <?php
                    break;

                //Si page A propos :
                //case "C:\wamp64\www\Stage\A_Propos" :
                case "/home/xencev/www/A_Propos" :
                    ?>
                    <div class=info>
                    <a href="https://www.google.com/maps/place/103+Route+de+Dieppe,+76950+Les+Grandes-Ventes/@49.7857715,1.2272386,18z/data=!4m5!3m4!1s0x47e0ba3f9b9ae8a9:0x134999d243debbe9!8m2!3d49.7860085!4d1.2272253?hl=fr" >
                            <img class=Adresse src="../Image/Menu/Adresse.png" alt="Adresse"> <span> 103 Route de Dieppe, 76950 Les Grandes-Ventes </span>
                    </a>  ,                         
                    <img class=Telephone src="../Image/Menu/Telephone.png" alt="Telephone"> 02 35 83 42 16
                    </div>
                    <h1> 
                        <strong>AU GRAIN DE POLLEN</strong> 
                    </h1>

                    <nav id="menu">
                        <ul>
                            <!-- Ajouter les liens + changer nom -->
                            <li> <a href=..> Accueil </a> </li>
                            <?php
                            if ( $detect->isMobile() ) {
                                ?>
                                <li id="deroulant"> Composition ▼
                                <?php
                            } else {
                                ?>
                                <li id="deroulant"> <a href="../Ceremonie"> Composition ▼</a>
                                <?php
                            }
                            ?>
                                <ul>
                                    <li> <a href="../Pour_Offrir/">Pour Offrir </a> </li>
                                    <li> <a href="../Mariage/"> Mariage </a> </li>
                                    <li> <a href="../Deuil/"> Deuil </a> </li>
                                </ul>
                            </li>
                            <li> <a href=../Colis/> Colis </a></li>
                            <li id="actuel"> <strong> <U> <a> À propos </a> </U> </strong> </li>
                        </ul>        
                    </nav>
                    <?php
                    break;
            }
        ?>
    </body>
</html>
<!-- !! CHANGER LE PATH DES SWITCH CASE LORS DE LA MISE EN LIGNE !!-->

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


<?php
    //Retirer l'acces à la page où on est déjà selon le path
    switch ($Path)
    {
        case "C:\wamp64\www\Stage" :
            ?>
            <div id="Menu">
                <h1><strong> Au Grain de Pollen </strong></h1>
                <li id=Menu>
                    <ul>
                        <!-- Ajouter les liens + changer nom -->
                        <li> <U> <strong> Accueil </strong> </U> </li>
                        <li><a href="Site/Test/test.php"> Menu1 </a> </li>
                        <li><a href="Site/truc/.php"> Menu2 </a> </li>
                        <li><a href="Site/truc/.php"> Menu3 </a> </li>
                        <li><a href="Site/truc/.php"> Menu4 </a> </li>
                        <li><a href="Site/truc/.php"> Menu5 </a> </li>
                    </ul>
                </li>
            </div>
            <?php
            break;
        case "C:\wamp64\www\Stage\Site\Test" :
            ?>
            <div id="Menu">
                <h1><strong> Au Grain de Pollen </strong></h1>
                <li id=Menu>
                    <ul>
                        <!-- Ajouter les liens + changer nom -->
                        <li><a href="../../index.php"> Accueil </a> </li>
                        <li> <U> <strong> Menu1 </strong> </U> </li>
                        <li><a href="Site/truc/.php"> Menu2 </a> </li>
                        <li><a href="Site/truc/.php"> Menu3 </a> </li>
                        <li><a href="Site/truc/.php"> Menu4 </a> </li>
                        <li><a href="Site/truc/.php"> Menu5 </a> </li>
                    </ul>
                </li>
            </div>
            <?php
            break;
        
    }
?>
<?php
    //Info base de donnée
    //Local
    $user = 'root';
    $pass = '';
    $bdd = new PDO('mysql:host=localhost; dbname=au_grain_de_pollen', $user, $pass);

    //AlwaysData
    $user = '';
    $pass = '';
    $bdd = new PDO('mysql:host=; dbname=au_grain_de_pollen', $user, $pass);

    //Final
    $user = '';
    $pass = '';
    $bdd = new PDO('mysql:host=; dbname=au_grain_de_pollen', $user, $pass);
?>
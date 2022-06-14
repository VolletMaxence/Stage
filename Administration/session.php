<?php
        session_start();

        if($_SESSION && $_SESSION['Connect'] == true){
            //Si session existe on affiche la page:

        }else{
            //Demande client de ne pas utiliser de BDD
            $Nom_XenceV = "";
            $MdP_XenceV = "";

            $Nom_Agnes = "";    // A Changer 
            $MdP_Agnes = "";   // A Changer
            ?>
                <div id="container">
                <!-- zone de connexion avec formulaire -->
                
                <form method="POST">
                    <h1>Connexion</h1>
                    
                    <label><strong>Nom d'utilisateur</strong></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                    <label><strong>Mot de passe</strong></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                    <input type="submit" name='submit' value='LOGIN' >
                </form>
            </div>

            <?php
            //si session existe pas :

            if (isset($_POST["submit"])) {
                if((!empty($_POST['password'])) && (!empty($_POST['username'])))
                {
                    if($_POST['username'] == $Nom_Agnes && $_POST['password'] == $MdP_Agnes)
                    {
                        $_SESSION['Connect']=true;
                        header("Refresh:0");
                    } elseif($_POST['username'] == $Nom_XenceV && $_POST['password'] == $MdP_XenceV) 
                    {
                        $_SESSION['Connect']=true;
                        header("Refresh:0");
                    }else 
                    {
                        echo "Mauvais nom d'utilisateur ou mot de passe";
                    }
                }    
            }
        }   
    ?>

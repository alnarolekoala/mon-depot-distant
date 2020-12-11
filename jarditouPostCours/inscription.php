<?php 
require "header.php";
require "connexion_bdd.php";
?>
<?php

if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
	
	if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['pass']) && !empty($_POST['pass'])&& isset($_POST['pass_confirm']) && !empty($_POST['pass_confirm'])) {
	
            if ($_POST['pass'] != $_POST['pass_confirm']) {
                $erreur = 'Les 2 mots de passe sont différents.';
            }
            else {
               

                
                $login = $_POST['login'];
                $pass = $_POST['pass'];
            

            try {
            
                
            
                
                $requete = "SELECT * FROM membre WHERE logine ='$login'";//like '$login'";
                $result = $db->query($requete);
                //$row = $result->fetch(PDO::FETCH_OBJ);

                $nbLigne = $result->rowCount();


                var_dump($nbLigne);


       





                if ($nbLigne==0) {
                
                    $requete = $db->prepare("INSERT INTO membre (logine, pass) VALUES (:logine, :pass)");                  
                    $requete->bindValue(':logine', $login, PDO::PARAM_STR);
                    $requete->bindValue(':pass', $pass, PDO::PARAM_STR);
                
                    $requete->execute();

                session_start();
                $_SESSION['login'] = $login;
                $result->closeCursor();
                header('Location: index.php');
                exit();
                }

               
                else {
                    $erreur = 'Un membre possède déjà ce login.';
                    }



            }

            catch (Exception $e) {
                
                echo "La connexion à la base de données a échoué ! <br>";
                echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
                echo "Erreur : " . $e->getMessage() . "<br>";
                echo "N° : " . $e->getCode();
                die("Fin du script");
            
            }
            }
            
            
           
	
    }
       
	else {
	        $erreur = 'Au moins un des champs est vide.';
	}
}




?>
<div id="inscription" class="offset-sm-2 col-4">

<p>Inscription à l'espace membre :<p>
<form id="inscriptio" action="inscription.php" method="post">
Login : 
<input id="login" type="text" name="login" value="<?php if (isset($_POST['login'])) echo $_POST['login']; ?>"><br>
Mot de passe : 
<input id="pass" type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>"><br>
Confirmation du mot de passe : 
<input id="pass_confirm" type="password" name="pass_confirm" value="<?php if (isset($_POST['pass_confirm'])) echo $_POST['pass_confirm']; ?>"><br>
<button id="ins" type="submit" name="inscription" value="Inscription">Inscription</button>
<button id="retour" type="button" onclick=window.location.href="index.php">Retour</button>
</form>




<?php

if (isset($erreur)) {
    echo '<br>'.$erreur;
}
?> 

</div>







<?php
require "footer.php"
?>

<?php
// session_start();
unset($taberror);
unset($erreur);

require "header.php";
// Récupération des informations passées en POST, nécessaires à la modification
// $tabinfo = array ('Reference', 'Libelle', 'Prix', 'Stock', 'Couleur', 'bloque', 'ajout');
$taberror = array();
$Reference=$_POST['Reference'];
$Libelle=$_POST['Libelle'];
$Prix=$_POST['Prix'];
$Stock=$_POST['Stock'];
$Couleur=$_POST['Couleur'];
$bloque=$_POST['bloque'];
$ajout=$_POST['ajout'];

// $valider=$_POST['valider'];

// $_SESSION['Reference'] = $Reference;
// $_SESSION['Libelle'] = $Libelle;
// $_SESSION['Prix'] = $Prix;
// $_SESSION['Stock'] = $Stock;
// $_SESSION['Couleur'] = $Couleur;
// $_SESSION['bloque'] = $bloque;
// $_SESSION['ajout'] = $ajout;

$erreur0="";
$erreur1="";
$erreur2="";
$erreur3="";
$erreur4="";

// $_SESSION['valeur'] = $valider;

if(empty($Reference))
{
       
        $taberror[0]="errorregex";
        $erreur0 = "<p style='color:red;'><i> <sub> *Le champ est vide </sub></i></p>";
}
elseif(!preg_match('/[a-zA-Z0-9]/', $Reference))
{
        $taberror[0]="error";
        $erreur0 = "<p style='color:red;'><i> <sub>*Le champ possède des caractères non autorisé [a-z A-Z 0-9] Uniquement</sub></i></p>";
}

if(empty($Libelle))
{
       
        $taberror[1]="errorregex";
        $erreur1 = "<p style='color:red;'><i> <sub> *Le champ est vide </sub></i></p>";
}
elseif(!preg_match('/[a-zA-Z0-9]/', $Libelle))
{
        $taberror[1]="error";
        $erreur1 = "<p style='color:red;'><i> <sub> *Le champ possède des caractères non autorisé [a-z A-Z 0-9] Uniquement </sub></i></p>";
}

if(empty($Prix))
{
       
        $taberror[2]="errorregex";
        $erreur2 = "<p style='color:red;'><i> <sub> *Le champ est vide </sub></i></p>";
}
elseif(!preg_match('/[0-9]/', $Prix))
{
        $taberror[2]="error";
        $erreur2 = "<p style='color:red;'><i> <sub> *Le champ possède des caractères non autorisé [0-9] Uniquement </sub></i></p>";
}
if(empty($Stock))
{
       
        $taberror[3]="errorregex";
        $erreur3 = "<p style='color:red;'><i> <sub> *Le champ est vide </sub></i></p>";
}
elseif(!preg_match('/[0-9]/', $Stock))
{
        $taberror[3]="error";
        $erreur3 = "<p style='color:red;'><i> <sub> *Le champ possède des caractères non autorisé [0-9] Uniquement </sub></i></p>";
}
if(empty($Couleur))
{
       
        $taberror[4]="errorregex";
        $erreur4 = "<p style='color:red;'><i> <sub> *Le champ est vide </sub></i></p>";
}
elseif(!preg_match('/[a-zA-Z]/', $Couleur))
{
        $taberror[4]="error";
        $erreur4 = "<p style='color:red;'><i> <sub> *Le champ possède des caractères non autorisé [a-z A-Z] Uniquement </sub></i></p>";
}









if(empty($taberror))
{

        require "connexion_bdd.php";

try{ 


        $requete = $db->prepare("INSERT INTO produit (Reference, Libelle, Prix, Stock, Couleur, bloqué, ajout) 
        VALUES (:Reference, :Libelle, :Prix, :Stock , :Couleur, :bloque, :ajout)");
        
        $requete->bindValue(':Reference', $Reference, PDO::PARAM_STR);
        $requete->bindValue(':Libelle', $Libelle, PDO::PARAM_STR);
        $requete->bindValue(':Prix', $Prix, PDO::PARAM_INT);
        $requete->bindValue(':Stock', $Stock, PDO::PARAM_INT);
        $requete->bindValue(':Couleur', $Couleur, PDO::PARAM_STR);
        $requete->bindValue(':bloque', $bloque, PDO::PARAM_STR);
        $requete->bindValue(':ajout', $ajout, PDO::PARAM_STR);
       
        
              
        $requete->execute();
        
        // Libération de la connexion au serveur de BDD
        $requete->closeCursor();
        }
        
        catch (Exception $e) {
        
                echo "La connexion à la base de données a échoué ! <br>";
                echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
                echo "Erreur : " . $e->getMessage() . "<br>";
                echo "N° : " . $e->getCode();
                die("Fin du script");
        }
         try {
            $requete = "SELECT * FROM produit WHERE ID = (SELECT MAX(ID) FROM produit)";
            $result = $db->query($requete);
            
            
            $row = $result->fetch(PDO::FETCH_OBJ);
            
                
                $result->closeCursor();
            }
            catch (Exception $e) 
            { 
                echo 'Erreur : ' . $e->getMessage() . '<br />';
                echo 'N° : ' . $e->getCode();
                die('Fin du script');
                
            }
        //     $img = $_POST["img"];
        //    var_dump($row); 
           $ID = (string)$row->ID;
        //     var_dump($ID);
            move_uploaded_file($_FILES["img"]["tmp_name"], "public/images/$ID.jpg");
        //     var_dump($_FILES);
         header("Location: tableau.php");
exit;





}
else {
        header("Location: add_form.php?Libelle=$Libelle&Reference=$Reference&Prix=$Prix&Stock=$Stock&Couleur=$Couleur&erreur0=$erreur0&erreur1=$erreur1&erreur2=$erreur2&erreur3=$erreur3&erreur4=$erreur4");
}

require "footer.php"

?>
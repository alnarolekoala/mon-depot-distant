<?php
unset($taberror);
unset($erreur);
require "header.php";
$taberror=  array();
$ID=$_POST['ID'];
$Reference=$_POST['Reference'];
$Libelle=$_POST['Libelle'];
$Prix=$_POST['Prix'];
$Stock=$_POST['Stock'];
$Couleur=$_POST['Couleur'];

$bloqué=$_POST['bloque'];

$datemodif=$_POST['datemodif'];

$erreur0="";
$erreur1="";
$erreur2="";
$erreur3="";
$erreur4="";

if(empty($Reference))
{
       
        $taberror[0]="errorregex";
        $erreur0 = "<p style='color:red;'><i> <sub> *Ne laissez pas le champ vide </sub></i></p>";
}
elseif(!preg_match('/[a-zA-Z0-9]/', $Reference))
{
        $taberror[0]="error";
        $erreur0 = "<p style='color:red;'><i> <sub>*Le champ possède des caractères non autorisé [a-z A-Z 0-9] Uniquement</sub></i></p>";
}

if(empty($Libelle))
{
       
        $taberror[1]="errorregex";
        $erreur1 = "<p style='color:red;'><i> <sub> *Ne laissez pas le champ vide  </sub></i></p>";
}
elseif(!preg_match('/[a-zA-Z0-9]/', $Libelle))
{
        $taberror[1]="error";
        $erreur1 = "<p style='color:red;'><i> <sub> *Le champ possède des caractères non autorisé [a-z A-Z 0-9] Uniquement </sub></i></p>";
}

if(empty($Prix))
{
       
        $taberror[2]="errorregex";
        $erreur2 = "<p style='color:red;'><i> <sub> *Ne laissez pas le champ vide  </sub></i></p>";
}
elseif(!preg_match('/[0-9]/', $Prix))
{
        $taberror[2]="error";
        $erreur2 = "<p style='color:red;'><i> <sub> *Le champ possède des caractères non autorisé [0-9] Uniquement </sub></i></p>";
}


if(!preg_match('/[0-9]/', $Stock))
{
        $taberror[3]="error";
        $erreur3 = "<p style='color:red;'><i> <sub> *Le champ possède des caractères non autorisé [0-9] Uniquement </sub></i></p>";
}
if(empty($Couleur))
{
       
        $taberror[4]="errorregex";
        $erreur4 = "<p style='color:red;'><i> <sub> *Ne laissez pas le champ vide  </sub></i></p>";
}
elseif(!preg_match('/[a-zA-Z]/', $Couleur))
{
        $taberror[4]="error";
        $erreur4 = "<p style='color:red;'><i> <sub> *Le champ possède des caractères non autorisé [a-z A-Z] Uniquement </sub></i></p>";
}





if(empty($taberror)){

        require "connexion_bdd.php";
        try {
$requete = $db->prepare("UPDATE produit SET Reference=:Reference, Libelle=:Libelle, Prix=:Prix, Stock=:Stock, Couleur=:Couleur, bloqué=:bloque, datemodif=:datemodif WHERE ID=".$ID);


$requete->bindValue(':Reference', $Reference, PDO::PARAM_STR);
$requete->bindValue(':Libelle', $Libelle, PDO::PARAM_STR);
$requete->bindValue(':Prix', $Prix, PDO::PARAM_INT);
$requete->bindValue(':Stock', $Stock, PDO::PARAM_INT);
$requete->bindValue(':Couleur', $Couleur, PDO::PARAM_STR);
$requete->bindValue(':bloque', $bloqué, PDO::PARAM_STR);
$requete->bindValue(':datemodif', $datemodif, PDO::PARAM_STR);


$requete->execute();




$requete->closeCursor();
}

// Gestion des erreurs
catch (Exception $e) {

        echo "La connexion à la base de données a échoué ! <br>";
        echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
}




header("Location: tableau.php");
exit;
}

else{
        header("Location: update_form.php?ID=$ID&Libelle=$Libelle&Reference=$Reference&Prix=$Prix&Stock=$Stock&Couleur=$Couleur&erreur0=$erreur0&erreur1=$erreur1&erreur2=$erreur2&erreur3=$erreur3&erreur4=$erreur4");
}

// Redirection vers la page index.php 

require "footer.php"
?>

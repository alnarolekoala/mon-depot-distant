
<?php

require "header.php";

$ID=$_POST['ID'];

require "connexion_bdd.php";
// Construction de la requête DELETE sans injection SQL
$requete = $db->prepare("DELETE FROM produit WHERE ID=:ID");

$requete->bindValue(':ID', $ID, PDO::PARAM_INT);

$requete->execute();
$requete->closeCursor();


header("Location: tableau.php");
exit;

require "footer.php"
?>
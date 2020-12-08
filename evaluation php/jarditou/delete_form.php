<?php
require "header.php";
require "connexion_bdd.php";

$ID=$_GET['ID'];


try {
$requete = "SELECT * FROM produit where ID=".$ID;
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

?>

<div> 
    <form action="delete_script.php" method="post">
        <input type="hidden" name="ID" value="<?=$row->ID?>">
        <img src="public/images/<?=$row->ID?>.jpg" alt='image2' title="image" height='auto' width='300' id="imagefix">
        <h1 style=" text-align: center; font-weight: 800;"><?= $row->Libelle?><h1>
            <p style="margin-left: 30%; margin-right: 30%; font-size: 25px; text-align: justify;"> Êtes vous sûr de vouloir supprimer <strong>"<?=$row->Libelle?>"</strong> de la base de données ?<p>
        
            <!-- <div class="form-check-inline"  style="border: 1px solid black;"> -->
        <a href='delete_script.php?ID=<?=$row->ID?>'><button type="submit"  class="btn btn-danger btn-lg" style="margin-left: 38%; border-radius: 0.7em;">Supprimer</button></a>
        <a href="tableau.php"><button type="button"  class="btn btn-success btn-lg" style="margin-left: 5%; border-radius: 0.7em;">Annuler</button><br><br></a>
        <!-- </div> -->

    </form>
</div>
    
   



<?php
require "footer.php"
?>










 
<!-- <footer>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark my-lg-1" id="barbas">
        <!-- Toggler/collapsibe Button -->
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
        </button>
       
        
        <div class="collapse navbar-collapse my-lg-2" id="navbarToggleExternalContent" >
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="navlink1" href="">Mention légales</a>
                </li>
                <li class="nav-item" id="navlink2">
                    <a id="horaire" class="nav-link"  href="">Horaires</a>
                </li>
                <li class="nav-item" id="navlink3">
                    <a class="nav-link" id="plan"  href="">Plan du site</a>
                </li>
            </ul>
        </div>   
    </nav>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html> --> 
<?php

require "header.php";
require "connexion_bdd.php";

?>

    <br>
  

<?php
try {
    $categorie=$_GET['categorie'];
    



$requete = "SELECT * FROM produit where categorie LIKE '$categorie'";
$result = $db->query($requete);
            
            
// $row = $result->fetch(PDO::FETCH_OBJ);

    
   






$nbLigne = $result->rowCount();
if ($nbLigne > 0) {      
    while ($row = $result->fetch(PDO::FETCH_OBJ))
        {

?>    
   
   <div id="debutTable" class="table-responsive">
   <div id="barre" class="col-12"><strong>Ajoutez au panier<img src="images/chariot.png" title="chariot" alt="panier" width="22px"></strong></div>
      <table class="table table-bordered col-12">
            <thead class="thead-light">
                <tr>
                     <th scope="col">Visuel</th>
                     <!-- <th scope="col">ID</th> -->
                     <th scope="col">Référence</th>
                     <th scope="col">Libéllé</th>
                     <th scope="col">Prix</th>
                     <th scope="col">Stock</th>
                     <!-- <th scope="col">Couleur</th> -->
                     <th scope="col">Ajout</th> 
                     <th scope="col">Description</th> 
                     <!-- <th scope="col">Bloqué</th> -->
                </tr>
            </thead>
            <tbody>






<tr>
                    <td class='table-secondary'  scope='row'><img src='images/<?=$row->ID?>.png' alt='image2' height='auto' width='110'></td>
                    <!-- <td class='table-secondary' scope='row'><?= $row->ID ?></td> -->
                    <td class='table-secondary' scope='row'><span id='reference'><?= $row->Reference ?></span></td>
                    <td class='table-secondary' scope='row' class='libelle'><a href='details.php?ID= <?= $row->ID ?>'><?= $row->Libelle ?></a></td>
                    <td class='table-secondary' scope='row' ><strong><?= $row->Prix ?>€</strong></td>
                    <td class='table-secondary' scope='row' ><?= $row->Stock ?></td>
                    <!-- <td class='table-secondary' scope='row'><?= $row->Couleur ?></td> -->
                    <td class='table-secondary' scope='row'><?= $row->ajout ?></td>
                    <td class='table-secondary' scope='row'><?= $row->modif ?></td>
                    <!-- <td class='table-secondary' scope='row'><span id="<?= $row->bloqué?>"><?php if( $row->bloqué == "bloqué"){echo $row->bloqué; } ?></span></td> -->
                </tr>
                        
                    </div>
                </div>
                    </div> 

                    </tbody>
        </table>
        
    </div>
</div>

    <?php
        }

}

$result->closeCursor();


 }
 catch (Exception $e) 
{

echo 'Erreur : ' . $e->getMessage() . '<br />';
echo 'N° : ' . $e->getCode();
die('Fin du script');

}
?> 



</body>



<?php
require "footer.php";


?>
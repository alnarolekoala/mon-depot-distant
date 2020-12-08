<?php
require "header.php"
?>
        <div class="container">
            <div class="row align-items-end">
       <div class="col-1"></div>        
     <div class="table-responsive col-10">
      <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                     <th scope="col">Photos</th>
                     <th scope="col">ID</th>
                     <th scope="col">Référence</th>
                     <th scope="col">Libéllé</th>
                     <th scope="col">Prix</th>
                     <th scope="col">Stock</th>
                     <th scope="col">Couleur</th>
                     <th scope="col">Ajout</th> 
                     <th scope="col">Modif</th> 
                     <th scope="col">Bloqué</th>
                </tr>
            </thead>
            <tbody>
             <?php
             require "connexion_bdd.php";
             
             try {
              
            
            
            $requete = "SELECT * FROM produit";
            $result = $db->query($requete);
            
            
            // $row = $result->fetch(PDO::FETCH_OBJ);
            
                
               
            
            
            
            
            
         
            $nbLigne = $result->rowCount();
            if ($nbLigne > 1) {      
                while ($row = $result->fetch(PDO::FETCH_OBJ))
                    {
 
 ?>         
 

         <div> 
                 <tr>
                    <td class='bg-warning' scope='row' width='20px'><img src='public/images/<?=$row->ID?>.jpg' alt='image2' height='auto' width='110'></td>
                    <td class='table-secondary' scope='row' width='15px'><?= $row->ID ?></td>
                    <td class='table-secondary' scope='row' width='30px'><span id='reference'><?= $row->Reference ?></span></td>
                    <td class='bg-warning' scope='row' class='libelle' width='20px'><a href='details.php?ID= <?= $row->ID ?>'><?= $row->Libelle ?></a></td>
                    <td class='table-secondary' scope='row' width='20px'><?= $row->Prix ?>€</td>
                    <td class='table-secondary' scope='row' width='20px' ><?= $row->Stock ?></td>
                    <td class='table-secondary' scope='row' width='20px'><?= $row->Couleur ?></td>
                    <td class='table-secondary' scope='row'  width='auto'><?= $row->ajout ?></td>
                    <td class='table-secondary' scope='row' width='20px'><?= $row->modif ?></td>
                    <td class='table-secondary' scope='row' width="20px"><span id="<?= $row->bloqué?>"><?php if( $row->bloqué == "bloqué"){echo $row->bloqué; } ?></span></td>
                </tr>
                        
        
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
            </tbody>
        </table>
    </div>
</div>
    <a href="add_form.php"><button type="button" id="bouton3" class="btn btn-danger btn-lg" style="margin-left: 50px; border-radius: 0.7em;">Ajouter un produit</button><br><br><a>
     
    </body>
    


<?php
require "footer.php";


?>
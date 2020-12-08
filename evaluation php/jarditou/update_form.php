<?php

require "header.php";
require "connexion_bdd.php";

?>
<?php
try {
    $ID=$_GET['ID'];


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
<form action="update_script.php" method="POST">
<img src="public/images/<?=$row->ID?>.jpg" alt='image2' title="image" height='auto' width='300' id="imagefix">

<div id='detail'> 
    
    <span> ID : </span><br><br>
    <input type='text' name="ID" value='<?=$row->ID?>' readonly class='form-control' aria-label="small">
    
    <br><span>Référence : </span><br>
    <input  type='text' name='Reference' class='form-control' id="ref" aria-label="small" value='<?php if( !empty($_GET['Reference'])){echo  $_GET['Reference'];} else {echo $row->Reference; }?>'   /><br> 
    <?php if( ! empty( $_GET['erreur0'] ) ) echo '    <p>', $_GET['erreur0'], '</p><style>#ref {border-color:red;}</style>' ?>
    <span>Catégorie : </span><br>
    <select class="form-control" name="sujet" readonly >
                    <option selected>Tondeuses à moteur thermique</option>
                    <option >blabla1</option>
                    <option >blabla2</option>
                    <option >blabla3</option></select> <br>
    <span>Libellé : </span><br>
    <input type='text' name='Libelle' class="form-control" aria-label="small" id="libelle" value='<?php if( !empty($_GET['Libelle'])){echo  $_GET['Libelle'];} else {echo $row->Libelle; }?>'  /> 
    <?php if( ! empty( $_GET['erreur1'] ) ) echo '    <p>', $_GET['erreur1'], '</p><style>#libelle {border-color:red;}</style>' ?>
    
    <br><span> Description : </span><br>
    <textarea class="form-control" id="textarea" rows="2" readonly>Description du produit</textarea>
    
    <br><span> Prix : </span><br>
    <input type='text' name='Prix' class="form-control" aria-label="small" id="prix" value='<?php if( !empty($_GET['Prix'])){echo  $_GET['Prix'];} else {echo $row->Prix; }?>'  /> 
    <?php if( ! empty( $_GET['erreur2'] ) ) echo '    <p>', $_GET['erreur2'], '</p><style>#prix {border-color:red;}</style>' ?>
    <br><span> Stock : </span><br>
    <input type='text' name='Stock' class="form-control" aria-label="small" id="stock" value='<?php if( !empty($_GET['Stock'])){echo  $_GET['Stock'];} else {echo $row->Stock; }?>'  /> 
    <?php if( ! empty( $_GET['erreur3'] ) ) echo '    <p>', $_GET['erreur3'], '</p><style>#stock {border-color:red;}</style>' ?>
    <br><span> Couleur : </span><br>
    <input type='text' name='Couleur' class="form-control" aria-label="small" id="couleur" value='<?php if( !empty($_GET['Couleur'])){echo  $_GET['Couleur'];} else {echo $row->Couleur; }?>'  /> 
    <?php if( ! empty( $_GET['erreur4'] ) ) echo '    <p>', $_GET['erreur4'], '</p><style>#couleur {border-color:red;}</style>'?>
    <br><span> Produit bloqué ? : </span><br>
    <div class="form-check-inline disabled">
    <input class="form-check-input" type="radio" name="bloque" id="oui" value="bloqué"  <?php if($row->bloqué == "bloqué") {echo "checked";}?>>
    <label class="form-check-label" for="oui">oui</label>
    </div>
    <div class="form-check-inline disabled">
    <input class="form-check-input" type="radio" name="bloque" id="non" value="NULL" <?php if($row->bloqué == NULL) {echo "checked";} ?>>
    <label class="form-check-label" for="non">non</label>
    </div><br><br>
    
    <span>Date d'ajout : </span><br>
    <input type='text' name='date' class="form-control" aria-label="small" readonly value='<?= $row->ajout ?>'  /> 
    <br><span>Date de modification : </span><br>
    <input type='text' name='datemodif' class="form-control" aria-label="small" readonly value='<?= date('Y-m-d H:i:s')?>'  /><br><br>
    </div>
   
    <div class="bouton" style="margin-left: 50px;">
    <a href='details.php?ID= <?= $row->ID ?>'><button type="button" id="bouton1" class="btn btn-secondary btn-lg" style ="border-radius: 0.7em;">Retour</button></a>
    <button type="submit" id="bouton2" class="btn btn-success btn-lg" style="margin-left: 30px; border-radius: 0.7em;">Enregistrer</button>
   
</div>
</form>






























<?php



require "footer.php";
?>
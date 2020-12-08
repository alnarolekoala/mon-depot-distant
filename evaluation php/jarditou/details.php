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

<img src="public/images/<?=$row->ID?>.jpg" alt='image2' title="image" height='auto' width='300' id="imagefix">
<div id='detail'> 
<span>ID : </span><br>

<input type='text' name='ID' class="form-control" aria-label="small" value='<?= $row->ID ?>' disabled='disabled' /> <br>
    <span>Référence : </span><br>
    <input  type='text' name='Reference' class='form-control' aria-label="small" value='<?= $row->Reference ?>' disabled='disabled' /><br> 
    <span>Catégorie : </span><br>
    <select class="form-control" name="sujet" disabled='disabled'>
                    <option selected>Tondeuses à moteur thermique</option>
    </select> <br>
    <span>Libellé : </span><br>
    <input type='text' name='libelle' class="form-control" aria-label="small" value='<?= $row->Libelle ?>' disabled='disabled' /> 
    <br><span> Description : </span><br>
    <textarea class="form-control" id="textarea" rows="2" readonly>
        Description du produit
    </textarea>
    <br><span> Prix : </span><br>
    <input type='text' name='prix' class="form-control" aria-label="small" value='<?= $row->Prix ?>' disabled='disabled' /> 
    <br><span> Stock : </span><br>
    <input type='text' name='stock' class="form-control" aria-label="small" value='<?= $row->Stock ?>' disabled='disabled' /> 
    <br><span> Couleur : </span><br>
    <input type='text' name='couleur' class="form-control" aria-label="small" value='<?= $row->Couleur ?>' disabled='disabled' /> 
    <br><span> Produit bloqué ? : </span><br>
    <div class="form-check-inline disabled">
    <input class="form-check-input" type="radio" name="oui" id="oui" value="option3"  <?php if($row->bloqué == "bloqué") {echo "checked";} else {echo "disabled";}?>>
    <label class="form-check-label" for="oui">oui</label>
    </div>
    <div class="form-check-inline disabled">
    <input class="form-check-input" type="radio" name="non" id="non" value="option3" <?php if($row->bloqué == NULL) {echo "checked";} else {echo "disabled";}?>>
    <label class="form-check-label" for="non">non</label>
    </div><br><br>
    <span>Date d'ajout : </span><br>
    <input type='text' name='date' class="form-control" aria-label="small" value='<?= $row->ajout ?>' disabled='disabled' /> 
    <br><span>Date de modification : </span><br>
    <input type='text' name='datemodif' class="form-control" aria-label="small" value='<?= $row->datemodif ?>' disabled='disabled' /><br><br>
    </div>
    <div class="bouton" style="margin-left: 50px;">
    <a href="tableau.php"><button type="button" id="bouton1" class="btn btn-secondary btn-lg" style ="border-radius: 0.7em;">Retour</button></a>
    <a href='update_form.php?ID= <?= $row->ID ?>'><button type="submit" id="bouton2" class="btn btn-warning btn-lg" style="margin-left: 30px; border-radius: 0.7em;">Modifier</button><a>
    <a href="delete_form.php?ID= <?= $row->ID ?>"><button type="button" id="bouton3" class="btn btn-danger btn-lg" style="margin-left: 30px; border-radius: 0.7em;">Supprimer</button><br><br>
    
   
</div>






























<?php



require "footer.php";
?>
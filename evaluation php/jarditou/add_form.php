<?php

require "header.php";
require "connexion_bdd.php";


?>




<div class='col-2'></div>
<form action="add_script.php" method="POST" enctype="multipart/form-data">

<div id="ajou" class="col-10">
<form class="md-form">
  <div class="file-field">
    <div class="mb-4">
      <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
        class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar" width="120px">
    </div>
    <div class="d-flex justify-content-left">
      <div class="btn btn-mdb-color btn-rounded float-left">
        <span>Ajoutez une photo</span>
        <input type="file" name="img">
      </div>
    </div>
  </div>
  <span>ID : </span>
  <input type='text' name="ID" value='' readonly class='form-control' aria-label="small">
  <br><br>
  <span>Référence : </span>
  <input type='text' name="Reference" id="ref" class='form-control' ID='Reference' aria-label="small" value="<?php if(isset($_GET['Reference'])) {echo $_GET['Reference']; } ?>">
  <?php if( ! empty( $_GET['erreur0'] ) ) echo '    <p>', $_GET['erreur0'], '</p><style>#ref {border-color:red;}</style>' ?>
  <br><br>
  <span>Libéllé : </span>
  <input type='text' name="Libelle" id="libelle" class='form-control' ID="Libelle" aria-label="small" value="<?php if(isset($_GET['Libelle'])) {echo $_GET['Libelle']; } ?>">
  <?php if( ! empty( $_GET['erreur1'] ) ) echo '    <p>', $_GET['erreur1'], '</p><style>#libelle {border-color:red;}</style>' ?>
  <br><br>
  <span>Prix : </span>
  <input type='text' name='Prix' id="prix" class="form-control" aria-label="small" value="<?php if(isset($_GET['Prix'])) {echo $_GET['Prix']; } ?>">
  <?php if( ! empty( $_GET['erreur2'] ) ) echo '    <p>', $_GET['erreur2'], '</p><style>#prix {border-color:red;}</style>' ?>
  <br><br>
  <span>Stock : </span>
  <input type='text' name='Stock' id="stock" class='form-control' aria-label="small" value="<?php if(isset($_GET['Stock'])) {echo $_GET['Stock']; } ?>">
  <?php if( ! empty( $_GET['erreur3'] ) ) echo '    <p>', $_GET['erreur3'], '</p><style>#stock {border-color:red;}</style>' ?>
  <br><br>
  <span>Couleur : </span>
  <input type="text" name="Couleur" id="couleur" class="form-control" aria-label="small" value="<?php if(isset($_GET['Couleur'])) {echo $_GET['Couleur']; } ?>">
  <?php if( ! empty( $_GET['erreur4'] ) ) echo '    <p>', $_GET['erreur4'], '</p><style>#couleur {border-color:red;}</style>'?>
  <br><br>
  <span>Date d'ajout : </span>
  <input type='text' name='ajout' class="form-control" aria-label="small" value="<?= date('Y-m-d')?>" readonly>
  <br><br>
  <span>Date de modification : </span>
  <input type="text" name="datemodif" class="form-control" aria-label="small" value="" readonly>
  <br><br>
  <span>Produit bloqué ?</span>
  <div class="form-check-inline disabled">
    <input class="form-check-input" type="radio" name="bloque" id="oui" value="bloqué">
    <label class="form-check-label" for="oui">oui</label>
    </div>
    <div class="form-check-inline disabled">
    <input class="form-check-input" type="radio" name="bloque" id="non" checked value="">
    <label class="form-check-label" for="non">non</label>
    <br><br>
    </div>

   <div class="form-check-inblock">
       <br>
    <a href='add_script.php'><button type="submit" id="bouton2" name="valider" class="btn btn-success btn-lg" style="border-radius: 0.7em;">Enregistrer</button>
    <a href='tableau.php'><button type="button" id="bouton1" class="btn btn-secondary btn-lg" style ="margin-left: 50px; border-radius: 0.7em;">Retour</button></a>
    <br>
    </form>
</div>
<br>





<?php

 require "footer.php"
?>
<?php

require "header.php"

?>
        
      
    <p>* Ces zones sont obligatoires</p>

    <p class="h1">Vos coordonnées</p>
    <div class="col-12">
      <form id="form" action="http://bienvu.net/script.php" name="form" method="post" onsubmit="return checkForm(this)">
        <div class="form-group">
          <label for="nom">Nom*</label>
          <input  type="nom" name="nom" class="form-control" id="nom" placeholder="Veuillez saisir votre nom">
        </div>
        <div class="form-group">
          <label for="prenom">Prénom*</label>
          <input  type="prenom" name="prenom" class="form-control" id=prenom placeholder="Veuillez saisir votre prénom">
          </div>
          <div class="form-group">
            <label for="sexe">Sexe*</label>
          </div>
            <div class="form-check form-check-inline form-group">
                <input class="form-check-input" type="radio" name="sexe" id="inlineRadio1" value="option1" >
                <label class="form-check-label" for="inlineRadio1">Féminin</label>
             </div>
            <div class="form-check form-check-inline" >
                <input class="form-check-input" type="radio" name="sexe" id="inlineRadio2" value="option2">
             <label class="form-check-label" for="inlineRadio2">Masculin</label>
             </div>
             <form>
                <div class="form-group">
                    <label for="date">Date de naissance*</label>
                    <input  type="date" name="date" class="form-control" id="date">     
                </div>
                <div class="form-group">
                    <label for="postal">Code postal*</label>
                    <input  type="cp" name="postal" class="form-control" id="postal">
                  </div>
                  <div class="form-group">
                <label for="adresse">Adresse</label>
                    <input type="adress" name="adresse" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="ville" name="ville" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="mail">Email*</label>
                    <input  type="mail" class="form-control" name="mail" id="mail" placeholder="dave.loper@afpa.fr">
                  </div>
                  <p class="h1">Votre demande</p>
                  <div class="form-group">
                  <label for="sujet">Sujet</label>
                  <select class="form-control" name="sujet">
                    <option selected>Veuillez sélectionner un sujet</option>
                    <option>Mes commandes</option>
                    <option>Question sur un produit</option>
                    <option>Réclamation</option>
                    <option>Autres</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="question">Votre question* :</label>
                    <textarea  class="form-control" id="question" name="question" rows="2"></textarea>
                  </div>
                  <div class="form-group form-check">
                    <input class="form-check-input" type="checkbox" name="check" value="" id="defaultCheck1" > 
                    <label class="form-check-label" for="check">
                    * J'accepte le traitement informatique de ce formulaire. 
                    </label>
              
                  <div class="form-group">
                    <button type="submit" class="btn btn-secondary" id="submit">Envoyer</button> <button type="reset" class="btn btn-secondary">Annuler</button>
                  </div>


            </form>
          </div>
          </div>

<?php
require "footer.php"

?>
</body>
</html>
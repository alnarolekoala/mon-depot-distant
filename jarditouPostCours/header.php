<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<title>jarditou</title>
</head>
<body>
<header>
<div id="contient" class="container-fluid">
  <div class="col-sm-11 row" id="img"> 
  <img class="col-sm-2" src="images/jarditou_logo.png" alt="logojarditou" title="logo_de_jarditou" width="250px">
  <span class="offset-sm-7 col-3 align-self-center" >Tout sur le jardin</span>
</div>
<?php
if (isset($_COOKIE['login']))
{
session_name('connexion');
session_start(); 

$_SESSION['login'] = $_COOKIE['login'];
}
if(isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['pass']))
{
      require "connexion_bdd.php";


      $login=$_POST['login'];
      $pass=$_POST['pass'];
      //  Récupération de l'utilisateur et de son pass hashé
      $req = $db->prepare("SELECT ID, pass FROM membre WHERE logine ='$login'");
      $req->execute(array(
          'login' => $login));
      $resultat = $req->fetch();

      // Comparaison du pass envoyé via le formulaire avec la base


      if (!$resultat)
      {
          
          $erreur = 'Mauvais identifiant ou mot de passe !';
      }
      else
      {
          if ($_POST['pass'] == $resultat['pass']) {
            session_name('connexion');
              session_start();
              $_SESSION['ID'] = $resultat['ID'];
              $_SESSION['login'] = $login;
              setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);
              // var_dump($login);
              // header("Location: index.php");
          }
          else {
              $erreur = 'Mauvais identifiant ou mot de passe !';
          }
      }
}
?>
  <div id="divnav">
    <nav id="nav1" class="navbar navbar-expand-lg navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">Acceuil</a>

      <div class="collapse navbar-collapse" id="navba">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="tableau.php"><img src="images/bandeau.jpg" alt="promo" title="promotion" width="150px"> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><span class="sr-only">(current)</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="connexion.php" method="POST" id="deco">
        
        <!-- Déconnexion de l'espace membre -->
        <?php 
if (isset($_SESSION['ID']) && isset($_SESSION['login']))
{
    echo "<span id='connect' style='color: orange; font-size: 16px; margin-right: 5px;' >Vous êtes connecté en tant que : <strong>" .$_SESSION['login'].  "</strong></span><a href='connexion.php' ><button class='btn btn-outline-success my-2 my-sm-0' type='button'>Déconnexion</button></a>&nbsp";
}
else {

// connexion a l'espace membre et bouton inscription
      ?>
        </form>
        <form class="form-inline my-2 my-lg-0" action="index.php" method="POST" id="co">
          <input class="form-control mr-sm-2" name="login" type="text" placeholder="login" aria-label="Search">
          <input class="form-control mr-sm-2" type="password" name="pass" placeholder="Mot de passe" aria-label="Search">
          
          
          <div id="erreur" style=""><strong><?php if (isset($erreur)) {
            echo $erreur;
        }?></strong>
        </div>
          
          
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Connexion</button>&nbsp
        
        </form>
        <button class="btn btn-outline-success my-2 my-sm-0" onclick=window.location.href="inscription.php" type="button">Inscription</button>
<?php 
      }
 ?>
      </div>
    </nav>
  </div>
</div>
<div>
  <img class="col-12" src="images/promotion.jpg" title="promo" alt="jardi">
</div>
</header>

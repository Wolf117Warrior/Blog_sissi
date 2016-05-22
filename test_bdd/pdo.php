<?php /* fichier cnam/nfa017/2015regc3-bdd/pdo.php - 20160509-PBO */
/* Objectif : Utilisation d'une BDD avec PDO */

  include("inc/header.inc.php"); headerinclude("Utilisation d'une BDD avec PDO"); ?>

<!-- Le formulaire ========================================================== -->
      <section><?php if(isset($_POST['message'])){ echo 'message : '.$_POST['message']; } ?>
      </section>

<!-- affichage resultat -->
      <section><?php 
        $requete="SELECT ".$_POST['message']." FROM recette";
        include("inc/affichepdo.inc.php"); affichepdo($_POST['message'],'',$requete); ?>
      </section>

<nav><a href="index.php">Retour Accueil</a></nav>


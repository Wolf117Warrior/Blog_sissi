<?php /* fichier cnam/nfa017/2015regc3-bdd/mysqli.php - 20160509-PBO */
/* Objectif : Utilisation d'une BDD avec mysqli */

  include("inc/header.inc.php"); headerinclude("Utilisation d'une BDD avec mysqli"); ?>

<!-- Le formulaire ========================================================== -->

      <section><?php 
        if(isset($_POST['message'])){ echo 'message : '.$_POST['message']; } ?>
      </section>

      
<!-- affichage resultat -->

      <section><?php 
        include("inc/affichemysqli.inc.php"); affichemysqli($_POST['message']); ?>
      </section>
<nav><a href="index.php">Retour Accueil</a></nav>


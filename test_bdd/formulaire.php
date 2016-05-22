<?php /* fichier cnam/nfa017/2015regc3-bdd/formulaire.php - 20160509-PBO */
/* Objectif : Utilisation d'un formulaire simple */

  include("inc/header.inc.php"); headerinclude("Utilisation d'un formulaire simple"); ?>

<section><!-- Le formulaire ========================================================== --><?php 
  if(isset($_POST['message'])){ echo 'message : '.$_POST['message']; } ?>
</section>
<nav><a href="index.php">Retour Accueil</a></nav>


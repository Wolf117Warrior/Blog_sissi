<?php /* fichier cnam/nfa017/2015regc3-bdd/pdo.php - 20160509-PBO */
/* Objectif : Utilisation d'une BDD avec PDO */
    session_start();
  include("inc/header.inc.php"); headerinclude("Utilisation d'une BDD avec PDO");
  include("inc/affichepdo.inc.php"); ?>
 
<!-- Le formulaire ========================================================== -->
      <section><?php 
        switch($_GET['req']) {
            case 'req1': affichepdo('recette_nom','',$_SESSION['req1']); break;
            case 'req2': affichepdo('recette_id','recette_nom',$_SESSION['req2']); break;  
            case 'req3': affichepdo('recette_nom','recette_categorie_id',$_SESSION['req3']); break;  
            case 'req4': affichepdo('recette_nom','categorie_nom',$_SESSION['req4']); break;  
            default : ?><p>problème</p><?php break; 
        } ?>
      </section>
<nav><a href="index.php">Retour Accueil</a></nav>


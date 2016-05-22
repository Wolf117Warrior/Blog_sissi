<?php /* fichier cnam/nfa017/regb/affichepdo.inc.php - 20160320-PBO */

  function affichepdo($champsselect1,$champsselect2,$requete) {

/* variables ============================================================================ */
    /* $requete : requete a executer */
    /* $champsselect1 : 1er champ à afficher */
    /* $champsselect2 : 2e  champ à afficher */
     
  
/* debug ============================================================================== */
    echo 'champ1 : '.$champsselect1.'<br/>';
    echo 'champ2 : '.$champsselect2.'<br/>';
    echo 'requete : '.$requete.'<br/>';
     
/* connexion BDD ====================================================================== */
    include("inc/connexionpdo.inc.php"); $con=connexionpdo();
     
/* resultat requete SQL =============================================================== */
    $resultat = $con->query($requete);
      
/* Affichage de toutes les données demandées par la requête =========================== */
    while($donnees = $resultat->fetch()) { 
        echo $donnees[$champsselect1];
        if($champsselect2) {echo ' | '.$donnees[$champsselect2];  } ?><br/><?php
    } ?><br/><?php
  }
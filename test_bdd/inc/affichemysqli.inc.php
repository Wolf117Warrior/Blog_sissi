<?php /* fichier cnam/nfa017/regb/affichemysqli.inc.php - 20160320-PBO */

  function affichemysqli($champ) {

/* variables ============================================================================ */
     $requete="SELECT ".$champ." FROM recette";
  
/* debug ============================================================================== */
     echo 'champ : '.$champ.'<br/>';
     echo 'requete : '.$requete.'<br/>';
     
/* connexion BDD ====================================================================== */
    include("inc/connexionmysqli.inc.php"); $con=connexionmysqli();
     
/* resultat requete SQL =============================================================== */
    $resultat = mysqli_query($con, $requete);
      
/* Affichage de toutes les données demandées par la requête =========================== */
    while($donnees = @mysqli_fetch_row($resultat)) {
        foreach ($donnees as $don) { echo $don.' | ' ; }; ?><br/><?php
    }
  }

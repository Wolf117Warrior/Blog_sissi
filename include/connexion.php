<?php /* fichier cnam/nfa017/regb/connexion.inc.php - 20160320-PBO */

  function connexionbdd() {
    /* DECLARATION des variables de connexion à la BDD ================================== */
      $serveur = 'localhost';       $loginserveur = 'root';   $mdpserveur = '';
      $nombdd  = 'blog_sissi';

    /* CONNEXION serveur, définition du charset, connexion BDD, requete SQL ============== */
      $con = mysqli_connect($serveur, $loginserveur, $mdpserveur)
        or die("Impossible de se connecter : " . mysql_error()); /* affichage erreur si pb */
      $con->set_charset('utf8');
      mysqli_select_db($con, $nombdd);
      return $con ;

      /* Affichage de toutes les données demandées par la requête =========================
      while($donnees = @mysqli_fetch_row($resultat)) {
          foreach ($donnees as $don) { echo $don.' | ' ; }; ?><br/><?php
      }*/
  }

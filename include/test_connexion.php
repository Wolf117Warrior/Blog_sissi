<?php /* fichier barandon/connexion.php - 20160320-PBO */

/* entete HTML ======================================================================== */ ?>
  <!DOCTYPE html><html>
  <head><title><?php echo $title; ?></title>
        <meta charset='UTF-8' />
  </head>
  <body><h1>Test connexion BDD</h1><?php

    /* Variables de connexion à la BDD ================================== */
      $serveur = 'localhost';       $loginserveur = 'root';   $mdpserveur = '';
      $nombdd  = 'cnam_barandon_projetnfa083'; /*PBO : pas de tirets */

    /* CONNEXION serveur, définition du charset, connexion BDD, requete SQL ============*/
      $con = mysqli_connect($serveur, $loginserveur, $mdpserveur)
        or die("Impossible de se connecter : " . mysql_error()); /* affichage erreur si pb */
      $con->set_charset('utf8');
      mysqli_select_db($con, $nombdd);

/* variables ==========================================================================*/
     /*$req1="SELECT titre_article FROM articles";*/
    /* $req2="SELECT * FROM articles";*/
     $req3="SELECT titre, chapo, contenu FROM blog_article WHERE page='index.php' ORDER BY id ASC";

/* debug ============================================================================== */
     echo 'requete : '.$req1.'<br/>';

/* resultat requete SQL =============================================================== */
    $res1 = mysqli_query($con, $req1);

/* Affichage de toutes les données demandées par la requête =========================== */
    while($donnees = @mysqli_fetch_row($res1)) {
        foreach ($donnees as $don) { echo $don.' | ' ; }; ?><br/><?php
    }

/* idem pour la requête 2 =============================================================
     echo '<br/><br/>requete2 : '.$sql2.'<br/>';
    $res2 = mysqli_query($con, $sql2);
    while($donnees = @mysqli_fetch_row($res2)) {
        foreach ($donnees as $don) { echo $don.' | ' ; }; ?><br/><?php
    }

/* idem pour la requête 3 ============================================================= */
     echo '<br/><br/>requete3 : '.$req3.'<br/>';
    $res3 = mysqli_query($con, $req3);

    while ($row = mysqli_fetch_array($res3, MYSQLI_ASSOC)) { ?>
    <section><h3><?php echo $row['titre']; ?></h3>
    <p><?php echo $row['chapo']; ?></p></section> <?php  } ?>

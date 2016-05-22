<?php /* fichier cnam/nfa017/2015regc3-bdd/inc/connexionpdo.inc.php - 20160320-PBO */

  function connexionpdo() {

/* Variables de connexion à la BDD ================================== */
    $serveur = 'localhost';       $loginserveur = 'iliet_blog';   $mdpserveur = '@m0uR27&M3lo';
    $nombdd  = 'ilietec121307fr27213_blog';


/* CONNEXION serveur, définition du charset, connexion BDD, requete SQL ============== */

    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES utf8';
    $con = new PDO('mysql:host='.$serveur.';dbname='.$nombdd, $loginserveur, $mdpserveur, $pdo_options);   // Connexion à la BDD
    return $con; /* pour ré utiliser l'identifiant de connexion pour executer les requetes */
  } ?>

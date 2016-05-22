<?php /* fichier cnam/nfa017/2015regc3-bdd/form.php - 20160509-PBO */
/* variable : $_GET['destiantion'] : fichier php avec formulaire */

  include("inc/header.inc.php"); headerinclude("Formulaire"); ?>

<form action="<?php echo $_GET['destination'].".php"; ?>" method="post">
    <p>Message <input type="textarea" name="message" id="message" /><br />
         <input type="submit" value="Envoyer" />
    </p>
</form>
<nav><a href="index.php">Retour Accueil</a></nav>
<?php
  // Démarrage ou restauration de la session
  session_start();
  // Réinitialisation du tableau de session
  // On le vide intégralement
  $_SESSION = array();
  // Destruction de la session
  session_destroy();
  // Destruction du tableau de session
  unset($_SESSION);
?>
<!doctype html>
<html class="no-js" hreflang="fr">
    <!-- Entete HTML -->
    <?php include("./include/head.php"); ?>

<body>
    <!-- Menu de la page -->
    <?php include("./include/header.php"); ?>

    <!-- Corps de la page -->
    <div class="main-container">
        <div class="main wrapper clearfix">
            <article>
                Vous êtes déconnecter
            </article>

    <!-- Bandeau de la page -->
    <?php include("./include/sidebar.php"); ?>

        </div> <!-- #main -->
    </div> <!-- #main-container -->

    <!-- Pieds de la page -->
    <?php include("./include/footer.php"); ?>

    <!-- Scripts -->
    <?php include("./include/scripts.php"); ?>

</body>
</html>
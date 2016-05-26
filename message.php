<?php session_start(); ?>

<!doctype html>
<html class="no-js" lang="fr">
    <!-- Entete HTML -->
    <?php include("./include/head.php"); ?>

<body>
    <!-- Menu de la page -->
    <?php include("./include/header.php"); ?>
    
    <!-- Corps de la page -->
    <div class="main-container">
        <div class="main wrapper clearfix">
            <article>
                <p>Bonjour,</p>
                <p><?php if (isset($_POST['nom'])) { echo 'Votre nom et prénom sont '.$_POST['nom']; }?></p>
                <p><?php if (isset($_POST['mail'])) { echo 'Votre mail que vous avez utilisé : '.$_POST['mail']; }?></p>
                <p><?php if (isset($_POST['demande'])) { echo 'Vous avez indiqué que votre message concerne '.$_POST['demande']; }?></p>
                <p><?php if (isset($_POST['message'])) { echo 'Voici donc le contenu de votre message : '.$_POST['message']; }?></p>
                <!-- Préparation de la variable qui affichera la date envoi du formulaire dans le mail.-->
                <?php date_default_timezone_set('Europe/Paris');
                $timestamp = time();?>
            </article>

                <!-- Bandeau de la page -->
                <?php include("./include/sidebar.php"); ?>

        </div> <!-- #main -->
    </div> <!-- #main-container -->

    <!-- Pieds de la page -->
    <?php include("/include/footer.php"); ?>
    
    <!-- Scripts -->
    <?php include("./include/scripts.php"); ?>

</body>
</html>
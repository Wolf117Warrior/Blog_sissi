<?php include("./include/connexion.php"); $con = connexionbdd() ;
$req3="SELECT titre, chapo, contenu, page FROM blog_article WHERE page = 'index.php' ORDER BY id ASC";
$res3 = mysqli_query($con, $req3);?>

<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['login'])) 
{
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: login.php');
  exit();
}
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
                 <?php
    // Ici on est bien loggué, on affiche un message
    echo 'Bienvenue ', $_SESSION['login'];
  ?>
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
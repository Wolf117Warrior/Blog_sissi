<?php include("./include/connexion.php"); $con = connexionbdd() ;
$req3="SELECT titre, chapo, contenu, page FROM blog_article WHERE page<>'index.php' ORDER BY id ASC";
$res3 = mysqli_query($con, $req3);?>

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
                <?php while ($row = mysqli_fetch_array($res3, MYSQLI_ASSOC)) { ?>
                <h2><?php echo $row['titre']; ?></h2>
                <p><?php echo $row['chapo']; ?></p>
                <a href="<?php echo $row['page']; ?>">Lien vers <?php echo $row['titre']; ?></a>
                <?php  } ?>
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

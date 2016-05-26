<?php session_start(); ?>

<?php include("./include/connexion.php"); $con = connexionbdd() ;
$req3="SELECT titre, chapo, contenu, page FROM blog_article WHERE page = 'index.php' ORDER BY id ASC";
$res3 = mysqli_query($con, $req3);?>

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
                <?php while ($row = mysqli_fetch_array($res3, MYSQLI_ASSOC)) { ?>
                <h2><?php echo $row['titre']; ?></h2>
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Georg_Raab_002.jpg" alt="Sissi de Wittelsbach" style="width:290px;height:350px;">
                <p><?php echo $row['contenu']; ?></p> <?php  } ?>
                <a href="https://fr.wikipedia.org/wiki/%C3%89lisabeth_en_Bavi%C3%A8re#Duchesse_en_Bavi.C3.A8re">Source</a></br>
                <a href="https://commons.wikimedia.org/wiki/File:Armoiries_d_Elisabeth_de_Baviere_Imperatrice_d'Autriche-Hongrie.svg">Source du logo et favicon</a></br>
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

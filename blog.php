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
                            <h3>L'Impératrice d'Autriche</h3>

                            <a href="./article/article_1.php">Lien vers l'article</a>

                            <h3>La Reine de Hongrie</h3>

                            <a href="./article/article_2.php">Lien vers l'article</a>

                            <h3>Les voyage de Sissi</h3>

                            <a href="./article/article_3.php">Lien vers l'article</a>

                            <h3>Une Impératrice Assassinée</h3>

                            <a href="./article/article_4.php">Lien vers l'article</a>
                     </article>

                            <!-- Bandeau de la page -->
                            <?php include("./include/sidebar.php"); ?>
                    </div> <!-- #main -->
        </div> <!-- #main-container -->

        <!-- Pieds de la page -->
        <?php include("./include/footer.php"); ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>

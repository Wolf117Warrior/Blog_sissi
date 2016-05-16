<!doctype html>
<html class="no-js" lang="fr">
    <!-- Entete HTML -->
    <?php include("./include/head.php"); ?>

    <body>
        <!-- Menu de la page -->
        <?php include("./include/header.php"); ?>

        <div class="main-container">
            <div class="main wrapper clearfix">
                <!-- Corps de la page -->
                <article>

                  <h3>Remplissez ce formulaire pour pouvoir nous contacter.</h3>
                  <form method="post" action="mailto:emilien.locatelli@tech-blog.fr" enctype="text/plain">

                    Nom et prénom : <input type="text" name="nom" maxlength="30"/><br />
                      <input type="radio" name="situation" id="situation" value="1" cheked><br>
                      <input type="radio" name="situation" value="2"><br>
                      <input type="radio" name="situation" value="3"><br>



                    <input type="submit" value="OK" />


                  </form>

                </article>
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <!-- Pieds de la page -->
        <?php include("./include/footer.php"); ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>

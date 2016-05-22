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
                <h3>Remplissez ce formulaire pour pouvoir nous contacter.</h3>
                <form method="post" action="message.php" >
                    <p>Nom et prénom : <input type="text" name="nom" maxlength="50" required/><br /></p>
                    <p> Type de votre demande : <br>
                        <input type="radio" name="demande" value="Demande de contact">Demande de contact<br>
                        <input type="radio" name="demande" value="Demande d'information">Demande d'information<br>
                        <input type="radio" name="demande" value="Suggestion d'amélioration">Suggestion d'amélioration<br></p>
                    <p>Votre message : <br><textarea  type="textarea" name="message" rows="8" cols="45" required></textarea></p>
                    <p>Votre email : <input type="email" name="mail" required/></p>
                        <input type="reset" value="Effacer" /> <input type="submit" value="OK" /><br>
                </form>
            </article>
            <article>
                <?php include("/include/carte.php"); ?>
            </article>
        </div> <!-- #main -->
    </div> <!-- #main-container -->

    <!-- Pieds de la page -->
    <?php include("/include/footer.php"); ?>

    <!-- Scripts -->
    <?php include("./include/scripts.php"); ?>

</body>
</html>
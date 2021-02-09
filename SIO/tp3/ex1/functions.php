<?php 
function getHeader() {  ### Il s'agit d'une fonction "classique" a déclaré la parenthése représente les paramétres a appliquer, sinon a laisser vide
    $startSession = session_start(); ### sert a démaré la session, c'est important a déclaré 
    $_SESSION['name'] = $_POST['name']??0;  ### permet de définir la variable et l'associé a l'id "nom" ainsi que la méthode utlisé pour l'appeller
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page de test de session</title>
    </head>
    <body>

<?php }
function getFooter() { ?>
    </body>
    </html>
<?php } ?>


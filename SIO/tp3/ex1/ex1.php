<?php
include_once("functions.php");
getHeader();
?>
<form method="post" action="result_ex1.php">
    <label for="name">Nom :<br></label>
    <input type="text" name="name" id="name" required="true">
    <input type="submit" name="valider" value="Valider" id="valider">
</form>
<?php
getFooter();
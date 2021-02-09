<?php
include_once("functions.php");
getHeader();
    echo $_SESSION['name'] . "<br>";
    var_dump($_SESSION);
getFooter();
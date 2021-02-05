<?php
    include ("php/funciones.php");
    $var = $_REQUEST['number'];

    header("location: index.php ?number=$var");
?>
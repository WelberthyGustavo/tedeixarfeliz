<?php 
    $host = "sql302.epizy.com";
    $user = "epiz_27643976";
    $pass = "01KlTqUvPk";
    $banco = "epiz_27643976_comentarios";

    $link = mysqli_connect($host, $user, $pass) or die(mysqli_error());
    mysqli_select_db($link, $banco) or die(mysqli_error());

?>

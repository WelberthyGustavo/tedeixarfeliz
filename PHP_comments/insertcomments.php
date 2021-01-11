<?php
  include "connection.php" 
?> 
<?php
    htmlspecialchars(strip_tags(Var_dump($_POST)));
    $nome = htmlspecialchars(strip_tags($_POST["nome"]));
    $comentario = htmlspecialchars(strip_tags($_POST["comentario"]));
?>
<?php
    $insert = "INSERT INTO comentarios(nome, comentario) VALUES ('$nome','$comentario')";
    $query = mysqli_query($link ,$insert);
    if($query)(header("Location: ../#Mensagens"));
?>
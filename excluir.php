<?php
require 'config.php';

$id_usuario = filter_input(INPUT_GET, 'id_usuario');

if($id_usuario){
    $sql = $pdo->prepare("DELETE FROM usuario WHERE id_usuario = :id_usuario");
    $sql->bindValue(':id_usuario',$id_usuario);
    $sql->execute();
}

header("location: index1.php");

?>
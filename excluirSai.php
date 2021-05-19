<?php
require 'assets/dataBase/config.php';

$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("DELETE FROM saidas WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    header('Location: vizualizarGastos.php');
}
else{
    header('Location: vizualizarGastos.php');
    exit;
}
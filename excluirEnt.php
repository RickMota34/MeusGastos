<?php
require 'assets/dataBase/config.php';

$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("DELETE FROM entradas  WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    header('Location: verEntrada.php');
}
else{
    header('Location: verEntrada.php');
}

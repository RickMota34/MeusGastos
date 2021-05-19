<?php
require 'assets/dataBase/config.php';

$id = filter_input(INPUT_POST, 'id');
$origem = filter_input(INPUT_POST, 'origem');
$valor = filter_input(INPUT_POST, 'valor');
$dia = filter_input(INPUT_POST,'dia');

if($id && $origem && $valor && $dia){

    $sql = $pdo->prepare("UPDATE entradas SET origem = :origem, valor = :valor, dia = :dia WHERE id = :id");
    $sql->bindValue(':origem', $origem);
    $sql->bindValue(':valor', $valor);
    $sql->bindValue(':dia', $dia);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: verEntrada.php");
    exit;
}
else{
    header("Location: editarEntrada.php");
}
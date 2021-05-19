<?php
require 'assets/dataBase/config.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$dia = filter_input(INPUT_POST, 'dia');
$valor = filter_input(INPUT_POST, 'valor');

if($id && $nome && $dia && $valor){

    $sql = $pdo->prepare("UPDATE saidas SET nome = :nome, dia = :dia, valor = :valor WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':dia', $dia);
    $sql->bindValue(':valor', $valor);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: vizualizarGastos.php");
    exit;

}
else{
    header("Location: inserir.php");
}
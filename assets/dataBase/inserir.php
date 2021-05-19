<?php
require 'config.php';

$origem = filter_input(INPUT_POST, 'origem');
$dia = filter_input(INPUT_POST, 'dia');
$valor = filter_input(INPUT_POST, 'valor');
$id_entrada = filter_input(INPUT_POST, 'id_entrada');

if($origem && $dia) {

    $sql = $pdo->prepare("INSERT INTO entradas (origem, dia, valor, id_entrada) VALUES (:origem, :dia, :valor, :id_entrada)");
    $sql->bindValue(':origem', $origem);
    $sql->bindValue(':dia', $dia);
    $sql->bindValue(':valor', $valor);
    $sql->bindValue(':id_entrada', $id_entrada);
    $sql->execute();

    header('Location: ../../verEntrada.php');
    exit;

}else{
    header('Location: ../../inserir.php');
    exit;
}
?>
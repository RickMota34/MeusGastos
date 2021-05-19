<?php
//conexão com banco de dados
require 'config.php';
//definindo variável
$nome = filter_input(INPUT_POST, 'nome');
$dia = filter_input(INPUT_POST, 'dia');
$valor = filter_input(INPUT_POST, 'valor');
$id_saida = filter_input(INPUT_POST, 'id_saida');

if($nome && $dia && $valor && $id_saida) {
  // inserindo dados
  $sql = $pdo->prepare("INSERT INTO saidas (nome, dia, valor, id_saida) VALUES (:nome, :dia, :valor, :id_saida)");
  $sql->bindValue(':nome', $nome);
  $sql->bindValue(':dia', $dia);
  $sql->bindValue(':valor', $valor);
  $sql->bindValue(':id_saida', $id_saida);
  $sql->execute();
  header('Location: ../../vizualizarGastos.php');
  exit;
  
}
else{
  header('Location: ../../index.php');
  exit;
}
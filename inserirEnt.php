<?php
//conexão com banco de dados
require 'assets/dataBase/config.php';
//definindo variável
require_once 'dao/contasMysql.php';
$contasDao = new contasMysql($pdo);

$nome = filter_input(INPUT_POST, 'nome');
$dia = filter_input(INPUT_POST, 'dia');
$valor = filter_input(INPUT_POST, 'valor');
$id_saida = filter_input(INPUT_POST, 'id_saida');

if($nome && $dia && $valor && $id_saida) {
  // inserindo dados
  $novoGasto = new Saida();
  $novoGasto->setNome($nome);
  $novoGasto->setDia($dia);
  $novoGasto->setValor($valor);
  $novoGasto->setId_saida($id_saida);

  $contasDao->adicionar($novoGasto);

  header('Location: vizualizarGastos.php');
  exit;
  
}
else{
  header('Location: index.php');
  exit;
}
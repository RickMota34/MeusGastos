<?php
require 'assets/dataBase/config.php';

   $lista = [];
   $sql = $pdo->query("SELECT * FROM entradas ORDER BY dia DESC");
   if($sql->rowCount() > 0){
      $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
   }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/estyle.css">
    <link rel="shortcut icon" href="assets/img/cifrao.png">
    <title>Vizualizar Entrada</title>
</head>
<body>
    <div class="top-titulo">
        <h4>Visualizar Entradas</h4>
    </div>
    <input type="checkbox" id="check" style="display:none">
            <label for="check">
                <div class="botao">
                    <span class="hamburguer"></span>
                </div>
            </label>
        <div class="barra">
            <nav>
            <a href="verMeses.php"><div class="link">Visualizar Meses</div></a>
            <a href="vizualizarGastos.php"><div class="link">Visualizar Saídas</div></a>
            <a href="verDebBerna.php"><div class="link">Visualizar Deb. Berna</div></a>
            <a href="insMeses.php"><div class="link">Inserir Meses</div></a>
            <a href="inserir.php"><div class="link">Inserir Entradas</div></a>
            <a href="index.php"><div class="link">Inserir Saídas</div></a>
            <a href=""><div class="link">Inserir Deb. Berna</div></a>
            <a href="totalEnt.php"><div class="link">Total Entradas</div></a>
            <a href="totalSai.php"><div class="link">Total Saídas</div></a>
            <a href="vizPesquisa.php"><div class="link">Pesquisar Entradas</div></a>
            <a href="busca.php"><div class="link">Pesquisar saídas</div></a>
            </nav>
      </div><br><br><br><br>
    <div class="container">
       <table class="table table-sm">
          <tr>
             <th>Origem</th>
             <th>Valor</th>
             <th>Data</th>
             <th>Opões</th>
          </tr>
          <?php foreach($lista as $ent):?>
          <tr>
             <td><?=$ent['origem'];?></td>
             <td><?=$ent['valor'];?></td>
             <td><?=date("d/m/y", strtotime($ent['dia']));?></td>
             <td>
             <a href="editarEntrada.php?id=<?=$ent['id'];?>" class="btn btn-primary btn-sm">Editar</a>
             <a href="excluirEnt.php?id=<?=$ent['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja Excluir???');">Excluir</a></td>
          </tr>
          <?php endforeach; ?>
       </table>
    </div>
<script type="text/javascript" src="assets/js/bootstrap1.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
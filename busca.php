<?php
include 'assets/dataBase/config.php';

$origem = '%'.$_GET['pesquisar'].'%';
$sql = $pdo->prepare("SELECT * FROM entradas WHERE `origem` LIKE :origem");
$sql->bindValue(':origem', $origem);
$sql->execute();
$resultados = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estyle.css">
    <link rel="shortcut icon" href="assets/img/cifrao.png">
    <title>vizualizar Entradas</title>
</head>
<body>
    <div class="top-titulo">
        <h4>Pesquisar Entradas</h4>
    </div>
    <input type="checkbox" id="check" style="display:none">
            <label for="check">
                <div class="botao">
                    <span class="hamburguer"></span>
                </div>
            </label><br><br><br>
                <!--start input buscar-->
            <form class="row g-3" action="busca.php" method="get"> 
                <div class="col-auto">
                    <input type="text" class="form-control pesquisa" name="pesquisar" id="inputPassword2" placeholder="Pesquisar">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-dark mb-1">Buscar</button>
                </div>
            </form>
            <!--end input buscar-->
        <div class="barra">
            <nav>
            <a href="verMeses.php"><div class="link">Visualizar Meses</div></a>
            <a href="verEntrada.php"><div class="link">Visualizar Entrada</div></a>
            <a href="vizualizarGastos.php"><div class="link">Visualizar Saídas</div></a>
            <a href="verDebBerna.php"><div class="link">Visualizar Deb. Berna</div></a>
            <a href="insMeses.php"><div class="link">Inserir Meses</div></a>
            <a href="inserir.php"><div class="link">Inserir Entradas</div></a>
            <a href="index.php"><div class="link">Inserir Saídas</div></a>
            <a href=""><div class="link">Inserir Deb. Berna</div></a>
            <a href="totalEnt.php"><div class="link">Total Entradas</div></a>
            <a href="totalSai.php"><div class="link">Total Saídas</div></a>
            <a href="vizPesquisa.php"><div class="link">Pesquisar Saídas</div></a>
            </nav>
      </div><br><br><br><br>
      <div class="container">
         <table class="table">
             <tr >
               <th >Origem</th>
               <th >Data</th>
               <th >Valor</th>
             </tr>
             <?php foreach($resultados as $resultado):?>
             <tr>
              <td><?=$resultado['origem'];?></td>
              <td><?=date("d/m/Y", strtotime($resultado['dia']));?></td>
              <td><?="R$ ".$resultado['valor'];?></td>
             </tr>
              <?php endforeach;?>
         </table>
      </div>
<script type="text/javascript" src="assets/js/bootstrap1.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
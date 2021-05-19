<?php
require 'assets/dataBase/config.php';
$id_entrada = 1;
$sql = "SELECT ROUND(SUM(valor),2) as soma FROM entradas WHERE id_entrada = :id_entrada";
$sql = $pdo->prepare($sql);
$sql->bindValue(':id_entrada', $id_entrada);
$sql->execute();
$row = $sql->fetch();
$soma = $row['soma'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/estyle.css">
    <link rel="shortcut icon" href="assets/img/cifrao.png">
    <title>Total Das Entradas</title>
</head>
<body>
    <input type="checkbox" id="check" style="display:none">
            <label for="check">
                <div class="botao">
                    <span class="hamburguer"></span>
                </div>
            </label>
        <div class="barra">
            <nav>
            <a href="verMeses.php"><div class="link">Visualizar Meses</div></a>
            <a href="verEntrada.php"><div class="link">Visualizar Entradas</div></a>
            <a href="vizualizarGastos.php"><div class="link">Visualizar Saídas</div></a>
            <a href="verDebBerna.php"><div class="link">Visualizar Deb. Berna</div></a>
            <a href="insMeses.php"><div class="link">Inserir Meses</div></a>
            <a href="inserir.php"><div class="link">Inserir Entradas</div></a>
            <a href="index.php"><div class="link">Inserir Saídas</div></a>
            <a href=""><div class="link">Inserir Deb. Berna</div></a>
            <a href="totalSai.php"><div class="link">Total Saídas</div></a>
            <a href="busca.php"><div class="link">Pesquisar Entradas</div></a>
            <a href="vizPesquisa.php"><div class="link">Pesquisar saídas</div></a>
            </nav>
      </div><br><br><br><br>
    <div class="container">
        <div class="total">
            <center><h1>Total Entradas</h1></center>
            <center><h2><?php echo "R$ ".$soma;?></h2></center>
        </div>
    </div>
<script type="text/javascript" src="assets/js/bootstrap1.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
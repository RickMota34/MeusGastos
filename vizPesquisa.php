 <?php
include 'assets/dataBase/config.php';

$nome = '%'.$_GET['pesquisar'].'%';
$sql = $pdo->prepare("SELECT * FROM saidas WHERE `nome` LIKE :nome");
$sql->bindValue(':nome', $nome);
$sql->execute();
$resultados = $sql->fetchAll(PDO::FETCH_ASSOC);
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
    <title>visualizar Saídas</title>
</head>
<body>
    <div class="top-titulo">
        <h4>Pesquisar Saídas</h4>
    </div>
    <input type="checkbox" id="check" style="display:none">
            <label for="check">
                <div class="botao">
                    <span class="hamburguer"></span>
                </div>
            </label><br><br><br>
            <!--start input buscar-->
                  <form class="row g-3" action="vizPesquisa.php" method="get"> 
                    <div class="col-auto">
                        <input class="form-control pesquisa" type="text" name="pesquisar" id="inputPassword2" placeholder="Pesquisar">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-dark mb-1" type="submit"  value="Buscar">Buscar</button>
                    </div>
                   </form>
            <!--end input buscar-->
        <div class="barra">
            <nav>
            <a href="verMeses.php"><div class="link">Visualizar Meses</div></a>
            <a href="verEntrada.php"><div class="link">Visualizar Entradas</div></a>
            <a href="vizualizarGastos.php"><div class="link">Visualizar Saídas</div></a>
            <a href=""><div class="link">Visualizar Deb. Berna</div></a>
            <a href=""><div class="link">Inserir Meses</div></a>
            <a href="inserir.php"><div class="link">Inserir Entradas</div></a>
            <a href="index.php"><div class="link">Inserir Saídas</div></a>
            <a href=""><div class="link">Inserir Deb. Berna</div></a>
            <a href="totalEnt.php"><div class="link">Total Entradas</div></a>
            <a href="totalSai.php"><div class="link">Total Saídas</div></a>
            <a href="busca.php"><div class="link">Pesquisar Entradas</div></a>
            </nav>
      </div><br><br><br><br>
      <div class="container">
         <table class="table">
             <tr >
               <th >Nome</th>
               <th >Data</th>
               <th >Valor</th>
             </tr>
             <?php foreach($resultados as $resultado):?>
             <tr>
              <td><?=$resultado['nome'];?></td>
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
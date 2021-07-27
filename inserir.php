<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/estyle.css">
    <link rel="shortcut icon" href="assets/img/cifrao.png">
    <title>Entradas</title>
    <title>Inserir Gastos</title>
</head>
<body>
  <header>
    <div class="top-titulo">
        <h4>Inserir Entradas</h4>
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
            <a href="verEntrada.php"><div class="link">Visualizar Entradas</div></a>
            <a href="vizualizarGastos.php"><div class="link">Visualizar Saídas</div></a>
            <a href="verDebBerna.php"><div class="link">Visualizar Deb. Berna</div></a>
            <a href="insMeses.php"><div class="link">Inserir Meses</div></a>
            <a href="index.php"><div class="link">Inserir Saídas</div></a>
            <a href=""><div class="link">Inserir Deb. Berna</div></a>
            <a href="totalEnt.php"><div class="link">Total Entradas</div></a>
            <a href="totalSai.php"><div class="link">Total Saídas</div></a>
            <a href="vizPesquisa.php"><div class="link">Pesquisar Ent.</div></a>
            <a href="busca.php"><div class="link">Pesquisar saí.</div></a>
            </nav>
      </div><br><br><br><br>
    <div class="container"><br>
       <form action="assets/dataBase/inserir.php" method="post">
       <div class="mb-3">
          <select class="form-select" arial-label="Default Select example" name="" id="">
             <option value="">Forma de Pagamento</option>
             <option value="">Dinheiro</option>
             <option value="">Cartão Deb. Berna</option>
             <option value="">Cartão Crédito</option>
          </select>
       </div>
         
       <div class="mb-3">
             <input type="text" name="origem" placeholder="Origem do Dinheiro" class="form-control">
        </div>
         
        <div class ="mb-3">
             <input type="text" name="valor"placeholder="Qual o valor" class="form-control">
        </div>
         
        <div class="mb-3">
             <input type="date" name="dia" class="form-control">
        </div>
         
        <input type="hidden" name="id_entrada" value="1">
         
        <div class="d-grid gap-2 col-6 mx-auto">
             <input type="submit" value="Inserir"class="btn btn-dark">
        </div>
       </form>
    </div>
<script type="text/javascript" src="assets/js/bootstrap1.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
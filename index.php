
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/estyle.css">
    <link rel="shortcut icon" href="assets/img/cifrao.png">
    <title>Gastos</title>
</head>
    <div class="top-titulo">
        <h4>Inserir Saídas</h4>
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
                    <a href="verEntrada.php"><div class="link">Visualizar Entrada</div></a>
                    <a href="vizualizarGastos.php"><div class="link">Visualizar Saídas</div></a>
                    <a href="verDebBerna.php"><div class="link">Visualizar Deb. Berna</div></a>
                    <a href="insMeses.php"><div class="link">Inserir Meses</div></a>
                    <a href="inserir.php"><div class="link">Inserir Entrada</div></a>
                    <a href="insDebBerna.php"><div class="link">Inserir Deb. Berna</div></a>
                    <a href="totalEnt.php"><div class="link">Total Entrada</div></a>
                    <a href="totalSai.php"><div class="link">Total Saídas</div></a>
                    <a href="vizPesquisa.php"><div class="link">Pesquisar Entrada</div></a>
            </nav>
      </div><br><br><br><br>
    <div class="container">
    <form method="post" action="inserirEnt.php">
        <div class="mb-3">
            <input type="text" name="nome" placeholder="Onde Comprou..." class="form-control">
        </div>
        <div class="mb-3">
            <input type="date" name="dia" class="form-control">
        </div>

        <div class="mb-3">
            <input type="text" name="valor" placeholder="Diga qual valor..." class="form-control">
        </div>
        <div class="mb-3">
            <input type="hidden" name="id_saida" value="1" class="form-control">
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <input class=" btn btn-dark " type="submit" value="Enviar">
        </div>
    </form>
    </div>
<script type="text/javascript" src="assets/js/bootstrap1.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
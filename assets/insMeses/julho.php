<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estyle.css">
    <link rel="shortcut icon" href="../img/cifrao.png">
    <title>Inserir Julho</title>
</head>
<body>
    <div class="top-titulo">
        <h3>Inserir Julho</h3>
    </div>
    <input type="checkbox" id="check" style="display:none">
            <label for="check">
                <div class="botao">
                    <span class="hamburguer"></span>
                </div>
            </label>
        <div class="barra">
            <nav>
            <a href="../../insMeses.php"><div class="link">Voltar</div></a>
            </nav>
      </div><br><br><br>
      <div class="container">
            <form action="" method="post">
                <div class="mb-3">
                    <select name="form-pagmento" id="" class="form-control">
                        <option value="" class="nav-link">o que vou pagar</option>
                        <option value="" class="nav-link">Boleto no dinheiro</option>
                        <option value="" class="nav-link">Cartão Crédito</option>
                    </select>
                </div>
                <div class="mb-3" id="credito">
                    <select name="" id="" class="form-control">
                        <option value="" class="nav-link">Quantidade de vezes no crédito</option>
                        <option value="" class="nav-link">1x</option>
                        <option value="" class="nav-link">2x</option>
                        <option value="" class="nav-link">3x</option>
                        <option value="" class="nav-link">4x</option>
                        <option value="" class="nav-link">5x</option>
                        <option value="" class="nav-link">6x</option>
                        <option value="" class="nav-link">7x</option>
                        <option value="" class="nav-link">8x</option>
                        <option value="" class="nav-link">9x</option>
                        <option value="" class="nav-link">10x</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Qual o valor...">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="text" class="btn btn-dark" value="Enviar">
                </div>
            </form>
      </div>
      <script type="text/javascript" src="assets/js/bootstrap1.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
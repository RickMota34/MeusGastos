<?php
require 'assets/dataBase/config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');
if($id){

    $sql = $pdo->prepare("SELECT * FROM entradas WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){

        $info = $sql->fetch( PDO::FETCH_ASSOC );

    }else{
        header('Location: verEntrada.php');
    }

}else{
    header('Location: verEntrada.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/estyle.css">
    <link rel="shortcut icon" href="assets/img/cifrao.png">
<title>Editar Entradas</title>
</head>
<body>
<div class="container">

    <center><h1 class="editEnt-Sai">Editar Entradas</h1></center>

    <form method="post" action="EditarEnt.php">
        <input type="hidden" name="id" value="<?=$info['id'];?>">

        <div class="form-group">
            <input type="text" name="origem" value="<?=$info['origem'];?>" placeholder="Onde Comprou" class="form-control">
        </div>

        <div class="form-group">
            <input type="text" name="valor" value="<?=$info['valor'];?>" class="form-control">
        </div>

        <div class="form-group">
            <input type="date" name="dia" value="<?=$info['dia'];?>"class="form-control">
        </div>

        <div class="form-group">
            <input class=" btn btn-dark float-right btn-block" type="submit" value="Salvar">
        </div>

    </form>
</div>
    <script type="text/javascript" src="assets/js/bootstrap1.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
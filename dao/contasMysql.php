<?php
require_once 'models/Contas.php';

class contasMysql implements ContasDao{
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function adicionar(Saida $s){
      $sql = $this->pdo->prepare("INSERT INTO saidas (nome, valor, dia, id_saida) VALUES (:nome, :valor, :dia, :id_saida)");
      $sql->bindValue(":nome", $s->setNome());
    }

    public function vizualisar(){
        $array = [];
        $sql = $this->pdo->query("SELECT * FROM saidas");
        if($sql->rowCount() > 0){
            $data = $sql->fetchAll();

            foreach($data as $item){
                $s = new Saida();
                $s->setNome($item['nome']);
                $s->setValor($item['valor']);
                $s->setDia($item['dia']);
                $s->setId_saida($item['id_saida']);
    
                $array[] = $s;
            }
        }
        
        return $array;
    }

    public function editar(Saida $s){

    }

    public function deletar($id){

    }
} 
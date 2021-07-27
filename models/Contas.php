<?php

class Saida{
    private $id;
    private $nome;
    private $dia;
    private $valor;
    private $id_saida;

    public function getId(){
        return $this->id;
    }
    public function setId($i){
        $this->id = trim($i);
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = ucwords(trim($n));
    }

    public function getDia(){
        return $this->dia;
    }
    public function setDia($d){
        $this->dia = trim($d);
    }
    
    public function getValor(){
        return $this->valor;
    }
    public function setValor($v){
        $this->valor = trim($v);
    }
    public function getId_saida(){
        return $this->id_saida;
    }
    public function setId_saida($ids){
        $this->id = trim($ids);
    }
}

interface ContasDao{
    public function adicionar(Saida $s);
    public function vizualisar();
    public function editar(Saida $s);
    public function deletar($id);
}
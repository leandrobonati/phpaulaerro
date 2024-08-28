<?php 
    class Cliente {
        // atributos
     public function __construct( 
     public int $id_clien = 0,
     public string $nome = "",
     public string $sobrenome = "",
     public string $cpf = ""){}

     //métodos
     public function inserir($conexao)
     {
        $sql = "INSERT INTO cliente (nome_cliente, sobrenome_cliente, cpf_cliente)
        VALUES (?,?,?)";
        $stm = $conexao->prepare($sql);
        $stm->bindValue(1,$this->nome);
        $stm->bindValue(2,$this->sobrenome);
        $stm->bindValue(3,$this->cpf);
        $stm->execute();
        return "cliente inserido com sucesso";
     }
     public function conexao()
     {
      $parametros = 
      "mysql:host=localhost;dbname=test;charset=utf8mb4";
      $conexao = new PDO($parametros, "root", "");
      return $conexao;
     }
     public function buscar_todos_clientes($conexao)
     {
        $sql = "SELECT * FROM cliente";
        $stm = $conexao->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
     }

     
}//fim da classe
?>
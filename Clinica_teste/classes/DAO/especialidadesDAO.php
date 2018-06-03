<?php

require_once("conexao.php");

class especialidadesDAO {

    function __construct() {
        $this->conn = new Conexao();
        $this->pdo = $this->conn->Conectar();
    }

    function cadastrar(especialidades $entEspecialidades) {
        try {
            $statement = $this->pdo->prepare("INSERT INTO especialidades VALUES (':esp_codigo')");
            $parametros = array(
                "esp_codigo"=>$entEspecialidades->getEsp_codigo()
                
            );

            return $statement->execute($parametros);
        } catch (PDOException $ex) {
            echo "ERRO 01,  SENHA: {$ex->getMessage()}";
        }
    }
}


<?php

require_once("conexao.php");

class senhas_medicosDAO {

    function __construct() {
        $this->conn = new Conexao();
        $this->pdo = $this->conn->Conectar();
    }

    function cadastrar(senhas_medicos $entSenhas_medicos) {
        try {
            $statement = $this->pdo->prepare("INSERT INTO senhas_medicos VALUES (:med_codigo, :senha_password)");
            $parametros = array(
                "med_codigo"=>$entSenhas_medicos->getMed_codigo(),
                "senha_password"=>$entSenhas_medicos->getSenha_password()
            );

            return $statement->execute($parametros);
        } catch (PDOException $ex) {
            echo "ERRO 01,  SENHA: {$ex->getMessage()}";
        }
    }
}

?>


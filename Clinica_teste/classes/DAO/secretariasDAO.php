<?php

require_once 'conexao.php';

class secretariasDAO {

    function __construct() {
        $this->conn = new conexao();
        $this->pdo = $this->conn->Conectar();
    }

    function cadastrar(secretarias $entSecretarias) {
        try {
            $statement = $this->pdo->prepare("INSERT INTO secretarias VALUES ('', :sec_nome, :sec_cpf, :sec_dataNasc, :sec_endereco, :sec_telefone, :sec_cidade, :sec_estado, :sec_data, :sec_hora, :sec_senha)");
            $parametros = array(
                ":sec_nome" => $entSecretarias->getSec_nome(),
                ":sec_cpf" => $entSecretarias->getSec_cpf(),
                ":sec_dataNasc" => $entSecretarias->getSec_dataNasc(),
                ":sec_endereco" => $entSecretarias->getSec_endereco(),
                ":sec_telefone" => $entSecretarias->getSec_telefone(),
                ":sec_cidade" => $entSecretarias->getSec_cidade(),
                ":sec_estado" => $entSecretarias->getSec_estado(),
                ":sec_data" => date("Y/m/d"),
                ":sec_hora" => date("H:i:s"),
                ":sec_senha" => md5($entSecretarias->getSec_senha())
            );

            return $statement->execute($parametros);
        } 
        catch (PDOException $ex) {
            echo "ERRO: ".$ex->getMessage();
        }
    }
    
    function login($sec_cpf, $sec_senha) {
        try {
            $statement = $this->pdo->prepare("SELECT * FROM secretarias WHERE sec_cpf = :sec_cpf AND sec_senha = :sec_senha");
            $parametros = array (
                ":sec_cpf"=>$sec_cpf,
                ":sec_senha"=> md5($sec_senha)
            );
            
            $statement->execute($parametros);
            
            if ($statement->rowCount() > 0) {
                return true;
            } 
            else {
                return false;
            }
        
        } 
        catch (PDOException $ex) {
            echo "ERRO: ".$ex->getMessage();
        }
    }
    
    function retornarDados($sec_cpf) {

       try {
            $statement = $this->pdo->prepare("SELECT sec_nome FROM secretarias WHERE sec_cpf = :sec_cpf");
            $parametros = array(
                "sec_cpf"=> $sec_cpf
            );
            
            return $statement->execute($parametros);
            
       } 
       catch (Exception $ex) {

       }
        
    }
    
    

}

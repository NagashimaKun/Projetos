<?php

require_once 'conexao.php';

class medicosDAO {

    function __construct() {
        $this->conn = new conexao();
        $this->pdo = $this->conn->Conectar();
    }

    function cadastrar(medicos $entMedicos, $esp_nome, $est_nome) {
        try {
            $consulta = $this->pdo->query("SELECT esp_codigo FROM especialidades");
            $esp_codigo = $consulta['esp_codigo'];
            
            $statement = $this->pdo->prepare("INSERT INTO medicos VALUES ('', :med_crm, :med_nome, :med_dataNasc, :med_cpf, :med_endereco, :med_telefone, :med_cidade, :med_estado, :med_data, :med_hora, :med_especialidade,)");
            $parametros = array(
                "med_crm" => $entMedicos->getMed_crm(),
                "med_nome" => $entMedicos->getMed_nome(),
                "med_dataNasc" => $entMedicos->getMed_dataNasc(),
                "med_especialidade" => $esp_nome,
                "med_cpf" => $entMedicos->getMed_cpf(),
                "med_endereco" => $entMedicos->getMed_endereco(),
                "med_telefone" => $entMedicos->getMed_telefone(),
                "med_cidade" => $entMedicos->getMed_cidade(),
                "med_estado" => $est_nome,
                "med_data" => date("Y/m/d"),
                "med_hora" => date("h:i:s"),
            );
            return $statement->execute($parametros);
        } catch (Exception $ex) {
            echo "Erro 01" . $ex->getMessage();
        }
    }

    function login($med_cpf, $med_senha) {
        try {
            $statement = $this->pdo->prepare("SELECT * FROM medicos WHERE med_cpf = :med_cpf AND med_senha = :med_senha");
            $parametros = array(
                ":med_cpf" => $med_cpf,
                ":med_senha" => $med_senha
            );

            $statement->execute($parametros);

            if ($statement->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo "ERRO" . $ex->getMessage();
        }
    }

    function consultar_medicos($med_crm) {
        try {
            $statement = $this->pdo->prepare("SELECT * FROM medicos WHERE med_crm = :med_crm");
            $parametros = array(":med_crm" => $med_crm);


            $statement->execute($parametros);

            if ($statement->rowCount() > 0) {

                $consulta = $statement->fetch(PDO::FETCH_ASSOC);
                return $consulta['med_crm'];
            } else {
                return "";
            }
        } catch (PDOException $ex) {
            echo "ERRO 02: {$ex->getMessage()}";
        }
    }
    
    function cadastrar_especialidades() {
        
    }

}

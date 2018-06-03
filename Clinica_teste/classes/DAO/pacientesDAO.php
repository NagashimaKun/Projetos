<?php

require_once 'conexao.php';

class pacientesDAO {

    function __construct() {
        $this->conn = new conexao();
        $this->pdo = $this->conn->Conectar();
    }

    function cadastrar(pacientes $entPacientes) {
        try {
            $statement = $this->pdo->prepare("INSERT INTO pacientes VALUES ('', :pac_nome, :pac_cpf, :pac_sexo, :pac_endereco, :pac_telefone, :pac_cidade, :pac_estado, :pac_dataNasc, :pac_data, :pac_hora)");
            $parametros = array(
                "pac_nome"=>$entPacientes->getPac_nome(),
                "pac_cpf"=>$entPacientes->getPac_cpf(),
                "pac_sexo"=>$entPacientes->getPac_sexo(),
                "pac_dataNasc"=>$entPacientes->getPac_dataNasc(),
                "pac_endereco"=>$entPacientes->getPac_endereco(),
                "pac_telefone"=>$entPacientes->getPac_telefone(),
                "pac_cidade"=>$entPacientes->getPac_cidade(),
                "pac_estado"=>$entPacientes->getPac_estado(),
                "pac_data"=> date("Y/m/d"),
                "pac_hora"=>date ("h:i:s")
            );
            return $statement->execute($parametros);
            
        } catch (Exception $ex) {
            echo "Erro 01" . $ex->getMessage();
        }
    }
}

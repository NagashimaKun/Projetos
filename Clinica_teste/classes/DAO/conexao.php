<?php

date_default_timezone_set('America/Sao_Paulo');

class conexao {

    private $usuario;
    private $senha;
    private $host;
    private $banco;
    private $file;
    public $pdo;

    public function Conectar() {

        try {
            $this->usuario = "root";
            $this->senha = "";
            $this->host = "localhost";
            $this->banco = "banco_teste";

            $parametros = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8");

            $this->file = "mysql:host=" . $this->host . ";dbname=" . $this->banco;
            $this->pdo = new PDO($this->file, $this->usuario, $this->senha, $parametros);

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->pdo->setAttribute(PDO::ATTR_PERSISTENT, true);

            if (!$this->pdo) {
                echo "Erro na conexão";
            }

            return $this->pdo;
        } catch (PDOException $ex) {
            echo "Erro no sistema" . $ex->getMessage();
        }
    }
}

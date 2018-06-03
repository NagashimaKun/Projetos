<?php

class senhas_medicos {

    private $med_codigo;
    private $senha_password;

    function getMed_codigo() {
        return $this->med_codigo;
    }

    function getSenha_password() {
        return $this->senha_password;
    }

    function setMed_codigo($med_codigo) {
        $this->med_codigo = $med_codigo;
    }

    function setSenha_password($senha_password) {
        $this->senha_password = $senha_password;
    }

}

<?php

class pacientes {

    private $pac_codigo;
    private $pac_nome;
    private $pac_cpf;
    private $pac_sexo;
    private $pac_dataNasc;
    private $pac_endereco;
    private $pac_telefone;
    private $pac_cidade;
    private $pac_estado;
    private $pac_data;
    private $pac_hora;

    function getPac_codigo() {
        return $this->pac_codigo;
    }

    function getPac_nome() {
        return $this->pac_nome;
    }

    function getPac_cpf() {
        return $this->pac_cpf;
    }

    function getPac_sexo() {
        return $this->pac_sexo;
    }

    function getPac_dataNasc() {
        return $this->pac_dataNasc;
    }

    function getPac_endereco() {
        return $this->pac_endereco;
    }

    function getPac_telefone() {
        return $this->pac_telefone;
    }

    function getPac_cidade() {
        return $this->pac_cidade;
    }

    function getPac_estado() {
        return $this->pac_estado;
    }

    function getPac_data() {
        return $this->pac_data;
    }

    function getPac_hora() {
        return $this->pac_hora;
    }

    function setPac_codigo($pac_codigo) {
        $this->pac_codigo = $pac_codigo;
    }

    function setPac_nome($pac_nome) {
        $this->pac_nome = $pac_nome;
    }

    function setPac_cpf($pac_cpf) {
        $this->pac_cpf = $pac_cpf;
    }

    function setPac_sexo($pac_sexo) {
        $this->pac_sexo = $pac_sexo;
    }

    function setPac_dataNasc($pac_dataNasc) {
        $this->pac_dataNasc = $pac_dataNasc;
    }

    function setPac_endereco($pac_endereco) {
        $this->pac_endereco = $pac_endereco;
    }

    function setPac_telefone($pac_telefone) {
        $this->pac_telefone = $pac_telefone;
    }

    function setPac_cidade($pac_cidade) {
        $this->pac_cidade = $pac_cidade;
    }

    function setPac_estado($pac_estado) {
        $this->pac_estado = $pac_estado;
    }

    function setPac_data($pac_data) {
        $this->pac_data = $pac_data;
    }

    function setPac_hora($pac_hora) {
        $this->pac_hora = $pac_hora;
    }

}

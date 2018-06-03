<?php

class secretarias {

    private $sec_codigo;
    private $sec_nome;
    private $sec_cpf;
    private $sec_dataNasc;
    private $sec_endereco;
    private $sec_telefone;
    private $sec_cidade;
    private $sec_estado;
    private $sec_data;
    private $sec_hora;
    private $sec_senha;

    function getSec_codigo() {
        return $this->sec_codigo;
    }

    function getSec_nome() {
        return $this->sec_nome;
    }

    function getSec_cpf() {
        return $this->sec_cpf;
    }

    function getSec_dataNasc() {
        return $this->sec_dataNasc;
    }

    function getSec_endereco() {
        return $this->sec_endereco;
    }

    function getSec_telefone() {
        return $this->sec_telefone;
    }

    function getSec_cidade() {
        return $this->sec_cidade;
    }

    function getSec_estado() {
        return $this->sec_estado;
    }

    function getSec_data() {
        return $this->sec_data;
    }

    function getSec_hora() {
        return $this->sec_hora;
    }

    function getSec_senha() {
        return $this->sec_senha;
    }

    function setSec_codigo($sec_codigo) {
        $this->sec_codigo = $sec_codigo;
    }

    function setSec_nome($sec_nome) {
        $this->sec_nome = $sec_nome;
    }

    function setSec_cpf($sec_cpf) {
        $this->sec_cpf = $sec_cpf;
    }

    function setSec_dataNasc($sec_dataNasc) {
        $this->sec_dataNasc = $sec_dataNasc;
    }

    function setSec_endereco($sec_endereco) {
        $this->sec_endereco = $sec_endereco;
    }

    function setSec_telefone($sec_telefone) {
        $this->sec_telefone = $sec_telefone;
    }

    function setSec_cidade($sec_cidade) {
        $this->sec_cidade = $sec_cidade;
    }

    function setSec_estado($sec_estado) {
        $this->sec_estado = $sec_estado;
    }

    function setSec_data($sec_data) {
        $this->sec_data = $sec_data;
    }

    function setSec_hora($sec_hora) {
        $this->sec_hora = $sec_hora;
    }

    function setSec_senha($sec_senha) {
        $this->sec_senha = $sec_senha;
    }

}

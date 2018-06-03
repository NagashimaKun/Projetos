<?php

class medicos {

    private $med_codigo;
    private $med_crm;
    private $med_nome;
    private $med_dataNasc;
    private $med_especialidade;
    private $med_cpf;
    private $med_endereco;
    private $med_telefone;
    private $med_cidade;
    private $med_estado;
    private $med_data;
    private $med_hora;
    private $med_senha;

    function getMed_codigo() {
        return $this->med_codigo;
    }

    function getMed_crm() {
        return $this->med_crm;
    }

    function getMed_nome() {
        return $this->med_nome;
    }

    function getMed_dataNasc() {
        return $this->med_dataNasc;
    }

    function getMed_especialidade() {
        return $this->med_especialidade;
    }

    function getMed_cpf() {
        return $this->med_cpf;
    }

    function getMed_endereco() {
        return $this->med_endereco;
    }

    function getMed_telefone() {
        return $this->med_telefone;
    }

    function getMed_cidade() {
        return $this->med_cidade;
    }

    function getMed_estado() {
        return $this->med_estado;
    }

    function getMed_data() {
        return $this->med_data;
    }

    function getMed_hora() {
        return $this->med_hora;
    }

    function getMed_senha() {
        return $this->med_senha;
    }

    function setMed_codigo($med_codigo) {
        $this->med_codigo = $med_codigo;
    }

    function setMed_crm($med_crm) {
        $this->med_crm = $med_crm;
    }

    function setMed_nome($med_nome) {
        $this->med_nome = $med_nome;
    }

    function setMed_dataNasc($med_dataNasc) {
        $this->med_dataNasc = $med_dataNasc;
    }

    function setMed_especialidade($med_especialidade) {
        $this->med_especialidade = $med_especialidade;
    }

    function setMed_cpf($med_cpf) {
        $this->med_cpf = $med_cpf;
    }

    function setMed_endereco($med_endereco) {
        $this->med_endereco = $med_endereco;
    }

    function setMed_telefone($med_telefone) {
        $this->med_telefone = $med_telefone;
    }

    function setMed_cidade($med_cidade) {
        $this->med_cidade = $med_cidade;
    }

    function setMed_estado($med_estado) {
        $this->med_estado = $med_estado;
    }

    function setMed_data($med_data) {
        $this->med_data = $med_data;
    }

    function setMed_hora($med_hora) {
        $this->med_hora = $med_hora;
    }

    function setMed_senha($med_senha) {
        $this->med_senha = $med_senha;
    }

}

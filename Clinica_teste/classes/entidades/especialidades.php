<?php

class especialidades {

    private $esp_codigo;
    private $esp_nome;
    private $esp_descricao;

    function getEsp_codigo() {
        return $this->esp_codigo;
    }

    function getEsp_nome() {
        return $this->esp_nome;
    }

    function getEsp_descricao() {
        return $this->esp_descricao;
    }

    function setEsp_codigo($esp_codigo) {
        $this->esp_codigo = $esp_codigo;
    }

    function setEsp_nome($esp_nome) {
        $this->esp_nome = $esp_nome;
    }

    function setEsp_descricao($esp_descricao) {
        $this->esp_descricao = $esp_descricao;
    }

}

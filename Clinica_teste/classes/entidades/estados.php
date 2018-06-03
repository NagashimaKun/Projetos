<?php

class estados {

    private $est_codigo;
    private $est_codigo_ibge;
    private $est_nome;
    private $est_dtm_lcto;

    function getEst_codigo() {
        return $this->est_codigo;
    }

    function getEst_codigo_ibge() {
        return $this->est_codigo_ibge;
    }

    function getEst_nome() {
        return $this->est_nome;
    }

    function getEst_dtm_lcto() {
        return $this->est_dtm_lcto;
    }

    function setEst_codigo($est_codigo) {
        $this->est_codigo = $est_codigo;
    }

    function setEst_codigo_ibge($est_codigo_ibge) {
        $this->est_codigo_ibge = $est_codigo_ibge;
    }

    function setEst_nome($est_nome) {
        $this->est_nome = $est_nome;
    }

    function setEst_dtm_lcto($est_dtm_lcto) {
        $this->est_dtm_lcto = $est_dtm_lcto;
    }

}

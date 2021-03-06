-- MySQL Script generated by MySQL Workbench
-- Wed May 30 15:12:31 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema banco_teste
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema banco_teste
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `banco_teste` DEFAULT CHARACTER SET utf8 ;
USE `banco_teste` ;

-- -----------------------------------------------------
-- Table `banco_teste`.`estados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_teste`.`estados` (
  `est_codigo` INT NOT NULL AUTO_INCREMENT,
  `est_codigo_ibge` INT NOT NULL,
  `est_sigla` VARCHAR(2) NOT NULL,
  `est_nome` VARCHAR(45) NOT NULL,
  `est_dtm_lcto` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`est_codigo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `banco_teste`.`pacientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_teste`.`pacientes` (
  `pac_codigo` INT NOT NULL AUTO_INCREMENT,
  `pac_nome` VARCHAR(45) NOT NULL,
  `pac_cpf` VARCHAR(12) NOT NULL,
  `pac_sexo` VARCHAR(10) NOT NULL,
  `pac_dataNasc` DATE NOT NULL,
  `pac_endereco` VARCHAR(45) NOT NULL,
  `pac_telefone` VARCHAR(10) NOT NULL,
  `pac_cidade` VARCHAR(100) NOT NULL,
  `pac_data` DATE NOT NULL,
  `pac_hora` TIME(6) NOT NULL,
  `est_codigo` INT NOT NULL,
  PRIMARY KEY (`pac_codigo`, `est_codigo`),
  INDEX `fk_pacientes_estados1_idx` (`est_codigo` ASC),
  CONSTRAINT `fk_pacientes_estados1`
    FOREIGN KEY (`est_codigo`)
    REFERENCES `banco_teste`.`estados` (`est_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `banco_teste`.`secretarias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_teste`.`secretarias` (
  `sec_codigo` INT NOT NULL AUTO_INCREMENT,
  `sec_nome` VARCHAR(45) NOT NULL,
  `sec_cpf` VARCHAR(45) NOT NULL,
  `sec_dataNasc` DATE NOT NULL,
  `sec_endereco` VARCHAR(45) NOT NULL,
  `sec_telefone` VARCHAR(45) NOT NULL,
  `sec_cidade` VARCHAR(45) NOT NULL,
  `sec_estado` VARCHAR(45) NOT NULL,
  `sec_data` DATE NOT NULL,
  `sec_hora` TIME(6) NOT NULL,
  `sec_senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`sec_codigo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `banco_teste`.`especialidades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_teste`.`especialidades` (
  `esp_codigo` INT NOT NULL AUTO_INCREMENT,
  `esp_nome` VARCHAR(45) NOT NULL,
  `esp_descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`esp_codigo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `banco_teste`.`medicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_teste`.`medicos` (
  `med_codigo` INT NOT NULL AUTO_INCREMENT,
  `med_crm` INT NOT NULL,
  `med_nome` VARCHAR(45) NOT NULL,
  `med_dataNasc` DATE NULL,
  `med_cpf` VARCHAR(12) NOT NULL,
  `med_endereco` VARCHAR(100) NOT NULL,
  `med_telefone` VARCHAR(10) NOT NULL,
  `med_cidade` VARCHAR(45) NOT NULL,
  `med_estado` VARCHAR(45) NOT NULL,
  `med_data` DATE NOT NULL,
  `med_hora` TIME(6) NOT NULL,
  `med_senha` VARCHAR(45) NOT NULL,
  `especialidades_esp_codigo` INT NOT NULL,
  PRIMARY KEY (`med_codigo`, `especialidades_esp_codigo`),
  INDEX `fk_medicos_especialidades1_idx` (`especialidades_esp_codigo` ASC),
  CONSTRAINT `fk_medicos_especialidades1`
    FOREIGN KEY (`especialidades_esp_codigo`)
    REFERENCES `banco_teste`.`especialidades` (`esp_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `banco_teste`.`consultas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_teste`.`consultas` (
  `con_codigo` INT NOT NULL AUTO_INCREMENT,
  `con_data` DATE NOT NULL,
  `con_hora` TIME NOT NULL,
  `con_descricao` VARCHAR(45) NULL,
  `con_status` VARCHAR(10) NOT NULL,
  `pacientes_pac_codigo` INT NOT NULL,
  `secretaria_sec_codigo` INT NOT NULL,
  `medicos_med_codigo` INT NOT NULL,
  PRIMARY KEY (`con_codigo`, `pacientes_pac_codigo`, `secretaria_sec_codigo`, `medicos_med_codigo`),
  INDEX `fk_agenda_pacientes1_idx` (`pacientes_pac_codigo` ASC),
  INDEX `fk_agenda_secretaria1_idx` (`secretaria_sec_codigo` ASC),
  INDEX `fk_agenda_medicos1_idx` (`medicos_med_codigo` ASC),
  CONSTRAINT `fk_agenda_pacientes1`
    FOREIGN KEY (`pacientes_pac_codigo`)
    REFERENCES `banco_teste`.`pacientes` (`pac_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_agenda_secretaria1`
    FOREIGN KEY (`secretaria_sec_codigo`)
    REFERENCES `banco_teste`.`secretarias` (`sec_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_agenda_medicos1`
    FOREIGN KEY (`medicos_med_codigo`)
    REFERENCES `banco_teste`.`medicos` (`med_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `banco_teste`.`prontuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_teste`.`prontuario` (
  `pron_codigo` INT NOT NULL AUTO_INCREMENT,
  `pron_pressao` DOUBLE NOT NULL,
  `pron_pulso` DOUBLE NOT NULL,
  `pron_temperatura` DOUBLE NOT NULL,
  `pron_respiracao` DOUBLE NOT NULL,
  `pron_observacoes` VARCHAR(100) NOT NULL,
  `pac_codigo` INT NOT NULL,
  `med_codigo` INT NOT NULL,
  `func_codigo` INT NOT NULL,
  PRIMARY KEY (`pron_codigo`, `pac_codigo`, `med_codigo`, `func_codigo`),
  INDEX `fk_prontuario_pacientes1_idx` (`pac_codigo` ASC),
  CONSTRAINT `fk_prontuario_pacientes1`
    FOREIGN KEY (`pac_codigo`)
    REFERENCES `banco_teste`.`pacientes` (`pac_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `banco_teste`.`senhas_medicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_teste`.`senhas_medicos` (
  `med_codigo` INT NOT NULL,
  `senha_password` INT NOT NULL,
  PRIMARY KEY (`med_codigo`),
  CONSTRAINT `fk_senha_medicos_medicos1`
    FOREIGN KEY (`med_codigo`)
    REFERENCES `banco_teste`.`medicos` (`med_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `banco_teste`.`senhas_secretarias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_teste`.`senhas_secretarias` (
  `sec_codigo` INT NOT NULL,
  `senha_password` INT NOT NULL,
  PRIMARY KEY (`sec_codigo`),
  CONSTRAINT `fk_senhas_secretarias_secretarias1`
    FOREIGN KEY (`sec_codigo`)
    REFERENCES `banco_teste`.`secretarias` (`sec_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

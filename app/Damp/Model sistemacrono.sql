
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sistemaCrono` DEFAULT CHARACTER SET utf8 ;
USE `sistemaCrono` ;

-- -----------------------------------------------------
-- Table `sa`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistemaCrono`.`usuario` (
  `codUsuario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(120) NULL,
  `senha` VARCHAR(45) NULL,
  PRIMARY KEY (`codUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sa`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistemaCrono`.`produto` (
  `codProduto` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomeProduto` VARCHAR(60) NULL,
  PRIMARY KEY (`codProduto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sa`.`operacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistemaCrono`.`operacao` (
  `codOperacao` INT NOT NULL AUTO_INCREMENT,
  `nomeOP` VARCHAR(60) NULL,
  `codProduto` INT NOT NULL,
  `maquina` VARCHAR(45) NULL,
  `tipoEstudo` VARCHAR(45) NULL,
  `cronometrista` VARCHAR(45) NULL,
  PRIMARY KEY (`codOperacao`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sa`.`elementos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistemaCrono`.`elementos` (
  `codElemento` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomeElemento` VARCHAR(60) NULL,
  `codOperacao` INT NOT NULL,
  `ritmo` DOUBLE NULL,
  `interferencia` DOUBLE NULL,
  `concessoes` DOUBLE NULL,
  `qtdVezes` INT NULL,
  `porPeca` INT NULL,
  PRIMARY KEY (`codElemento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sa`.`tomadaDeTempo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistemaCrono`.`tomadaDeTempo` (
  `codTomadaDeTempo` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `data` DATETIME NULL,
  `codOperacao` INT NOT NULL,
  `codUsuario` INT NULL,
  `numLeitura` INT NULL,
  `turno` VARCHAR(45) NULL,
  `obs` VARCHAR(60) NULL,
  `tomadaDeTempocol` VARCHAR(45) NULL,
  PRIMARY KEY (`codTomadaDeTempo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sa`.`cronometragem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistemaCrono`.`cronometragem` (
  `codTomadaDeTempo` INT NOT NULL,
  `tempo` FLOAT NULL,
  `numCronometragem` INT NOT NULL,
  `codElemento` INT NOT NULL,
  PRIMARY KEY (`codTomadaDeTempo`))
ENGINE = InnoDB;




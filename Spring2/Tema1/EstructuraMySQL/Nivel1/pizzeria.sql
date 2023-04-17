-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8mb3 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`BOTIGA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`BOTIGA` (
  `idBOTIGA` INT NOT NULL,
  `direccio` VARCHAR(45) NOT NULL,
  `localitat` VARCHAR(45) NOT NULL,
  `codi_postal` VARCHAR(45) NOT NULL,
  `provincia` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idBOTIGA`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`CLIENT`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`CLIENT` (
  `id_Client` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `cognom` VARCHAR(45) NOT NULL,
  `direccio` VARCHAR(100) NOT NULL,
  `localitat` VARCHAR(45) NOT NULL,
  `provincia` VARCHAR(45) NOT NULL,
  `telefon` INT NOT NULL,
  `codi_postal` INT NOT NULL,
  PRIMARY KEY (`id_Client`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`COMANDA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`COMANDA` (
  `idCOMANDA` INT NOT NULL AUTO_INCREMENT,
  `data_hora` DATETIME NOT NULL,
  `preu_total` INT NOT NULL,
  `client_id` INT NOT NULL,
  `botigaId` INT NOT NULL,
  PRIMARY KEY (`idCOMANDA`, `client_id`, `botigaId`),
  INDEX `client_id_idx` (`client_id` ASC) VISIBLE,
  INDEX `botiga_id_idx` (`botigaId` ASC) VISIBLE,
  CONSTRAINT `botiga_id`
    FOREIGN KEY (`botigaId`)
    REFERENCES `mydb`.`BOTIGA` (`idBOTIGA`),
  CONSTRAINT `client_id`
    FOREIGN KEY (`client_id`)
    REFERENCES `mydb`.`CLIENT` (`id_Client`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`A_DOMICILI`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`A_DOMICILI` (
  `comandaId` INT NOT NULL,
  `data_hora` DATETIME NOT NULL,
  `repartidor_id` INT NOT NULL,
  PRIMARY KEY (`comandaId`),
  CONSTRAINT `comanda_Id1`
    FOREIGN KEY (`comandaId`)
    REFERENCES `mydb`.`COMANDA` (`idCOMANDA`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`PRODUCTES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`PRODUCTES` (
  `idPRODUCTES` INT NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  `descripcio` VARCHAR(45) NOT NULL,
  `imatge` VARCHAR(250) NOT NULL,
  `preu` INT NOT NULL,
  PRIMARY KEY (`idPRODUCTES`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`BEGUDA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`BEGUDA` (
  `producteId` INT NOT NULL,
  PRIMARY KEY (`producteId`),
  CONSTRAINT `producteId3`
    FOREIGN KEY (`producteId`)
    REFERENCES `mydb`.`PRODUCTES` (`idPRODUCTES`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`CATEGORIA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`CATEGORIA` (
  `idCATEGORIA` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCATEGORIA`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`CLIENTE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`CLIENTE` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL DEFAULT NULL,
  `telefon` INT NULL DEFAULT NULL,
  `codigo_postal` INT NULL DEFAULT NULL,
  `email` VARCHAR(100) NULL DEFAULT NULL,
  `data_registre` DATETIME NULL DEFAULT NULL,
  `id_cliente1` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id_cliente`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`EMPLEATS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`EMPLEATS` (
  `idEMPLEATS` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `cognom` VARCHAR(45) NOT NULL,
  `nif` VARCHAR(45) NOT NULL,
  `telefon` INT NULL DEFAULT NULL,
  `botigaId` INT NOT NULL,
  PRIMARY KEY (`idEMPLEATS`, `botigaId`),
  INDEX `botigaId_idx` (`botigaId` ASC) VISIBLE,
  CONSTRAINT `botigaId`
    FOREIGN KEY (`botigaId`)
    REFERENCES `mydb`.`BOTIGA` (`idBOTIGA`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`CUINERS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`CUINERS` (
  `idCUINERS` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idCUINERS`),
  CONSTRAINT `empleatId`
    FOREIGN KEY (`idCUINERS`)
    REFERENCES `mydb`.`EMPLEATS` (`idEMPLEATS`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`PROVEIDOR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`PROVEIDOR` (
  `idProveidor` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) CHARACTER SET 'utf8mb3' NULL DEFAULT NULL,
  `nif` VARCHAR(45) CHARACTER SET 'utf8mb3' NOT NULL,
  `telefon` INT NULL DEFAULT NULL,
  `fax` INT NULL DEFAULT NULL,
  `carrer` VARCHAR(45) CHARACTER SET 'utf8mb3' NULL DEFAULT NULL,
  `numero` INT NULL DEFAULT NULL,
  `pis` VARCHAR(45) COLLATE 'utf8mb3_spanish_ci' NULL DEFAULT NULL,
  `porta` VARCHAR(45) COLLATE 'utf8mb3_spanish_ci' NULL DEFAULT NULL,
  `ciutat` VARCHAR(45) CHARACTER SET 'utf8mb3' NULL DEFAULT NULL,
  `codi_postal` INT NULL DEFAULT NULL,
  `pais` VARCHAR(45) CHARACTER SET 'utf8mb3' NULL DEFAULT NULL,
  PRIMARY KEY (`idProveidor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ULLERES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ULLERES` (
  `id_ulleres` INT NOT NULL AUTO_INCREMENT,
  ` marca` VARCHAR(45) COLLATE 'utf8mb3_spanish_ci' NULL DEFAULT NULL,
  `color_montura` VARCHAR(45) COLLATE 'utf8mb3_spanish_ci' NULL DEFAULT NULL,
  `g_izq` INT NULL DEFAULT NULL,
  `g_der` INT NULL DEFAULT NULL,
  `color_izq` VARCHAR(45) COLLATE 'utf8mb3_spanish_ci' NULL DEFAULT NULL,
  `color_der` VARCHAR(45) COLLATE 'utf8mb3_spanish_ci' NULL DEFAULT NULL,
  `proveidor_id` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id_ulleres`),
  INDEX `proveidor_id_idx` (`proveidor_id` ASC) VISIBLE,
  CONSTRAINT `proveidor_id`
    FOREIGN KEY (`proveidor_id`)
    REFERENCES `mydb`.`PROVEIDOR` (`idProveidor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`FLOTANT`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`FLOTANT` (
  `ulleres_id` INT NOT NULL,
  PRIMARY KEY (`ulleres_id`),
  CONSTRAINT `ulleres_id`
    FOREIGN KEY (`ulleres_id`)
    REFERENCES `mydb`.`ULLERES` (`id_ulleres`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`HAMBURGUESA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`HAMBURGUESA` (
  `producteId` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`producteId`),
  CONSTRAINT `product_id2`
    FOREIGN KEY (`producteId`)
    REFERENCES `mydb`.`PRODUCTES` (`idPRODUCTES`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`LLITA COM_PRO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`LLITA COM_PRO` (
  `comandaId` INT NOT NULL,
  `producteId` INT NOT NULL,
  `quantitat` INT NOT NULL,
  PRIMARY KEY (`comandaId`, `producteId`),
  INDEX `producteId_idx` (`producteId` ASC) VISIBLE,
  CONSTRAINT `comandaId`
    FOREIGN KEY (`comandaId`)
    REFERENCES `mydb`.`COMANDA` (`idCOMANDA`),
  CONSTRAINT `producteId`
    FOREIGN KEY (`producteId`)
    REFERENCES `mydb`.`PRODUCTES` (`idPRODUCTES`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`METALICA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`METALICA` (
  `ulleres_id2` INT NOT NULL,
  PRIMARY KEY (`ulleres_id2`),
  CONSTRAINT `ulleres_id2`
    FOREIGN KEY (`ulleres_id2`)
    REFERENCES `mydb`.`ULLERES` (`id_ulleres`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`PASTA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`PASTA` (
  `ulleres_id3` INT NOT NULL,
  PRIMARY KEY (`ulleres_id3`),
  CONSTRAINT `ulleres_id3`
    FOREIGN KEY (`ulleres_id3`)
    REFERENCES `mydb`.`ULLERES` (`id_ulleres`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`PIZZA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`PIZZA` (
  `producteId` INT NOT NULL,
  `categoriaId` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`categoriaId`, `producteId`),
  INDEX `categoriaId_idx` (`categoriaId` ASC) VISIBLE,
  INDEX `producte_Id1` (`producteId` ASC) VISIBLE,
  CONSTRAINT `categoriaId`
    FOREIGN KEY (`categoriaId`)
    REFERENCES `mydb`.`CATEGORIA` (`idCATEGORIA`),
  CONSTRAINT `producte_Id1`
    FOREIGN KEY (`producteId`)
    REFERENCES `mydb`.`PRODUCTES` (`idPRODUCTES`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`RECOLLIR_BOTIGA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`RECOLLIR_BOTIGA` (
  `comandaId` INT NOT NULL,
  PRIMARY KEY (`comandaId`),
  CONSTRAINT `comanda_id`
    FOREIGN KEY (`comandaId`)
    REFERENCES `mydb`.`COMANDA` (`idCOMANDA`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`REPARTIDOR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`REPARTIDOR` (
  `idREPARTIDOR` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idREPARTIDOR`),
  CONSTRAINT `empleatId1`
    FOREIGN KEY (`idREPARTIDOR`)
    REFERENCES `mydb`.`EMPLEATS` (`idEMPLEATS`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `mydb`.`ULLERES_has_CLIENTE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ULLERES_has_CLIENTE` (
  `ULLERES_id_ulleres` INT NOT NULL,
  `CLIENTE_id_cliente` INT NOT NULL,
  `nom_empleada` VARCHAR(45) COLLATE 'utf8mb3_spanish_ci' NULL DEFAULT NULL,
  `data_venta` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`ULLERES_id_ulleres`, `CLIENTE_id_cliente`),
  INDEX `fk_ULLERES_has_CLIENTE_CLIENTE1_idx` (`CLIENTE_id_cliente` ASC) VISIBLE,
  INDEX `fk_ULLERES_has_CLIENTE_ULLERES1_idx` (`ULLERES_id_ulleres` ASC) VISIBLE,
  CONSTRAINT `fk_ULLERES_has_CLIENTE_CLIENTE1`
    FOREIGN KEY (`CLIENTE_id_cliente`)
    REFERENCES `mydb`.`CLIENTE` (`id_cliente`),
  CONSTRAINT `fk_ULLERES_has_CLIENTE_ULLERES1`
    FOREIGN KEY (`ULLERES_id_ulleres`)
    REFERENCES `mydb`.`ULLERES` (`id_ulleres`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

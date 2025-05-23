-- MySQL Script generated by MySQL Workbench
-- Fri Apr  5 06:53:09 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema crm
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema crm
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `crm` DEFAULT CHARACTER SET utf8 ;
USE `crm` ;

-- -----------------------------------------------------
-- Table `crm`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crm`.`users` ;

CREATE TABLE IF NOT EXISTS `crm`.`users` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `name_` VARCHAR(60) NOT NULL,
  `email_` VARCHAR(60) NOT NULL,
  `phone_` VARCHAR(15) NOT NULL,
  `rol_` INT(1) NOT NULL,
  `username` VARCHAR(20) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `updated_date` DATETIME NOT NULL DEFAULT now(),
  `creation_date` DATETIME NOT NULL DEFAULT now(),
  `status` CHAR(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`iduser`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crm`.`plates`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crm`.`plates` ;

CREATE TABLE IF NOT EXISTS `crm`.`plates` (
  `idplate` INT NOT NULL AUTO_INCREMENT,
  `vin` INT NOT NULL,
  `sale_date` DATE NOT NULL,
  `days` CHAR(3) NOT NULL,
  `seller` VARCHAR(60) NOT NULL,
  `dealer_number` YEAR NOT NULL,
  `make` VARCHAR(60) NOT NULL,
  `model` VARCHAR(60) NOT NULL,
  `year` CHAR(4) NOT NULL,
  `body_style` VARCHAR(3) NOT NULL,
  `major_color` INT NOT NULL,
  `minor_color` INT NULL,
  `weight` FLOAT NOT NULL,
  `name1` VARCHAR(45) NOT NULL,
  `name2` VARCHAR(45) NOT NULL,
  `address` VARCHAR(45) NOT NULL,
  `city` VARCHAR(60) NOT NULL,
  `state` CHAR(2) NOT NULL,
  `zip` CHAR(6) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `phone` VARCHAR(15) NOT NULL,
  `insurence` VARCHAR(45) NOT NULL,
  `iduser` INT NOT NULL,
  `creation_date` DATETIME NOT NULL DEFAULT now(),
  `updated_date` DATETIME NOT NULL DEFAULT now(),
  `status` CHAR(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idplate`),
  INDEX `fk_plates_users1_idx` (`iduser` ASC),
  CONSTRAINT `fk_plates_users1`
    FOREIGN KEY (`iduser`)
    REFERENCES `crm`.`users` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `crm`.`users`
-- -----------------------------------------------------
START TRANSACTION;
USE `crm`;
INSERT INTO `crm`.`users` (`iduser`, `name_`, `email_`, `phone_`, `rol_`, `username`, `password`, `updated_date`, `creation_date`, `status`) VALUES (1, 'admin', 'admin@crm.com', '12312312321', 1, 'admin', '$2y$10$Hp61Pyz5mlzUH0M8TgCAHunRyphuNe/Dt1gdw/7cM13URPrBL4fwq', DEFAULT, DEFAULT, DEFAULT);

COMMIT;


-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema test
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema test
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8 ;
USE `test` ;

-- -----------------------------------------------------
-- Table `test`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `test`.`user` (
  `UserID` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `UserType` TINYINT(2) NOT NULL,
  `Email` VARCHAR(100) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  `Nickname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC) ,
  UNIQUE INDEX `Nickname_UNIQUE` (`Nickname` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `test`.`owner`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `test`.`owner` (
  `OwnerID` INT(10) UNSIGNED NOT NULL,
  `CafeName` VARCHAR(45) NOT NULL,
  `CafeAddress` VARCHAR(150) NOT NULL,
  `CafeType` VARCHAR(45) NOT NULL,
  `Purpose` VARCHAR(45) NOT NULL,
  `Plug` TINYINT(2) UNSIGNED NOT NULL,
  `Parking` TINYINT(2) UNSIGNED NOT NULL,
  `Toilet` TINYINT(2) UNSIGNED NOT NULL,
  `WiFi` TINYINT(2) UNSIGNED NOT NULL,
  `user_UserID` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`OwnerID`),
  UNIQUE INDEX `OwnerID_UNIQUE` (`OwnerID` ASC) ,
  INDEX `fk_owner_user1_idx` (`user_UserID` ASC) ,
  CONSTRAINT `fk_owner_user1`
    FOREIGN KEY (`user_UserID`)
    REFERENCES `test`.`user` (`UserID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `test`.`customer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `test`.`customer` (
  `CustomerID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Score` INT(10) UNSIGNED NOT NULL,
  `Post` VARCHAR(2000) NOT NULL,
  `owner_OwnerID` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`CustomerID`),
  UNIQUE INDEX `CustomerID_UNIQUE` (`CustomerID` ASC) ,
  INDEX `fk_customer_owner1_idx` (`owner_OwnerID` ASC) ,
  CONSTRAINT `fk_customer_owner1`
    FOREIGN KEY (`owner_OwnerID`)
    REFERENCES `test`.`owner` (`OwnerID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

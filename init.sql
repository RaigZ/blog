-- MySQL Workbench Forward Engineering

-- SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
-- SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
-- SET @OLD_SQL_MODE=@@SQL_MODE, -- SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema blogdb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `blogdb` ;

-- -----------------------------------------------------
-- Schema blogdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `blogdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `blogdb` ;

-- -----------------------------------------------------
-- Table `blogdb`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blogdb`.`users` ;

CREATE TABLE IF NOT EXISTS `blogdb`.`users` (
  `idusers` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idusers`),
  UNIQUE INDEX `idusers_UNIQUE` (`idusers` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `blogdb`.`posts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blogdb`.`posts` ;

CREATE TABLE IF NOT EXISTS `blogdb`.`posts` (
  `idpost` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `content` VARCHAR(45) NOT NULL,
  `date` DATE NOT NULL,
  `userid` INT NOT NULL,
  PRIMARY KEY (`idpost`),
  UNIQUE INDEX `idpost_UNIQUE` (`idpost` ASC) VISIBLE,
  INDEX `userid_idx` (`userid` ASC) VISIBLE,
  CONSTRAINT `userid_FOREIGN_KEY`
    FOREIGN KEY (`userid`)
    REFERENCES `blogdb`.`users` (`idusers`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `blogdb`.`comments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blogdb`.`comments` ;

CREATE TABLE IF NOT EXISTS `blogdb`.`comments` (
  `idcomment` INT NOT NULL AUTO_INCREMENT,
  `content` MEDIUMTEXT NOT NULL,
  `userid` INT NOT NULL,
  `postid` INT NOT NULL,
  PRIMARY KEY (`idcomment`),
  UNIQUE INDEX `idcomment_UNIQUE` (`idcomment` ASC) VISIBLE,
  INDEX `userid_FOREIGN_KEY_idx` (`userid` ASC) VISIBLE,
  INDEX `postid_FOREIGN_KEY_idx` (`postid` ASC) VISIBLE,
  CONSTRAINT `postid_FOREIGN_KEY_comments`
    FOREIGN KEY (`postid`)
    REFERENCES `blogdb`.`posts` (`idpost`)
    ON DELETE CASCADE,
  CONSTRAINT `userid_FOREIGN_KEY_comments`
    FOREIGN KEY (`userid`)
    REFERENCES `blogdb`.`users` (`idusers`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- SET SQL_MODE=@OLD_SQL_MODE;
-- SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
-- SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

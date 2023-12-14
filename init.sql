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
CREATE SCHEMA IF NOT EXISTS `blogdb` DEFAULT CHARACTER SET utf8mb4;
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
  UNIQUE INDEX `idusers_UNIQUE` (`idusers` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `blogdb`.`posts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blogdb`.`posts` ;

CREATE TABLE IF NOT EXISTS `blogdb`.`posts` (
  `idpost` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(90) NOT NULL,
  `content` TEXT NOT NULL,
  `date` DATE NOT NULL,
  `userid` INT NOT NULL,
  PRIMARY KEY (`idpost`),
  UNIQUE INDEX `idpost_UNIQUE` (`idpost` ASC),
  INDEX `userid_idx` (`userid` ASC),
  CONSTRAINT `userid_FOREIGN_KEY`
    FOREIGN KEY (`userid`)
    REFERENCES `blogdb`.`users` (`idusers`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


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
  UNIQUE INDEX `idcomment_UNIQUE` (`idcomment` ASC),
  INDEX `userid_FOREIGN_KEY_idx` (`userid` ASC),
  INDEX `postid_FOREIGN_KEY_idx` (`postid` ASC),
  CONSTRAINT `postid_FOREIGN_KEY_comments`
    FOREIGN KEY (`postid`)
    REFERENCES `blogdb`.`posts` (`idpost`)
    ON DELETE CASCADE,
  CONSTRAINT `userid_FOREIGN_KEY_comments`
    FOREIGN KEY (`userid`)
    REFERENCES `blogdb`.`users` (`idusers`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `blogdb`.`contact_form`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blogdb`.`contact_form` (
  `id_submission` INT NOT NULL AUTO_INCREMENT,
  `userid` INT NOT NULL,
  `context` TEXT NOT NULL,
  PRIMARY KEY (`id_submission`),
  UNIQUE INDEX id_submission_UNIQUE (`id_submission` ASC),
  CONSTRAINT `userid_FOREIGN_KEY_contact_form`
    FOREIGN KEY (`userid`)
    REFERENCES `blogdb`.`users` (`idusers`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


INSERT INTO users (`username`, `email`, `password`) VALUES("Peggy", "foo1@csusm.edu", "12345");
INSERT INTO users (`username`, `email`, `password`) VALUES("Rag", "foo2@csusm.edu", "23456");
INSERT INTO users (`username`, `email`, `password`) VALUES("Brian", "foo3@csusm.edu", "34567");
INSERT INTO users (`username`, `email`, `password`) VALUES("Lugia", "foo4@csusm.edu", "45678");
INSERT INTO posts (`title`, `content`, `date`, `userid`) VALUES("Can we hack it", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet suscipit eros. Nullam non leo sit amet lectus auctor elementum a non quam. Aliquam at leo leo. Sed vel tempus metus. Proin blandit enim eu libero malesuada cursus. Donec rutrum euismod nibh, eget semper tellus tincidunt ut. Vestibulum sed purus vitae ex venenatis blandit in vitae lacus. Vivamus laoreet sem magna, in varius lectus laoreet ut.", "2023-11-09", 1);
INSERT INTO posts (`title`, `content`, `date`, `userid`) VALUES("Why web programming is the hardest cis course", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet suscipit eros. Nullam non leo sit amet lectus auctor elementum a non quam. Aliquam at leo leo. Sed vel tempus metus. Proin blandit enim eu libero malesuada cursus. Donec rutrum euismod nibh, eget semper tellus tincidunt ut. Vestibulum sed purus vitae ex venenatis blandit in vitae lacus. Vivamus laoreet sem magna, in varius lectus laoreet ut.", "2023-11-09", 2);
INSERT INTO posts (`title`, `content`, `date`, `userid`) VALUES("I tried hacking and now im in jail, heres how.", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet suscipit eros. Nullam non leo sit amet lectus auctor elementum a non quam. Aliquam at leo leo. Sed vel tempus metus. Proin blandit enim eu libero malesuada cursus. Donec rutrum euismod nibh, eget semper tellus tincidunt ut. Vestibulum sed purus vitae ex venenatis blandit in vitae lacus. Vivamus laoreet sem magna, in varius lectus laoreet ut.", "2023-11-09", 3);
INSERT INTO posts (`title`, `content`, `date`, `userid`) VALUES("Boruto > Naruto and heres why", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet suscipit eros. Nullam non leo sit amet lectus auctor elementum a non quam. Aliquam at leo leo. Sed vel tempus metus. Proin blandit enim eu libero malesuada cursus. Donec rutrum euismod nibh, eget semper tellus tincidunt ut. Vestibulum sed purus vitae ex venenatis blandit in vitae lacus. Vivamus laoreet sem magna, in varius lectus laoreet ut.", "2023-11-09", 4);
INSERT INTO comments (`content`, `userid`, `postid`) VALUES ("Agreed", "1", "1");
INSERT INTO comments (`content`, `userid`, `postid`) VALUES ("Agreed", "2", "1");
INSERT INTO comments (`content`, `userid`, `postid`) VALUES ("Agreed", "3", "1");
INSERT INTO comments (`content`, `userid`, `postid`) VALUES ("Agreed", "4", "1");
INSERT INTO comments (`content`, `userid`, `postid`) VALUES ("Agreed", "1", "2");
INSERT INTO comments (`content`, `userid`, `postid`) VALUES ("Agreed", "2", "2");
INSERT INTO comments (`content`, `userid`, `postid`) VALUES ("Agreed", "3", "2");
INSERT INTO comments (`content`, `userid`, `postid`) VALUES ("Agreed", "4", "2");
INSERT INTO comments (`content`, `userid`, `postid`) VALUES ("Agreed", "1", "3");
INSERT INTO comments (`content`, `userid`, `postid`) VALUES ("Agreed", "2", "3");
INSERT INTO comments (`content`, `userid`, `postid`) VALUES ("Agreed", "3", "3");
INSERT INTO comments (`content`, `userid`, `postid`) VALUES ("Agreed", "4", "3");
INSERT INTO comments (`content`, `userid`, `postid`) VALUES ("Agreed", "1", "4");
INSERT INTO comments (`content`, `userid`, `postid`) VALUES ("Agreed", "2", "4");
INSERT INTO comments (`content`, `userid`, `postid`) VALUES ("Agreed", "3", "4");
INSERT INTO comments (`content`, `userid`, `postid`) VALUES ("Agreed", "4", "4");
INSERT INTO contact_form (`userid`, `context`) VALUES ("1", "TEST RUN");
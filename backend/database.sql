SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `track` ;
CREATE SCHEMA IF NOT EXISTS `track` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `track` ;

-- -----------------------------------------------------
-- Table `library`.`item`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `track`.`users` ;

CREATE TABLE IF NOT EXISTS `track`.`users` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB;

INSERT INTO `users` (`user_id`, `email`, `username`,`password`) VALUES
(1, 'cornelle@gmail.com', 'admin', md5('admin45'));



CREATE TABLE IF NOT EXISTS `track` (
  `track_id` INT NOT NULL AUTO_INCREMENT,
  `trackno` varchar(255) NOT NULL,
  `trackdis1` varchar(255) NOT NULL,
  `trackdis2` varchar(255) NOT NULL,
  `trackhis` varchar(255) NOT NULL,
  `trackstatus` varchar(255) NOT NULL,
  

  PRIMARY KEY (`track_id`))
ENGINE = InnoDB;

GRANT ALL PRIVILEGES ON track.* TO 'cornelle'@'localhost' IDENTIFIED BY 'password';
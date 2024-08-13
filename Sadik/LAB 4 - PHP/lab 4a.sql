CREATE DATABASE `webtech`;

USE `webtech`;

CREATE TABLE `webtech`.`lab4a` (
  `name` VARCHAR(40) NOT NULL ,
  `email` VARCHAR(255) NOT NULL ,
  `username` VARCHAR(255) NOT NULL ,
  `password` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`email`)
) ENGINE = InnoDB;
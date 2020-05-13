-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS = @@UNIQUE_CHECKS, UNIQUE_CHECKS = 0;
SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS = 0;
SET @OLD_SQL_MODE = @@SQL_MODE, SQL_MODE =
        'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema blog_news
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema blog_news
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `blog_news` DEFAULT CHARACTER SET utf8;
USE `blog_news`;

-- -----------------------------------------------------
-- Table `blog_news`.`profile`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog_news`.`profile`
(
    `id_profile` INT(11)     NOT NULL AUTO_INCREMENT,
    `tipo`       VARCHAR(45) NULL DEFAULT NULL COMMENT 'Define o tipo do profile(admin, colaborador, etc)',
    PRIMARY KEY (`id_profile`)
)
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `blog_news`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog_news`.`user`
(
    `id_user`    INT(11)      NOT NULL AUTO_INCREMENT,
    `username`   VARCHAR(20)  NOT NULL,
    `password`   VARCHAR(50)  NOT NULL,
    `email`      VARCHAR(255) NOT NULL,
    `nome`       VARCHAR(45)  NOT NULL,
    `avatar`     MEDIUMBLOB   NULL DEFAULT NULL,
    `sobre`      VARCHAR(300) NULL DEFAULT NULL,
    `last_login` DATETIME     NULL DEFAULT NULL,
    `id_perfil`  INT(11)      NOT NULL,
    PRIMARY KEY (`id_user`),
    CONSTRAINT `fk_profile`
        FOREIGN KEY (`id_perfil`)
            REFERENCES `blog_news`.`profile` (`id_profile`)
)
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8;

CREATE INDEX `fk_profile` ON `blog_news`.`user` (`id_perfil` ASC);


-- -----------------------------------------------------
-- Table `blog_news`.`noticia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog_news`.`noticia`
(
    `id_news`      INT(11)      NOT NULL AUTO_INCREMENT,
    `title`        VARCHAR(300) NOT NULL,
    `subtitle`     TEXT         NULL DEFAULT NULL,
    `slug`         VARCHAR(100) NOT NULL,
    `body`         TEXT         NULL DEFAULT NULL,
    `data_criacao` DATETIME     NULL DEFAULT NULL,
    `img_capa`     MEDIUMBLOB   NULL DEFAULT NULL,
    `id_autor`     INT(11)      NOT NULL,
    PRIMARY KEY (`id_news`)
)
/*  CONSTRAINT `fk_user`
    FOREIGN KEY (`id_autor`)
    REFERENCES `blog_news`.`user` (`id_user`))*/
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8;
/*
CREATE INDEX `fk_user` ON `blog_news`.`noticia` (`id_autor` ASC);*/
ALTER TABLE `noticia`
    ADD CONSTRAINT `fk_autor` FOREIGN KEY (`id_autor`) REFERENCES `user` (`id_user`);


/*INSERT INTO user (`id_user`, `username`, `password`, `email`, `nome`,
                  `avatar`, `sobre`, `last_login`, `id_perfil`)
VALUES (NULL, 'netox', MD5(SHA1('1q2w3e')), 'netoxhoppus@gmail.com', 'João Neto', NULL, NULL, NULL, 1);*/

SET SQL_MODE = @OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS = @OLD_UNIQUE_CHECKS;


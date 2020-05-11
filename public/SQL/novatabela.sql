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
    `id_profile` INT          NOT NULL,
    `tipo`       VARCHAR(45)  NULL COMMENT 'Define o tipo do profile(admin, colaborador, etc)',
    `nome`       VARCHAR(45)  NULL,
    `avatar`     MEDIUMBLOB   NULL,
    `email`      VARCHAR(45)  NULL,
    `sobre`      VARCHAR(300) NULL,
    PRIMARY KEY (`id_profile`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `blog_news`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog_news`.`user`
(
    `id_user`    INT          NOT NULL,
    `username`   VARCHAR(16)  NOT NULL,
    `email`      VARCHAR(255) NULL,
    `password`   VARCHAR(32)  NOT NULL,
    `last_login` DATETIME     NULL,
    `id_perfil` INT          NOT NULL,
    PRIMARY KEY (`id_user`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `blog_news`.`noticia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog_news`.`noticia`
(
    `id_news`      INT          NOT NULL,
    `title`        VARCHAR(100) NULL,
    `subtitle`     VARCHAR(300) NULL,
    `body`         TEXT(2000)   NULL,
    `data_criacao` DATETIME     NULL,
    `img_capa`     MEDIUMBLOB   NULL,
    `id_autor`     INT          NOT NULL,
    PRIMARY KEY (`id_news`)
) ENGINE = InnoDB;


ALTER TABLE `noticia` ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_autor`) REFERENCES `user` (`id_user`);

ALTER TABLE `user` ADD CONSTRAINT `fk_profile` FOREIGN KEY (`id_perfil`) REFERENCES `profile` (`id_profile`);
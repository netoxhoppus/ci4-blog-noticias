CREATE DATABASE IF NOT EXISTS ci4database;

USE ci4database;

CREATE TABLE IF NOT EXISTS news
(
    id    int(11)      NOT NULL AUTO_INCREMENT,
    title varchar(128) NOT NULL,
    slug  varchar(128) NOT NULL,
    body  text         NOT NULL,
    PRIMARY KEY (id),
    KEY slug (slug)
);

CREATE TABLE IF NOT EXISTS users
(
    id       int(11)     NOT NULL AUTO_INCREMENT,
    name     varchar(20) NOT NULL,
    username varchar(20),
    password varchar(100) NOT NULL,
    last_login datetime,
    PRIMARY KEY (id)
);


INSERT INTO users VALUES (
    1, 'João Neto', MD5(sha1('1q2w3e')), 'netox', NOW()
);

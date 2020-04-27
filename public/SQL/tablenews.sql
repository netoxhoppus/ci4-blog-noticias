CREATE DATABASE IF NOT EXISTS ci4database;

USE ci4database;

CREATE TABLE IF NOT EXISTS news (
        id int(11) NOT NULL AUTO_INCREMENT,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        body text NOT NULL,
        PRIMARY KEY (id),
        KEY slug (slug)
);

CREATE TABLE IF NOT EXISTS users (
        id int(11) NOT NULL AUTO_INCREMENT,
        name varchar(20) NOT NULL,
        password varchar(50) NOT NULL,
        PRIMARY KEY (id)

);

INSERT INTO news VALUES 
(1,'Elvis sighted','elvis-sighted','Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.'),
(2,'Say it isn\'t so!','say-it-isnt-so','Scientists conclude that some programmers have a sense of humor.'),
(3,'Caffeination, Yes!','caffeination-yes','World\'s largest coffee shop open onsite nested coffee shop for staff only.');

INSERT INTO users VALUES (
    1,'netox', MD5(sha1('1q2w3e'))
);

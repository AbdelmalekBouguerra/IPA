CREATE DATABASE IF NOT EXISTS ipa;

DROP TABLE IF EXISTS users;

CREATE TABLE users(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    nom VARCHAR(255),
    prenom VARCHAR(255),
    matricule VARCHAR(50),
    email VARCHAR(255),
    fonction VARCHAR(255),
    userName VARCHAR(255),
    userPassword VARCHAR(255),
    userRole VARCHAR(255),
    userActif TINYINT
) DEFAULT CHARSET UTF8;

# chargament de table user avec user assia 0000
INSERT INTO
    users(userName, userPassword, userRole)
VALUES("assia", "0000", "user");

DROP TABLE IF EXISTS ticket;

CREATE TABLE ticket(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    idUser int NOT NULL,
    descriptionTicket VARCHAR(255),
    typeTicket VARCHAR(50)
) DEFAULT CHARSET UTF8;

INSERT INTO
    ticket(idUser, descriptionTicket, typeTicket)
VALUES("1", "panne de impriment", "reparation");
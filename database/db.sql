/*
 <?php $host = "localhost";
 //Ip of database, in this case my host machine $user = "root";
 //Username to use $pass = "";
 //Password for that user $dbname = "ipa";
 / / Name of the database try{$connection = new PDO(
 "mysql:host=$host;dbname=$dbname",
 $user,
 $pass
 );
 $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }catch(PDOException $e) { echo $e->getMessage();
 } 
 */

DROP DATABASE IF EXISTS ipa;

CREATE TABLE
    `departement` (
        `idDepartement` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
        `idDirection` int DEFAULT NULL,
        `libelleDepartement` varchar(5000) DEFAULT NULL,
        `codeDepartement` varchar(50) DEFAULT NULL,
        PRIMARY KEY (`idDepartement`)
    ) ENGINE = InnoDB AUTO_INCREMENT = 2 DEFAULT CHARSET = utf8mb3 COMMENT = ' ';

INSERT INTO `departement` VALUES (1,1,'info','info-01');

CREATE TABLE
    `direction` (
        `idDirection` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
        `libelleDirection` varchar(5000) DEFAULT NULL,
        `codeDirection` varchar(50) DEFAULT NULL,
        PRIMARY KEY (`idDirection`)
    ) ENGINE = InnoDB AUTO_INCREMENT = 2 DEFAULT CHARSET = utf8mb3 COMMENT = ' ';

INSERT INTO `direction` VALUES (1,'Direction générale','dir-01');

CREATE TABLE
    `fournisseur` (
        `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
        `libelle` varchar(255) DEFAULT NULL,
        `adress` varchar(5000) DEFAULT NULL,
        `num_tele` varchar(20) DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB AUTO_INCREMENT = 2 DEFAULT CHARSET = utf8mb3;

INSERT INTO `fournisseur`
VALUES (
        1,
        'Lenovo',
        '64 Chem. Sidi Yahia, Hydra 16000',
        '0561 60 67 67'
    );

CREATE TABLE
    `materiel` (
        `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
        `idUser` int DEFAULT NULL,
        `idFournisseur` int DEFAULT NULL,
        `libelle` varchar(500) DEFAULT NULL,
        `Marque` varchar(500) DEFAULT NULL,
        `typeMateriel` varchar(500) DEFAULT NULL,
        `categorie` varchar(500) DEFAULT NULL,
        `nSerie` varchar(300) DEFAULT NULL,
        `prixAchat` varchar(10) DEFAULT NULL,
        `dateAchat` date DEFAULT NULL,
        `dateMiseEnMarche` date DEFAULT NULL,
        `dateDebutGarantie` date DEFAULT NULL,
        `dateFinGarantie` date DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB AUTO_INCREMENT = 24 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

INSERT INTO `materiel`
VALUES (
        1,
        1,
        1,
        'laptop',
        'laptop T580',
        'Lenovo',
        'pc',
        '124572154',
        '110000',
        '2018-11-28',
        '2019-06-01',
        '2018-11-28',
        '2022-12-01'
    ), (
        2,
        1,
        1,
        'laptop L410',
        'ASUS',
        'pc',
        'laptop',
        '145468123',
        '150000',
        '2017-01-25',
        '2017-02-21',
        '2017-01-25',
        '2019-01-25'
    ), (
        3,
        2,
        1,
        'server RS700-E10-RS12U',
        'ASUS',
        'server',
        'Rack server',
        '455741581',
        '200000',
        '2020-01-15',
        '2022-05-12',
        '2020-01-15',
        '2025-01-15'
    ), (
        4,
        1,
        1,
        'NCS 500 Series',
        'CISCO',
        'Network Convergence',
        'WAN',
        '124578201',
        '75,294.27',
        '2022-07-02',
        '2022-07-02',
        '2022-07-02',
        '2022-07-02'
    ), (
        5,
        2,
        1,
        'cisco 1',
        'cisco',
        'resaux',
        'router',
        '4575sd',
        '100000.00',
        '2000-01-01',
        '2000-05-01',
        '2000-01-01',
        '2005-01-01'
    ), (
        6,
        1,
        1,
        'NCS 600 Series',
        'CISCO',
        'Network Convergence',
        'WAN',
        'finaly',
        '75,294.27',
        '2022-07-28',
        '2000-05-05',
        '2022-07-04',
        '2022-07-04'
    );

CREATE TABLE
    `service` (
        `idService` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
        `idDepartement` int DEFAULT NULL,
        `libelleService` varchar(5000) DEFAULT NULL,
        `codeService` varchar(50) DEFAULT NULL,
        PRIMARY KEY (`idService`)
    ) ENGINE = InnoDB AUTO_INCREMENT = 2 DEFAULT CHARSET = utf8mb3 COMMENT = ' ';

INSERT INTO `service` VALUES (1,1,'informatique','ser-01');

CREATE TABLE
    `ticket` (
        `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
        `idUser` int NOT NULL,
        `descriptionTicket` varchar(255) DEFAULT NULL,
        `typeTicket` varchar(50) DEFAULT NULL,
        `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'open',
        `materiel` varchar(5000) DEFAULT NULL,
        `time` datetime DEFAULT CURRENT_TIMESTAMP,
        `motifRefus` varchar(5000) DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB AUTO_INCREMENT = 46 DEFAULT CHARSET = utf8mb3;

INSERT INTO `ticket`
VALUES (
        41,
        4,
        'saa',
        'Remplacement de piece',
        'refuse',
        NULL,
        '2022-07-02 18:20:40',
        'test rejet'
    ), (
        43,
        2,
        '1',
        'Achat matériel',
        'refuse',
        NULL,
        '2022-07-03 02:17:46',
        'test 2'
    ), (
        44,
        2,
        '2',
        'Remplacement de piece',
        'fermer',
        'server RS700-E10-RS12U',
        '2022-07-03 02:17:56',
        NULL
    ), (
        45,
        1,
        '3',
        'Reparation de matériel',
        'fermer',
        'laptop T580,laptop L410',
        '2022-07-03 02:18:39',
        NULL
    );

CREATE TABLE
    `users` (
        `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
        `idService` int DEFAULT NULL,
        `nom` varchar(255) DEFAULT NULL,
        `prenom` varchar(255) DEFAULT NULL,
        `matricule` varchar(50) DEFAULT NULL,
        `email` varchar(255) DEFAULT NULL,
        `fonction` varchar(255) DEFAULT NULL,
        `userName` varchar(255) DEFAULT NULL,
        `userPassword` varchar(255) DEFAULT NULL,
        `userRole` varchar(255) DEFAULT NULL,
        `userActif` tinyint DEFAULT '1',
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB AUTO_INCREMENT = 8 DEFAULT CHARSET = utf8mb3;

INSERT INTO `users`
VALUES (
        1,
        1,
        'boutakhedmit',
        'assia',
        '1818310',
        'assia@gmail.com',
        'IT',
        'assia',
        '0000',
        'directeur',
        1
    ), (
        2,
        1,
        'boutakhedmit',
        'yousef',
        '1919310',
        'yousef@gmail.com',
        'IT',
        'youcef',
        '0000',
        'utilisateur',
        1
    ), (
        3,
        1,
        'boutakhedmit',
        'youssra',
        '2020310',
        'youssra@gmail.com',
        'IT',
        'youssra',
        '0000',
        'technicien',
        1
    ), (
        4,
        1,
        'boutakhedmit',
        'mohamed',
        '2121301',
        'Mohamed@gmail.com',
        'IT',
        'mohamed',
        '0000',
        'superAdmin',
        1
    );

-- count

SELECT * FROM ticket;
DROP DATABASE if EXISTS papyrus;
CREATE DATABASE papyrus;
DROP USER if EXISTS 'util1'@'%';
DROP USER if EXISTS 'util2'@'%';
DROP USER if EXISTS 'util3'@'%';


CREATE USER 'util1'@'%' IDENTIFIED BY '';
CREATE USER 'util2'@'%' IDENTIFIED BY '';
CREATE USER 'util3'@'%' IDENTIFIED BY '';


USE papyrus;


CREATE TABLE Fournis
(
NUMFOU TINYINT NOT NULL AUTO_INCREMENT,
NOMFOU VARCHAR(25) NOT NULL,
RUEFOU VARCHAR(50) NOT NULL,
POSFOU CHAR(5) NOT NULL,
VILFOU VARCHAR(30) NOT NULL,
CONFOU VARCHAR(15) NOT NULL,
SATISF TINYINT,

PRIMARY KEY (NUMFOU)
);

CREATE TABLE Produit
(
CODART CHAR(4),
LIBART VARCHAR(30) NOT NULL,
STKALE INT NOT NULL,
STKPHY INT NOT NULL,
QTEANN INT NOT NULL,
UNIMES CHAR(5) NOT NULL,

PRIMARY KEY (CODART)
);

CREATE TABLE Vente
(
DELLIV SMALLINT NOT NULL,
QT1 INT NOT NULL,
PRIX1 INT NOT NULL,
QT2 INT,
PRIX2 INT,
QT3 INT,
PRIX3 INT,
NUMFOU TINYINT NOT NULL,
CODART CHAR(4) NOT NULL,
PK_vente INT AUTO_INCREMENT,

PRIMARY KEY (PK_vente),
FOREIGN KEY (NUMFOU) REFERENCES Fournis(NUMFOU),
FOREIGN KEY (CODART) REFERENCES Produit(CODART)
);

CREATE TABLE Entcom
(
NUMCOM INT AUTO_INCREMENT,
OBSCOM VARCHAR(50),
DATCOM DATETIME NOT NULL DEFAULT NOW(),
NUMFOU TINYINT NOT NULL,

PRIMARY KEY (NUMCOM),
FOREIGN KEY (NUMFOU) REFERENCES Fournis(NUMFOU)
);

CREATE TABLE Ligcom
(
NUMLIG TINYINT AUTO_INCREMENT,
QTECDE INT NOT NULL,
PRIUNI VARCHAR(50) NOT NULL,
QTELIV INT,
DERLIV DATETIME NOT NULL,
NUMCOM INT NOT NULL,
CODART CHAR(4) NOT NULL,

PRIMARY KEY (NUMLIG),
FOREIGN KEY (NUMCOM) REFERENCES Entcom (NUMCOM),
FOREIGN KEY (CODART) REFERENCES Produit (CODART)
);

GRANT ALL ON papyrus.* TO util1;
GRANT SELECT ON papyrus.* TO util2;
GRANT SELECT ON papyrus.Fournis TO util3;

CREATE UNIQUE INDEX index_numfou ON Entcom(NUMFOU);


LOAD DATA LOCAL INFILE 'produit.csv'
INTO TABLE Produit
FIELDS TERMINATED BY ';'
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES
(CODART,LIBART,UNIMES,STKALE,STKPHY,QTEANN);


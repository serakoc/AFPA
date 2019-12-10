DROP DATABASE if EXISTS Eval;

CREATE DATABASE Eval;

USE Eval;

CREATE TABLE CLIENT 
(
cli_num INT AUTO_INCREMENT,
cli_nom VARCHAR(50) NOT NULL,
cli_adresse VARCHAR(50) NOT NULL,
cli_tel VARCHAR(50),
PRIMARY KEY(cli_num)
);

CREATE TABLE Produit
(
pro_num INT AUTO_INCREMENT,
pro_libelle VARCHAR(50),
pro_description VARCHAR(50),
PRIMARY KEY (pro_num)
);

CREATE TABLE Commande 
(
com_num INT AUTO_INCREMENT,
cli_num INT,
com_date DATETIME,
com_obs VARCHAR(50),
PRIMARY KEY (com_num),
FOREIGN KEY (cli_num) REFERENCES CLIENT(cli_num)
);

CREATE TABLE est_compose
(
com_num INT,
pro_num INT,
est_qte INT,
FOREIGN KEY (com_num) REFERENCES commande(com_num),
FOREIGN KEY (pro_num) REFERENCES produit(pro_num),
PRIMARY KEY (com_num,pro_num)
);

CREATE INDEX index_nom ON CLIENT(nom);
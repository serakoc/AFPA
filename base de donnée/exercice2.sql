DROP DATABASE if EXISTS ex02;
CREATE DATABASE ex02;
USE ex02;

CREATE TABLE Reservation 
(
num_chambre INT UNSIGNED NOT NULL,
num_client INT UNSIGNED,
date_debut DATE NOT NULL,
date_fin DATE NOT NULL,
date_reservation DATETIME NOT NULL, 
montant_arrhes INT,
prix_total INT NOT NULL, 
CONSTRAINT PK_num_client PRIMARY KEY(num_client),
CONSTRAINT FK_num_client FOREIGN KEY (num_client) REFERENCES Client(num_client),
CONSTRAINT FK_num_chambre FOREIGN KEY (num_chambre) REFERENCES Chambre(num_chambre)
);

CREATE TABLE Chambre
(
capacite_chambre SMALLINT NOT NULL,
degre_confort SMALLINT NOT NULL,
exposition VARCHAR(10),
type_chambre VARCHAR(10),
num_hotel INT NOT NULL,
num_chambre INT UNSIGNED NOT NULL AUTO_INCREMENT,
CONSTRAINT PK_num_chambre PRIMARY KEY (num_chambre),
CONSTRAINT FK_num_hotel FOREIGN KEY (num_hotel) REFERENCES Hotel(num_hotel)
);

CREATE TABLE Hotel
(
capacite_hotel SMALLINT NOT NULL,
categorie_hotel SMALLINT NOT NULL,
nom_hotel VARCHAR(20) NOT NULL,
adresse_hotel VARCHAR(50) NOT NULL,
num_station SMALLINT NOT NULL,
num_hotel INT NOT NULL,
CONSTRAINT PK_num_hotel PRIMARY KEY(num_hotel),
CONSTRAINT FK_num_station FOREIGN KEY (num_station) REFERENCES Station(num_station)
);

CREATE TABLE Station 
(
num_station SMALLINT NOT NULL,
nom_station VARCHAR(50) NOT NULL,
CONSTRAINT PK_num_station PRIMARY KEY (num_station)
);

CREATE TABLE Client
(
adresse_client VARCHAR(50) NOT NULL,
nom_client VARCHAR(30) NOT NULL,
prenom_client VARCHAR(30) NOT NULL,
num_client INT UNSIGNED AUTO_INCREMENT NOT NULL,
CONSTRAINT PK_num_client PRIMARY KEY (num_client)
);
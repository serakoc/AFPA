DROP DATABASE if EXISTS ex02;
CREATE DATABASE ex02;
USE ex02;

CREATE TABLE Client
(
num_client INT AUTO_INCREMENT NOT NULL,
adresse_client VARCHAR(50) NOT NULL,
nom_client VARCHAR(30) NOT NULL,
prenom_client VARCHAR(30) NOT NULL,
PRIMARY KEY (num_client)
);

CREATE TABLE Station 
(
num_station INT NOT NULL AUTO_INCREMENT,
nom_station VARCHAR(50) NOT NULL,
PRIMARY KEY (num_station)
);

CREATE TABLE Hotel
(
capacite_hotel INT NOT NULL,
categorie_hotel INT NOT NULL,
nom_hotel VARCHAR(20) NOT NULL,
adresse_hotel VARCHAR(50) NOT NULL,
num_station INT,
num_hotel INT AUTO_INCREMENT,
PRIMARY KEY(num_hotel),
FOREIGN KEY (num_station) REFERENCES Station(num_station)
);

CREATE TABLE Chambre
(
capacite_chambre INT NOT NULL,
degre_confort INT NOT NULL,
exposition VARCHAR(10),
type_chambre VARCHAR(10),
num_hotel INT,
num_chambre INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY (num_chambre),
FOREIGN KEY (num_hotel) REFERENCES Hotel(num_hotel)
);

CREATE TABLE Reservation 
(
num_chambre INT NOT NULL,
num_client INT AUTO_INCREMENT,
date_debut DATE NOT NULL,
date_fin DATE NOT NULL,
date_reservation DATETIME NOT NULL, 
montant_arrhes INT,
prix_total INT NOT NULL, 
PRIMARY KEY(num_client),
FOREIGN KEY (num_client) REFERENCES Client(num_client),
FOREIGN KEY (num_chambre) REFERENCES Chambre(num_chambre)
);


/* -------------------- sta1*/
INSERT INTO Station(nom_station)
VALUES ('sta1');

INSERT INTO Hotel(capacite_hotel,
categorie_hotel,
nom_hotel,
adresse_hotel) VALUES
(5,5,'st1h1','france');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Hotel(capacite_hotel,
categorie_hotel,
nom_hotel,
adresse_hotel) VALUES
(4,4,'st1h2','france');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Hotel(capacite_hotel,
categorie_hotel,
nom_hotel,
adresse_hotel) VALUES
(3,4,'st1h3','france');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');


/* ----------------------- sta2*/
INSERT INTO Station(nom_station)
VALUES ('sta2');

INSERT INTO Hotel(capacite_hotel,
categorie_hotel,
nom_hotel,
adresse_hotel) VALUES
(5,5,'st2h1','france');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Hotel(capacite_hotel,
categorie_hotel,
nom_hotel,
adresse_hotel) VALUES
(4,4,'st2h2','france');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Hotel(capacite_hotel,
categorie_hotel,
nom_hotel,
adresse_hotel) VALUES
(3,4,'st2h3','france');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

/*-------------------------- sta3   */

INSERT INTO Station(nom_station)
VALUES ('sta3');

INSERT INTO Hotel(capacite_hotel,
categorie_hotel,
nom_hotel,
adresse_hotel) VALUES
(5,5,'st3h1','france');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Hotel(capacite_hotel,
categorie_hotel,
nom_hotel,
adresse_hotel) VALUES
(4,4,'st1h2','france');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Hotel(capacite_hotel,
categorie_hotel,
nom_hotel,
adresse_hotel) VALUES
(3,4,'st3h3','france');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');

INSERT INTO Chambre(capacite_chambre,
degre_confort,
exposition,
type_chambre) VALUES
(5,5,'sud','confort');








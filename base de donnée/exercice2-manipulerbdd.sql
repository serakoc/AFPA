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
num_station INT NOT NULL,
num_hotel INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(num_hotel),
FOREIGN KEY (num_station) REFERENCES Station(num_station)
);

CREATE TABLE Chambre
(
capacite_chambre INT NOT NULL,
degre_confort INT NOT NULL,
exposition VARCHAR(10),
type_chambre VARCHAR(10),
num_hotel INT NOT NULL,
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



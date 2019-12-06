DROP DATABASE IF EXISTS MPD;
CREATE DATABASE MPD;
USE MPD;

CREATE TABLE Personne (
per_num INT NOT NULL AUTO_INCREMENT,
per_nom VARCHAR(50) NOT NULL,
per_prenom VARCHAR(50) NOT NULL,
per_adresse VARCHAR(50),
per_ville VARCHAR(50),
PRIMARY KEY(per_num)
);

CREATE TABLE Groupe (
gro_num INT NOT NULL AUTO_INCREMENT,
gro_libelle VARCHAR(50),
PRIMARY KEY(gro_num)
);

CREATE TABLE Appartient (
PK_Personne INT NOT NULL,
PK_Groupe INT NOT NULL,
id INT auto_increment,
FOREIGN KEY (PK_Personne) REFERENCES Personne(per_num),
FOREIGN KEY (PK_Groupe) REFERENCES Groupe(gro_num),
PRIMARY KEY (id)
);
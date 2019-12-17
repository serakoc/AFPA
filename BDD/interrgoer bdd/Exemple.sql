drop DATABASE if EXISTS exemple;
create database exemple;

use exemple;


CREATE TABLE dept (
	nodept 		varchar(50) NOT NULL PRIMARY KEY,
	nom 		varchar(50) NOT NULL,
	noregion 	varchar(50) NOT NULL
);

CREATE TABLE employe(
	noemp 		int NOT NULL PRIMARY KEY,
	nom 		varchar(50) NOT NULL,
	prenom 		varchar(50) NOT NULL,
	dateemb 	datetime NOT NULL,
	nosup 		varchar(50) NULL,
	titre 		varchar(50) NOT NULL,
	nodep 		varchar(50) NOT NULL REFERENCES dept(nodept),
	salaire 	decimal(18, 0) NOT NULL,
	tauxcom 	decimal(18, 0) NULL
);



INSERT INTO  dept  ( nodept ,  nom ,  noregion ) VALUES ('10', 'finance', '1');
INSERT INTO  dept  ( nodept ,  nom ,  noregion ) VALUES ('20', 'atelier', '2');
INSERT INTO  dept  ( nodept ,  nom ,  noregion ) VALUES ('30', 'atelier', '3');
INSERT INTO  dept  ( nodept ,  nom ,  noregion ) VALUES ('31', 'vente', '1');
INSERT INTO  dept  ( nodept ,  nom ,  noregion ) VALUES ('32', 'vente', '2');
INSERT INTO  dept  ( nodept ,  nom ,  noregion ) VALUES ('33', 'vente', '3');
INSERT INTO  dept  ( nodept ,  nom ,  noregion ) VALUES ('34', 'vente', '4');
INSERT INTO  dept  ( nodept ,  nom ,  noregion ) VALUES ('35', 'vente', '5');
INSERT INTO  dept  ( nodept ,  nom ,  noregion ) VALUES ('41', 'distribution', '1');
INSERT INTO  dept  ( nodept ,  nom ,  noregion ) VALUES ('42', 'distribution', '2');
INSERT INTO  dept  ( nodept ,  nom ,  noregion ) VALUES ('43', 'distribution', '3');
INSERT INTO  dept  ( nodept ,  nom ,  noregion ) VALUES ('44', 'distribution', '4');
INSERT INTO  dept  ( nodept ,  nom ,  noregion ) VALUES ('45', 'distribution', '5');
INSERT INTO  dept  ( nodept ,  nom ,  noregion ) VALUES ('50', 'administration', '1');




INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (1, 'patamob', 'adhémar', '20000326', NULL, 'président', '50', 50000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (2, 'zeublouse', 'agathe', '20000415', '1', 'dir.distrib', '41', 35000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (3, 'kuzbidon', 'alex', '20000505', '1', 'dir.vente', '31', 34000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (4, 'locale', 'anasthasie', '20000525', '1', 'dir.finance', '10', 36000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (5, 'teutmaronne', 'armand', '20000614', '1', 'dir.administratif', '50', 36000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (6, 'zoudanlkou', 'debbie', '20000704', '2', 'chef entrepot', '41', 25000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (7, 'rivenbusse', 'elsa', '20000724', '2', 'chef entrepot', '42', 24000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (8, 'ardelpic', 'helmut', '20000813', '2', 'chef entrepot', '43', 23000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (9, 'peursconla', 'humphrey', '20000902', '2', 'chef entrepot', '44', 22000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (10, 'vrante', 'helena', '20000922', '2', 'chef entrepot', '45', 21000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (11, 'melusine', 'enfaillite', '20001012', '3', 'représentant', '31', 25000, 10);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (12, 'eurktumeme', 'odile', '20001101', '3', 'représentant', '32', 26000, 12);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (13, 'hotdeugou', 'olaf', '20001121', '3', 'représentant', '33', 27000, 10);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (14, 'odlavieille', 'pacome', '20001211', '3', 'représentant', '34', 25000, 15);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (15, 'amartakaldire', 'quentin', '20001221', '3', 'représentant', '35', 23000, 17);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (16, 'traibien', 'samira', '20001231', '6', 'secrétaire', '41', 15000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (17, 'fonfec', 'sophie', '20010110', '6', 'secrétaire', '41', 14000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (18, 'fairent', 'teddy', '20010120', '7', 'secrétaire', '42', 13000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (19, 'blaireur', 'terry', '20010209', '7', 'secrétaire', '42', 13000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (20, 'ajerre', 'tex', '20010209', '8', 'secrétaire', '43', 13000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (21, 'chmonfisse', 'thierry', '20010219', '8', 'secrétaire', '43', 12000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (22, 'phototetedemort', 'thomas', '20010219', '9', 'secrétaire', '44', 22500, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (23, 'kaecoute', 'xavier', '20010301', '9', 'secrétaire', '34', 11500, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (24, 'adrouille-toutltan', 'yves', '20010311', '10', 'secrétaire', '45', 11000, NULL);
INSERT INTO  employe  ( noemp ,  nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom ) VALUES (25, 'anchier', 'yvon', '20010321', '10', 'secrétaire', '45', 10000, NULL);
/*1.Afficher toutes les informations concernant les employés. */
SELECT * FROM employe;
/*2.Afficher toutes les informations concernant les départements. */
SELECT * FROM dept;
/*3.Afficher le nom, la date d'embauche, le numéro du supérieur, le numéro de département et le salaire de tous les employées*/
SELECT nom,dateemb,nosup, nodep, salaire FROM employe;
/*4.Afficher le titre de tous les employés. */
SELECT DISTINCT nom ,  prenom ,  dateemb ,  nosup ,  titre ,  nodep ,  salaire ,  tauxcom FROM employe;
/*5 */
SELECT DISTINCT prenom AS "prénom employé", titre AS "titre dans l'entreprise",  salaire ,  tauxcom AS "commision (exprimée en pourcentage)" FROM employe;
/*6*/
SELECT * FROM employe WHERE titre = 'secretaire';
/*7*/
SELECT nom,nodep FROM employe WHERE nodep > 40; 
/*8*/
SELECT nom,prenom FROM employe WHERE nom < prenom;
/*9*/
SELECT nom,salaire,nodep FROM employe WHERE titre = 'Représentant' AND nodep = 35 AND salaire > 20000;
/*10*/
SELECT nom,titre,salaire FROM employe WHERE titre ='Représentant' OR titre = 'Président';
/*11*/
SELECT nom, titre,nodep,salaire FROM employe WHERE nodep = 34 AND (titre ='Représentant' OR titre = 'Président');
/*12*/
SELECT nom,titre,nodep,salaire FROM employe WHERE nodep=34 AND (titre ='Représentant' OR titre = 'Secrétaire');
/*13*/
SELECT nom, salaire FROM employe WHERE salaire <30000 AND salaire > 20000;
/*14*/
/*?*/
/*15*/
SELECT nom FROM employe WHERE nom LIKE 'H%';
/*16*/
SELECT nom FROM employe WHERE nom LIKE '%n';
/*17*/
SELECT nom FROM employe WHERE nom LIKE '__u%';
/*18*/
SELECT salaire,nom FROM employe WHERE nodep = 41 ORDER BY salaire;
/*19*/
SELECT salaire, nom FROM employe WHERE nodep=41 ORDER BY salaire DESC;
/*20*/
SELECT titre,salaire,nom FROM employe ORDER BY titre, salaire DESC;
/*21*/
SELECT tauxcom,salaire,nom FROM employe ORDER BY tauxcom;
/*22*/
SELECT nom,salaire,tauxcom,titre FROM employe WHERE tauxcom is NULL;
/*23*/
SELECT nom,salaire,tauxcom,titre FROM employe WHERE tauxcom is NOT NULL;
/*24*/
SELECT nom,salaire,tauxcom,titre FROM employe WHERE tauxcom is NOT NULL AND tauxcom < 15;
/*25*/
SELECT nom,salaire,tauxcom,titre FROM employe WHERE tauxcom is NOT NULL AND tauxcom > 15;
/*26*/
SELECT nom,salaire,tauxcom, tauxcom*0.01*salaire AS 'commission touché' FROM employe WHERE salaire*0.01*tauxcom IS NOT NULL;
/*27*/
SELECT nom,salaire,tauxcom, tauxcom*0.01*salaire AS 'commission touché' FROM employe WHERE salaire*0.01*tauxcom IS NOT NULL ORDER BY tauxcom;
/*28*/
SELECT CONCAT(nom,prenom) AS 'concat de nom et prénom' FROM employe;
/*29*/
SELECT SUBSTRING(nom,1,5) AS '5 premiers caracts de nom' FROM employe;
/*30*/
SELECT LOCATE('r',nom) AS 'rang r' FROM employe;
/*31*/
SELECT nom, UPPER(nom) AS 'maj',LOWER(nom) AS 'min' FROM employe;
/*32*/
SELECT nom, LENGTH(nom) AS 'nombre caract nom' FROM employe;

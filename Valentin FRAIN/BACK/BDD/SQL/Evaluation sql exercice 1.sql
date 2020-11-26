DROP DATABASE IF EXISTS hotel;
CREATE DATABASE hotel;
USE hotel;


CREATE TABLE client (
	cli_num INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	cli_nom VARCHAR(50),
	cli_adresse VARCHAR(50),
	cli_tel VARCHAR(30)
);	
CREATE TABLE Produit (
	pro_num INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	pro_libelle VARCHAR(50),
	pro_description VARCHAR(50)
);		
CREATE TABLE Commande (
	com_num INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	cli_num INT,
	FOREIGN KEY (cli_num) REFERENCES client(cli_num),
	com_date DATETIME,
	com_obs VARCHAR(50)
);
CREATE TABLE est_compose (
com_num INT,
pro_num INT,
est_qte INT,
FOREIGN KEY (com_num) REFERENCES Commande(com_num),
FOREIGN KEY (pro_num) REFERENCES Produit(pro_num)
);

CREATE INDEX nom_client ON Client (cli_nom);


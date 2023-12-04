
create database forum;

CREATE TABLE utilisateur (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(45) NOT NULL,
  nomUtilisitaseurEmail VARCHAR(45) UNIQUE NOT NULL,
  motDePasse VARCHAR(80) NOT NULL,
  dateNaissance DATE NOT NULL
);

CREATE TABLE forum (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(40) NOT NULL,
  article TEXT NOT NULL,
  dateArticle DATE NOT NULL,
  author VARCHAR(30) NOT NULL,
  utilisateur_ID INT,
  FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id)
);



SELECT * FROM utilisateur;



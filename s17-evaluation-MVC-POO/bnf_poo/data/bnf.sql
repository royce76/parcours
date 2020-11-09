DROP DATABASE IF EXISTS bnf;
CREATE DATABASE bnf CHARACTER SET 'utf8';
USE bnf;

CREATE TABLE User(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  lastname VARCHAR(50) NOT NULL,
  firstname VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  city VARCHAR(30) NOT NULL,
  cityCode CHAR(5) NOT NULL,
  adress VARCHAR(50) NOT NULL,
  sex CHAR(1) NOT NULL,
  birthDate DATE NOT NULL,
  borrowingDate DATE NOT NULL,
  identificationUser CHAR(9) NOT NULL UNIQUE,
  PRIMARY KEY (id)
)
ENGINE=InnoDB;

INSERT INTO User(lastname, firstname, email, city, cityCode, adress, sex, birthDate, borrowingDate, identificationUser)
VALUES
("George", "Royce", "royce@hotmail.com", "Oissel", "76350", "16 rue Pierre Sémard", "M", "1986-09-19", NOW(), "123456789"),
("Morgane", "Clara", "clara@gmail.com", "Alfortville", "94140", "2 rue de Lisbonne", "F", "1998-08-17", "2020-09-30", "987654321");


CREATE TABLE Book(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  isbn CHAR(13) NOT NULL UNIQUE,
  title VARCHAR(100) NOT NULL,
  author VARCHAR(100) NOT NULL,
  publisher VARCHAR(100) NOT NULL,
  publicationYear YEAR NOT NULL,
  pagesNumber INT NOT NULL,
  summary TEXT NOT NULL,
  quantity INT NOT NULL,
  bookType VARCHAR(50) NOT NULL,
  bookNature VARCHAR(50) NOT NULL,
  identificationBook CHAR(10) NOT NULL UNIQUE,
  userId INT UNSIGNED,
  PRIMARY KEY (id),
  FOREIGN KEY (userId) REFERENCES User(id)
)
ENGINE=InnoDB;

INSERT INTO Book(isbn, title, author, publisher, publicationYear, pagesNumber, summary, quantity, bookType, bookNature, identificationBook, userId)
VALUES
("9782266259453", "Elle & lui", "Marc Levy", "Pocket", "2015", "373", "Elle est actrice, lui est écrivain.", "4", "Roman", "Romance", "1234567890", 2),
("9782266243261", "Beautiful Bastard", "Christina Lauren", "Pocket", "2013", "328", "Brillante et déterminée,Chloé n'a qu'un problème dans la vie...", "2", "Roman", "Erotique", "9876543210", null),
('9782864972662', 'Astérix chez les Pictes', 'Jean-Yves Ferri', 'Albert René', "2013", "50", 'Je sais, je suis tombé dans la marmite quand j\'étais petit...', "4", 'Bande dessinée', 'Humour', '5983215890', null);

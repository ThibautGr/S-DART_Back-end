CREATE DATABASE IF NOT EXISTS  SDART CHARACTER  SET utf8 COLLATE  utf8_general_ci;
CREATE TABLE `users` (
  `idUser` int PRIMARY KEY AUTO_INCREMENT,
  `firstName` varchar(50),
  `lastName` varchar(50),
  `pseudo` varchar(50),
  `password` varchar(50),
  `description` text,
  `skill3d` boolean,
  `skillGraphique` boolean,
  `skillDigital` boolean,
  `levelAdminUser` int(1),
  `mail` varchar (150),
  `entreprise` varchar(150) DEFAULT "null",
  `createdAt` timestamp,
  `idCountry` int
);

CREATE TABLE `market` (
  `idVente` int PRIMARY KEY AUTO_INCREMENT,
  `idUser` int,
  `idProduct` int,
  `price` decimal(11,2),
  `description` text,
  `matiereSupport` varchar(150),
  `quantityAvailable` int(11),
  `idCountry` int
);

CREATE TABLE `artGraphic` (
  `idArtGraph` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(50),
  `description` text,
  `linkImg` text,
  `idUser` int,
  `createdAt` timestamp
);

CREATE TABLE `art3D` (
  `idArt3D` int PRIMARY KEY,
  `title` varchar(50),
  `linkImg` text,
  `description` text,
  `idUser` int,
  `createdAt` timestamp
);

CREATE TABLE `artDigital` (
  `idArtDigital` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(50),
  `linkImg` text,
  `description` text,
  `idUser` int,
  `createdAt` timestamp
);

CREATE TABLE `actuality` (
  `idActu` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(50),
  `description` text,
  `linkImgUn` text,
  `linkImgDeux` text,
  `linkImgtrois` text,
  `idUser` int,
  `idRef` int
);

CREATE TABLE `job` (
  `idJob` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(100),
  `idCountry` int,
  `retrubtionYear` decimal(11,2),
  `studyLevelSkill` text,
  `description` text,
  `forWhen` datetime,
  `idUser` int
);

CREATE TABLE `tutorial` (
  `idRTutorial` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(50),
  `description` text,
  `support` text,
  `idRef` int,
  `idUser` int
);

CREATE TABLE `country` (
  `idCountry` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50)
);

CREATE TABLE `accueil` (
  `idActu` int,
  `art3D` int,
  `artGraphic` int,
  `artDigital` int,
  `idRTutorial` int,
  `idJob` int
);

ALTER TABLE `users` ADD FOREIGN KEY (`idCountry`) REFERENCES `country` (`idCountry`);

ALTER TABLE `market` ADD FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

ALTER TABLE `market` ADD FOREIGN KEY (`idProduct`) REFERENCES `artGraphic` (`idArtGraph`);

ALTER TABLE `market` ADD FOREIGN KEY (`idProduct`) REFERENCES `art3D` (`idArt3D`);

ALTER TABLE `market` ADD FOREIGN KEY (`idProduct`) REFERENCES `artDigital` (`idArtDigital`);

ALTER TABLE `market` ADD FOREIGN KEY (`idCountry`) REFERENCES `country` (`idCountry`);

ALTER TABLE `artGraphic` ADD FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

ALTER TABLE `art3D` ADD FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

ALTER TABLE `artDigital` ADD FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

ALTER TABLE `actuality` ADD FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

ALTER TABLE `actuality` ADD FOREIGN KEY (`idRef`) REFERENCES `artGraphic` (`idArtGraph`);

ALTER TABLE `actuality` ADD FOREIGN KEY (`idRef`) REFERENCES `art3D` (`idArt3D`);

ALTER TABLE `actuality` ADD FOREIGN KEY (`idRef`) REFERENCES `artDigital` (`idArtDigital`);

ALTER TABLE `job` ADD FOREIGN KEY (`idCountry`) REFERENCES `country` (`idCountry`);

ALTER TABLE `job` ADD FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

ALTER TABLE `tutorial` ADD FOREIGN KEY (`idRef`) REFERENCES `artGraphic` (`idArtGraph`);

ALTER TABLE `tutorial` ADD FOREIGN KEY (`idRef`) REFERENCES `art3D` (`idArt3D`);

ALTER TABLE `tutorial` ADD FOREIGN KEY (`idRef`) REFERENCES `artDigital` (`idArtDigital`);

ALTER TABLE `tutorial` ADD FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

ALTER TABLE `accueil` ADD FOREIGN KEY (`idActu`) REFERENCES `actuality` (`idActu`);

ALTER TABLE `accueil` ADD FOREIGN KEY (`art3D`) REFERENCES `art3D` (`idArt3D`);

ALTER TABLE `accueil` ADD FOREIGN KEY (`artGraphic`) REFERENCES `artGraphic` (`idArtGraph`);

ALTER TABLE `accueil` ADD FOREIGN KEY (`artDigital`) REFERENCES `artDigital` (`idArtDigital`);

ALTER TABLE `accueil` ADD FOREIGN KEY (`idRTutorial`) REFERENCES `tutorial` (`idRTutorial`);

ALTER TABLE `accueil` ADD FOREIGN KEY (`idJob`) REFERENCES `job` (`idJob`);

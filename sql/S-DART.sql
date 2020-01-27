drop table if exists `users`;
CREATE TABLE `users` (
  `idUser` int PRIMARY KEY AUTO_INCREMENT,
  `firstName` varchar(50),
  `lastName` varchar(50),
  `pseudo` varchar(50),
  `inconLink`varchar (150),
  `password` varchar(50),
  `description` text,
  `artPratice` int,
  `levelAdminUser` int(1),
  `mail` varchar(150),
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

CREATE TABLE `art` (
  `idArt` int PRIMARY KEY AUTO_INCREMENT,
  `idTypeArt` int,
  `title` varchar(50),
  `description` text,
  `linkImg` text,
  `idUser` int,
  `createdAt` timestamp
);

CREATE TABLE `typeArt` (
  `idTypeArt` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50)
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
  `idRef` int,
  `idJob` int
);

ALTER TABLE `users` ADD FOREIGN KEY (`artPratice`) REFERENCES `typeArt` (`idTypeArt`);

ALTER TABLE `users` ADD FOREIGN KEY (`idCountry`) REFERENCES `country` (`idCountry`);

ALTER TABLE `market` ADD FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

ALTER TABLE `market` ADD FOREIGN KEY (`idProduct`) REFERENCES `art` (`idArt`);

ALTER TABLE `market` ADD FOREIGN KEY (`idCountry`) REFERENCES `country` (`idCountry`);

ALTER TABLE `art` ADD FOREIGN KEY (`idTypeArt`) REFERENCES `typeArt` (`idTypeArt`);

ALTER TABLE `art` ADD FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

ALTER TABLE `actuality` ADD FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

ALTER TABLE `actuality` ADD FOREIGN KEY (`idRef`) REFERENCES `art` (`idArt`);

ALTER TABLE `job` ADD FOREIGN KEY (`idCountry`) REFERENCES `country` (`idCountry`);

ALTER TABLE `job` ADD FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

ALTER TABLE `tutorial` ADD FOREIGN KEY (`idRef`) REFERENCES `art` (`idArt`);

ALTER TABLE `tutorial` ADD FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

ALTER TABLE `accueil` ADD FOREIGN KEY (`idActu`) REFERENCES `actuality` (`idActu`);

ALTER TABLE `accueil` ADD FOREIGN KEY (`idRef`) REFERENCES `art` (`idArt`);

ALTER TABLE `accueil` ADD FOREIGN KEY (`idJob`) REFERENCES `job` (`idJob`);

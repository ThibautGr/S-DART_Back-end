DROP TABLE if exists `user`;

CREATE TABLE `user`(
    userPseudo varchar(50) not null  PRIMARY KEY,
    userPassWord varchar(50) not null ,
    userFirstName varchar(50) not null ,
    userLastName varchar(50) not null ,
    userAddress varchar(50)not null,
    userCity varchar(50)not null ,
    userPostalCode int(15) not null ,
    userCountry varchar(50) not null ,
    userMail varchar(70) not null ,
    userDescription text(1500)not null ,
    userEntreprise varchar(50) default null ,
    userSkill varchar(10) not null ,
    userLevel int(1) not null ,
    userPicProfilLink varchar(150) not null
);

/*data for try my user table*/

INSERT INTO `user`(userPseudo,userPassWord,userFirstName,userLastName,userAddress,userCity,userPostalCode,userCountry,userMail,userDescription,userEntreprise,userSkill,userLevel,userPicProfilLink) values
('Heagle test2','123pwd','Eliot','Testeur','5 rue du test','testCity',66666,'testland','testeur.test@test.com','je suis le testeur de niveau 1 avec pleine de test à dire','testeurama','3d',2,'img/imgProfileUser/imgageduTesteur.png'),
('Heagle test3','123pwd','Eliot','Testeur','5 rue du test','testCity',66666,'testland','testeur.test@test.com','je suis le testeur de niveau 1 avec pleine de test à dire','testeurama','3d',3,'img/imgProfileUser/imgageduTesteur.png');


/*on passe à la création des 3tables  suivante artGraphique artDigital art3D*/

DROP TABLE if exists `artGraphique`;

CREATE TABLE `artGraphique`(
    idArtGraphique int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `userPseudo` varchar(50) NOT NULL,
    tittleArtGraphique varchar (50) not null  ,
    describeArtGraphique text(200) not null ,
    dateArtGraphique DATETIME not null ,
    KEY `userPseudo` (`userPseudo`),
    CONSTRAINT `artGraphique_ibfk_1` FOREIGN KEY (`userPseudo`) REFERENCES `user` (`userPseudo`)
);
/*table are digital*/
DROP TABLE if exists `artDigital`;

CREATE TABLE `artDigital`(
    idArtDigital int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `userPseudo` varchar(50) NOT NULL,
    tittleArtDigital varchar (50) not null  ,
    describeArtDigital text(200) not null ,
    dateArtDigital DATETIME not null ,
    KEY `userPseudo` (`userPseudo`),
    CONSTRAINT `artGraphique_ibfk_1` FOREIGN KEY (`userPseudo`) REFERENCES `user` (`userPseudo`)
);

/*table are 3D*/
DROP TABLE if exists `art3D`;

CREATE TABLE `art3D`(
    idArt3D int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `userPseudo` varchar(50) NOT NULL,
    tittleArt3D varchar (50) not null  ,
    describeArt3D text(200) not null ,
    dateArt3D DATETIME not null ,
    KEY `userPseudo` (`userPseudo`),
    CONSTRAINT `artGraphique_ibfk_1` FOREIGN KEY (`userPseudo`) REFERENCES `user` (`userPseudo`)
);


/*table leçon*/
DROP TABLE if exists `lesson`;

CREATE TABLE `lesson`(
    idLesson int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `userPseudo` varchar(50) NOT NULL,
    lessonTitle varchar (50) not null  ,
    lessonDescribe text(200) not null ,
    lessonPrice decimal(4,2) not null,
    lessonDate DATETIME not null ,
    KEY `userPseudo` (`userPseudo`),
    CONSTRAINT `artGraphique_ibfk_1` FOREIGN KEY (`userPseudo`) REFERENCES `user` (`userPseudo`)
);

/*table job*/
DROP TABLE if exists `job`;

CREATE TABLE `job`(
    idJob int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `userPseudo` varchar(50) NOT NULL,
    jobTitle varchar (50) not null  ,
    jobDescribe text(200) not null ,
    jobRemunerationYear  decimal(10,2) not null,
    jobDate DATETIME not null ,
    jobLevelStudy varchar(50) not null ,
    jobSkillNeeded varchar(150) not null ,
    jobDueDate varchar (150) not null , /*date limite pour le job*/
    jobEntreprise varchar(50) not null ,
    jobPlaces varchar(50) not null ,
    jobLogoEntrepriseLink varchar(150) not null ,
    KEY `userPseudo` (`userPseudo`),
    CONSTRAINT `artGraphique_ibfk_1` FOREIGN KEY (`userPseudo`) REFERENCES `user` (`userPseudo`)
);

/*table news*/
DROP TABLE if exists `news`;

CREATE TABLE `news`(
    idnNews int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `userPseudo` varchar(50) NOT NULL,
    newsTitle varchar (50) not null  ,
    newsDescribe text(200) not null ,
    newsImgPrimlink text(150) not null  ,
    newsImgSeclink text(150) default null,
    newsImgTrelink text(150) default null ,
    newsnDate DATETIME not null ,
    KEY `userPseudo` (`userPseudo`),
    CONSTRAINT `artGraphique_ibfk_1` FOREIGN KEY (`userPseudo`) REFERENCES `user` (`userPseudo`)
);

<?php


namespace DAO;
use domain\User;

class DAOusers extends DAObase
{
    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function getUserConected($pseudo, $password){
        $user = null;
        $req = $this->bdd->prepare("SELECT `idUser`,`firstName`,`lastName`,`pseudo`,`password`,`description`,`artPratice`,`levelAdminUser`,`mail`,`entreprise`,`createdAt`,`idCountry` 
                                              FROM `users` 
                                              WHERE `pseudo` = :pseudo and `password` = :password");
        $req->bindParam(":pseudo",$pseudo);
        $req->bindParam(":password",$password);
        if($req->execute()){
            if($userDataConnect = $req->fetch()){
                $user = new User(
                    $userDataConnect["idUser"],
                    $userDataConnect["firstName"],
                    $userDataConnect["lastName"],
                    $userDataConnect["pseudo"],
                    $userDataConnect["password"],
                    $userDataConnect["description"],
                    $userDataConnect["artPratice"],
                    $userDataConnect["levelAdminUser"],
                    $userDataConnect["mail"],
                    $userDataConnect["entreprise"],
                    $userDataConnect["createdAt"],
                    $userDataConnect["idCountry"]
                );
            }
        }
        $req->closeCursor();
        return $user;
    }
public function insertUser(){
    $req = $this->bdd->query("INSERT INTO users(idUser,firstName,lastName,pseudo,iconLink,password,description,artPratice,levelAdminUser,levelAdminUser,mail,entreprise,createdAt,idCountry)
                                VALUE (null, :firstName, :lastName, :pseudo, :iconLink, :password, :description, :artPratice, :levelAdminUser, :levelAdminUser, :mail, :entreprise, :createdAt, :idCountry)
                                ");
    $req->bindParam(":firstName",$firstName);
    $req->bindParam(":lastName",$lastName);
    $req->bindParam(":pseudo",$pseudo);
    $req->bindParam(":iconLink", $iconLink);
    $req->bindParam(":password",$password);
    $req->bindParam(":description",$description);
    $req->bindParam(":artPratice",$artPratice);
    $req->bindParam(":levelAdminUser",$levelAdminUser);
    $req->bindParam(":levelAdminUser",$levelAdminUser);
    $req->bindParam(":mail",$mail);
    $req->bindParam(":entreprise",$entreprise);
    $req->bindParam(":createdAt",$createdAt);
    $req->bindParam(":idCountry",$idCountry);

    $req->execute();
}

}

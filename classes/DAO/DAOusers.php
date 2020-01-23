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
public function insertUser($user){
    $req = $this->bdd->prepare("INSERT INTO users(firstName, lastName, pseudo, iconLink, password, description, artPratice, levelAdminUser, mail, entreprise, idCountry)
                                VALUE (:firstName, :lastName, :pseudo, :iconLink, :password, :description, :artPratice, :levelAdminUser, :mail, :entreprise, :idCountry)
                                ");
    $req->bindParam(":firstName",$user->firstName);
    $req->bindParam(":lastName",$user->lastName);
    $req->bindParam(":pseudo",$user->pseudo);
    $req->bindParam(":iconLink", $user->iconLink);
    $req->bindParam(":password",$user->password);
    $req->bindParam(":description",$user->description);
    $req->bindParam(":artPratice",$user->artPratice);
    $req->bindParam(":levelAdminUser",$user->levelAdminUser);
    $req->bindParam(":mail",$user->mail);
    $req->bindParam(":entreprise",$user->entreprise);
    $req->bindParam(":idCountry",$user->idCountry);

    if($req->execute()){
        $req->closeCursor();
        return"echo success a new uses are borne";
    }
    else{
        $req->closeCursor();
        echo "error fail to adding user";
    }
}

}

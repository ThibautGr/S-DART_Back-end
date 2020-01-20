<?php
namespace domain;

class User
{
    public $idUser;
    public $firstName;
    public $lastName;
    public $pseudo;
    public$description;
    public $skill3d;
    public $skillGraphique;
    public $skillDigital;
    public $levelAdminUser;
    public $mail;
    public $entreprise;
    public $createdAt;
    public $idCountry;
    public function __construct($idUser,
                                $firstName,
                                $lastName,
                                $pseudo,
                                $description,
                                $skill3d,
                                $skillGraphique,
                                $skillDigital,
                                $levelAdminUser,
                                $mail,
                                $entreprise,
                                $createdAt,
                                $idCountry
                                )
    {
        $this->idUser = $idUser;
        $this-> firstName = $firstName;
        $this->  lastName = $lastName;
        $this-> pseudo = $pseudo;
        $this-> description = $description;
        $this-> skill3d = $skill3d;
        $this-> skillGraphique = $skillGraphique;
        $this->skillDigital = $skillDigital ;
        $this-> levelAdminUser= $levelAdminUser;
        $this-> mail = $mail;
        $this-> entreprise = $entreprise;
        $this->  createdAt = $createdAt;
        $this->idCountry = $idCountry;
    }
}
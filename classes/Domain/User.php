<?php
namespace Domain;

class User
{
    public $idUser;
    public $firstName;
    public $lastName;
    public $pseudo;
    public $iconLink;
    public $password;
    public $description;
    public $artPratice;
    public $levelAdminUser;
    public $mail;
    public $entreprise;
    public $createdAt;
    public $idCountry;
    public function __construct($idUser,
                                $firstName,
                                $lastName,
                                $pseudo,
                                $iconLink,
                                $password,
                                $description,
                                $artPratice,
                                $levelAdminUser,
                                $mail,
                                $entreprise,
                                $createdAt,
                                $idCountry
                                )
    {
        $this->idUser = $idUser;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->pseudo = $pseudo;
        $this->iconLink = $iconLink;
        $this->password = $password;
        $this->description = $description;
        $this->artPratice = $artPratice;
        $this->levelAdminUser= $levelAdminUser;
        $this->mail = $mail;
        $this->entreprise = $entreprise;
        $this->createdAt = $createdAt;
        $this->idCountry = $idCountry;
    }
}
<?php
session_start();
require "../init/autoloader.php";
use DAO\DAOusers;
use service\isValidUpdate;
//call for 3link of header
    use DAO\DAOartType;
    use DAO\DAOart;
    use Domain\User;
    $confing = require "../init/config.inc";
    $daoArtType = new DAOartType($confing);
    $daoArtTypes = $daoArtType->getArtType();
//call for 3link of header

$confing = require "../init/config.inc";
$DAOuser = new DAOusers($confing);
$userCheckNewUser = new IsValidUpdate();
$validationError = [];


if (!empty($_POST)){
    $idUser = $_SESSION["idUser"];
    $firstName = $_POST["firstName"];
    $lastName =$_POST["lastName"];
    $pseudo = $_POST["pseudo"];
    $iconLink =$_SESSION["iconLink"];
    $password = $_POST["password"];
    $description =$_POST["description"];
    $artPratice = $_SESSION["artPratice"];
    $levelAdminUser = $_SESSION["levelAdminUser"];
    $mail = $_POST["mail"];
    $entreprise = $_SESSION["entreprise"];
    $idCountry = $_SESSION["idCountry"];
    $user = new User($idUser,$firstName, $lastName, $pseudo, $iconLink, $password,$description,$artPratice,$levelAdminUser,$mail,$entreprise,null,$idCountry);

    $validationError = $userCheckNewUser->isValidUserUpdate($user);
    if(empty($validationError)) {
        $DAOuser->updateUser($user);
        header("Location: controlerUserProfil.php");

    }
}

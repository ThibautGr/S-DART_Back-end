<?php
/*
idUser
firstName $_SESSION['firstName'] = $_POST['firstName'];
lastName $_SESSION['lastName'] = $_POST['lastName'];
pseudo $_SESSION['password'] = $_POST['password'];
iconLink
password $_SESSION['password'] = $_POST[''password];
description $_SESSION['description'] = $_POST['description'];
artPratice
levelAdminUser
mail $_SESSION['mail'] = $_POST['mail'];
entreprise $_SESSION['entreprise'] = $_POST['entreprise'];
createdAt
idCountry $_SESSION['idCountry'] = $_POST['idCountry'];
 * */
require "../init/autoloader.php";
use DAO\DAOartType;
use DAO\DAOcountry;
use service\checkNewUser;
use DAO\DAOusers;
use Domain\User;
require "../view/templateHeader.php";
$confing = require "../init/config.inc";

$validationError = [];

$checkNewUser = new checkNewUser();
$DAOartType = new DAOartType($confing);
$DAOcountry = new DAOcountry($confing);
$DAOuser = new DAOusers($confing);
$typeArts = $DAOartType->getArtType();
$countrys = $DAOcountry->getCountry();
require "../view/pageInscription.php";
require "../view/templateFooter.php";

$firstName ="";
$lastName ="";
$pseudo = "";
$iconLink = "";
$password = "";
$description = "";
$artPratice = "";
$levelAdminUser = "";
$mail = "";
$entreprise = "";
$createdAt= "";
$idCountry = "";


if(!empty($_POST)){
    $firstName = $_POST["firstName"];
    $lastName =$_POST["lastName"];
    $pseudo = $_POST["pseudo"];
    $iconLink =$_POST["iconLink"];
    $password = $_POST["password"];
    $description =$_POST["description"];
    $artPratice = $_POST["artPratice"];
    $levelAdminUser = $_POST["levelAdminUser"];
    $mail = $_POST["mail"];
    $entreprise = $_POST["entreprise"];
   // $createdAt= $_POST["createdAt"];
    $idCountry = $_POST["idCountry"];
    $user = new User(null, $firstName, $lastName, $pseudo, $iconLink, $password, $description, $artPratice,$levelAdminUser ,$mail ,$entreprise,null ,$idCountry);

    $validationError = $checkNewUser->isValidUser($user);
    if (empty($validationError)){
        $DAOuser->insertUser($user);
        $id = $DAOuser;
        session_destroy();
        $DAOuser->close();
        header("Location: validation.php?=id") ;
    }
    var_dump($validationError);
}



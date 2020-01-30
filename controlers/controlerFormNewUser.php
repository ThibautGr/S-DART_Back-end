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
//call for 3link of header
    $confing = require "../init/config.inc";
    $daoArtType = new DAOartType($confing);
    $daoArtTypes = $daoArtType->getArtType();
//call for 3link of header

$confing = require "../init/config.inc";

$checkNewUser = new checkNewUser();
$DAOartType = new DAOartType($confing);
$DAOcountry = new DAOcountry($confing);
$DAOuser = new DAOusers($confing);
$typeArts = $DAOartType->getArtType();
$countrys = $DAOcountry->getCountry();

$validationError = [];
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
    $iconLink =$_FILES["iconLink"];
    $password = $_POST["password"];
    $description =$_POST["description"];
    $artPratice = $_POST["artPratice"];
    $levelAdminUser = $_POST["levelAdminUser"];
    $mail = $_POST["mail"];
    $entreprise = $_POST["entreprise"];
   //$createdAt= time();
    $idCountry = $_POST["idCountry"];
    $user = new User(null, $firstName, $lastName, $pseudo, $iconLink, $password, $description, $artPratice,$levelAdminUser ,$mail ,$entreprise,null, $idCountry);

    $validationError = $checkNewUser->isValidUser($user);
;   var_dump($validationError);
    if (empty($validationError)){
        $target_dir = "../img/profilUser/";
        $target_file = $target_dir . basename($_FILES["iconLink"]["name"]);

        if (move_uploaded_file($user->iconLink["tmp_name"], $target_file)) {

            $user->iconLink = $user->iconLink["name"];

            if(count($user->artPratice) == 1){
                $user->artPratice = implode($user->artPratice);
                $user->artPratice = intval($user->artPratice);
                $user->levelAdminUser = intval($user->levelAdminUser);
                $user->idCountry = intval($user->idCountry);

                $DAOuser->insertUser($user);
                session_destroy();
                $DAOuser->close();
                header("Location: controlerUserConect.php") ;
            }
        }
    }
}

require "../view/pageInscription.php";




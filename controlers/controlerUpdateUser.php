<?php
require "../init/autoloader.php";
use DAO\DAOusers;
use service\checkNewUser;
$confing = require "../init/config.inc";
$DAOuser = new DAOusers($confing);
session_start();
$userCheckNewUser = new checkNewUser();
$validationError = [];
if (!empty($_POST)){
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
    $idCountry = $_POST["idCountry"];
    $user =new User($firstName, $lastName, $pseudo, $iconLink, $password,$description,$artPratice,$levelAdminUser,$mail,$entreprise,$idCountry);

    $validationError = $userCheckNewUser->isValid($user);
    if(empty($validationError)) {
        $target_dir = "../img/profilUser/";
        $target_file = $target_dir . basename($_FILES["iconLink"]["name"]);

        if (move_uploaded_file($user->iconLink["tmp_name"], $target_file)) {

            $user->iconLink = $user->iconLink["name"];

            if (count($user->artPratice) == 1) {
                $user->artPratice = implode($user->$firstName);
                $user->artPratice = intval($user->artPratice);
                $user->levelAdminUser = intval($user->levelAdminUser);
                $user->idCountry = intval($user->idCountry);
                $DAOuser->updateUser($user);
                $DAOuser->close();
                header("Location: controlerUserConect.php");
            }
        }
    }
}

require "../view/updateUserView.php";
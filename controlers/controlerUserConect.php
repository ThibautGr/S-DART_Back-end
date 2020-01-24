<?php
require "../init/autoloader.php";
use DAO\DAOusers;
$confing = require "../init/config.inc";
$DAOuser = new DAOusers($confing);
$pseudo ="";
$password="";
session_destroy();
if(!empty($_POST)){
    $password = $_POST["password"];
    $pseudo = $_POST["pseudo"];

    $user = $DAOuser->getUserConected($pseudo,$password);

    session_start();
    $_SESSION["idUser"] = $user->idUser;
    $_SESSION["firstName"] =    $user->firstName;
    $_SESSION["lastName"] =   $user->lastName;
    $_SESSION["pseudo"] =    $user->pseudo;
    $_SESSION["password"] =    $user->password;
    $_SESSION["idCountry"] =    $user->idCountry;
    $_SESSION["levelAdminUser"] =   $user->levelAdminUser;
    $_SESSION["iconLink"] =  $user->iconLink;
    $_SESSION["createdAt"] =   $user->createdAt;
    $_SESSION["mail"] =  $user->mail;
    $_SESSION["description"] =  $user->description;
    //var_dump($_SESSION);
  //  require "../view/userConnected.php";
}


//require "../view/formConnectionUser.php";
require "../view/templateAccueil.php";

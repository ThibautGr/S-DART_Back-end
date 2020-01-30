<?php
session_start();
require "../init/autoloader.php";

use Domain\TypeArt;
use Domain\Art;
use DAO\DAOusers;
//call for 3link of header
use DAO\DAOartType;
use DAO\DAOart;
$confing = require "../init/config.inc";
$daoArtType = new DAOartType($confing);
$daoArtTypes = $daoArtType->getArtType();
//call for 3link of header
$daouser = new DAOusers($confing);
$daoart = new DAOart($confing);




//page coter art

if (!empty($_GET)){
    $id = $_GET["id"];
    $user = $daouser->getUserById($id);
    $allart = $daoart->getAllArtByArtistId($id);

    $id = $user->artPratice;
    $nameOfArt = $daoArtType->getNameOfArtByOneArtId($id);

    require "../view/pageSapceUserExtern.php";
}

?>

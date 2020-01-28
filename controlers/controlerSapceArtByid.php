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
//page coter art
$daoart = new DAOart($confing);
if (!empty($_GET)){
    $id = $_GET["id"];
    $art = $daoart->getOneArtById($id);
    $artTitlePage = $daoArtType->getNameOfArtByOneArtId($id);
    var_dump($artTitlePage->name);
    var_dump($art->idArt);
    require "../view/templateArtById.php";
}

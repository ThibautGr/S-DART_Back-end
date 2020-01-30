<?php
session_start();
require "../init/autoloader.php";
use DAO\DAOartType;
use DAO\DAOart;
use Domain\TypeArt;
use Domain\Art;
$confing = require "../init/config.inc";
$daoArtType = new DAOartType($confing);

$daoArtTypes = $daoArtType->getArtType();
$daoart = new DAOart($confing);
$id= $_SESSION["idUser"];
$allart = $daoart->getAllArtByArtistId($id);
$id = $_SESSION["artPratice"];
$nameOfArt = $daoArtType->getNameOfArtByOneArtId($id);

require "../view/pageSapceUser.php";
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
require "../view/pageSapceUser.php";
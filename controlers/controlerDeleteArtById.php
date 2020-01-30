<?php
require "../init/autoloader.php";
use DAO\DAOart;
use Domain\Art;
$confing = require "../init/config.inc";
$daoart = new DAOart($confing);
if(!empty($_GET)){
    $id = $_GET["id"];
    $daoart->deleteArtById($id);
    header("Location: controlerUserProfil.php");
}
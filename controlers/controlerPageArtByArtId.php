<?php
require "../init/autoloader.php";

use Domain\TypeArt;
use Domain\Art;

//call for 3link of header
    use DAO\DAOartType;
    use DAO\DAOart;
    $confing = require "../init/config.inc";
    $daoArtType = new DAOartType($confing);
    $daoArtTypes = $daoArtType->getArtType();

//call for 3link of header




//page coter art
$daoart = new DAOart($confing);
if (!empty($_GET)){
    $id = $_GET["id"];
    $idArt = $daoart->getArtByArt($id);


    $artTitlePage = $daoArtType->getTitlByid($id);


    require "../view/templateArt.php";
}

?>
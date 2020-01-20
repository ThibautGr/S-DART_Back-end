<?php

require "../init/autoloader.php";
use DAO\DAOartType;
use DAO\DAOusers;
$confing = require "../init/config.inc";
require "../view/templateHeader.php";
$DAOartType = new DAOartType($confing);
$typeArts = $DAOartType->getArtType();
require "../view/pageInscription.php";
require "../view/templateFooter.php";
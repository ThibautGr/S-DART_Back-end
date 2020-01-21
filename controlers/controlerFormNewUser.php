<?php

require "../init/autoloader.php";
use DAO\DAOartType;
use DAO\DAOcountry;
use DAO\DAOusers;
$confing = require "../init/config.inc";
require "../view/templateHeader.php";
$DAOartType = new DAOartType($confing);
$DAOcountry = new DAOcountry($confing);
$typeArts = $DAOartType->getArtType();
$countrys = $DAOcountry->getCountry();
require "../view/pageInscription.php";
/*
if(){
    $target_dir = "../img/profilUser/";
    $target_file = $target_dir . basename($_FILES["pictureProfil"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["pictureProfil"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["pictureProfil"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["pictureProfil"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["pictureProfil"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
*/
require "../view/templateFooter.php";
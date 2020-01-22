<?php
namespace service;
class checkNewUser
{
    public function __construct()
    {
    }
/*
idUser
firstName $_SESSION['firstName'] = $_POST['firstName'];
lastName $_SESSION['lastName'] = $_POST['lastName'];
pseudo $_SESSION['password'] = $_POST['password'];
iconLink
password $_SESSION['password'] = $_POST[''password];
description $_SESSION['description'] = $_POST['description'];
artPratice
levelAdminUser
mail $_SESSION['mail'] = $_POST['mail'];
entreprise $_SESSION['entreprise'] = $_POST['entreprise'];
createdAt
idCountry $_SESSION['idCountry'] = $_POST['idCountry'];
 * */



    public function isValidUser($user)
    {
       /* $regExpName = "/^([a-zA-Z])/";
        $regExpPsuedo = "/^[A-Za-z0-9_- ]+$/";
        $regExpMail = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
        $regExpPassWord= "^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$";*/
        $result = [];
        //session_start();
        if($user->firstName == "" /* && !preg_match($regExpName, $user->firstName )*/){
            $result["user.firstName"] = 'need a firsname or should not contain numéric char';
           /* $_SESSION['lastName'] = $_POST['lastName'];
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['description'] = $_POST['description'];
            $_SESSION['mail'] = $_POST['mail'];
            $_SESSION['entreprise'] = $_POST['entreprise'];
            $_SESSION['idCountry'] = $_POST['idCountry'];*/
        }
        if($user->lastName == "" /*& !preg_match($regExpName, $user->lastName)*/){
            $result["user.lastName"] = 'need a lastname or should not contain numéric char';
           /* $_SESSION['firstName'] = $_POST['firstName'];
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['description'] = $_POST['description'];
            $_SESSION['mail'] = $_POST['mail'];
            $_SESSION['entreprise'] = $_POST['entreprise'];
            $_SESSION['idCountry'] = $_POST['idCountry'];*/
        }
        if($user->pseudo == "" /*&& !preg_match($regExpPsuedo, $user->pseudo)*/){
            $result["user.pseudo"] = 'need a pseudo or should not special numéric char';
           /* $_SESSION['firstName'] = $_POST['firstName'];
            $_SESSION['lastName'] = $_POST['lastName'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['description'] = $_POST['description'];
            $_SESSION['mail'] = $_POST['mail'];
            $_SESSION['entreprise'] = $_POST['entreprise'];
            $_SESSION['idCountry'] = $_POST['idCountry'];*/
        }
        if($user->password == ""/* && !preg_match($regExpPassWord, $user->password)*/){
            $result["user.password"] = 'need password, 8 cara min, min one alapha, min one numéric, min one spécial, min on caps lock ';
          /*  $_SESSION['firstName'] = $_POST['firstName'];
            $_SESSION['lastName'] = $_POST['lastName'];
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $_SESSION['description'] = $_POST['description'];
            $_SESSION['mail'] = $_POST['mail'];
            $_SESSION['entreprise'] = $_POST['entreprise'];
            $_SESSION['idCountry'] = $_POST['idCountry'];*/
        }
        if($user->description == ""/* && !preg_match($regExpPsuedo, $user->description)*/){
            $result["user.description"] = 'need a description or should not special char';
            /*$_SESSION['firstName'] = $_POST['firstName'];
            $_SESSION['lastName'] = $_POST['lastName'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $_SESSION['mail'] = $_POST['mail'];
            $_SESSION['entreprise'] = $_POST['entreprise'];
            $_SESSION['idCountry'] = $_POST['idCountry'];*/
        }
        if($user->mail == "" /*&& !preg_match($regExpMail, $user->mail)*/){
            $result["user.mail"] = 'need a mail or should be like this : mail.mail@mymailbox.domain';
          /*  $_SESSION['firstName'] = $_POST['firstName'];
            $_SESSION['lastName'] = $_POST['lastName'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $_SESSION['description'] = $_POST['description'];
            $_SESSION['entreprise'] = $_POST['entreprise'];
            $_SESSION['idCountry'] = $_POST['idCountry'];*/
        }
        /*if(!preg_match($regExpMail, $user->entreprise)){
            $result["user.entreprise"] = 'need a entreprise or should not special char';
          /*  $_SESSION['firstName'] = $_POST['firstName'];
            $_SESSION['lastName'] = $_POST['lastName'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $_SESSION['description'] = $_POST['description'];
            $_SESSION['mail'] = $_POST['mail'];
            $_SESSION['idCountry'] = $_POST['idCountry'];*/
       /* }*/
        if($user->idCountry == "" ){
            $result["user.idCountry"] = 'we need to know your country !';
          /*  $_SESSION['firstName'] = $_POST['firstName'];
            $_SESSION['lastName'] = $_POST['lastName'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $_SESSION['description'] = $_POST['description'];
            $_SESSION['mail'] = $_POST['mail'];
            $_SESSION['entreprise'] = $_POST['entreprise'];*/
        }
        if(!empty($_POST["iconLink"])){
            $target_dir = "../img/profilUser/";
            $target_file = $target_dir . basename($_FILES["iconLink"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
            if(file_exists($target_file)) {
                $check = getimagesize($_FILES["iconLink"]["tmp_name"]);
                if($check !== false) {
                    $result["user.iconLink"] = "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    $result["user.iconLink"] =  "File is not an image.";
                    $uploadOk = 0;
                }
            }
// Check if file already exists
            if (file_exists($target_file)) {
                $result["user.iconLink"] =  "Sorry, file already exists.";
                $uploadOk = 0;
            }
// Check file size
            if ($_FILES["iconLink"]["size"] > 500000) {
                $result["user.iconLink"] = "Sorry, your file is too large.";
                $uploadOk = 0;
            }
// Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                $result["user.iconLink"] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
// Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $result["user.iconLink"] =  "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["iconLink"]["tmp_name"], $target_file)) {
                    $_POST["iconLink"]= $_FILES["iconLink"]["name"] ;
                } else {
                    $result["user.iconLink"] =  "Sorry, there was an error uploading your file.";
                }
            }

           /* $_SESSION['firstName'] = $_POST['firstName'];
            $_SESSION['lastName'] = $_POST['lastName'];
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['description'] = $_POST['description'];
            $_SESSION['mail'] = $_POST['mail'];
            $_SESSION['entreprise'] = $_POST['entreprise'];
            $_SESSION['idCountry'] = $_POST['idCountry'];*/


        }
        return $result;
    }
}
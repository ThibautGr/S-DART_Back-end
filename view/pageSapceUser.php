<?php
ob_start();
?>
    <h1><?php echo $_SESSION["pseudo"]?></h1>
    <img alt="poulet" src="../img/profilUser/<?php echo $_SESSION["iconLink"]?>">
    <p><?php echo $_SESSION["firstName"] ?></p>
    <p><?php echo $_SESSION["lastName"] ?></p>
    <p><?php echo $_SESSION["pseudo"] ?></p>
    <p><?php echo $_SESSION["password"] ?></p>
    <p><?php echo $_SESSION["description"]?></p>
    <p><?php echo $_SESSION["levelAdminUser"]?></p>
    <p><?php echo $_SESSION["artPratice"]?></p>
    <p><?php echo $_SESSION["mail"]?></p>
<?php if(!empty($_SESSION["entreprise"])){ ?>
    <p><?php echo $_SESSION["entreprise"]?></p>
<?php }?>
    <p><?php echo $_SESSION["idCountry"]?></p>
<?php
$content = ob_get_clean();
require('../view/templateClassiquePage.php');

/*

    $firstName = $_POST["firstName"];
    $lastName =$_POST["lastName"];
    $pseudo = $_POST["pseudo"];
    $iconLink =$_FILES["iconLink"];
    $password = $_POST["password"];
    $description =$_POST["description"];
    $artPratice = $_POST["artPratice"];
    $levelAdminUser = $_POST["levelAdminUser"];
    $mail = $_POST["mail"];
    $entreprise = $_POST["entreprise"];
   //$createdAt= time();
    $idCountry = $_POST["idCountry"];

*/
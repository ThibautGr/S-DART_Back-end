<?php
ob_start();
?>  <div class="text-center">
            <h1><?php echo $_SESSION["pseudo"]?></h1>
            <img alt="poulet" class="imgProfile" src="../img/profilUser/<?php echo $_SESSION["iconLink"]?>">
            <p>Firstname : <?php echo $_SESSION["firstName"] ?></p>
            <p>Lastname : <?php echo $_SESSION["lastName"] ?></p>
            <p>Pseudo : <?php echo $_SESSION["pseudo"] ?></p>
            <p>Password : <?php echo $_SESSION["password"] ?></p>
            <p>Description: <?php echo $_SESSION["description"]?></p>
            <p>Level of adminstration(in dev) : <?php echo $_SESSION["levelAdminUser"]?></p>
            <p>Art Pratice :<?php echo $_SESSION["artPratice"]?></p>
            <p>Mail : <?php echo $_SESSION["mail"]?></p>
        <?php if(!empty($_SESSION["entreprise"])){ ?>
            <p>Entreprise :<?php echo $_SESSION["entreprise"]?></p>
        <?php }?>
            <p>country : (in dev)<?php echo $_SESSION["idCountry"]?></p>
        <div class="p-3">
            <a class="btn-price " href="controlerUpdateUser.php">Update your profil ! </a>
        </div>
    </div>
<?php
echo "<h2 class='text-center'>your creation</h2>";
echo "  <div class='card-deck'>";

foreach ($allart as $art){
    ?>
        <div class="card bgGreyColor">
            <img alt="Card image cap" class="card-img-top" src="../img/<?php echo $nameOfArt->name ?>/<?php echo $art->linkImg?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $art->title?></h5>
                <p class="card-text"><?php echo $art->description?></p>
                <p class="card-text"><small class="text-muted"><?php echo $art->createdAt?></small></p>
                <a class="btn-primary" href="controlerDeleteArtById?id=<?php echo $art->idArt?>">Delete</a>
            </div>
        </div>
    <?php
}
echo "</div>";
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
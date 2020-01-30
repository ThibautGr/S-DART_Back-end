<?php
ob_start();
?>
<h1 class="text-center">Profil of <?php echo $user->pseudo ?></h1>
<div class="bgGreyColor">
    <div class="card  bgGreyColor mb-3">
        <img class="  card-img-top imgProfile " src="../img/profilUser/<?php echo $user->iconLink?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Firstname : <?php echo $user->firstName ?> Lastname : <?php echo $user->lastName?></h5>
            <p class="card-text"><?php  echo $user->description?></p>

        </div>
    </div>
</div>
<?php
echo "  <div class='card-deck'>";
foreach ($allart as $art){

    ?>

        <div class="card bgGreyColor">
        <img alt="Card image cap" class="card-img-top" src="../img/<?php echo $nameOfArt->name ?>/<?php echo $art->linkImg?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $art->title?></h5>
            <p class="card-text"><?php echo $art->description?></p>
            <p class="card-text"><small class="text-muted"><?php echo $art->createdAt?></small></p>
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
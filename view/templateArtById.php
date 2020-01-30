<?php

ob_start();

//echo $art->description;
//call of method for take user by idArt
$idUserArt = $art->idUser;
$user = $daouser->getUserForOwnArt($idUserArt);


?>
   <h1 class='text-center'> <img class="imgProfile " src="../img/profilUser/<?php echo $user->iconLink?>"> <a class="linkArt" href="controlerUserProfilExtern.php?id=<?php echo $art->idUser ?>"><?php echo $user->pseudo ?></a> published : <?php echo $art->title?></h1>

<?php


    ?>
<div class="bgGrey col-lg-auto">
    <div class="card" ">
        <img class="card-img-top" src="../img/<?php echo $artTitlePage->name?>/<?php echo $art->linkImg;?>" alt="Card image cap">
        <div class="card-body backGroundColor">
            <p class="card-text"><small class="text-muted">publised the :<?php   echo $art->createdAt ?></small></p>
            <p class="card-text"><?php echo $art->description; ?></p>
        </div>
    <a class="text-center btn-primary"  href="controlerUserProfilExtern.php?id=<?php echo $art->idUser ?>"> check the profil!</a>
    </div>
</div>

<!---test-->

    <?php
    // $userByart = $daouser->getUserForOwnArt($art->idUser);
    //var_dump($userByart);



$content = ob_get_clean();
require('../view/templateClassiquePage.php');
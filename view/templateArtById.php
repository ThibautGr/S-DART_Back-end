<?php

ob_start();
echo "<h1 class='text-center'>". $art->title. "</h1>";




    echo $art->description;
    //call of method for take user by idArt
    $idUserArt = $art->idUser;
    $user = $daouser->getUserForOwnArt($idUserArt);
    var_dump($artTitlePage->name);
    ?>

    <div class="bgGrey">
        <div class="card ">
            <div class="card-body backGroundColor">
                <h5 class="card-title"> <img class="imgProfile " src="../img/profilUser/<?php echo $user->iconLink?>"> <a class="linkArt" href="#"><?php echo $user->pseudo ?></a> published : <a class="linkArt" href="controlerSapceArtByid.php?id=<?php $art->idUserArt?>"><?php echo $art->title; ?></a></h5>
                <p class="card-text"><small class="text-muted">publised the :<?php   echo $art->createdAt ?></small></p>
            </div>
            <img src="../img/<?php echo $artTitlePage->name?>/<?php echo $art->linkImg;?>" class="card-img-top modif-card" alt="...">
            <a class="text-center btn-primary" href="controlerUserProfilExtern.php?id=<?php echo $art->idUser?>"> check the profil!</a>
        </div>

    </div>
    <img href="../img/<?php echo $artTitlePage->name?>/<?php echo $art->linkImg?>" >
    <?php
    // $userByart = $daouser->getUserForOwnArt($art->idUser);
    //var_dump($userByart);



$content = ob_get_clean();
require('../view/templateClassiquePage.php');
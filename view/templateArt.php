<?php

echo "<h1 class='text-center'>". $artTitlePage->name. "</h1>";
ob_start();
foreach ($idArt as $art){

    echo $art->title;
    echo $art->description;
    echo $art->linkImg;
    echo $art->createdAt;
    ?>
    <a> href="../img/<?php echo $artTitlePage->name?>/<?php echo $art->linkImg?></a>
    <a href="controlerUserProfilExtern.php?id=<?php echo $art->idUser?>"> voire le profile !</a>
    <?php

    $content = ob_get_clean();
}
require('../view/templateClassiquePage.php');
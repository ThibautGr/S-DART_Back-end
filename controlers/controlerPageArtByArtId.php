<?php
require "../init/autoloader.php";
use DAO\DAOartType;
use DAO\DAOart;
use Domain\TypeArt;
use Domain\Art;
$confing = require "../init/config.inc";
$daoArtType = new DAOartType($confing);

$daoArtTypes = $daoArtType->getArtType();
foreach ($daoArtTypes as $arttypeName){

//.$arttypeName->idTypeArt.">".$arttypeName->name.
?>
    <td><a href="controlerPageArtByArtId.php?id=<?php echo $arttypeName->idTypeArt ?>"><?php echo $arttypeName->name ?></i></a></td>
<?php
}

//page coter art
$daoart = new DAOart($confing);
if (!empty($_GET)){
    $id = $_GET["id"];
    $idArt = $daoart->getArtByArt($id);
    foreach ($idArt as $art){
        echo $art->title;
    }
}
?>
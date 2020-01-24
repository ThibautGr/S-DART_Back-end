<?php
?>
<a title="" class=" " href="#"> <i class="fas fa-shopping-cart undeco"> (0)</i></a>

<div class="dropdown show">
    <a  class=" undeco dropdown-toggle" id="dropdownMenuCo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"> <?php echo $_SESSION["pseudo"]?> <img class=" logoConnecter" src="../img/profilUser/<?php echo $_SESSION["iconLink"]?>"></a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuCo">
        <a id="" class=" dropdown-item" href="#">Mes message(s) (0)</a>
        <a id="" class=" dropdown-item" href="controlerUserProfil.php">mon profile</a>
        <a class="dropdown-item" <a href="../init/logout.php"> disconect</a>
    </div>
</div>

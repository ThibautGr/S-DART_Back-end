<?php
ob_start();
var_dump($_SESSION["entreprise"]);
?>

    <div class="row rowinscription justify-content-center">
    <div class="text-center">
            <h1><?php echo $_SESSION["pseudo"]?></h1>
            <img alt="poulet" class="imgProfile" src="../img/profilUser/<?php echo $_SESSION["iconLink"]?>">
            <p ><strong>Firstname :</strong> <?php echo $_SESSION["firstName"] ?></p>
            <p><strong>Lastname :</strong> <?php echo $_SESSION["lastName"] ?></p>
            <p><strong>Pseudo : </strong><?php echo $_SESSION["pseudo"] ?></p>
            <p><strong>Password :</strong> <?php echo $_SESSION["password"] ?></p>
            <p><strong>Description: </strong><?php echo $_SESSION["description"]?></p>
            <p><strong>Level of adminstration(in dev) : </strong><?php echo $_SESSION["levelAdminUser"]?></p>
            <p><strong>Art Pratice :</strong><?php echo $_SESSION["artPratice"]?></p>
            <p><strong>Mail : </strong><?php echo $_SESSION["mail"]?></p>
        <?php if(!empty($_SESSION["entreprise"])){ ?>
            <p><strong>Entreprise :</strong><?php echo $_SESSION["entreprise"]?></p>
        <?php }?>
            <p><strong>country : (in dev)</strong><?php echo $_SESSION["idCountry"]?></p>

    </div>
        <form  action="controlerUpdateUser.php" method="post" enctype="multipart/form-data" class=" col-log p-5 m-3">
            <h2 class="text-center">Update your profil : </h2>
            <?php
            if(!empty($validationError["user.firstName"])){
                ?>
                <div id="errorfirstName" class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">

                    <i class="fas fa-exclamation-circle" style="color: red;"></i>
                    <strong>
                        <?php echo $validationError["user.firstName"]; ?>
                    </strong>
                    <i class="fas fa-exclamation-circle" style="color: red;"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="fas fa-window-close"></i>
                    </button>
                </div>
            <?php } ?>
            <?php if(!empty($validationError["user.lastName"])){
                ?>
                <div  class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">

                    <i class="fas fa-exclamation-circle" style="color: red;"></i>
                    <strong>
                        <?php echo $validationError["user.lastName"]; ?>
                    </strong>
                    <i class="fas fa-exclamation-circle" style="color: red;"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="fas fa-window-close"></i>
                    </button>
                </div>
            <?php } ?>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstName">firstName</label>
                    <input type="text" value="<?php echo $_SESSION['firstName'];?>" class="form-control" id="firstName" placeholder="firstName" name="firstName">
                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">lastName</label>
                    <input type="lastName"value="<?php echo $_SESSION['lastName'];?>" class="form-control" id="lastName" placeholder="lastName" name="lastName">
                </div>
            </div>
            <?php if(!empty($validationError["user.pseudo"])){
                ?>
                <div class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">

                    <i class="fas fa-exclamation-circle" style="color: red;"></i>
                    <strong>
                        <?php echo $validationError["user.pseudo"]; ?>
                    </strong>
                    <i class="fas fa-exclamation-circle" style="color: red;"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="fas fa-window-close"></i>
                    </button>
                </div>
            <?php } ?>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="pseudo">pseudo</label>
                    <input type="text" value="<?php echo $_SESSION['pseudo'];?>" class="form-control" id="pseudo" placeholder="pseudo" name="pseudo">
            </div>
                <div class="form-group  col-md-6">

                    <div class="custom-file ">
                        <input type="hidden">
                    </div>
                </div>
            </div>
            <?php if(!empty($validationError["user.description"])){
                ?>
                <div  class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">

                    <i class="fas fa-exclamation-circle" style="color: red;"></i>
                    <strong>
                        <?php echo $validationError["user.description"]; ?>
                    </strong>
                    <i class="fas fa-exclamation-circle" style="color: red;"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="fas fa-window-close"></i>
                    </button>
                </div>
            <?php } ?>
            <div class="form-group">
                <label for="inputAddress">description</label>
                <textarea name="description" class="form-control"  id="inputAddress" rows="3" placeholder="Fiew word about you..."><?php echo $_SESSION['description'];?></textarea>
            </div>

                <?php if(!empty($validationError["user.mail"])){
                    ?>
                    <div class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">

                        <i class="fas fa-exclamation-circle" style="color: red;"></i>
                        <strong>
                            <?php echo $validationError["user.mail"]; ?>
                        </strong>
                        <i class="fas fa-exclamation-circle" style="color: red;"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="fas fa-window-close"></i>
                        </button>
                    </div>
                <?php } ?>
                <div class="form-group">
                    <label for="inputAddress">Email</label>
                    <input type="text" class="form-control" id="inputAddress" value="<?php echo $_SESSION['mail'];?>"   placeholder="monmail@maboitemail.extentions" name="mail">
                </div>
                <!--on work-->
                <?php if(!empty($validationError["user.password"])){
                    ?>
                    <div class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">

                        <i class="fas fa-exclamation-circle" style="color: red;"></i>
                        <strong>
                            <?php echo $validationError["user.password"]; ?>
                        </strong>
                        <i class="fas fa-exclamation-circle" style="color: red;"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="fas fa-window-close"></i>
                        </button>
                    </div>
                <?php } ?>
                <div class="form-group ">
                    <label for="inputAddress2">Mots de passe: </label>
                    <div class="row roweyes">
                        <input id="passWord" type="password" class="col-10 form-control text-left" id="inputAddress2" value="<?php echo $_SESSION['password'];?>"  placeholder="password" name="password">
                        <div class="btn-primary btn col-2"  onclick="passWordHAS()">
                            <div id="eyes">
                                <i  class="far fa-eye hideAndShowEyes"></i>
                            </div>
                            <div id="eyesBlink">
                                <i class="far fa-eye-slash d-none hideAndShowEyesBlink"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- on work-->
                <div class="form-group ">
                    <label for="passWordConf">confirmation du Mots de passe: </label>
                    <div class="row roweyes">
                        <input id="passWordConf" type="password" class="col-10 form-control text-left" name="passwordtwo"  placeholder="password">
                        <div class="col-2 btn-primary btn"  onclick="passWordHAS2()">
                            <div id="eyes2">
                                <i  class="far fa-eye hideAndShowEye2s"></i>
                            </div>
                            <div id="eyesBlink2">
                                <i class="far fa-eye-slash d-none hideAndShowEyesBlink2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" value="submit" class="btn btn-primary">Make the Update !</button>
        </form>
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
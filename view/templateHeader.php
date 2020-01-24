<?php
?>
<!doctype html>
<html lang="en">
<head>
    <!--favicon--->
    <link rel="icon" type="image/png" href="logoSation_artist.png" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/style.css">
    <script src="https://kit.fontawesome.com/0ad3f97360.js" crossorigin="anonymous"></script>
    <title>S-DART</title>
</head>
<body >
<!------------------header pareil à toutes les pages---------------->
<header class="littleHead">
    <!----------------first zone : nav 1------------------>
    <nav class=" navbar firsnavbar">
        <!--logo-->
        <div class="col-3 hideAndShowAccueil">
            <a href="#"  class="undeco"><img src="../img/logo/Station_d_artiste_full_size_logo.png"></a>
        </div>
        <!----->
        <!-- Search form -->
        <input class="form-control col-5" type="text" placeholder="Search" aria-label="Search">
        <!---------------------------------->
        <!-- boutique, connextion, inscription-->

                <!--écran vous etes connecter-->
                <!--menu backDOWN profil-->
                <?php
                    if(!empty($_SESSION["pseudo"]) && !empty($_SESSION["password"])){
                        require "../view/userConnected.php";
                    }
                    else{
                        require "../view/userUnconnected.php";
                    }
                ?>
                <!--écran vous etes connecter-->
            </div>
        </div>
    </nav>
    <!---MODAL CE CONNECTER-->
    <div class="modal fade bd-connextion-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <form method="post" action="controlerUserConect.php" class="formConnextion">
                    <div class="form-group ">
                        <label for="formGroupExampleInput">votre Identifiant</label>
                        <input name="pseudo" type="text" class="form-control" id="formGroupExampleInput" placeholder="identifiant ou mail">
                    </div>
                    <div class="form-group">
                        <label  for="hAsConnecteur">votre mots de passe</label>
                        <!---zone de dev-->
                        <div class="input-group">
                            <input name="password" type="password" class=" form-control" id="hAsConnecteur" placeholder="votre mots de passe">
                        </div>
                        <!--zon de dev-->
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" id="connextionShow" value="Ce Connecter">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!---------------second zone nav 2------------------->
    <nav class="nav seconNavbar ">
        <a class="hideAndShowAccueil col-2 show active fade  AACTIVE" title="retour vers accueil" href="#"> Accueil</a>
        <a class="hideAndShowActualite col-2" title="voir les dernieres actu" href="#"> Actualité</a>
        <!-- dropdown-->
        <div class="dropdown col-2">
            <a  href="#" class="btn btn-secondary dropdown-toggle  artChangeur" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > Arts</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a id="" class="hideAndShowpageArtGraphique dropdown-item" href="#">graphique</a>
                <a id="" class="hideAndShowArtdigital dropdown-item" href="#">digital</a>
                <a id="" class="hideAndShowArt3D dropdown-item" href="#">3D</a>
            </div>
        </div>
        <a class=" col-2" title="retour vers accueil" href="#"> Job</a>
        <!-- dropdown fin-->
        <a class=" col-2" title="retour vers accueil" href="#"> Market</a>
        <a class=" col-2" title="retour vers accueil" href="#"> Leçon</a>
    </nav>
    <!---------------------------------->
</header>

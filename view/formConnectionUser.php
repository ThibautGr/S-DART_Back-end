<?php
?>

<html>
<!---MODAL CE CONNECTER-->
<a title="" href="#" class="  btn btn-primary"  data-toggle="modal" data-target=".bd-connextion-modal-sm"> <i class="fas fa-sign-in-alt"></i>Ce connecter</a>

<div class="modal fade bd-connextion-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form class="formConnextion">
                <div class="form-group ">
                    <label for="formGroupExampleInput">votre Identifiant</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="identifiant ou mail">
                </div>
                <div class="form-group">
                    <label  for="hAsConnecteur">votre mots de passe</label>
                    <!---zone de dev-->
                    <div class="input-group">
                        <input type="password" class=" form-control" id="hAsConnecteur" placeholder="votre mots de passe">
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
</html>

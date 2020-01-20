<?php
?>
<div class="" id="">
    <div class="row rowinscription justify-content-center">
            <div class=" col-lg alert alert-Inscription" role="alert">
                    <h4 class="alert-heading">Note : votre Email dois être vérifié pour que votre compts soit bien enregistré</h4>
                    <p>Un email vous sera envoyer à l'adresse que vous écrivez vérifié vos spam si vous ne le trouver pas desuite.</p>
                    <hr>
                    <p class="mb-0">Un email vous sera envoyer à l'adresse que vous écrivez vérifié vos spam si vous ne le trouver pas desuite.</p>
                </div>
        <form class=" col-log p-5 m-3">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstName">firstName</label>
                    <input type="text" class="form-control" id="firstName" placeholder="firstName" name="firstName">
                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">lastName</label>
                    <input type="lastName" class="form-control" id="lastName" placeholder="lastName" name="lastName">
                </div>
            </div>
            <form class=" col-log p-5 m-3">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="pseudo">pseudo</label>
                        <input type="text" class="form-control" id="pseudo" placeholder="pseudo" name="pseudo">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastName"></label>
                        <input type="hidden" class="form-control" id="lastName" placeholder="lastName" name="lastName">
                    </div>
                </div>
                <div class="form-group col-md-6">

                    <?php foreach ($typeArts as $typeArt){ ?>
                    <input class="ArtPratiqué" type="checkbox" value="<?php $typeArt->name ?>" id="<?php $typeArt->name ?>">
                    <label class="form-check-label" for="<?php $typeArt->name ?>">
                    <?php
                        echo $typeArt->name;
                    }
                    ?>
                    </label>
                </div>
                <div class="form-group">
                    <label for="inputAddress">description</label>
                    <textarea name="description" class="form-control"  id="inputAddress" rows="3" placeholder="Fiew word about you..."></textarea>
                </div>
            <div class="form-group">
                <label for="inputAddress">Email</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="monmail@maboitemail.extentions" name="">
            </div>
            <!--on work-->
            <div class="form-group ">
                <label for="inputAddress2">Mots de passe: </label>
                <div class="row roweyes">
                    <input id="passWord" type="password" class="col-10 form-control text-left" id="inputAddress2" placeholder="mots de passe" name="">
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
                    <input id="passWordConf" type="password" class="col-10 form-control text-left"  placeholder="mots de passe">
                    <div class="col-2 btn-primary btn "  onclick="passWordHAS2()">
                        <div id="eyes2">
                            <i  class="far fa-eye hideAndShowEye2s"></i>
                        </div>
                        <div id="eyesBlink2">
                            <i class="far fa-eye-slash d-none hideAndShowEyesBlink2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</div>
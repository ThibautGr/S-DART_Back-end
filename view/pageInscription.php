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
        <form  method="POST" action="controlerFormNewUser.php" enctype="multipart/form-data" class=" col-log p-5 m-3">
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
                        <div class="form-group  col-md-6">
                            <label class="" for="inputGroupFile01">Your profil picture</label>
                                <div class="custom-file ">
                                    <input type="file" class="custom-file-input" name="pictureProfil" id="inputGroupFile01"
                                           aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label btn-primary btn" for="inputGroupFile01">Choose file</label>
                                </div>
                        </div>
                </div>

                <div class="form-group ">
                    <p>what kind of art do you practice ?</p>
                        <?php foreach ($typeArts as $typeArt){ ?>
                    <div class=" form-check-inline form-check ">
                        <label class="form-check-label  " for="<?php $typeArt->name ?>">
                        <input class="ArtPratiqué " type="checkbox" value="<?php echo $typeArt->name ?>" id="<?php echo $typeArt->name ?>">
                        </label>
                    </div>
                        <?php
                            echo $typeArt->name;
                        }
                        ?>
                </div>
                <div class="form-group ">
                    <label  for="userlevel">You are ? or, you represented ?</label>
                    <select name="levelAdminUser" class="form-control custom-select mr-sm-2" id="userlevel">
                        <option selected>Choose...</option>
                        <option value="1">Simple artist</option>
                        <option value="2">Freelance artist</option>
                        <option value="3">Company artist</option>
                    </select>
                </div>
                <div class="form-group d-none" id="entreprise">
                    <label for="enterprise">your compagny name</label>
                        <input id="enterprise" type="text" class="form-control" name="entreprise" placeholder="the name of your compagny">
                </div>
                <div class="form-group">
                    <label for="inputAddress">description</label>
                    <textarea name="description" class="form-control"  id="inputAddress" rows="3" placeholder="Fiew word about you..."></textarea>
                </div>
                <div class="form-group" >
                  <label for="country">Your Country </label>
                  <select id="country" name="idCountry" class="form-control custom-select mr-sm-2" >
                      <option selected> Choose...</option>
                        <?php
                        foreach($countrys as $country){
                        ?>
                            <option value="<?php echo $country->idCountry ?>"><?php echo $country->name ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            <div class="form-group">
                <label for="inputAddress">Email</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="monmail@maboitemail.extentions" name="mail">
            </div>
            <!--on work-->
            <div class="form-group ">
                <label for="inputAddress2">Mots de passe: </label>
                <div class="row roweyes">
                    <input id="passWord" type="password" class="col-10 form-control text-left" id="inputAddress2" placeholder="password" name="password">
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
                    <input id="passWordConf" type="password" class="col-10 form-control text-left"  placeholder="password">
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
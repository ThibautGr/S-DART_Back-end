<?php
?>

<html>
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
</html>

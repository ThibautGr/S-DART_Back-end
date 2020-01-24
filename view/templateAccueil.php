<?php
ob_start();
echo "<h1>accueil </h1>";
$content = ob_get_clean();
require('../view/templateClassiquePage.php');
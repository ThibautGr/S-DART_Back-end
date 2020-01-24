<?php
session_destroy(); //destroy the session
header("location:../controlers/controlerUserConect.php"); //to redirect back to "index.php" after logging out
exit();
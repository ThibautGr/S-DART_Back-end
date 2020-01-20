<?php
$pseudo = $_POST["userPseudo"];
$pwd = $_POST["userPassWord"];

$req = $db->prepare("SELECT `userPseudo`, `userPassWord` 
                                FROM `user` 
                                WHERE `userPseudo` = :userPseudo && `userPassWord` = :userPassWord ");
$req ->execute([":userPseudo" => $pseudo,
                ":userPassWord" => $pwd]);

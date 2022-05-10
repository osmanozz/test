<?php

include "database.php";

$sql = "INSERT INTO medewerker VALUES (:medewerker_code, :username, :password)";
$placeholder = [
    'medewerker_code'=> NULL,
    'username'=> '0000',
    'password'=> password_hash('0000', PASSWORD_DEFAULT),
]; 
$db = new database();
$db->insert($sql, $placeholder);


?> 
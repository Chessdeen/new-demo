<?php ob_start();


$db['db_host'] = "localhost";
$db['db_user'] = "lapaoakw_lapaoakw";
$db['db_pass'] = "Azby1010(.)";
$db['db_name'] = "lapaoakw_lap";

foreach($db as $key => $value){
define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);




?>
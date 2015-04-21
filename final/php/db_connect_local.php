<?php

$database_host = "127.0.0.1";
$database_database = "wnm608";
$database_username = "root";
$database_password = "wing1990";

$mysqli = new mysqli($database_host,$database_username,$database_password,$database_database);

if($mysqli->connect_errno) die($mysqli->connect_error);




?>
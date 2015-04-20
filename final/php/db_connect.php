<?php

$database_host = "lpsql04.lunariffic.com";
$database_database = "wendy44_wnm608";
$database_username = "wendy44_wendy";
$database_password = "880921Czh";

$mysqli = new mysqli($database_host,$database_username,$database_password,$database_database);

if($mysqli->connect_errno) die($mysqli->connect_error);




?>
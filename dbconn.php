<?php

$host = 'localhost';
$username = 'id5392371_root';
$password = 'root123';

$dbname = 'id5392371_enviroment';

$con = mysqli_connect($host,$username,$password,$dbname);

if(!$con)
echo "Cannot connect to the database";
?>
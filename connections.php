<?php

$dbhost = "localhost";
$dbuser = "mysql";
$dbpass = "";
$dbname = "reglog";



if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!");
}

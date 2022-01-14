<?php

$serverName = "localhost";
$dBName = "electricity";
$dBusername = "root";
$dBpassword = "";

$connection = mysqli_connect($serverName, $dBusername, $dBpassword, $dBName);
if(!$connection){
    die("Connection Failed: " .mysqli_connect_error());
}

?>
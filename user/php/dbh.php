<?php
    $serverName = "localhost";
    $dBName = "billing_system";
    $dBusername = "root";
    $dBpassword = "";

    $connection = mysqli_connect($serverName, $dBusername, $dBpassword, $dBName);
    if(!$connection){
        die("Connection Failed: " .mysqli_connect_error());
    }

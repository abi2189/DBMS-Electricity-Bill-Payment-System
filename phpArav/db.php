<!-- http://localhost/phpArav/imp.php -->

<?php

$serverName = "localhost";
$dBName = "electricity";
$dBusername = "root";
$dBpassword = "";

$connection = mysqli_connect($serverName, $dBusername, $dBpassword, $dBName);
if(!$connection){
    die("Connection Failed: " .mysqli_connect_error());
}

echo "hello world";
?>

<?php
// $sql123 = "SELECT user_id FROM admin_details WHERE admin_id = 'bnm090';";
// $result = mysqli_query($connection, $sql);
// echo $result;

fetch all rows containing that key
if($result = mysqli_query($connection, $sql123)) {
  while ($row = $result->fetch_assoc()) {
    
    echo $row['user_id'];
  }
}

//fetch one row
// if($result = mysqli_query($connection, $sql123)) {
//     $row = $result->fetch_assoc();
//     echo $row['user_id'];
// }

//insert one row
// $sql312 = "INSERT INTO admin_details VALUES('aaabbb','bbbbbb',23);";
// mysqli_query($connection, $sql312);

  

?>
        
<!-- in order to use this: "require_once 'dbh.php';"  -->
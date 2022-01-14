<?php

include_once 'db.php';
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$pass = mysqli_real_escape_string($link, $_REQUEST['pass']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$mail = mysqli_real_escape_string($link, $_REQUEST['mail']);

 
// Attempt insert query execution
$sql = " UPDATE user_details ";

 
// Close connection
mysqli_close($link);
?>
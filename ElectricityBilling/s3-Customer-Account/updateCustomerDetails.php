<?php

include_once 'db.php';
include ($_SERVER['DOCUMENT_ROOT']."/ElectricityBilling/A1-user/php/dash.php");
// Escape user inputs for security
if (isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $postal_code = $_POST['Postal'];
    $auto_renew = $_POST['auto'];
    $pincode = $_POST['pincode'];

    // Attempt insert query execution
    $sql_q1 = "UPDATE user_details set first_name = '$first_name', last_name = '$last_name', passw = '$pass', phone_no = '$phone', email_id = '$mail' where user_id = '$uid'";
    $sql_q2 = "UPDATE customer_details set postal_code = '$Postal', auto_renewal = '$auto_renew' where user_id = '$uid'";
    $sql_q3 = "SELECT service_no from customer_details where user_id = '$uid'";
    mysqli_query($connection, $sql_q1);
    mysqli_query($connection, $sql_q2);
    mysqli_query($connection, $sql_q2);
}
// Close connection
mysqli_close($link);
?>
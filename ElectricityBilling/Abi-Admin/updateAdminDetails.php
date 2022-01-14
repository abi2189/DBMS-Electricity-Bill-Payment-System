<?php

include_once 'db.php';
include ($_SERVER['DOCUMENT_ROOT']."/ElectricityBilling/A1-user/php/dash.php");
if (isset($_POST['submit'])){
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $pass = $_POST["pass"];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];

    // Attempt insert query execution
    $sql_q1 = "UPDATE user_details SET first_name = ?, last_name = ?, passw = ?, phone_no = ?, email_id = ? WHERE user_id = ?";
    $SQL = mysqli_prepare($connection, $sql_q1);
    $SQL->bind_param("sssiss", $first_name, $last_name, $pass, $phone, $mail, $uid)
    $SQL->execute();
    // Close connection
    mysqli_close($connection);
?>
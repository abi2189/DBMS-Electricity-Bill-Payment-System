<?php
require_once 'db.php';
$cardHolderName = $_POST['cardNameName'];
$expiry = $_POST['expiryName'];
$cardNo = $_POST['cardNoName'];
$autoRenewal = $_POST['auto-renewal'];
$cvv = $_POST['CVVName'];
// $user_id = 1234;
$user_id = 'abc231';
$postal_code = 231105;

$sql = "INSERT INTO customer_details(user_id, auto_renewal, postal_code, account_no, card_holder_name, expiry_date) VALUES('$user_id','$autoRenewal','$postal_code' , '$cardNo', '$cardHolderName', '$expiry');";
mysqli_query($connection, $sql);
echo "<script>window.location.replace('../../s1-2-dbms/feedback1.html')</script>";


// mysqli_stmt_bind_param($stmt,"isss", $autoRenewal, $cardNo, $cardHolderName, $expiry);

// if(mysqli_stmt_execute($stmt)){
//     echo"<script>alert('Transaction successful');
//     window.location.replace('../../s2-Analysis/redone/analysisRedone.php')</script>
// }
// CREATE TABLE customer_details(user_id varchar(6), pincode integer, auto_renewal INTEGER, DOB date, postal_code varchar(6), bank_name varchar(10), account_no varchar(18), card_holder_name varchar(20), expiry_date date, CONSTRAINT PK_cust PRIMARY KEY(user_id), CONSTRAINT FK_cust FOREIGN KEY(pincode) REFERENCES Address(pincode)); 

?>
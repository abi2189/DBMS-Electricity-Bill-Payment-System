<?php
require_once 'db.php';
include ($_SERVER['DOCUMENT_ROOT']."/ElectricityBilling/A1-user/php/custVar.php");
$sql = "select s.pincode, s.service_no from customer_details c, service_details s where c.user_id = '$uid' and c.service_no = s.service_no;";
$result = mysqli_query($connection, $sql);
if(isset($_POST['submit'])){
    $cardHolderName = $_POST['cardNameName'];
    $expiry = $_POST['expiryName'];
    $cardNo = $_POST['cardNoName'];
    $accountNo = rand(1000000000000000, 9999999999999999);
    $autoRenewal = isset($_POST['auto-renewal']) && $_POST['auto-renewal']  ? "1" : "0";
    if($result){
      $row = mysqli_fetch_assoc($result);
      $postalCode = $row["pincode"];
      $serviceNo = $row["service_no"];
    }
}

$sql = "INSERT INTO customer_details(user_id, auto_renewal, postal_code, account_no, card_holder_name, card_number, service_no) VALUES('$uid','$autoRenewal','$postalCode', '$accountNo', '$cardHolderName', '$cardNo', '$serviceNo');";
mysqli_query($connection, $sql);
echo "<script>window.location.replace('../../s1-2-dbms/feedback1.html')</script>";


// mysqli_stmt_bind_param($stmt,"isss", $autoRenewal, $cardNo, $cardHolderName, $expiry);

// if(mysqli_stmt_execute($stmt)){
//     echo"<script>alert('Transaction successful');
//     window.location.replace('../../s2-Analysis/redone/analysisRedone.php')</script>
// }
// CREATE TABLE customer_details(user_id varchar(6), pincode integer, auto_renewal INTEGER, DOB date, postal_code varchar(6), bank_name varchar(10), account_no varchar(18), card_holder_name varchar(20), expiry_date date, CONSTRAINT PK_cust PRIMARY KEY(user_id), CONSTRAINT FK_cust FOREIGN KEY(pincode) REFERENCES Address(pincode)); 

?>
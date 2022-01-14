<?php
require_once 'db.php';
$feedbackDesc = $_POST['comment'];
// $a = 209;
// $d = '2020-01-12 14:38:21';


// $sql = "INSERT INTO Feedback(fb_id, fb_desc, fb_date) VALUES('$a', '$feedbackDesc', '$d');";
$sql = "INSERT INTO feedback(fb_desc) VALUES('$feedbackDesc');";
mysqli_query($connection, $sql);
// echo "<script>window.location.replace('../A1-user/dashboard.html')</script>";
header('Location:../../../s1-0-Bills/bills.php');


// CREATE TABLE Feedback(fb_id integer(3), user_id varchar(6),fb_desc varchar(100), fb_date date, fb_time timestamp, Constraint PK_Feedback PRIMARY KEY(fb_id, user_id), FOREIGN KEY(user_id) REFERENCES customer_details(user_id)); 

// mysqli_stmt_bind_param($stmt,"isss", $autoRenewal, $cardNo, $cardHolderName, $expiry);

// if(mysqli_stmt_execute($stmt)){
//     echo"<script>alert('Transaction successful');
//     window.location.replace('../../s2-Analysis/redone/analysisRedone.php')</script>
// }
// CREATE TABLE customer_details(user_id varchar(6), pincode integer, auto_renewal INTEGER, DOB date, postal_code varchar(6), bank_name varchar(10), account_no varchar(18), card_holder_name varchar(20), expiry_date date, CONSTRAINT PK_cust PRIMARY KEY(user_id), CONSTRAINT FK_cust FOREIGN KEY(pincode) REFERENCES Address(pincode)); 

?>
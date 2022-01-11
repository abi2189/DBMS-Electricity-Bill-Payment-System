<?php
    if(isset($_POST["submit"])){
        $name = $_POST["first-name"]." ".$_POST["last-name"];
        $fname = $_POST["first-name"];
        $lname = $_POST["last-name"];
        $date_of_birth = $_POST["dob"];
        $phone = $_POST["phone"];
        $mail_id = $_POST["email"];
        $state = $_POST["state"];
        $city = $_POST["city"];
        $pincode = $_POST["pincode"];
        $password = $_POST["pass"];
        $passwordRepeat = $_POST["passr"];
        require_once 'dbh.php';
        $q2 = "insert into user_details(phone_no, first_name, last_name, passw, email_id) values ('$phone', '$fname', '$lname', '$password', '$mail_id')";
       mysqli_query($connection, $q2);
       header("location: ../login.html"); 
    } else {
        header("location: ../register.html"); 
    }
?>


<?php
    require_once 'dbh.php';
    $fname = $_POST["first-name"];
    $lname = $_POST["last-name"];
    $user_id = $_POST["ID"];
    $name = $fname." ".$lname;
    $dob = $_POST['dob'];
    $dob = date_format(new DateTime($dob),"Y-m-d H:i:s");
    $phone = $_POST["phone"];
    $mail_id = $_POST["email"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $pincode = $_POST["pincode"];
    $service = substr ((string)$pincode,0,3); 
    $service =(int)$service;
    $password = $_POST["pass"];
    $passwordRepeat = $_POST["passr"];
    $q2 = "insert into user_details (user_id, first_name, last_name, DOB, phone_no, email_id, passw) values (?,?,?,?,?,?,?)";
    // $q3 = "insert into Address(pincode, city, state) values (?,?,?)";
    // $q4 = "insert into service_details(service_no, pincode) values (?,?)";
    $stmt = mysqli_prepare($connection, $q2);
    // $stmt1 = mysqli_prepare($connection, $q3);
    // $stmt2 = mysqli_prepare($connection, $q4);
    mysqli_stmt_bind_param($stmt, "sssssss", $user_id, $fname, $lname, $dob, $phone, $mail_id, $password);
    // mysqli_stmt_bind_param($stmt1, "iss", $pincode, $city, $state);
    // mysqli_stmt_bind_param($stmt2, "ii", $service, $pincode);
    mysqli_stmt_execute($stmt);
    // mysqli_stmt_execute($stmt1);
    // mysqli_stmt_execute($stmt2);
    if(mysqli_stmt_affected_rows($stmt)){
    echo "<script>
        alert('Registration successful');
        window.location.replace('../login.html');
        </script>";
    } 
?>


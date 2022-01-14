<?php
    session_start();  
    require_once 'dbh.php';
    $custID = $_POST["custid"];
    $custPass = $_POST["pass1"];
    $q1 = "select user_id, passw from user_details where user_id = '$custID' and passw = '$custPass'";
    $result = mysqli_query($connection, $q1);
    $query = "select first_name, last_name from user_details where user_id = '$custID'";
    $res = mysqli_query($connection, $query);
    if($res){
      $row = mysqli_fetch_assoc($res);
      $fname = $row["first_name"];
      $lname = $row["last_name"];
      $name = $fname." ".$lname;
    }
    $_SESSION['name'] = $name;
    $_SESSION['firstname'] = $fname;
    $_SESSION['id'] = $custID;
    if($result && mysqli_num_rows($result) > 0){
      header('Location:changeToDash.php');
    } else {
      echo "<script>
        alert('Login unsuccessful');
        window.location.replace('../login.html');
        </script>";
     }
    
?>


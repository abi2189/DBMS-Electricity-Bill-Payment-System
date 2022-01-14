<?php
    session_start();
    require_once 'dbh.php';
    $adminID = $_POST["adminId"];
    $adminPass = $_POST["pass"];
    $q1 = "select u.user_id, passw from user_details u, admin_details a where a.admin_id = '$adminID' and u.user_id = a.admin_id and u.passw = '$adminPass'";
    $result = mysqli_query($connection, $q1);
    $query = "select first_name, last_name from user_details where user_id = '$adminID'";
    $res = mysqli_query($connection, $query);
    if($res){
      $row = mysqli_fetch_assoc($res);
      $fname = $row["first_name"];
      $lname = $row["last_name"];
      $name = $fname." ".$lname;
    }
    $_SESSION['adminName'] = $name;
    $_SESSION['adminFirstName'] = $fname;
    $_SESSION['ID'] = $adminID;
    if($result && mysqli_num_rows($result) > 0){
      echo "<script>
        alert('Login successful');
        window.location.replace('changeToAdmin.php');
        </script>";
    } else {
      echo "<script>
        alert('Login unsuccessful');
        window.location.replace('../adminlog.html');
        </script>";
    }
?>
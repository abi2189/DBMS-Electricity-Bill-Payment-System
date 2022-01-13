<?php
    require_once 'dbh.php';
    $adminID = $_POST["adminId"];
    $adminPass = $_POST["pass"];
    $q1 = "select u.user_id, passw from user_details u, admin_details a where a.admin_id = '$adminID' and u.user_id = a.admin_id and u.passw = '$adminPass'";
    $result = mysqli_query($connection, $q1);
    
    if($result && mysqli_num_rows($result) > 0){
      echo "<script>
        alert('Login successful');

        </script>";
        header('Location:../../Abi-Admin/AdminDashBoard.php');
    } else {
      echo "<script>
        alert('Login unsuccessful');
        window.location.replace('../adminlog.html');
        </script>";
      
    }
?>
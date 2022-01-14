<?php
    session_start();
    require_once 'dbh.php';
    //  $columns = $_SESSION['totalcolumns'] 
    $custID = $_POST["custid"];
    $custPass = $_POST["pass1"];
    $q1 = "select user_id, passw from user_details where user_id = '$custID' and passw = '$custPass'";
    $result = mysqli_query($connection, $q1);
    if($result && mysqli_num_rows($result) > 0){
      echo "<script>
        alert('Login successful');
        window.location.replace('../dashboard.html');
        </script>";
        $_SESSION['custid'] = $custID; 
        
    } else {
      echo "<script>
        alert('Login unsuccessful');
        window.location.replace('../login.html');
        </script>";
      
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="AdminDashBoard.css">
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#" >
                        <span class="icon"><ion-icon name="flash-outline"></ion-icon></span>
                        <span class="title" style="font-size: 15px;">Electricity Board of India</span>
                    </a>
                </li>
                <li>
                    <a href="AdminProfile.php" >
                        <?php
                        require_once 'db.php';
                        include ($_SERVER['DOCUMENT_ROOT']."/ElectricityBilling/A1-user/php/adminVar.php");
                        echo '<span class="title">';echo $first_name; echo '</span>';
                        ?>
                        <span class="profile-icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                    </a>
                </li>
                <li>
                    <a href="AdminDashBoard.php" >
                        <span class="icon"><ion-icon name="albums-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="AdminCustomer.php" >
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <span class="title">Customer</span>
                    </a>
                </li>
                <li>
                    <a href="AdminBills.php" >
                        <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                        <span class="title">Bills</span>
                    </a>
                </li>
                <li>
                    <a href="AdminPayment.php" >
                        <span class="icon"><ion-icon name="card-outline"></ion-icon></span>
                        <span class="title">Payment</span>
                    </a>
                </li>
                <li>
                    <a href="AdminFeedback.php" >
                        <span class="icon"><ion-icon name="document-outline"></ion-icon></span>
                        <span class="title">Feedback</span>
                    </a>
                </li>
                <li>
                    <a href="AdminAnnoucement.php" >
                        <span class="icon"><ion-icon name="paper-plane-outline"></ion-icon></span>
                        <span class="title">Announcements</span>
                    </a>
                </li>
                <li>
                    <a href="../A1-user/adminlog.html" >
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-body">
<!-- <div class="header">
        </div> -->
        <div class="white-header-dash">
        <?php
        include_once 'db.php';
        $result = mysqli_query($connection, "select count(*) from bill_details;"); 
        $result2 = mysqli_query($connection, "select count(pay_status) from payment_details p, bill_details b where p.transaction_id = b.transaction_id and p.pay_status = 'Failed';"); 
        if($result && $result2) {
            $row = $result->fetch_assoc();
            $row2 = $result2->fetch_assoc();
        ?>  
        </div>
        <div class="ticket-grid">
            <div class="tic ticket-1"><span class="tic-title">New Customer</span>
                <ion-icon name="people"></ion-icon>
                <span class="tic-count">2</span>
            </div>
            <div class="tic ticket-2"><span class="tic-title">Defaulters</span>
                <ion-icon name="people-circle-outline"></ion-icon>
                <span class="tic-count">5</span>
            </div>
            <div class="tic ticket-3"><span class="tic-title">Bills</span>
                <ion-icon name="newspaper-outline"></ion-icon>
                <span class="tic-count"><?php echo $row["count(*)"] 
                ?></span>
            </div>
            <div class="tic ticket-4"><span class="tic-title">Payments</span>
                <ion-icon name="card-outline"></ion-icon>
                <span class="tic-count"><?php echo $row2["count(pay_status)"] 
                ?></span>
            </div>
            <?php
                
            }else{
                echo "not found";
            }
            ?>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        let list = document.querySelectorAll('.navigation li');
        function activelink(){
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
        item.addEventListener('mouseover',activelink))
        
    </script>
</body>


</html>
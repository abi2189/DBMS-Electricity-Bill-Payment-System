<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Announcements</title>
    <link rel="stylesheet" href="AdminDashBoard.css">
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/style.css" />
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
        <div class="white-header">

        </div>
        <div class="search">
            <div class="filter-head">
                <h2 style="padding-left: 280px;">
                    Announcements
                </h2>
            </div>
            
        </div>
        <div class="f" >
            <div class="annouce-tab">
                <textarea id="w3review" name="w3review" rows="4" cols="50" name="a1">
                    Affidavit and Comments of Stakeholders in respect of M.P.No.24 of 2021 in the matter of seeking adjustment priority among various sources of power under open access
                </textarea>
                <textarea id="w3review" name="w3review" rows="4" cols="50" name="a2">
                        Declaration format for applicability of TDS provisions u/s.194Q to TANGEDCO on Purchase transactions beyond as per the threshold specified therein is enclosed as 'Annexure-A' and declaration format to be filed in by Suppliers to avoid of special rates u/s.206AB is enclosed in 'Annexure-B'
                </textarea>
                <textarea id="w3review" name="w3review" rows="4" cols="50" name="a3">
                            Declaration by TANGEDCO for confirmation regarding filing of Income Tax Return for Assessment Year 2019-20 & 2020-21 is enclosed as 'Annexure-C' and declaration format to be furnished by the Fly Ash Lifters to whom 194Q of Income Tax Act, 1961 is applicable is annexed as 'Annexure-D'. It is also informed that the fly ash lifters can verify the Income tax return.
                </textarea>
            </div>
            
            
        </div>
        <div class="new box">
            <div class="Customer-table">
                <h6>
                    asdasdasd
                </h6>
            
             
                
            </div>

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
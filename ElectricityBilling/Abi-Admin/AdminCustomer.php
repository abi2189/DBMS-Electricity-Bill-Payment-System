<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Customer</title>
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
                    <a href="AdminBills.php" >
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
                <h2>
                    Choose the Option below to view Customer list
                </h2>
            </div>
            <div class="filter">
                
                <select>
                    <!-- <option></option> -->
                    <option value="new">New Customer Approval</option>
                    <option value="defaulters">Defaulters</option>
                    <option value="viewAll" selected>View-All</option>
                </select>
            </div>
        </div>
        <div class="new box">
            <div class="Customer-table">
            
                <div class="table-header"><h2>New Customer Approval</h2></div>
                <?php
                include_once 'db.php';
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                //CHANGE SQL QUARY HERE FOR CUSTOMER FETCH FROM FEED BACK 
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                $result = mysqli_query($connection,"SELECT * FROM user_details where user_id='pat228' or user_id='lan348' or user_id='gla343' or user_id='lon612' or user_id='yvo809'");
               //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                //CHANGE SQL QUARY HERE FOR CUSTOMER FETCH FROM FEED BACK 
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                ?>
                <?php
                if (mysqli_num_rows($result) > 0) {
                ?>
                <table >
                    <thead>
                        <tr>
                        <td>Cutomer ID</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <!-- <td>Energy Charges</td> -->
                            <td>DOB</td>
                            <td>Phone_no</td>
                            <td>email_id</td>
                            
                            <td>Status</td>
                        </tr>
                    </thead>
                <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                <td><?php echo $row["user_id"]; ?></td>
                <td><?php echo $row["first_name"]; ?></td>
                <td><?php echo $row["last_name"]; ?></td>
                <td><?php echo $row["DOB"]; ?></td>
                <td><?php echo $row["phone_no"]; ?></td>
                <td><?php echo $row["email_id"]; ?></td>
                <td>
                                <div class="popupApprove" onclick="mail4()">
                                    <span class="Approve"><a href="#">Send Mail</a>
                                    </span>
                                    <span class="popuptextApprove" id="mail4">Mail Sent</span>
                                  </div>
                            </td>
                <!-- <td><?php echo $row["expiry_date"]; ?></td> -->
                </tr>
                <?php
                $i++;
                }
                ?>
                </table>
                <?php
                }
                else{
                echo "No result found";
                }
                ?>
            </div>

        </div>
        <div class="defaulters box">
            <div class="Customer-table">
            
                <div class="table-header"><h2>Defaulters List</h2></div>
                <?php
                include_once 'db.php';
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                //CHANGE SQL QUARY HERE FOR CUSTOMER FETCH FROM FEED BACK 
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                $result = mysqli_query($connection,"SELECT DISTINCT b.user_id, u.first_name, u.last_name, u.DOB, u.phone_no, u.email_id FROM user_details u, bill_details b where b.transaction_id IS NULL and b.user_id = u.user_id;");
               //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                //CHANGE SQL QUARY HERE FOR CUSTOMER FETCH FROM FEED BACK 
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                ?>
                <?php
                if (mysqli_num_rows($result) > 0) {
                ?>
                <table >
                    <thead>
                        <tr>
                        <td>Cutomer ID</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <!-- <td>Energy Charges</td> -->
                            <td>DOB</td>
                            <td>Phone_no</td>
                            <td>email_id</td>
                            
                            <td>Status</td>
                        </tr>
                    </thead>
                <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                <td><?php echo $row["user_id"]; ?></td>

                <td><?php echo $row["first_name"]; ?></td>
                <td><?php echo $row["last_name"]; ?></td>
                <td><?php echo $row["DOB"]; ?></td>
                <td><?php echo $row["phone_no"]; ?></td>
                <td><?php echo $row["email_id"]; ?></td>
                <td>
                                <div class="popupApprove" onclick="mail4()">
                                    <span class="Approve"><a href="#">Send Mail</a>
                                    </span>
                                    <span class="popuptextApprove" id="mail4">Mail Sent</span>
                                  </div>
                            </td>
                <!-- <td><?php echo $row["expiry_date"]; ?></td> -->
                </tr>
                <?php
                $i++;
                }
                ?>
                </table>
                <?php
                }
                else{
                echo "No result found";
                }
                ?>
            </div>
            
        </div>
        <div class="viewAll box">
            <div class="Customer-table">
            
                <div class="table-header"><h2>View-All</h2></div>
                <?php
                include_once 'db.php';
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                //CHANGE SQL QUARY HERE FOR CUSTOMER FETCH FROM FEED BACK 
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                $result = mysqli_query($connection,"SELECT * FROM user_details");
               //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                //CHANGE SQL QUARY HERE FOR CUSTOMER FETCH FROM FEED BACK 
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                ?>
                <?php
                if (mysqli_num_rows($result) > 0) {
                ?>
                <table >
                    <thead>
                        <tr>
                        <td>Cutomer ID</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <!-- <td>Energy Charges</td> -->
                            <td>DOB</td>
                            <td>Phone_no</td>
                            <td>email_id</td>
                            
                            
                        </tr>
                    </thead>
                <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                <td><?php echo $row["user_id"]; ?></td>

                <td><?php echo $row["first_name"]; ?></td>
                <td><?php echo $row["last_name"]; ?></td>
                <td><?php echo $row["DOB"]; ?></td>
                <td><?php echo $row["phone_no"]; ?></td>
                <td><?php echo $row["email_id"]; ?></td>
                
                <!-- <td><?php echo $row["expiry_date"]; ?></td> -->
                </tr>
                <?php
                $i++;
                }
                ?>
                </table>
                <?php
                }
                else{
                echo "No result found";
                }
                ?>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function(){
        $("select").change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                if(optionValue){
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else{
                    $(".box").hide();
                }
            });
        }).change();
    });
    </script>
    <script>
        // When the user clicks on div, open the popup
        function Approve1(){
          var popup = document.getElementById("Approve1");
          popup.classList.toggle("show");
        }
        function Approve2(){
          var popup = document.getElementById("Approve2");
          popup.classList.toggle("show");
        }
        function Approve3(){
          var popup = document.getElementById("Approve3");
          popup.classList.toggle("show");
        }
        function Approve4(){
          var popup = document.getElementById("Approve4");
          popup.classList.toggle("show");
        }
        function Approve5(){
          var popup = document.getElementById("Approve5");
          popup.classList.toggle("show");
        }
        function Approve6(){
          var popup = document.getElementById("Approve6");
          popup.classList.toggle("show");
        }
        // -------------------------------------------------------------------------------------------------------------------------
        function mail1(){
          var popup = document.getElementById("mail1");
          popup.classList.toggle("show");
        }
        function mail2(){
          var popup = document.getElementById("mail2");
          popup.classList.toggle("show");
        }
        function mail3(){
          var popup = document.getElementById("mail3");
          popup.classList.toggle("show");
        }
        function mail4(){
          var popup = document.getElementById("mail4");
          popup.classList.toggle("show");
        }
        </script>
   
</body>


</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Bills</title>
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
                        
                        <span class="title">Tiana</span>
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
                        <span class="title">Annoucements</span>
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
                    Choose the Option below to view Bills
                </h2>
            </div>
            <div class="filter">
                
                <select>
                    <option value="new">Paid Bills</option>
                    <option value="defaulters">Unpaid</option>
                    <option value="viewAll" selected>View-All</option>
                </select>
            </div>
        </div>
        <div class="new box">
            <div class="Customer-table">
            
                <div class="table-header"><h2>Paid Customer</h2></div>
                <?php
                include_once 'db.php';
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                //CHANGE SQL QUARY HERE
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                $result = mysqli_query($connection,"SELECT * FROM Bill_details where bill_no='642581757212' or  bill_no='569225387797' or bill_no='159320833161' or bill_no='640961225729' or bill_no='629331870828' or bill_no='954297254243' or bill_no='936810891522'" );
                ?>
                <?php
                if (mysqli_num_rows($result) > 0) {
                ?>
                <table >
                    <thead>
                        <tr>
                            
                            <td>Bill No</td>
                            <td>transaction_id</td>
                            <!-- <td>Energy Charges</td> -->
                            <td> bill_amt</td>
                            <td>bill_area</td>
                            <td>issue_month</td>
                            <td>issue_date</td>
                            <td>due_date</td>
                            <td>discon_date</td>

                            
                        </tr>
                    </thead>
                <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                
               
                <td><?php echo $row["bill_no"]; ?></td>
                <td><?php echo $row["transaction_id"]; ?></td>
                <td><?php echo $row["bill_amt"]; ?></td>
                <td><?php echo $row["bill_area"]; ?></td>
                <td><?php echo $row["issue_month"]; ?></td>
                <td><?php echo $row["issue_date"]; ?></td>
                <td><?php echo $row["due_date"]; ?></td>
                <td><?php echo $row["discon_date"]; ?></td>
                
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
            
                <div class="table-header"><h2>Unpaid Customer Bills</h2></div>
                <?php
                include_once 'db.php';
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                //CHANGE SQL QUARY HERE
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                $result = mysqli_query($connection,"SELECT * FROM Bill_details where bill_no='159320833161' or  bill_no='629331870828' or bill_no='936810891522' or bill_no='546864205641' or bill_no='646864205641'" );
                ?>
                <?php
                if (mysqli_num_rows($result) > 0) {
                ?>
                <table >
                    <thead>
                        <tr>
                            
                            <td>Bill No</td>
                            <td>transaction_id</td>
                            <!-- <td>Energy Charges</td> -->
                            <td> bill_amt</td>
                            <td>bill_area</td>
                            <td>issue_month</td>
                            <td>issue_date</td>
                            <td>due_date</td>
                            <td>discon_date</td>

                            <td>Status</td>
                        </tr>
                    </thead>
                <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                
                
                <td><?php echo $row["bill_no"]; ?></td>
                <td><?php echo $row["transaction_id"]; ?></td>
                <td><?php echo $row["bill_amt"]; ?></td>
                <td><?php echo $row["bill_area"]; ?></td>
                <td><?php echo $row["issue_month"]; ?></td>
                <td><?php echo $row["issue_date"]; ?></td>
                <td><?php echo $row["due_date"]; ?></td>
                <td><?php echo $row["discon_date"]; ?></td>
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
                //CHANGE SQL QUARY HERE
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                $result = mysqli_query($connection,"SELECT * FROM Bill_details" );
                ?>
                <?php
                if (mysqli_num_rows($result) > 0) {
                ?>
                <table >
                    <thead>
                        <tr>
                           
                            <td>Bill No</td>
                            <td>transaction_id</td>
                            <!-- <td>Energy Charges</td> -->
                            <td> bill_amt</td>
                            <td>bill_area</td>
                            <td>issue_month</td>
                            <td>issue_date</td>
                            <td>due_date</td>
                            <td>discon_date</td>

                           
                        </tr>
                    </thead>
                <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                
                
                <td><?php echo $row["bill_no"]; ?></td>
                <td><?php echo $row["transaction_id"]; ?></td>
                <td><?php echo $row["bill_amt"]; ?></td>
                <td><?php echo $row["bill_area"]; ?></td>
                <td><?php echo $row["issue_month"]; ?></td>
                <td><?php echo $row["issue_date"]; ?></td>
                <td><?php echo $row["due_date"]; ?></td>
                <td><?php echo $row["discon_date"]; ?></td>
                
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
        <!-- <div class="ticket-grid">
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
                <span class="tic-count">3</span>
            </div>
            <div class="tic ticket-4"><span class="tic-title">Payments</span>
                <ion-icon name="card-outline"></ion-icon>
                <span class="tic-count">1</span>
            </div>

        </div> -->
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
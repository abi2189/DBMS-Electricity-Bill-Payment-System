<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Account</title>
    <link rel="stylesheet" href="AdminDashBoard.css">
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#" >
                        <span class="icon"><ion-icon name=""></ion-icon></span>
                        <span class="title"></span>
                    </a>
                </li>
                <li>
                    <a href="CustomerProfile.php" >
                        <?php
                        require_once 'db.php';
                        include ($_SERVER['DOCUMENT_ROOT']."/ElectricityBilling/A1-user/php/custVar.php");
                        echo '<span class="title">';echo $first_name; echo '</span>';
                        ?>
                        <span class="profile-icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                    </a>
                </li>
                <li>
                    <a href="CustomerAccount.php" >
                        <span class="icon"><ion-icon name="paper-plane-outline"></ion-icon></span>
                        <span class="title">Notification</span>
                    </a>
                </li>
                <li>
                    <a href="CustomerCards.php" >
                        <span class="icon"><ion-icon name="card-outline"></ion-icon></span>
                        <span class="title">Payment</span>
                    </a>
                </li>
                <li style="pointer-events: none;">
                    <a href="#" >
                        <span class="icon"><ion-icon name=""></ion-icon></span>
                        <span class="title"></span>
                    </a>
                </li>
                <li style="pointer-events: none;">
                    <a href="#" >
                        <span class="icon"><ion-icon name=""></ion-icon></span>
                        <span class="title"></span>
                    </a>
                </li>
                <li style="pointer-events: none;">
                    <a href="#" >
                        <span class="icon"><ion-icon name=""></ion-icon></span>
                        <span class="title"></span>
                    </a>
                </li>
                <li style="pointer-events: none;">
                    <a href="#l" >
                        <span class="icon"><ion-icon name=""></ion-icon></span>
                        <span class="title"></span>
                    </a>
                </li>
                <li>
                    <a href="#" >
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
        <?php
         include_once 'db.php';
            $result = mysqli_query($connection, "select c.card_number, c.expiry_date, c.postal_code from customer_details c where c.user_id = '$uid';"); 
            if($result) {
                $row = $result->fetch_assoc();
        ?>  
        <div class="wh" style="height: 50px;"></div>
       <div class="card-outer">
        <div class="card">
            <form>
                <h2 class="card-head">Payment Card</h2>
                <div class="card-main-div">
                    <div >                    
                        <label for="Holder">Card Holder:</label>
                    </div>
                    <div>
                        <input type=" text" name="Holder" id="Holder" Value="<?php echo $full_name;?>" readonly>
                    </div>

                </div>
                
                <div class="card-main-div">
                    <div>
                        <label for="CardNumber">Card Number:</label>                    
                    </div> 
                    <div>
                        <input class=""type="tel" id="CardNumber" name="CardNumber" placeholder="12345678905732" pattern="[1-9]{4}[1-9]{4}[1-9]{4}[1-9]{4}" value="<?php echo $row["card_number"]?>" readonly>
                    </div>
                </div>
                <div class="card-main-div">
                    <div>
                        <label for="Expiry">Expiry Date:</label>
                    </div>
                    <div>
                        <input type="date" id="Expiry" name="Expiry" value="<?php echo $row["expiry_date"]?>"readonly>
                    </div>
                </div>
                
                <div class="card-main-div">
                    <div>
                        <label for="pincode">Postal Code:</label>
                        
                    </div>  
                    <div>
                        <input type="tel" id="pincode" name="pincode" placeholder="123456" pattern="[1-9]{1}[0-9]{5}" value="<?php echo $row["postal_code"]?>" readonly>
                    </div>

                </div>
               
            </form>     
            <?php
                
            }else{
                echo "not found";
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
</body>


</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <link rel="stylesheet" href="AdminDashBoard.css">
</head>
<style>
:root {
    --nav-bg: #020E26;
    /* --nav-bg-dark: #6D214F; */
    --tic-bg: #020E26;
    --white: #fff;
    --grey: #84817a;
    --black1: #222;
    --black2: #999;
}
</style>
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
                        
                        <span class="title">Abirami</span>
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
        <div class="wh" style="height: 50px;"></div>
        <div id="Div1">
            <div class="profile-div">
            <?php
                include_once 'db.php';
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                //CHANGE SQL QUARY HERE FOR CUSTOMER FETCH FROM FEED BACK 
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                $result = mysqli_query($connection,"select p.phone_no,p.email_id, p.user_id,p.first_name,p.last_name,p.passw, u.auto_renewal, u.postal_code, u.account_no, u.card_holder_name, u.expiry_date, u.service_no, s.pincode, addr.state, addr.city 
                from user_details p,customer_details u, address addr, service_details s
                 where p.user_id = 'pat228' and p.user_id= u.user_id and s.service_no = u.service_no and s.pincode = addr.pincode;");
               //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                //CHANGE SQL QUARY HERE FOR CUSTOMER FETCH FROM FEED BACK 
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                ?>
               
                <?php
                
                if($result) {
                    $row = $result->fetch_assoc();
                ?>
                <form  id="form" action="updateAdminDetails.php">
                    <div>                    
                        <label for="first_name">User First Name:</label>
                        <input type=" text" name="first_name" id="first_name" Value='<?php echo $row["first_name"]; ?>' readonly>
                    </div>
                    <div>
                        <label for="last_name">User Second Name:</label>
                        <input type=" text" name="last_name" id="last_name" Value=<?php echo $row["last_name"]; ?>readonly>
                    </div>
                    
                    <div >
                        <label for="userId">User Id:</label>
                        <input style="background-color: var(--grey);" type="tel" id="userId" name="userId" placeholder="12345678" pattern="[1-9]{1}[0-9]{7}" value=<?php echo $row["user_id"]; ?> readonly>
                    </div>
                    <div id="show">
                        <label for="pass">Password</label> 
                        <input type="password" name="pass" id="pass" value=<?php echo $row["passw"]; ?>readonly >
                    </div>
                    <!-- <h4 style="margin: 10px 0px; border:2px solid black;padding: 10px 70px; padding-left: 70px;" onclick="passtoggle()" >Change Password</h4> -->
                    
                    <div>
                        <label for="Postal">Postal Code:</label>
                        <input type="tel" id="Postal" name="Postal" placeholder="123456" pattern="[1-9]{1}[0-9]{5}" value=<?php echo $row["postal_code"]; ?>readonly>
                    </div>   
                    <div>
                        <label for="auto">Auto Renewal:</label>
                        <input type=" text" name="auto" id="auto" Value="Yes" readonly>
                    </div>
                    <h4 style="padding: 20px 70px; padding-left: 70px;">Address:</h2>
                    <div>
                        <label for="city">City:</label>
                        <input type=" text" name="city" id="city" Value=<?php echo $row["city"]; ?> readonly>
                    </div>   
                    <div>
                        <label for="state">State:</label>
                        <input type=" text" name="state" id="state" Value=<?php echo $row["state"]; ?>readonly>
                    </div>
                    <div>
                        <label for="pincode">Pincode:</label>
                        <input type="tel" id="pincode" name="pincode" placeholder="123456" pattern="[1-9]{1}[0-9]{5}" value=<?php echo $row["pincode"]; ?> readonly>
                    </div>              
    
                        
                    
                    <div>
                        <label for="phone">Mobile number:</label>
                        <input type="tel" id="phone" name="phone" placeholder="1234578890" pattern="[1-9]{1}[0-9]{9}" value=<?php echo $row["phone_no"]; ?> readonly>
                    </div>                
                    <div>
                        <label for="mail">Email</label>
                        <input type="email" name="mail" id="mail" value=<?php echo $row["email_id"]; ?>  readonly>
                    </div>  
                    
                    
                </form>
                <div type="button" value="Click" onclick="switchVisible();"class="update"><a href="#">Update</a></div>
                <?php
                
            }
            else{
                echo "not found";
            }
            ?>
                
            </div>
        </div>
        <div id="Div2">
            <div class="profile-div">
            <?php
                include_once 'db.php';
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                //CHANGE SQL QUARY HERE FOR CUSTOMER FETCH FROM FEED BACK 
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                $result = mysqli_query($connection,"select p.phone_no,p.email_id, p.user_id,p.first_name,p.last_name,p.passw, u.auto_renewal, u.postal_code, u.account_no, u.card_holder_name, u.expiry_date, u.service_no, s.pincode, addr.state, addr.city 
                from user_details p,customer_details u, address addr, service_details s
                 where p.user_id = 'pat228' and p.user_id= u.user_id and s.service_no = u.service_no and s.pincode = addr.pincode;");
               //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                //CHANGE SQL QUARY HERE FOR CUSTOMER FETCH FROM FEED BACK 
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                ?>
               
                <?php
                
                if($result) {
                    $row = $result->fetch_assoc();
                ?>
                <form  id="form" action="updateAdminDetails.php">
                    <div>                    
                        <label for="first_name">User First Name:</label>
                        <input type=" text" name="first_name" id="first_name" Value='<?php echo $row["first_name"]; ?>'>
                    </div>
                    <div>
                        <label for="last_name">User Second Name:</label>
                        <input type=" text" name="last_name" id="last_name" Value=<?php echo $row["last_name"]; ?>>
                    </div>
                    
                    <div style="background-color: var(--grey); color: var(--white); box-shadow: 0px 0px 0px 0px white;">
                        <label for="userId">User Id:</label>
                        <input style="background-color: var(--grey);" type="tel" id="userId" name="userId" placeholder="12345678" pattern="[1-9]{1}[0-9]{7}" value=<?php echo $row["user_id"]; ?>  >
                    </div>
                    <div id="show">
                        <label for="pass">Password</label> 
                        <input type="password" name="pass" id="pass" value=<?php echo $row["passw"]; ?>>
                    </div>
                    <!-- <h4 style="margin: 10px 0px; border:2px solid black;padding: 10px 70px; padding-left: 70px;" onclick="passtoggle()" >Change Password</h4> -->
                    
                    
                    <div>
                        <label for="Postal">Postal Code:</label>
                        <input type="tel" id="Postal" name="Postal" placeholder="123456" pattern="[1-9]{1}[0-9]{5}" value=<?php echo $row["postal_code"]; ?>>
                    </div>   
                    <div>
                        <label for="auto">Auto Renewal:</label>
                        <input type=" text" name="auto" id="auto" Value="Yes" >
                    </div>
                    <h4 style="padding: 20px 70px; padding-left: 70px;">Address:</h2>
                    <div>
                        <label for="city">City:</label>
                        <input type=" text" name="city" id="city" Value=<?php echo $row["city"]; ?>  >
                    </div>   
                    <div>
                        <label for="state">State:</label>
                        <input type=" text" name="state" id="state" Value=<?php echo $row["state"]; ?>>
                    </div>
                    <div>
                        <label for="pincode">Pincode:</label>
                        <input type="tel" id="pincode" name="pincode" placeholder="123456" pattern="[1-9]{1}[0-9]{5}" value=<?php echo $row["pincode"]; ?>  >
                    </div>              
    
                        
                    
                    <div>
                        <label for="phone">Mobile number:</label>
                        <input type="tel" id="phone" name="phone" placeholder="1234578890" pattern="[1-9]{1}[0-9]{9}" value=<?php echo $row["phone_no"]; ?> >
                    </div>                
                    <div>
                        <label for="mail">Email</label>
                        <input type="email" name="mail" id="mail" value=<?php echo $row["email_id"]; ?>  >
                    </div>  
                    
                    
                    
                    
                </div>
                
                </form>
                <!-- <div type="button" value="Click" onclick="switchVisible();"class="update"><a href="#">Update</a></div> -->
                <?php
                
            }
            else{
                echo "not found";
            }
            ?>
             <div>
                    <div  class="popup" >
                        <span class="popuptext" id="myPopup">Details Updated</span>
                    </div>


                    <button onclick="myFunction()" type="submit" value="Click"  class="submit"><a href="#">Submit</a>
                   
                    
                </div>
                <!-- <form>
                    <div>                    
                        <label for="fname">User First Name:</label>
                        <input type=" text" name="fname" id="fname" Value="Abirami" >
                    </div>
                    <div>
                        <label for="sname">User Second Name:</label>
                        <input type=" text" name="sname" id="sname" Value="Sadasivam" >
                    </div>
                    
                    <div style="background-color: var(--grey);">
                        <label for="userId">User Id:</label>
                        <input type="tel" id="userId" name="userId" placeholder="12345678" pattern="[1-9]{1}[0-9]{7}" value="27451672" readonly>
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" value="#Yogeshabi"  >
                    </div>
                    <div>
                        <label for="phone">Mobile number:</label>
                        <input type="tel" id="phone" name="phone" placeholder="1234578890" pattern="[1-9]{1}[0-9]{9}" value="7904028134"  >
                    </div>                
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="abi.ofcl@gmail.com"  >
                    </div>  
                    <div>
                        <label for="areaCon">Service No:</label>
                        <input type="tel" id="areaCon" name="areaCon" placeholder="12-345-678" pattern="[1-9]{2}[0-9]{3}[0-9]{3}" value="682026" >
                    </div>
                    <div>
                        <label for="DOB">DOB:</label>
                        <input type="date" id="DOB" name="DOB" value="2000-02-09" >
                    </div>
                    <div>
                        <label for="Postal">Postal Code:</label>
                        <input type="tel" id="Postal" name="Postal" placeholder="123456" pattern="[1-9]{1}[0-9]{5}" value="639378" >
                    </div>   
                    <div>
                        <label for="auto">Auto Renewal:</label>
                        <input type=" text" name="auto" id="auto" Value="Yes" >
                    </div>
                    <h4 style="padding: 20px 70px; padding-left: 70px;">Address:</h2>
                    <div>
                        <label for="city">City:</label>
                        <input type=" text" name="city" id="city" Value="Karur" >
                    </div>   
                    <div>
                        <label for="state">State:</label>
                        <input type=" text" name="state" id="state" Value="Tamil Nadu" >
                    </div>
                    <div>
                        <label for="pincode">Pincode:</label>
                        <input type="tel" id="pincode" name="pincode" placeholder="123456" pattern="[1-9]{1}[0-9]{5}" value="639006" >
                    </div>              
    
                    
                    <button> Submit</button>
    
                </form> -->
                
                
    
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
    <script>
        function switchVisible() {
            if (document.getElementById('Div1')) {

                if (document.getElementById('Div1').style.display == 'none') {
                    document.getElementById('Div1').style.display = 'block';
                    document.getElementById('Div2').style.display = 'none';
                }
                else {
                    document.getElementById('Div1').style.display = 'none';
                    document.getElementById('Div2').style.display = 'block';
                }
            }
}
    </script>
    <script>
        // When the user clicks on div, open the popup
        function myFunction() {
          var popup = document.getElementById("myPopup");
          popup.classList.toggle("show");
        }
        </script>
</body>


</html>
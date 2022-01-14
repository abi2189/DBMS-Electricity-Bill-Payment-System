<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="AdminDashBoard.css">
</head>
<style>
    :root {
    --nav-bg: #000;
    /* --nav-bg-dark: #6D214F; */
    --tic-bg: #000;
    --white: #fff;
    --grey: #a3a3a3;
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
        <div class="white-header" style="margin-top:200px">

        </div>
        <div id="Div1">
            <div class="profile-div">
            <?php
                include_once 'db.php';
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                //CHANGE SQL QUARY HERE FOR CUSTOMER FETCH FROM FEED BACK 
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                $result = mysqli_query($connection,"SELECT * FROM user_details where user_id='aly872'");
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
                    
                    <div style="background-color: var(--grey); color: var(--white); box-shadow: 0px 0px 0px 0px white;">
                        <label for="userId">User Id:</label>
                        <input style="background-color: var(--grey);" type="tel" id="userId" name="userId" placeholder="12345678" pattern="[1-9]{1}[0-9]{7}" value=<?php echo $row["user_id"]; ?> readonly>
                    </div>
                    <div id="show">
                        <label for="pass">Password</label> 
                        <input type="password" name="pass" id="pass" value=<?php echo $row["passw"]; ?>readonly >
                    </div>
                    <!-- <h4 style="margin: 10px 0px; border:2px solid black;padding: 10px 70px; padding-left: 70px;" onclick="passtoggle()" >Change Password</h4> -->
                    
                        
                    
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
                $result = mysqli_query($connection,"SELECT * FROM user_details where user_id='aly872'");
               //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                //CHANGE SQL QUARY HERE FOR CUSTOMER FETCH FROM FEED BACK 
                //-----------------------------------------------------------------------------------
                //-----------------------------------------------------------------------------------
                ?>
               
                <?php
                $i=0;
                if($result) {
                    $row = $result->fetch_assoc();
                ?>
                <form  id="form" action="updateAdminDetails.php">
                    <div>                    
                        <label for="first_name">User First Name:</label>
                        <input type=" text" name="first_name" id="first_name" Value=<?php echo $row["first_name"]; ?>>
                    </div>
                    <div>
                        <label for="last_name">User Second Name:</label>
                        <input type=" text" name="last_name" id="last_name" Value=<?php echo $row["last_name"]; ?>>
                    </div>
                    <div style="background-color: var(--grey); color: var(--white);">
                        <label for="adminId">Admin Id:</label>
                        <input style="background-color: var(--grey);" type="tel" id="adminId" name="adminId" placeholder="12345678" pattern="[1-9]{1}[0-9]{7}" value=<?php echo $row["user_id"]; ?>readonly>
                    </div>
                    
                    <div id="show">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass" value=<?php echo $row["passw"]; ?> >
                    </div>
                    <!-- <h4 style="margin: 10px 0px; border:2px solid black;padding: 10px 70px; padding-left: 70px;" onclick="passtoggle()" >Change Password</h4> -->
                    
                        
                    
                    <div>
                        <label for="phone">Mobile number:</label>
                        <input type="tel" id="phone" name="phone" placeholder="1234578890" pattern="[1-9]{1}[0-9]{9}" value=<?php echo $row["phone_no"]; ?> >
                    </div>                
                    <div>
                        <label for="mail">Email</label>
                        <input type="email" name="mail" id="mail" value=<?php echo $row["email_id"]; ?>  >
                    </div>  
                    
                    
                </form>
                <?php
                
                }
                ?>
                <div>
                    <div  class="popup" >
                        <span class="popuptext" id="myPopup">Details Updated</span>
                    </div>


                    <button onclick="myFunction()" type="submit" value="Click"  class="submit"><a href="#">Submit</a>
                   
                    
                </div>
                
                <?php
                
                
                ?>
                <!-- <form  id="form" action="updateAdminDetails.php">
                    <div>                    
                        <label for="first_name">User First Name:</label>
                        <input type=" text" name="first_name" id="first_name" Value="Abirami" >
                    </div>
                    <div>
                        <label for="last_name">User Second Name:</label>
                        <input type=" text" name="last_name" id="last_name" Value="Sadasivam" >
                    </div>
                    <div style="background-color: var(--grey); color: var(--white);">
                        <label for="adminId">Admin Id:</label>
                        <input style="background-color: var(--grey);" type="tel" id="adminId" name="adminId" placeholder="12345678" pattern="[1-9]{1}[0-9]{7}" value="54782362" readonly>
                    </div>
                    <div style="background-color: var(--grey); color: var(--white); box-shadow: 0px 0px 0px 0px white;">
                        <label for="userId">User Id:</label>
                        <input style="background-color: var(--grey);" type="tel" id="userId" name="userId" placeholder="12345678" pattern="[1-9]{1}[0-9]{7}" value="27451672" readonly>
                    </div>
                    <div id="show">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass" value="#Yogeshabi"  >
                    </div>
                     <h4 style="margin: 10px 0px; border:2px solid black;padding: 10px 70px; padding-left: 70px;" onclick="passtoggle()" >Change Password</h4> 
                    
                        
                    
                    <div>
                        <label for="phone">Mobile number:</label>
                        <input type="tel" id="phone" name="phone" placeholder="1234578890" pattern="[1-9]{1}[0-9]{9}" value="7904028134"  >
                    </div>                
                    <div>
                        <label for="mail">Email</label>
                        <input type="email" name="mail" id="mail" value="abi.ofcl@gmail.com"  >
                    </div>  
                    
                    
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
        $(document).ready(function(){
            $('#show').click(function() {
                $('.menu1').toggle("slide");
                // $('.menu2').toggle("slide");
            });
        });
        
        function passtoggle(){
            var x = document.getElementById("menu1");
            // var y = document.getElementById("menu2");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
            passtoggle2();
            
        }
        function passtoggle2(){
            // var x = document.getElementById("menu1");
            var y = document.getElementById("menu2");
            if (y.style.display === "none") {
                y.style.display = "block";
            } else {
                y.style.display = "none";
            }
            
        }

    </script>
    <script>
        const form = document.getElementById("form");
        const firstName = document.getElementById("first-name");
        const lastName = document.getElementById("last-name");
        const phone = document.getElementById("phone");
        const email = document.getElementById("mail");
        const password = document.getElementById("pass");
        const confirmPass = document.getElementById("cpass");

        form.addEventListener("submit", (e) => {
        e.preventDefault();
        validateForm();
        });
        function validateForm() {
        const phoneValue = phone.value;
        const emailValue = email.value;
        console.log(email.value);
        const passwordValue = password.value;
        const confirmPassValue = confirmPass.value;
        console.log(passwordValue, confirmPassValue);
        if (phoneValue === "") {
            setError(phone, "Phone number cannot be blank");
        } else if (phoneValue.length != 10) {
            setError(phone, "Phone number must be 10 digits");
        } else if (isNaN(phoneValue)) {
            setError(phone, "Invalid Phone number");
        } else {
            setSuccess(phone);
        }
        if (emailValue === "") {
            setError(email, "Email cannot be blank");
        } else if (!isEmail(emailValue)) {
            setError(email, "Not a valid email");
        } else {
            setSuccess(email);
        }
        if (passwordValue === "") {
            setError(password, "Password cannot be blank");
        } else if (passwordValue.length < 8 || passwordValue.length > 20) {
            setError(password, "Password length should be between 8 & 20 characters");
        } else {
            setSuccess(password);
        }
        if (confirmPassValue === "") {
            setError(confirmPass, "Please confirm password");
        } else if (passwordValue !== confirmPassValue) {
            setError(confirmPass, "Passwords do not match!");
        } else {
            setSuccess(confirmPass);
        }
        }

        function setError(input, message) {
        const formControl = input.parentElement;
        const small = formControl.querySelector("small");
        console.log(small);
        formControl.className = "form-control error";
        small.innerText = message;
        }

        function setSuccess(input) {
        const formControl = input.parentElement;
        formControl.className = "form-control success";
        }

        function isEmail(mail) {
        if (
            mail.indexOf("@") <= 0 ||
            (mail.charAt(mail.length - 4) != "." && mail.charAt(mail.length - 3) != ".")
        )
            return false;
        else return true;
        }

    </script>
</body>


</html>
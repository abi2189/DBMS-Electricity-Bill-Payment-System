<!-- 
    http://localhost/phpArav/s1-1-Payments/s5-sub-PaymentSub/s6-PaymentSubNew.php
 -->

<!DOCTYPE html> 

<html> 

    <head>
        <meta charset="UTF-8">
        <title>
            Payment Gateway
        </title>

        <link rel="stylesheet" type="text/css" href="s6-PaymentSubNew.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;300;400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;300;400&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
        
        <script src="https://kit.fontawesome.com/ac82b170ad.js" crossorigin="anonymous"></script>

    </head>

    <body>
        <form action="forms.php" method="POST" name="payForm">

            <div class="payContainer">
                <div class="header-text header-text-font">
                    Payment Gateway
                    <div class="borderBottom"></div>
                </div>

                <div class="card-section">
                    <div class="credit-div">
                        <input type="radio" id="active-ref-credit" style="display: none;" name="card-type">
                        <a href="#" class="card btn">
                            <label for="active-ref-credit">Credit Card</label>
                        </a>
                    </div>

                    <div class="debit-div">
                        <input type="radio" id="active-ref-debit" style="display: none;" name="card-type">
                        <a href="#" class="card btn">
                            <label for="active-ref-debit">Debit Card</label>
                        </a>
                    </div>
                    
                </div>

                <div class="type-of-card-parent">
                    <label for="card-type">
                        <span>Type of card:</span>
                        <select name="card" id="card-type" class="type-of-card">
                            <option value="visa">Visa 💳</option>
                            <option value="mcard">MasterCard 💳</option>
                            <option value="amex">American Express 💳</option>
                            <option value="rupay">rupay 💳</option>
                        </select>
                    </label>
                </div>

                <!-- JS1 -->
                <div class="card-name-parent cond">
                    <label for="name-on-card">
                        <span>Name on card:</span>
                        <input class="card-name" id="name-on-card" type="text" name="cardNameName" onchange="cardNameCheck()" placeholder="Name"><br><br>
                        <div>
                            <span id="card-name-cond-1"><i class="fas fa-times-circle" id="card-name-cond-1-icon"></i> Only Characters allowed</span>
                            <!-- <span></span> -->
                        </div>
                        <?php
                        // require_once 'db.php';
                        // $cardHolderName = $_POST['cardNameName'];
                        ?>
                    </label>
                </div>

                <!-- JS2 -->
                <div class="expiry-class cond">
                    <label for="expiry">
                        <span>Expiry date:</span>
                        <input type="month" id="expiry" class="exp-date" name="expiryName" onchange="expiryCheck()"><br><br>
                        <div>
                            <span id="expiry-cond-1"><i class="fas fa-times-circle" id="expiry-cond-1-icon"></i> Should not be expired</span>
                        </div>
                        <?php
                        // $expiry = $_POST['expiryName'];
                        ?>
                    </label>
                </div>

                <!-- JS3 -->
                <div class="no-on-card cond">
                    <label for="card-nos">
                        <span>Card Number:</span>
                        <input type="text" class="card-no" id="card-nos" name="cardNoName" onchange="cardNoCheck()" placeholder="Card Number"><br><br>
                        <div>
                            <span id="card-no-cond-1"><i class="fas fa-times-circle" id="card-no-cond-1-icon"></i> Only Numericals allowed</span><br>
                            <span id="card-no-cond-2"><i class="fas fa-times-circle" id="card-no-cond-2-icon"></i> Contains 16 digits</span>
                        </div>
                        <!-- extra -->
                        <div><br><label for="auto"><input type="checkbox" name="auto-renewal" id="auto" value="1" style="scale: 1.5;">
                        <span style="font-size: 15px;">Save Card for Auto-Renewal</span>
                        </label></div>
                        <!-- end-extra -->
                        <?php
                        // $cardNo = $_POST['cardNoName'];
                        // $autoRenewal = $_POST['auto-renewal'];

                        ?>
                    </label>
                </div>

                <!-- JS4 -->
                <div class="cvv-class cond">
                    <label for="cvv">
                        <span>CVV:</span>
                        <input type="password" id="cvv" class="cvv-no" name="CVVName" onchange="cvvCheck()" placeholder="CVV"><br><br>
                        <div>
                            <span id="cvv-cond-1"><i class="fas fa-times-circle" id="cvv-cond-1-icon"></i> Only Numericals allowed</span><br>
                            <span id="cvv-cond-2"><i class="fas fa-times-circle" id="cvv-cond-2-icon"></i> Contains 3 digits</span></span>
                        </div>
                        <?php
                        // $cvv = $_POST['CVVName'];
                        ?>
                    </label>
                    <!-- <i class="fa fa-times" aria-hidden="true"></i> -->
                </div>

                <!-- <div></div> -->
                <div class="footer-text header-text-font">
                    <input type="reset" value="Reset" class="footer-btn btn" onclick="location.reload();">
                    <!-- location.reload() - just reloads the pg inc. js, beautiful hack. -->
                    <input type="submit" name="submit" value="Proceed" class="footer-btn btn" id="submit-btn-id" disabled >
                    <!-- make two classes for enabled and disabled -->
                </div>
            </div>
        </form>
        
        <!-- SCRIPT INSERTS -->
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
        <script src="s6-PaymentSubNew.js"></script>

    </body>
</html>

<!--
    correct 
    <i class="fas fa-check-circle"></i>
    
    wrong
    <i class="fas fa-times-circle"></i>
 -->
<!-- http://localhost/phpArav/s1-0-Bills/bills.php -->

<!DOCTYPE html> 

<html> 

    <head>
        <meta charset="UTF-8">
        <title>
            Bills
        </title>
        <link rel="stylesheet" type="text/css" href="bills.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="bigContainer">
            <!-- =================================================== -->
            <div class="whitespace-1 wh"></div>
            <div class="whitespace-2 wh">Bills Issued Recently<div class="borderBottom"></div></div>
            <div class="whitespace-3 wh"></div>
            <!-- =================================================== -->
            <!-- TYPES DUE,OVERDUE,UPCOMING -->

            <div class="bills-main b1">
                <?php
                    include_once 'db.php';
                    include_once ($_SERVER['DOCUMENT_ROOT']."/ElectricityBilling/A1-user/php/custVar.php");
                    $result = mysqli_query($connection,"SELECT * FROM bill_details WHERE user_id = '$uid' and due_date <= NOW()and YEAR(due_date) <= YEAR(NOW());");
                    $row = mysqli_fetch_array($result);
                ?>
                <div class="bill-1 bill-all">
                    <div class="card">
                        <div class="front overdue-front">
                            <div class="header">OVERDUE <br> BILL</div>
                            <div class="points">
                                ISSUE DATE : <?php echo $row['issue_date']; ?> <br><hr>
                                DUE DATE : <?php echo $row['due_date'];?> <br><hr>
                                DISCONTINUED DATE : <?php echo $row['discon_date'];?>

                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                <hr style="position: absolute;left: 5%;right: 5%; ">
                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                <?php
                                $oc = 0.25 * $row['bill_amt'];
                                $ec = 0.75 * $row['bill_amt'];
                                ?>
                                
                                ENERGY CHARGES : &#8377;<?php echo $oc;?><br><hr>
                                OTHER CHARGES : &#8377;<?php echo $ec;?><br><hr>
                                BILL AMOUNT : &#8377;<?php echo $row['bill_amt'];?> <br><hr>
                            </div>
                        </div>
                        <div class="back overdue-back">
                            <div class="price">
                                &#8377;<?php echo $row['bill_amt'];?> 
                            </div>
                            <div class="pay">
                                <a href="../s1-1-Payments/s5-sub-PaymentSub/s6-PaymentSubNew.php">PAY NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    include_once 'db.php';
                    $result = mysqli_query($connection,"SELECT * FROM bill_details WHERE user_id = '$uid' and MONTH(due_date) = MONTH(NOW()) and YEAR(due_date) = YEAR(NOW());");
                    $row = mysqli_fetch_array($result);
                ?>
                <div class="bill-2 bill-all">
                    <div class="card">
                        <div class="front due-front">
                            <div class="header">DUE BILL</div>
                            <div class="points">
                                ISSUE DATE : <?php echo $row['issue_date']; ?> <br><hr>
                                DUE DATE : <?php echo $row['due_date'];?> <br><hr>
                                DISCONTINUED DATE : <?php echo $row['discon_date'];?>

                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                <hr style="position: absolute;left: 5%;right: 5%; ">
                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                
                                <?php
                                $oc = 0.25 * $row['bill_amt'];
                                $ec = 0.75 * $row['bill_amt'];
                                ?>
                                
                                ENERGY CHARGES : &#8377;<?php echo $oc;?><br><hr>
                                OTHER CHARGES : &#8377;<?php echo $ec;?><br><hr>
                                BILL AMOUNT : &#8377;<?php echo $row['bill_amt'];?> <br><hr>
                            </div>
                        </div>
                        <div class="back due-back">
                            <div class="price">
                                &#8377;<?php echo $row['bill_amt'];?>
                            </div>
                            <div class="pay">
                                <a href="../s1-1-Payments/s5-sub-PaymentSub/s6-PaymentSubNew.php">PAY NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bill-3 bill-all">
                    <div class="card">
                        <div class="front upcoming-front">
                            <div class="header">UPCOMING <br> BILL</div>
                            <div class="points">
                                ISSUE DATE : 2022-03-12 <br><hr>
                                DUE DATE : 2022-03-17 <br><hr>
                                DISCONTINUED DATE : 2022-03-22

                                <!-- <span style="line-height: 15px; display: block;">&nbsp;</span>
                                <hr style="position: absolute;left: 5%;right: 5%; ">
                                <span style="line-height: 15px; display: block;">&nbsp;</span> -->
                                
                                <!-- ENERGY CHARGES : &#8377;100<br><hr>
                                OTHER CHARGES : &#8377;100<br><hr>
                                BILL AMOUNT : &#8377;100 <br><hr> -->
                            </div>
                        </div>
                        <div class="back upcoming-back">
                            <div class="price" style="font-size: 30px;">
                                Issued soon
                            </div>
                            <div class="pay">
                                <a style="box-shadow: 0px 0px 0px 0px black; color:black;">PAY NOW</a>
                                <!-- no href non clickable -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =================================================== -->
            <div class="whitespace-4 wh"></div>
            <div class="whitespace-5 wh">Bills Already Paid<div class="borderBottom"></div></div>
            <div class="whitespace-6 wh"></div>
            <!-- =================================================== -->
            
            <div class="bills-main b2">
                <?php
                include_once 'db.php';
                // $user_id = 'yvo809';
                $result = mysqli_query($connection,"SELECT * FROM bill_details WHERE user_id = '$uid' and issue_date < CURRENT_DATE() ORDER BY issue_date ASC");
                $i = 0;
                while($row = mysqli_fetch_array($result)){
                ?>
                <div class="bill-1 bill-all">
                    <div class="card">
                        <div class="front paid-front">
                            <div class="header">PAID BILL</div>
                            <div class="points">
                                ISSUE DATE : <?php echo $row['issue_date']; ?> <br><hr>
                                DUE DATE : <?php echo $row['due_date'];?> <br><hr>
                                DISCONTINUED DATE : <?php echo $row['discon_date'];?>

                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                <hr style="position: absolute;left: 5%;right: 5%; ">
                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                <?php
                                $oc = 0.25 * $row['bill_amt'];
                                $ec = 0.75 * $row['bill_amt'];
                                ?>
                                ENERGY CHARGES : &#8377;<?php echo $oc;?><br><hr>
                                OTHER CHARGES : &#8377;<?php echo $ec;?><br><hr>
                                BILL AMOUNT : &#8377;<?php echo $row['bill_amt'];?> <br><hr>
                            </div>
                        </div>
                        <div class="back paid-back">
                            <div class="paid price">
                                PAID
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $i++;
                }
                ?>
                <!-- <div class="bill-2 bill-all">
                    <div class="card">
                        <div class="front paid-front">
                            <div class="header">PAID BILL</div>
                            <div class="points">
                                ISSUE DATE : 23/9/2021 <br><hr>
                                DUE DATE : 25/9/2021 <br><hr>
                                DISCONTINUED DATE : 25/10/2021

                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                <hr style="position: absolute;left: 5%;right: 5%; ">
                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                
                                ENERGY CHARGES : &#8377;2700<br><hr>
                                OTHER CHARGES : &#8377;800<br><hr>
                                BILL AMOUNT : &#8377;3500 <br><hr>
                            </div>
                        </div>
                        <div class="back paid-back">
                            <div class="paid price">
                                PAID
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bill-3 bill-all">
                    <div class="card">
                        <div class="front paid-front">
                            <div class="header">PAID BILL</div>
                            <div class="points">
                                ISSUE DATE : 23/8/2021 <br><hr>
                                DUE DATE : 25/8/2021 <br><hr>
                                DISCONTINUED DATE : 25/7/2021

                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                <hr style="position: absolute;left: 5%;right: 5%; ">
                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                
                                ENERGY CHARGES : &#8377;2400<br><hr>
                                OTHER CHARGES : &#8377;600<br><hr>
                                BILL AMOUNT : &#8377;3000 <br><hr>
                            </div>
                        </div>
                        <div class="back paid-back">
                            <div class="paid price">
                                PAID
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bill-4 bill-all">
                    <div class="card">
                        <div class="front paid-front">
                            <div class="header">PAID BILL</div>
                            <div class="points">
                                ISSUE DATE : 23/7/2021 <br><hr>
                                DUE DATE : 25/7/2021 <br><hr>
                                DISCONTINUED DATE : 25/6/2021

                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                <hr style="position: absolute;left: 5%;right: 5%; ">
                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                
                                ENERGY CHARGES : &#8377;2000<br><hr>
                                OTHER CHARGES : &#8377;500<br><hr>
                                BILL AMOUNT : &#8377;2500 <br><hr>
                            </div>
                        </div>
                        <div class="back paid-back">
                            <div class="paid price">
                                PAID
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bill-5 bill-all">
                    <div class="card">
                        <div class="front paid-front">
                            <div class="header">PAID BILL</div>
                            <div class="points">
                                ISSUE DATE : 23/6/2021 <br><hr>
                                DUE DATE : 25/6/2021 <br><hr>
                                DISCONTINUED DATE : 25/5/2021

                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                <hr style="position: absolute;left: 5%;right: 5%; ">
                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                
                                ENERGY CHARGES : &#8377;2700<br><hr>
                                OTHER CHARGES : &#8377;800<br><hr>
                                BILL AMOUNT : &#8377;3500 <br><hr>
                            </div>
                        </div>
                        <div class="back paid-back">
                            <div class="paid price">
                                PAID
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bill-6 bill-all">
                    <div class="card">
                        <div class="front paid-front">
                            <div class="header">PAID BILL</div>
                            <div class="points">
                                ISSUE DATE : 23/5/2021 <br><hr>
                                DUE DATE : 25/5/2021 <br><hr>
                                DISCONTINUED DATE : 25/4/2021

                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                <hr style="position: absolute;left: 5%;right: 5%; ">
                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                
                                ENERGY CHARGES : &#8377;2400<br><hr>
                                OTHER CHARGES : &#8377;600<br><hr>
                                BILL AMOUNT : &#8377;3000 <br><hr>
                            </div>
                        </div>
                        <div class="back paid-back">
                            <div class="paid price">
                                PAID
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bill-7 bill-all">
                    <div class="card">
                        <div class="front paid-front">
                            <div class="header">PAID BILL</div>
                            <div class="points">
                                ISSUE DATE : 23/4/2021 <br><hr>
                                DUE DATE : 25/4/2021 <br><hr>
                                DISCONTINUED DATE : 25/3/2021

                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                <hr style="position: absolute;left: 5%;right: 5%; ">
                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                
                                ENERGY CHARGES : &#8377;2000<br><hr>
                                OTHER CHARGES : &#8377;500<br><hr>
                                BILL AMOUNT : &#8377;2500 <br><hr>
                            </div>
                        </div>
                        <div class="back paid-back">
                            <div class="paid price">
                                PAID
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bill-8 bill-all">
                    <div class="card">
                        <div class="front paid-front">
                            <div class="header">PAID BILL</div>
                            <div class="points">
                                ISSUE DATE : 23/3/2021 <br><hr>
                                DUE DATE : 25/3/2021 <br><hr>
                                DISCONTINUED DATE : 25/2/2021

                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                <hr style="position: absolute;left: 5%;right: 5%; ">
                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                
                                ENERGY CHARGES : &#8377;2700<br><hr>
                                OTHER CHARGES : &#8377;800<br><hr>
                                BILL AMOUNT : &#8377;3500 <br><hr>
                            </div>
                        </div>
                        <div class="back paid-back">
                            <div class="paid price">
                                PAID
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bill-9 bill-all">
                    <div class="card">
                        <div class="front paid-front">
                            <div class="header">PAID BILL</div>
                            <div class="points">
                                ISSUE DATE : 23/2/2021 <br><hr>
                                DUE DATE : 25/2/2021 <br><hr>
                                DISCONTINUED DATE : 25/1/2021

                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                <hr style="position: absolute;left: 5%;right: 5%; ">
                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                
                                ENERGY CHARGES : &#8377;2000<br><hr>
                                OTHER CHARGES : &#8377;500<br><hr>
                                BILL AMOUNT : &#8377;2500 <br><hr>
                            </div>
                        </div>
                        <div class="back paid-back">
                            <div class="paid price">
                                PAID
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bill-10 bill-all">
                    <div class="card">
                        <div class="front paid-front">
                            <div class="header">PAID BILL</div>
                            <div class="points">
                                ISSUE DATE : 23/1/2021 <br><hr>
                                DUE DATE : 25/1/2021 <br><hr>
                                DISCONTINUED DATE : 25/12/2020

                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                <hr style="position: absolute;left: 5%;right: 5%; ">
                                <span style="line-height: 15px; display: block;">&nbsp;</span>
                                
                                ENERGY CHARGES : &#8377;2400<br><hr>
                                OTHER CHARGES : &#8377;600<br><hr>
                                BILL AMOUNT : &#8377;3000 <br><hr>
                            </div>
                        </div>
                        <div class="back paid-back">
                            <div class="paid price">
                                PAID
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- =================================================== -->
            <div class="whitespace-7 wh"></div>

            
        </div>

        <!-- SCRIPT INSERTS -->
        <!-- only this version works  -->
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </body>
</html>

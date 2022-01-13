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
                    <a href="../A1-user/login.html" >
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
        <div class="ticket-grid">
            <div class="tic ticket-1"><span class="tic-title">Due Bill</span>
                <ion-icon name="newspaper-outline"></ion-icon>
                <span class="tic-count">0</span>
            </div>
            <div class="tic ticket-2"><span class="tic-title">Transaction Failure</span>
                <ion-icon name="wallet-outline"></ion-icon>
                <span class="tic-count">2</span>
            </div>
            <div class="tic ticket-3"><span class="tic-title">Card Rejection</span>
                <ion-icon name="card-outline"></ion-icon>
                <span class="tic-count">0</span>
            </div>
            <div class="tic ticket-4"><span class="tic-title">Reply</span>
                <ion-icon name="person"></ion-icon>
                <span class="tic-count">1</span>
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
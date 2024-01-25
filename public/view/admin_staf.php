
<html>
    <head>
    <title>Tak</title>
        <meta charset="utf-8">
        <meta name="description" content="My bisness">
        <meta name="author" content="Konrad Tatomir">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="public/css/bar.css">
        <link rel="stylesheet" href="public/css/admin.css">

        <link rel="icon" type="image/x-icon" href="public/img/favicon.ico">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="public/js/shop.js"></script>

    </head>
    <body>
        
        <header>
            <div class="logo">
                <a href="project"> <img src="public/img/logo.png" alt="Logo" height="70"></a>
            </div>
            <nav class="category">
                <div class="mobile-icon" onclick="toggleMenu()">&#9776;</div>
                <ol class="menu-list">
                    <li class="main-page-link"><a href="#">Strona główna</a></li>
                    <li><a href="#">Zabawki</a>
                        <ul class="sub-menu">
                            <li><a href="#">pluszaki</a></li>
                            <li><a href="#">karciane</a></li>
                            <li><a href="#">pole</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Papiernicze</a>
                        <ul class="sub-menu">
                            <li><a href="#">zeszyty</a></li>
                            <li><a href="#">bloki</a></li>
                            <li><a href="#">dlugopisy</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Inne</a>
                        <ul class="sub-menu">
                            <li><a href="#">bateria</a></li>
                            <li><a href="#">kartki</a></li>
                        </ul>
                    </li>
                </ol>
            </nav>
            
            
            <div class="top-bar">
                <div class="icons">
                    <div class="search-bar">
                        <img src="public/img/lupa.png">
                        <input type="text" placeholder="SZUKAJ">
                    </div>
                    <a href="koszyk">
                        <img src="public/img/sbag.png" alt="Kosz" height="50">
                        <span class="info-text">Koszyk</span>
                    </a>
                    <div class="user-menu">
                        <?php 
                        
                        if($_SESSION['loggedin'] == true) { 
                                
                                $link = "profil";
                        
                            } else {

                                $link = "login";
                            }

                        ?>
                        <a href="<?php echo $link?>">
                            <img src="public/img/user.png" alt="Użytkownik" height="50">
                            <span class="info-text">Konto</span>
                        </a>
                        <?php if($_SESSION['loggedin'] == true) {?>
                            <?php if($_SESSION['isAdmin']) {?>
                                <a href="admin_staf" class="conto-btn btn1">Admin staf</a>
                                <a href="logout" class="conto-btn btn2">Wyloguj się</a>
                            <?php }else{?>
                                <a href="logout" class="conto-btn btn1">Wyloguj się</a>
                                <?php } ?>
                        
                        <?php }?>
                    </div>
                </div>
            </div>
            
        </header>
   
        <main>
            <div class="users-info">
                <?php

            echo '<h1>Users and Orders</h1>';
            foreach ($result as $userData) {
                echo '<h2>Email: ' . $userData['user_email'] . '</h2>';
                
                if (!empty($userData['orders'])) {
                    echo '<table>';
                    echo '<tr><th>data zlozenia</th><th>kwota</th><th>Status</th></tr>';
                    $order=$userData['orders'][0];
                        echo '<tr>';

                        echo '<td>' . $order['order_date'] . '</td>';
                        echo '<td>' . $order['order_amount'] . '</td>';
                        echo '<td>' . $order['order_status'] . '</td>';
                        echo '</tr>';
                    
                    echo '</table>';
                } else {
                    echo '<p>No orders found for this user.</p>';
                }

                echo '<hr>';
            }
            ?>
            </div>
        </main>

    </body>
</html>
<?php

session_start();

?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sasta Medicine</title>
        <link rel="icon" href="img/logo.jpg" type="image/icon type">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'links.php' ?>;
    </head>

    <body>
        <header>
            
            <a class="logo" href="#Section_1"><img src="img/logo.png" alt="logo" height="70" width="250"></a>
            <nav>
                <ul class="nav__links">
                    <li><a class="current_section" href="#Section_1">Search Medicine</a></li>
                    <li><a class="current_section" href="#Section_2">Shop by Category</a></li>
                    <li><a class="current_section" href="#Section_3">Medical Tests</a></li>
                    <li><a class="current_section" href="#Section_4">Diet Clinic</a></li>
                </ul>
            </nav>
            <?php

                if(isset($_SESSION['username'])){
                    ?>
                    <!-- <a class="Login" href="./Log_out.php">Logout</a> -->
                    <div class="right">
                        <ul>
                            <li>
                                <a href="#!">
                                    <img src="img/profile.jpg" id="profile" alt="Admin" width="45" >
                                </a>
                                <div class="dropdown">
                                    <ul>
                                        <li><a href="#!"><i class="fas fa-user"></i> Profile</a></li>
                                        <li><a href="#!"><i class="fas fa-cart-plus"></i> Orders</a></li>
                                        <li><a href="#!"><i class="fas fa-moon"></i>DarkMode</a></li><div class="theme-switch-wrapper"><label class="theme-switch" for="checkbox"><input type="checkbox" id="checkbox" /><div class="slider round"></div></label></div>
                                        <li><a href="./Log_out.php"><i class="fas fa-sign-out-alt"></i> SignOut</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <script>
                        document.querySelector(".right ul li").addEventListener("click", function(){
                            this.classList.toggle("active");
                        });
                    </script>
                    <?php
                }
                else{
                    ?>
                    <a class="Login" href="./Log_In.php">Sign in</a>
                    <?php
                }
            ?>
        </header>

                                <!--Container-->
        <div class="container">
                                <!-- Section:1 -->
            <div class="sec-1" id="Section_1">
                <br><br><br><br><br><br><br><br>
                <img src="img/sec_1_bg.svg" alt="image"class="responsive"> 
                
            </div>
                                    <!-- Section:2 -->
            <div class="sec-2" id="Section_2">
                <br><br><br><br><br><br><br><br>
                <div class="cards">
                    <!-- A card with given width -->
                    <div class="cards__item"><a href="#"><img src="img/shop1.jpg" alt="1" class="shop_img" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Covid Essentials</a></div>
                    <div class="cards__item"><a href="#"><img src="img/shop2.jpg" alt="2" class="shop_img" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Baby & Mom Care</a></div>
                    <div class="cards__item"><a href="#"><img src="img/shop3.png" alt="3" class="shop_img" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beauty & Personal Care</a></div>
                    <div class="cards__item"><a href="#"><img src="img/shop4.jpg" alt="4" class="shop_img" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Woman Care</a></div>
                </div> 
                <div class="cards"> 
                    <!-- A card with given width -->
                    <div class="cards__item"><a href="#"><img src="img/shop5.png" alt="5" class="shop_img" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Homecare & Hygiene</a></div>
                    <div class="cards__item"><a href="#"><img src="img/shop6.png" alt="6" class="shop_img" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ayurvedic & Herbal</a></div>
                    <div class="cards__item"><a href="#"><img src="img/shop7.png" alt="7" class="shop_img" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Devices & Orthopaedic</a></div>
                    <div class="cards__item"><a href="#"><img src="img/shop8.png" alt="8" class="shop_img" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Health Food & Beverages</a></div>
                </div>
                <div class="cards">
                    <!-- A card with given width -->
                    <div class="cards__item"><a href="#"><img src="img/shop9.jpg" alt="9" class="shop_img" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pet Care</a></div>
                    <div class="cards__item"><a href="#"><img src="img/shop10.png" alt="10" class="shop_img" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gift Health Box</a></div>
                    <div class="cards__item"><a href="#"><img src="img/shop11.png" alt="11" class="shop_img" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Health Drinks & Supplements</a></div>
                    <div class="cards__item"><a href="#"><img src="img/shop12.png" alt="12" class="shop_img" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shop By Brands</a></div>
                </div>               

                <!-- <img src="img/sec_2_bg.svg" alt="image"class="responsive">  -->
            </div>
                                        <!-- Section:-3 -->
            <div class="sec-3" id="Section_3"> 
                <br><br><br><br><br><br><br><br>
                sec 3
            </div>
                                        <!-- Section:-4 -->
            <div class="sec-4" id="Section_4">
                <br><br><br><br><br><br><br><br>
                <img src="img/sec_4_bg.svg" alt="image"class="sec4">
            </div>
        </div>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>

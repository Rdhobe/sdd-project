<?php 
session_start();
$loggedin=true;
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin'] !=true){
      $loggedin =false;
   }
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewSagar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css"
        integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="import" href="table.html">
    <link rel="stylesheet" href="index1.css">

</head>

<body>

    <!-- header-section -->


    <section id="Header-1">
        <header>
            <div class="container">
                <img src="mainlogo.jpeg" alt="slogo" class="sagarlogo">
                <a href="table.html" id="logoname" class="border">NEW SAGAR MOBILE</a>
            </div>
            <section id="header-2" class="pos">
                <div class="header2">
                    <input type="checkbox" name="" id="chk1">
                    <div class="logo">
                        <h1>New Sagar</h1>
                    </div>
                    <div class="search-box">
                        <form action="">
                            <input type="text" name="search" id="scrh" placeholder="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="#">CATEGORY</a>
                            <div class="sub-menu-1">
                                <ul>
                                    <li><a href="#" target="_blank">MOBILE</a>
                                        <ul>
                                           <li><a href=""></a></li>
                                           <li><a href=""></a></li>
                                           <li><a href=""></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="https://www.apple.com/" target="_blank">APPLE</a></li>
                                    <li><a href="/product/vivo.html" target="_blank">VIVO</a></li>
                                    <li><a href="https://www.oppo.com/" target="_blank">OPPO</a></li>
                                    <li><a href="https://www.oneplus.com/" target="_blank">ONEPLUS</a></li>
                                    <li><a href="https://www.mi.com/in/" target="_blank">XIAOMI</a></li>
                                    <li><a href="https://www.realme.com/global/" target="_blank">REALME</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">CART</a></li>
                        <li><a href="#">MORE</a>
                            <div class="sub-menu-1">
                                <ul>
                                    <li><?php if(isset($_SESSION['loggedin'])){echo "<a href='logout.php'>Logout</a>";}
                                        else {echo "<a href='login.php'>Login</a>";}?></li>
                                    <!-- <li><a href="/html code/login.html" target="_blank">LOGIN</a></li> -->
                                    <li><a href="">ABOUT</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="menu">
                        <label for="chk1">
                            <i class="fa fa-bars"></i>
                        </label>
                    </div>
                </div>
            </section>
        </header>
    </section> 



    <!-- hero-section -->


    <section id="hero" class="hero padding">
    </section>

    <!-- main-section -->


    <main>
        <section class="brands" id="brands">
            <ul type="none">
                <li><a href="/product/samsung/samsung.html"> <img src="samsungwithwhitebackground.jpeg" alt=""></a>
                </li>
                <li><a href="/product/VIVO/vivo.html"> <img src="vivo.jpg" alt=""></a></li>
                <li><a href="/product/oppo/oppo.html"> <img src="oppo.jpg" alt=""></a></li>
                <li><a href=""> <img src="oneplus.jpg" alt=""></a></li>
                <li><a href=""> <img src="mi.jpg" alt=""></a></li>
                <li><a href=""> <img src="othersapliances.jpeg" alt=""></a></li>
            </ul>
        </section>




        <!-- product-section -->


        <section id="addproduct" class="addproduct padding">
            <h1 class="pheading">OUR TOP PRODUCTS</h1>
            <div class="pro-container">
                <div class="pro">
                    <img src="zip fold.jpeg" alt="s23ultra">
                    <div class="des">
                        <span>samsung</span>
                        <h5>SAMSUNG Galaxy Z Fold 5 </h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>₹1,58,821</h4>
                    </div>
                </div>
                <div class="pro">
                    <img src="SAMSUNG Galaxy Z Flip 5.jpeg" alt="SAMSUNG Galaxy Z Flip 5">
                    <div class="des">
                        <span>samsung</span>
                        <h5>SAMSUNG Galaxy Z Flip 5</h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>₹82,719</h4>
                    </div>
                </div>

                <div class="pro">
                    <img src="iphone.jpg" alt="iphone">
                    <div class="des">
                        <span>APPPLE</span>
                        <h5>iPhone 14</h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>₹67,999</h4>
                    </div>
                </div>
                <div class="pro">
                    <img src="s23ultra.jpg" alt="s23ultra">
                    <div class="des">
                        <span>samsung</span>
                        <h5>Samsung galaxy s23ultra</h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>₹1,24,999</h4>
                    </div>
                </div>
                <div class="pro">
                    <img src="v27.jpg" alt="V27">
                    <div class="des">
                        <span>VIVO</span>
                        <h5>vivo V27 Pro 5G</h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>₹39,999</h4>
                    </div>
                </div>
                <div class="pro">
                    <img src="reno10.jpg" alt="reno10">
                    <div class="des">
                        <span>OPPO</span>
                        <h5>OPPO Reno10 5G</h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>₹32,999</h4>
                    </div>
                </div>
                <div class="pro">
                    <img src="11r.jpg" alt="11r">
                    <div class="des">
                        <span>ONEPLUS</span>
                        <h5>OnePlus 11 5G</h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>₹1,24,999</h4>
                    </div>
                </div>
                <div class="pro">
                    <img src="a23.jpg" alt="s23ultra">
                    <div class="des">
                        <span>samsung</span>
                        <h5>Samsung galaxy s23ultra</h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>₹53,767</h4>
                    </div>
                </div>
                <!-- <div class="pro">
                    <img src="/icons and photos/product/s23ultra.jpg" alt="s23ultra">
                    <div class="des">
                        <span>samsung</span>
                        <h5>Samsung galaxy s23ultra</h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$1,24,999</h4>
                    </div>
                </div>
                <div class="pro">
                    <img src="/icons and photos/product/s23ultra.jpg" alt="s23ultra">
                    <div class="des">
                        <span>samsung</span>
                        <h5>Samsung galaxy s23ultra</h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$1,24,999</h4>
                    </div>
                </div>
                <div class="pro">
                    <img src="/icons and photos/product/s23ultra.jpg" alt="s23ultra">
                    <div class="des">
                        <span>samsung</span>
                        <h5>Samsung galaxy s23ultra</h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$1,24,999</h4>
                    </div>
                </div>
                <div class="pro">
                    <img src="/icons and photos/product/s23ultra.jpg" alt="s23ultra">
                    <div class="des">
                        <span>samsung</span>
                        <h5>Samsung galaxy s23ultra</h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$1,24,999</h4>
                    </div>
                </div> -->

        </section>


    </main>
</body>

</html>
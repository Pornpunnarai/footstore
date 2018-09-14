<?php
include ('connect-mysql.php');
session_start();
?>

<body class="animsition">
<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full">
                <div class="left-top-bar">
                    <a href="/footstore/index.php" class="logo">
                        <img src="images/icons/logo-03.png" width="30%" alt="IMG-LOGO">
                    </a>
                </div>

                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        <div class="wrap-icon-header flex-w flex-r-m">
                            <div id="number_notify" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="0">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>


        <div class="wrap-menu-desktop">
            <div class="navbar">
                <a href="/footstore/index.php">HOME</a>
                <div class="dropdown">
                    <button class="dropbtn">NIKE
                        <i class="fa fa-caret-down"></i>
                    </button>

                    <div class="dropdown-content">
                        <div class="row">
                            <div class="column">
                                <strong class="text-uppercase">nike basketball</strong>
                                <a href="#">Blazer</a>
                                <a href="#">Charles Barkley</a>
                                <a href="#">Kelvin Durant</a>
                                <a href="#">Kobe Bryant</a>
                                <a href="#">Others Basketball</a>
                            </div>
                            <div class="column">
                                <strong class="text-uppercase">nike cros-training</strong>
                                <a href="#">Trainer</a>
                                <a href="#">Griffey</a>
                                <a href="#">Other Cross-Training</a>
                            </div>
                            <div class="column">
                                <strong class="text-uppercase">nike running</strong>
                                <a href="#">Air max</a>
                                <a href="#">Flyknit</a>
                                <a href="#">Presto</a>
                                <a href="#">Roshe Run</a>
                                <a href="#">Others Running</a>
                            </div>
                            <div class="column">
                                <strong class="text-uppercase">nike cros-training</strong>
                                <a href="#">Trainer</a>
                                <a href="#">Griffey</a>
                                <a href="#">Other Cross-Training</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $sql = "SELECT * FROM `brand`";
                $objQuery = mysqli_query($objCon,$sql);
                while ($result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
                    ?>
                    <li>
                        <a href="<?=strtolower($result["name"])?>.php"><?=strtoupper($result["name"])?></a>
                    </li>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <img src="images/icons/logo-03.png" width="30%" alt="IMG-LOGO">
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div id="number_notify_mobile" class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="0">

                <i class="zmdi zmdi-shopping-cart"></i>
            </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="right-top-bar flex-w h-full">
                    <!--<a href="#" class="flex-c-m p-lr-10 trans-04">-->
                    <!--USD-->
                    <!--</a>-->
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <li>
                <a href="#">MEN</a>
                <ul class="sub-menu-m">
                    <li><a href="#">Feature</a></li>
                    <li><a href="#">Fonts</a></li>
                    <li><a href="#">Plus</a></li>
                    <li><a href="#">Much More</a></li>
                </ul>
                <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
            </li>

            <li>
                <a href="#">NIKE</a>
            </li>

            <li>
                <a href="#">ADIDAS</a>
            </li>

            <li>
                <a href="#">FOOTWARE</a>
            </li>

            <li>
                <a href="#" class="label1 rs1" data-label1="hot">New Arrivals</a>
            </li>
        </ul>
    </div>

</header>

<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="header-cart-content flex-w js-pscroll">
            <!--                --><?php
            //                echo $_COOKIE["cart"];
            //                ?>
            <ul id="cart" class="header-cart-wrapitem w-full">
                <!--					<li class="header-cart-item flex-w flex-t m-b-12">-->
                <!--						<div class="header-cart-item-img">-->
                <!--							<img src="images/item-cart-01.jpg" alt="IMG">-->
                <!--						</div>-->
                <!---->
                <!--						<div class="header-cart-item-txt p-t-8">-->
                <!--							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">-->
                <!--								White Shirt Pleat-->
                <!--							</a>-->
                <!---->
                <!--							<span class="header-cart-item-info">-->
                <!--								1 x $19.00-->
                <!--							</span>-->
                <!--						</div>-->
                <!--					</li>-->

            </ul>

            <div class="w-full">
                <div id="total" class="header-cart-total w-full p-tb-40">
                    <!--						Total: $75.00-->
                </div>

                <div class="header-cart-buttons flex-w w-full">
                    <a href="cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        View Cart
                    </a>

                    <a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Check Out
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
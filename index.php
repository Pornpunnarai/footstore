<?php
include ('connect-mysql.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/megamenu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        .col-xs-4.col-sm-3.col-md-3.col-lg-2.isotope-item{
            padding-left: 0px;
            padding-right: 0px;
        }

        @media only screen and (min-width: 768px) {
            ul {
                /*background-color: lightblue;*/
            }
            .main-menu > li:hover > .sub-menu{
                width: 1000px;
            }
            .main-menu:hover .sub-menu{
                display: block;
            }
        }
    </style>

</head>


<body class="animsition">
<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full">
                <div class="left-top-bar">
                    <a href="#" class="logo">
                        <img src="images/icons/logo-03.png" width="30%" alt="IMG-LOGO">
                    </a>
                </div>

                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        Join/Sign In
                    </a>
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

        <!--			<div class="wrap-menu-desktop">-->
        <!--                <nav class="limiter-menu-desktop container">-->
        <!---->
        <!--					<!-- Menu desktop -->
        <!--					<ul class="menu-desktop">-->
        <!--						<ul class="main-menu">-->
        <!--                            <li>-->
        <!--                                <a href="index.php">HOME</a>-->
        <!--                                <ul class="sub-menu">-->
        <!--                                    <li><a href="index.php">Homepage 1</a></li>-->
        <!--                                    <li><a href="home-02.html">Homepage 2</a></li>-->
        <!--                                    <li><a href="home-03.html">Homepage 3</a></li>-->
        <!--                                </ul>-->
        <!--                            </li>-->
        <!---->
        <!--							<li><a href="">NIKE</a>-->
        <!--								<ul class="sub-menu">-->
        <!--                                    <div class="row">-->
        <!--                                    <div class="col-md-3">-->
        <!--                                        <h3><strong class="text-uppercase">nike basketball</strong></h3>-->
        <!--                                        <li><a href="#">Blazer</a></li>-->
        <!--                                        <li><a href="#">Charles Barkley</a></li>-->
        <!--                                        <li><a href="#">Kelvin Durant</a></li>-->
        <!--                                        <li><a href="#">Kobe Bryant</a></li>-->
        <!--                                        <li><a href="#">Others Basketball</a></li>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-3">-->
        <!--                                        <h3><strong class="text-uppercase">nike cros-training</strong></h3>-->
        <!--                                        <li><a href="#">Trainer</a></li>-->
        <!--                                        <li><a href="#">Griffey</a></li>-->
        <!--                                        <li><a href="#">Other Cross-Training</a></li>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-3">-->
        <!--                                        <h3><strong class="text-uppercase">nike running</strong></h3>-->
        <!--                                        <li><a href="#">Air max</a></li>-->
        <!--                                        <li><a href="#">Flyknit</a></li>-->
        <!--                                        <li><a href="#">Presto</a></li>-->
        <!--                                        <li><a href="#">Roshe Run</a></li>-->
        <!--                                        <li><a href="#">Others Running</a></li>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-3">-->
        <!--                                        <h3><strong class="text-uppercase">nike cros-training</strong></h3>-->
        <!--                                        <li><a href="#">Trainer</a></li>-->
        <!--                                        <li><a href="#">Griffey</a></li>-->
        <!--                                        <li><a href="#">Other Cross-Training</a></li>-->
        <!--                                    </div>-->
        <!--                                    </div>-->
        <!--								</ul>-->
        <!--							</li>-->
        <!---->
        <!--							<li>-->
        <!--								<a href="">ADIDAS</a>-->
        <!--							</li>-->
        <!--							<li>-->
        <!--								<a href="">VANS</a>-->
        <!--							</li>-->
        <!--							<li>-->
        <!--								<a href="">REEBOX</a>-->
        <!--							</li>-->
        <!--							<li>-->
        <!--								<a href="">NEW BALANCE</a>-->
        <!--							</li>-->
        <!---->
        <!--							<li>-->
        <!--								<a href="">FOOTWARE</a>-->
        <!--							</li>-->
        <!---->
        <!--							<li class="label1" data-label1="hot">-->
        <!--							    <a href="shoping-cart.html">NEW ARRIVALS</a>-->
        <!--							</li>-->
        <!---->
        <!--						</ul>-->
        <!---->
        <!--					</ul>-->
        <!--				</nav>-->
        <!--			</div>	-->
        <div class="wrap-menu-desktop">
            <div class="navbar">
                <a href="#">HOME</a>
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
                <a class="label1" data-label1="hot" href="#">NEW ARRIVALS</a>
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
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        Join/Sign In
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        Contact
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        EN
                    </a>

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
                    <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        View Cart
                    </a>

                    <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Check Out
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Slider -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">

            <?php
            $sql = "SELECT * FROM `slider` WHERE `status` = 'Show' ORDER BY `order`";
            $objQuery = mysqli_query($objCon,$sql);
            while ($result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
                ?>

                <div class="item-slick1" style="background-image: url('admin/slider_management/uploaded/<?=$result["file"]?>')">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="fadeInDown"
                                 data-delay="0">
								<span class="ltext-101 cl2 respon2">
									<?=$result["first_field"]?>
								</span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp"
                                 data-delay="800">
                                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                    <?=$result["second_field"]?>
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                <a href="<?=$result["link"]?>"
                                   class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                    <?=$result["btn_name"]?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            <!---->
            <!--				<div class="item-slick1" style="background-image: url(images/slide-03.jpg);">-->
            <!--					<div class="container h-full">-->
            <!--						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">-->
            <!--							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">-->
            <!--								<span class="ltext-101 cl2 respon2">-->
            <!--									Men Collection 2018-->
            <!--								</span>-->
            <!--							</div>-->
            <!--								-->
            <!--							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">-->
            <!--								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">-->
            <!--									New arrivals-->
            <!--								</h2>-->
            <!--							</div>-->
            <!--								-->
            <!--							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">-->
            <!--								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">-->
            <!--									Shop Now-->
            <!--								</a>-->
            <!--							</div>-->
            <!--						</div>-->
            <!--					</div>-->
            <!--				</div>-->
            <!--                -->


        </div>
    </div>
</section>


<!-- Banner -->
<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="images/banner-01.jpg" alt="IMG-BANNER">

                    <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Women
								</span>

                            <span class="block1-info stext-102 trans-04">
									Spring 2018
								</span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="images/banner-02.jpg" alt="IMG-BANNER">

                    <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Men
								</span>

                            <span class="block1-info stext-102 trans-04">
									Spring 2018
								</span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="images/banner-03.jpg" alt="IMG-BANNER">

                    <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Accessories
								</span>

                            <span class="block1-info stext-102 trans-04">
									New Trend
								</span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Product Overview
            </h3>
        </div>

        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                    All Products
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1st_hand">
                    First Hand
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".2nd_hand">
                    Second Hand
                </button>
            </div>

            <div class="flex-w flex-c-m m-tb-10">
                <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                    <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                    <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Filter
                </div>

                <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                    <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                    <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Search
                </div>
            </div>

            <!-- Search product -->
            <div class="dis-none panel-search w-full p-t-10 p-b-15">
                <div class="bor8 dis-flex p-l-15">
                    <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>

                    <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
                </div>
            </div>

            <!-- Filter -->
            <div class="dis-none panel-filter w-full p-t-10">
                <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                    <div class="filter-col1 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Sort By
                        </div>

                        <ul>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Default
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Popularity
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Average rating
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                    Newness
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Price: Low to High
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Price: High to Low
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-col2 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Price
                        </div>

                        <ul>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                    All
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $0.00 - $50.00
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $50.00 - $100.00
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $100.00 - $150.00
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $150.00 - $200.00
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $200.00+
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-col3 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Color
                        </div>

                        <ul>
                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #222;">
										<i class="zmdi zmdi-circle"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    Black
                                </a>
                            </li>

                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
										<i class="zmdi zmdi-circle"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                    Blue
                                </a>
                            </li>

                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
										<i class="zmdi zmdi-circle"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    Grey
                                </a>
                            </li>

                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
										<i class="zmdi zmdi-circle"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    Green
                                </a>
                            </li>

                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
										<i class="zmdi zmdi-circle"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    Red
                                </a>
                            </li>

                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
										<i class="zmdi zmdi-circle-o"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    White
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-col4 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Tags
                        </div>

                        <div class="flex-w p-t-4 m-r--5">
                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Fashion
                            </a>

                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Lifestyle
                            </a>

                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Denim
                            </a>

                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Streetstyle
                            </a>

                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Crafts
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="isotope-grid">


            <?php
            $sql = "SELECT p.*,b.name AS brand_name FROM product p LEFT JOIN brand b on p.brand_id = b.id ORDER BY p.id DESC";
            $objQuery = mysqli_query($objCon,$sql);
            while ($result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)){
                ?>
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 isotope-item <?=$result["type"]?>">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">

                            <?php
                            $sql2 = "SELECT `order`,`file_image` FROM `image_detail` WHERE `product_id`= '".$result["id"]."' ORDER BY `order` ASC LIMIT 1";
                            $objQuery2 = mysqli_query($objCon,$sql2);
                            $result2 = mysqli_fetch_array($objQuery2, MYSQLI_ASSOC);
                            ?>
                            <img src="admin/product_management/uploads/<?=$result["id"]?>/<?=$result2["file_image"]?>" alt="IMG-PRODUCT">
                            <a data-toggle="modal" href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal<?=$result["id"]?>">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    <?=$result["name"]?>
                                </a>

                                <span class="stext-105 cl3">
									฿<?=$result["price"]?>
								</span>
                            </div>

                            <!--							<div class="block2-txt-child2 flex-r p-t-3">-->
                            <!--								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">-->
                            <!--									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">-->
                            <!--									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">-->
                            <!--								</a>-->
                            <!--							</div>-->
                        </div>
                    </div>
                </div>





                <!-- Modal1 -->
                <div class="wrap-modal1 js-modal<?=$result["id"]?> p-t-60 p-b-20">
                    <div class="overlay-modal1 js-hide-modal<?=$result["id"]?>"></div>
                    <div class="container">
                        <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
                            <button class="how-pos3 hov3 trans-04 js-hide-modal<?=$result["id"]?>">
                                <img src="images/icons/icon-close.png" alt="CLOSE">
                            </button>

                            <div class="row">
                                <div class="col-md-6 col-lg-7 p-b-30">
                                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                                        <div class="wrap-slick3 flex-sb flex-w">
                                            <div class="wrap-slick3-dots"></div>
                                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                                            <div class="slick3 gallery-lb">
                                                <?php
                                                $sql3 = "SELECT `order`,`file_image` FROM `image_detail` WHERE `product_id`= '".$result["id"]."' ORDER BY `order` ASC";
                                                $objQuery3 = mysqli_query($objCon,$sql3);
                                                while($result3 = mysqli_fetch_array($objQuery3, MYSQLI_ASSOC)){
                                                    ?>
                                                    <div class="item-slick3" data-thumb="admin/product_management/uploads/<?=$result["id"]?>/<?=$result3["file_image"]?>">
                                                        <div class="wrap-pic-w pos-relative">
                                                            <img src="admin/product_management/uploads/<?=$result["id"]?>/<?=$result3["file_image"]?>" alt="IMG-PRODUCT">

                                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="admin/product_management/uploads/<?=$result["id"]?>/<?=$result3["file_image"]?>">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                $sql3 .= " LIMIT 1";
                                                $objQuery3 = mysqli_query($objCon,$sql3);
                                                $result3 = mysqli_fetch_array($objQuery3, MYSQLI_ASSOC);
                                                ?>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-5 p-b-30">
                                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                            <?=$result["name"]?>
                                        </h4>

                                        <span class="mtext-106 cl2">
								            ฿<?=$result["price"]?>
							                </span>

                                        <p class="stext-102 cl3 p-t-23">

                                            DESCRIPTION Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
                                        </p>

                                        <!--  -->
                                        <div class="p-t-33">
                                            <div class="flex-w flex-r-m p-b-10">
                                                <div class="size-203 flex-c-m respon6">
                                                    Size
                                                </div>

                                                <div class="size-204 respon6-next">
                                                    <div class="rs1-select2 bor8 bg0">
                                                        <select id="select_size<?=$result["id"]?>" class="js-select2" name="time">
                                                            <?php
                                                            $size = explode(",",$result["size"]);
                                                            ?>
                                                            <option>Choose an option</option>
                                                            <?php
                                                            foreach($size as $value) {
                                                                ?>
                                                                <option value="<?=$value?>"><?=$value?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                        <div class="dropDownSelect2"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex-w flex-r-m p-b-10">
                                                <div class="size-204 flex-w flex-m respon6-next">
                                                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                                        </div>

                                                        <input id="quantity<?=$result["id"]?>" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

                                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                                        </div>
                                                    </div>

                                                    <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" onclick="renderCartTable('<?=$result["id"]?>','<?=$result["name"]?>',<?=$result["price"]?>,'<?=$result3["file_image"]?>')">
                                                        Add to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <!--  -->
                                        <!--                                            <div class="flex-w flex-m p-l-100 p-t-40 respon7">-->
                                        <!--                                                <div class="flex-m bor9 p-r-10 m-r-11">-->
                                        <!--                                                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">-->
                                        <!--                                                        <i class="zmdi zmdi-favorite"></i>-->
                                        <!--                                                    </a>-->
                                        <!--                                                </div>-->
                                        <!---->
                                        <!--                                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">-->
                                        <!--                                                    <i class="fa fa-facebook"></i>-->
                                        <!--                                                </a>-->
                                        <!---->
                                        <!--                                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">-->
                                        <!--                                                    <i class="fa fa-twitter"></i>-->
                                        <!--                                                </a>-->
                                        <!---->
                                        <!--                                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">-->
                                        <!--                                                    <i class="fa fa-google-plus"></i>-->
                                        <!--                                                </a>-->
                                        <!--                                            </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <script>
                    $('.js-show-modal<?=$result["id"]?>').on('click', function (e) {
                        e.preventDefault();
                        $('.js-modal<?=$result["id"]?>').addClass('show-modal1');
                    });

                    $('.js-hide-modal<?=$result["id"]?>').on('click', function () {
                        $('.js-modal<?=$result["id"]?>').removeClass('show-modal1');
                    });
                </script>

                <?php
            }
            ?>


            <!--				<div class="col-xs-4 col-sm-3 col-md-3 col-lg-2 isotope-item men">-->
            <!--					<!-- Block2 -->
            <!--					<div class="block2">-->
            <!--						<div class="block2-pic hov-img0">-->
            <!--							<img src="images/shoes/3.jpg" alt="IMG-PRODUCT">-->
            <!---->
            <!--							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">-->
            <!--								Quick View-->
            <!--							</a>-->
            <!--						</div>-->
            <!---->
            <!--						<div class="block2-txt flex-w flex-t p-t-14">-->
            <!--							<div class="block2-txt-child1 flex-col-l ">-->
            <!--								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">-->
            <!--									Only Check Trouser-->
            <!--								</a>-->
            <!---->
            <!--								<span class="stext-105 cl3">-->
            <!--									$25.50-->
            <!--								</span>-->
            <!--							</div>-->
            <!---->
            <!--							<div class="block2-txt-child2 flex-r p-t-3">-->
            <!--								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">-->
            <!--									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">-->
            <!--									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">-->
            <!--								</a>-->
            <!--							</div>-->
            <!--						</div>-->
            <!--					</div>-->
            <!--				</div>-->



        </div>

        <!-- Load more -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Load More
            </a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg10 p-t-30 p-b-30 p-l-50 p-r-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    CONTACT CUSTOMER CARE
                    1 (888) 937-8020
                </h4>
                <p style="font-size: 13px;">1 (888) 937-8020<br>
                    1 (786) 871-6005 (International customers)<br>
                    Monday through Friday: 12pm - 7pm EST<br>
                    support@flightclub.com
                </p>
            </div>

            <div class="col-sm-6 col-lg-4 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    @CMOFFICIAL
                </h4>

            </div>

            <div class="col-sm-6 col-lg-5 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Newsletter
                </h4>

                <form>
                    <div class="wrap-input1 w-full p-b-4">
                        <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
                        <div class="focus-input1 trans-04"></div>
                    </div>

                    <div class="p-t-18">
                        <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="p-t-40">
            <div class="flex-c-m flex-w p-b-18">
                <a href="#" class="m-all-1">
                    <img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
                </a>

                <p class="stext-107 cl6 txt-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by
                    <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </p>
            </div>
        </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<script>
    $(".js-select2").each(function(){
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/slick/slick.min.js"></script>
<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="vendor/parallax100/parallax100.js"></script>
<script>
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            },
            mainClass: 'mfp-fade'
        });
    });
</script>
<!--===============================================================================================-->
<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/sweetalert/sweetalert.min.js"></script>
<script>
    $('.js-addwish-b2').on('click', function(e){
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function(){
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function(){

        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
        });

    });


    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function deleteCookie(){
        var value = array;
        var now = new Date();
        var time = now.getTime();
        time += 1;
        now.setTime(time);
        document.cookie =
            "cart =" + value +'; expires=' + now.toUTCString() + '; path=/';
    }


    // ----------------------------------------------------
    var array = [];
    var check_array = []
    // deleteCookie();
    checkCookie();

    function checkCookie() {

        var user = getCookie("cart");
// console.log(user);
        if (user != "") {

            array = [];
            check_array = [];

            var html = '';
            var ele = document.getElementById("cart");
            ele.innerHTML = '';
            var cookie = getCookie("cart")
            var str = cookie.split("},");
            var total_price = 0;
            var id = 0;
            for(var i = 0; i < str.length; i++) {
                if (i != str.length-1) {
                    str[i] = str[i] + '}'
                }
                var obj = JSON.parse(str[i]);
                var json_str = JSON.stringify(obj);
                array.push(json_str);




                html += "<li class=\"header-cart-item flex-w flex-t m-b-12\">";
                html += "<div class=\"header-cart-item-img\">";
                html += "<img src=\"admin/product_management/uploads/"+obj.id+"/"+obj.image+"\" alt=\"IMG\">";
                html += "</div>";
                html += "<div class=\"header-cart-item-txt p-t-8\">";
                html += "<a href=\"#\" class=\"header-cart-item-name m-b-18 hov-cl1 trans-04\">";
                html += obj.name + " -SIZE("+obj.size+")";
                html += "</a>";
                html += "<span class=\"header-cart-item-info\">";
                html += obj.quantity+" x ฿"+obj.price +"<br>";
                html += parseInt(obj.quantity) * parseInt(obj.price);
                html += "</span>";
                html += "</div>";
                html += "</li>";
                html += "<a onClick=addQuantity("+id+") href=\"#\">Increase</a>";
                html += "<a onClick=subtractQuantity("+id+") href=\"#\">Decrease</a>";
                html += " ||| <a onClick=removeFromCart("+id+") href=\"#\">Delete</a>";
                html += "<input type=\"hidden\" id=\"quantity_input"+id+"\" value=\""+obj.quantity+"\">";



                ele.innerHTML = html;
                total_price += parseInt(obj.quantity) * parseInt(obj.price);




                id++;
            }
            document.getElementById("total").innerHTML = "Total: ฿"+total_price;
            document.getElementById("number_notify").setAttribute("data-notify",array.length);
            document.getElementById("number_notify_mobile").setAttribute("data-notify",array.length);

            //
            // var cookie = getCookie("cart")
            // var str = cookie.split("},");

            for(var i = 0; i < str.length; i++) {
                // console.log(str[i]);
                var obj = JSON.parse(str[i]);

                check_array.push(obj);
            }


// console.log(Object.entries(check_array));




        } else {
            if (user != "" && user != null) {
                array = [];
            }
            var html = '';
            var ele = document.getElementById("cart");
            ele.innerHTML = '';
            document.getElementById("number_notify").setAttribute("data-notify",array.length);
            document.getElementById("number_notify_mobile").setAttribute("data-notify",array.length);

        }
    }


    function addQuantity(id){
        var quantity = document.getElementById("quantity_input"+id).value;;
        var value = document.getElementById("quantity_input"+id).value = parseInt(quantity)+1;
        // document.getElementById("quantity"+id).innerHTML = value;


        check_array[id].quantity = value;
        array = []
        for(var x = 0; x < check_array.length; x++) {
            json_str = JSON.stringify(check_array[x]);
            array.push(json_str);
        }

        var value = array;
        var now = new Date();
        var time = now.getTime();
        time += 3600 * 6000;
        now.setTime(time);
        document.cookie =
            "cart =" + value +'; expires=' + now.toUTCString() + '; path=/';

        checkCookie();
    }


    function subtractQuantity(id){
        var quantity = document.getElementById("quantity_input"+id).value;;
        var value = document.getElementById("quantity_input"+id).value = parseInt(quantity)-1;
        // document.getElementById("quantity"+id).innerHTML = value;

        if(value==0){
            value=1;
        }
        if(value>0){

        check_array[id].quantity = value;
        array = []
        for(var x = 0; x < check_array.length; x++) {
            json_str = JSON.stringify(check_array[x]);
            array.push(json_str);
        }

        var value = array;
        var now = new Date();
        var time = now.getTime();
        time += 3600 * 6000;
        now.setTime(time);
        document.cookie =
            "cart =" + value +'; expires=' + now.toUTCString() + '; path=/';
        checkCookie();
        }
    }

    function removeFromCart(id) {

        check_array.splice(id,1);
        array = []
        for(var x = 0; x < check_array.length; x++) {
            json_str = JSON.stringify(check_array[x]);
            array.push(json_str);
        }

        var value = array;
        var now = new Date();
        var time = now.getTime();
        time += 3600 * 6000;
        now.setTime(time);
        document.cookie =
            "cart =" + value +'; expires=' + now.toUTCString() + '; path=/';
        checkCookie();

    }



// deleteCookie();
    function renderCartTable(id,name,price,image) {

        var x = document.getElementById("select_size"+id).selectedIndex;
        var y = document.getElementById("select_size"+id).options;
        var size = y[x].value;

        var quantity = document.getElementById("quantity"+id).value;

        //  var product = [id,file_image]
        var product = {
            id: id,
            name: name,
            size: size,
            quantity: quantity,
            price: price,
            image: image
        };
          // checkCookie();
        var json_str = JSON.stringify(product);



if(check_array!=""){
    var bool = true;
        for(var i = 0; i < check_array.length; i++) {

            if(product.id==check_array[i].id&&product.size==check_array[i].size){
                console.log("same");
                bool= false;
                check_array[i].quantity = parseInt(product.quantity) + parseInt(check_array[i].quantity);
                array = []
                for(var x = 0; x < check_array.length; x++) {
                     json_str = JSON.stringify(check_array[x]);
                    array.push(json_str);
                }
            }

            }

            if(bool){
                console.log("not_same");

                array.push(json_str);

            }
}

if(check_array==""){
    console.log("first_time");

    array.push(json_str);

}

        // console.log(json_str);



        var value = array;
        var now = new Date();
        var time = now.getTime();
        time += 3600 * 6000;
        now.setTime(time);
        document.cookie =
            "cart =" + value +'; expires=' + now.toUTCString() + '; path=/';

        // console.log(document.cookie);

        checkCookie();


    }

</script>
<!--===============================================================================================-->
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function(){
        $(this).css('position','relative');
        $(this).css('overflow','hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function(){
            ps.update();
        })
    });
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
</body>
</html>
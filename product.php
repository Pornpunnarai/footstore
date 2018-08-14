<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
    <?php include 'headpart.html'?>
</head>
<body class="animsition">

    <!-- Header -->
    <?php include 'navbar.php'?>


    <!-- Product -->
    <section class="bg0 p-t-23 p-b-140">
        <div class="container">

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
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
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
                                                            <select id="select_size<?=$result["id"]?>" class="js-select2" name="time" required>
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
    <?php include 'footer.php'?>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-02.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
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

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>	
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include 'scriptpart.html'?>

</body>
</html>
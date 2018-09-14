<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shoping Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'headpart.html'?>

</head>
<body class="animsition">
	
	<!-- Header -->
	<?php include 'navbar.php'?>

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Cart
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
	<form class="bg0 p-t-30 p-b-85">
		<div class="container" style="margin-top: 0px;">
			<div class="row">
				<div class="col-lg-10 col-xl-12 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
                                   <th class="column-6"></th>
								</tr>

								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="images/item-cart-04.jpg" alt="IMG">
										</div>
									</td>
									<td class="column-2">Fresh Strawberries</td>
									<td class="column-3">$ 36.00</td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5">$ 36.00</td>
                                    <td class="column-6" style="text-align: center">
                                       <a onclick="removeFromCart(0)" href="#">
                                           <span class="symbol-btn-back-to-top"> <i class="zmdi zmdi-delete" style="color: #dc3545"></i></span>
                                       </a>
                                   </td>
								</tr>

								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="images/item-cart-05.jpg" alt="IMG">
										</div>
									</td>
									<td class="column-2">Lightweight Jacket</td>
									<td class="column-3">$ 16.00</td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product2" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5">$ 16.00</td>
                                    <td class="column-6" style="text-align: center">
                                        <a onclick="removeFromCart(0)" href="#">
                                            <span class="symbol-btn-back-to-top"> <i class="zmdi zmdi-delete" style="color: #dc3545"></i></span>
                                        </a>
                                    </td>
								</tr>
							</table>
						</div>

                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="flex-w flex-m m-r-20 m-tb-5">
                                <span class="mtext-101 cl2">
									Shipping :
								</span>

                                <input class="stext-104 cl2 plh4 bor13 p-l-20 m-r-10 m-tb-5" style="width: 40px;height: 20px;" type="radio" name="shipping"> EMS(Free)

                            </div>

                            <div class="p-t-1">
								<span class="mtext-110 cl2">
									$0
								</span>
                            </div>
                        </div>

                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
                            </div>

                            <div class="p-t-1">
								<span class="mtext-110 cl2">
									$79.65
								</span>
                            </div>
                        </div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10" href="shopping-cart.php">
                                Update Cart
                            </div>

                            <a href="shoping-cart.php" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">Proceed to Checkout</a>

						</div>



					</div>
				</div>

				</div>
			</div>
		</div>
	</form>



	<!-- Footer -->
    <?php include 'footer.php'?>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

    <?php include 'scriptpart.html'?>

</body>
</html>
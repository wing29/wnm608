<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>kate spade new york</title>
	<!-- font -->
	<link rel="stylesheet" href="font/moonBold.css">
	<!-- css -->
	<link rel="stylesheet" href="css/style.css">
	<!-- javascripts -->

	<!-- jcarousel ref:http://sorgalla.com/jcarousel/ -->
	<script type="text/javascript" src="js/jquery/jquery.js"></script>
  	<script type="text/javascript" src="js/custom.js"></script>

</head>
<body>
	<div class="container">
		<header class="padded nb">
			<div class="menu_container clearfix">
				<a id="menu-toggle" class="anchor-link" href="#mobile-nav">MENU</a>
			</div>

			<nav id="mobile-nav" class="nav clearfix" role="navigation">
				<ul>
					<li><a href="?">Shop</a></li>
					<li><a href="">About</a></li>
					<li><a href="#home"><img src="images/logo.png" alt="kate spade"></a></li>
					<li><a href="">Blog</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			</nav>
		</header>

				
                    <?php
                    if(isset($_GET['product']))
                        include "php/product_mysql.php";
                    else include "php/products_mysql.php";
                    ?>

			
			<!-- begin footer -->
			<footer class="padded nt">
				<div class="row">
					<div class="footer column col-3 col-ms-4 col-xs-12">
						<h5 class="underline">Terms &amp; Conditions</h5>
						<p>We ship worldwide with UPS. All packages will be sent with a tracking number.</p>
					</div>
					<div class="footer column col-3 col-ms-4 col-xs-12">
						<h5 class="underline">News</h5>
						<p>For news and updates please follow us on our Tumblr blog.</p>
					</div>
					<div class="footer column col-3 col-ms-4 col-xs-12">
						<h5 class="underline">Contact</h5>
						<p>If you have any questions or inquiries about our products, please send us an email: hello@goods.com. We´d love to hear from you!</p>
					</div>
				</div>
			</footer> <!-- end footer -->
		</div><!-- end content -->
	</div> 

</body>
</html>
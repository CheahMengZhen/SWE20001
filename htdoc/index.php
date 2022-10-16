<?php
include_once('connection.php');
$query="select * from product";
$result=mysql_requery($query);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			Grocery | GotoGro-MRM
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="header">
			<div class="container">
				<div class="navbar">
					<div class="logo">
                        <a href="index.html">
                            <img src="images/LOGO.png"></a>
					</div>
					<nav>
                        <ul id="MenuItems">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="products.php">Products</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="account.php">Account</a></li>
                        </ul>
					</nav>
					<a href="cart.html"><img src="images/CART.png" width="30px" height="30px"></a>
					<img src="images/MENU.png" class="menu-icon" onclick="menutoggle()">
				</div>
				<div class="row">
					<div class="col-2">
						<h1>BRINGING FRESHNESS TO YOUR HOME</h1>
						<p>At Seasons Grocer, we believe that every home deserves the happiness of having delicious produce and groceries no matter the season or your busy schedule.</p>
						<a href="products.html" class="btn">Shop Now &#8594;</a>
					</div>
					<div class="col-2">
						<img src="images/BG.png" width="1200px" height="500px">
					</div>
				</div>
			</div>
		</div>
		<!--featured categories-->
		<div class="categories">
			<div class="small-container">
				<div class="row">
					<div class="col-3">
						<img src="images/fruit.jpg">
					</div>
					<div class="col-3">
						<img src="images/food.jpg" height="200px">
					</div>
					<div class="col-3">
						<img src="images/drinks.jpg">
					</div>
				</div>
			</div>
		</div>
		<!--featured products-->
        <?php
            while($rows=mysql_fetch_assoc($result))
            {
        ?>
		<div class="small-container">
			<h2 class="title">Featured Products</h2>
			<div class="row">
				<div class="col-4">
                    <!--<a href="product-details.html"><img src="images/GC-SW2.jpg"></a>-->
					<!--<img src="images/0001.jpg">-->
                    <?php echo $rows['image']; ?>
					<h4>Small Pak Choy</h4></a>
					<h6>250 g</h6></a>
					 <!--<div class="rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
					</div>-->
					<p>RM 2</p>
				</div>
        <?php
            }
        ?>
				<div class="col-4">
					<img src="images/0002.jpg">
					<h4>Nescafe 3 in 1 Premix coffee Ori</h4>
					<h6>25 g x 18 g</h6></a>
					<!--<div class="rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
					</div>-->
					<p>RM 12</p>
				</div>
				<div class="col-4">
					<img src="images/0003.jpg">
					<h4>China Broccoli</h4>
					<h6>1 pcs</h6></a>
					<!--<div class="rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
					</div>-->
					<p>RM 3</p>
				</div>
				<div class="col-4">
					<img src="images/0004.jpg">
					<h4>Farm Gold Australia Carrot</h4>
					<h6>500 g</h6></a>
					<!--<div class="rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star" ></span>
					</div>-->
					<p>RM 3</p>
				</div>
			</div>
			<h2 class="title">Latest Products</h2>
			<div class="row">
				<div class="col-4">
					<img src="images/0005.jpg">
					<h4>South Africa Honey Murcott</h4>
					<h6>1 kg</h6></a>
					<!--<div class="rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
					</div>-->
					<p>RM 16</p>
				</div>
				<div class="col-4">
					<img src="images/0006.jpg">
					<h4>Cool Rhino O2 (Cluster Pack)</h4>
					<h6>4 x 350 ml</h6></a>
					<!--<div class="rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
					</div>-->
					<p>RM 10</p>
				</div>
				<div class="col-4">
					<img src="images/0007.jpg">
					<h4>Ensure Gold Vanilla RPB</h4>
					<h6>6 x 220 ml</h6></a>
					<!--<div class="rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
					</div>-->
					<p>RM 55</p>
				</div>
				<div class="col-4">
					<img src="images/0008.jpg">
					<h4>Sabah Daily Dairy Chocolate Milk</h4>
					<h6>6 x 220 ml</h6></a>
					<!--<div class="rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
					</div>-->
					<p>RM 8</p>
				</div>
			</div>
		</div>

		<!--offer-->
		<div class="offer">
			<div class="small-container">
				<div class="row">
					<div class="col-2">
						<img src="images/0009.jpg" class="offer-img">
					</div>
					<div class="col-2">
						<p>Christmas Discount</p>
						<h1>Wine Lovers Basket</h1>
						<small>Forget the snow! Give your friends and family the gift of a red Christmas this Yuletide season with this wino-themed bundle.<br></small>
						<a href="products.html" class="btn">Buy Now &#8594;</a>
					</div>
				</div>
			</div>
		</div>
		<!--testimonial-->
		<div class="testimonial">
			<div class="small-container">
				<div class="row">
					<div class="col-3">
						<i class="fa fa-quote-left"></i>
						<p>Perfect for friends or family hosting guests this holiday season, this gift contains everything one needs to serve a crowd. Fill it up with your favorite beans, coffee mugs, stir sticks, and a sweet homemade treat!</p>
						<!--<div class="rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
					</div>-->
						<img src="images/0010.jpg">
						<h3>Coffee Gift Basket</h3>
					</div>
					<div class="col-3">
						<i class="fa fa-quote-left"></i>
						<p>The weather outside may be frightful, but your friends will have everything they need to cozy up with a big mug of hot chocolate all winter long.<br><br></p>
						<!--<div class="rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
					</div>-->
						<img src="images/0011.jpg">
						<h3>Hot Cocoa Basket</h3>
					</div>
					<div class="col-3">
						<i class="fa fa-quote-left"></i>
						<p>This is a cheesy gift the receiver will actually appreciate. Filled with crackers, wine, and plenty of cheese (of course!), any entertainer or dairy connoisseur will love this basket.<br><br><br></p>
						<!--<div class="rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
					</div>-->
						<img src="images/0012.jpg">
						<h3>Cheese Lovers Gift Basket</h3>
					</div>
				</div>
			</div>
		</div>
		<!--brands-->
		<div class="brands">
			<div class="small-container">
				<div class="row">
					<div class="col-5">
						<img src="images/VISA.png">
					</div>
					<div class="col-5">
						<img src="images/MASTER.png">
					</div>
					<div class="col-5">
						<img src="images/TNG.png">
					</div>
					<div class="col-5">
						<img src="images/PP.png">
					</div>
					<div class="col-5">
						<img src="images/GRAB.png">
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="footer-col-1">
						<h3>Download Our App</h3>
						<p>Download App for Android and IOS mobile phone.</p>
						<div class="app-logo">
							<img src="images/AS.png">
							<img src="images/GP.png">
						</div>
					</div>
					<div class="footer-col-2">
						<img src="images/LOGO.png">
						<p></p>
					</div>
					<div class="footer-col-3">
						<h3>Useful Links</h3>
						<ul>
							<li>Coupons</li>
							<li>Blog Post</li>
							<li>Return Policy</li>
							<li>Join Affiliate</li>
						</ul>
					</div>
					<div class="footer-col-4">
						<h3>Follow us</h3>
						<ul>
							<li>Facebook</li>
							<li>Twitter</li>
							<li>Instagram</li>
							<li>Youtube</li>
						</ul>
					</div>
				</div>
				<hr>
				<p class="copyright">Copyright 2022 - Group 9</p>
			</div>
		</div>
		<!--js for toggle menu-->
		<script>
			var MenuItems = document.getElementById("MenuItems");
			
			MenuItems.style.maxHeight = "0px";
			
			function menutoggle(){
				if(MenuItems.style.maxHeight == "0px")
				{
					MenuItems.style.maxHeight = "200px";
				}
				else
				{
					MenuItems.style.maxHeight = "0px";
				}
			}
		</script>
	</body>
</html>
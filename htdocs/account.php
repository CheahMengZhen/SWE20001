<?php include('server.php')

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			PCplanet | Product Details
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/4cc223610f.js" crossorigin="anonymous"></script>
	</head>
	<body>
        <!--navigation bar-->
		<div class="container">
			<div class="navbar">
				<div class="logo">
					<a href="index.html"><img src="images/LOGO.png" width="125px"></a>
				</div>
				<nav>
					<ul id="MenuItems">
						<li><a href="index.html">Home</a></li>
						<li><a href="products.html">Products</a></li>
						<li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
						<li><a href="account.php">Account</a></li>
					</ul>
				</nav>
				<a href="cart.html"><img src="images/CART.png" width="30px" height="30px"></a>
				<img src="images/MENU.png" class="menu-icon" onclick="menutoggle()">
			</div>
		</div>
        <!--account page-->
        <div class="account-page">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src="images/LOGIN.png" width="100%">
                    </div>
                    <div class="col-2">
                        <div class="form-container">
                            <?php  if (isset($_SESSION['username'])) : ?>
                            <p>
                                    Welcome
                                        <strong>
                                            <?php echo $_SESSION['username']; ?>
                                        </strong>
                            </p>
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method= "GET" class="logout-btn">
                                <button type="submit" class="btn" name="logout" style="margin-left: 20%">Click here to Logout</button>
                            </form>
                            
                            <?php else : ?>
                            <div class="from-btn">
                                <span onclick="login()">Login</span>
                                <span onclick="register()">Register</span>
                                <hr id="Indicator">
                            </div>
                            
                            <form id="LoginForm" action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">
                                <?php include('error.php'); ?>
                                <input type="text" placeholder="Username" id="user" name="username">
                                <input type="password" placeholder="Password" id="pass" name="password">
                                <button type="submit" class="btn" value="Login" name="login_user">Login</button>
                                <a href="">Forgot password?</a>
                            </form>
                            
                            <form id="RegForm" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                <input type="text" placeholder="username" name="username" value="<?php echo $username; ?>">
                                <input type="email" placeholder="email" name="email" value="<?php echo $email; ?>">
                                <input type="password" placeholder="Password" name="password">
                                <button type="submit" class="btn" name="reg_user">Register</button>
                            </form>
                            
                            <?php if (isset($_SESSION['success'])) : ?>
                            
                                <div class="error success" >
                                    <h3>
                                        <?php
                                            echo $_SESSION['success'];
                                            unset($_SESSION['success']);
                                        ?>
                                    </h3>
                                </div>
                            
                            <?php 
                                endif;
                            ?>

                            <?php 
                                endif;
                            ?>
                        </div>
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
				<p class="copyright">Copyright 2021 - Ong Meng Kian</p>
			</div>
		</div>
		<!--js for navigation bar-->
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
        <!--js for toggle form-->
        <script>
            var LoginForm = document.getElementById("LoginForm");
            var RegForm = document.getElementById("RegForm");
            var Indicator = document.getElementById("Indicator");
            
            function register(){
                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)";
            }
            function login(){
                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)";
            }
        </script>
	</body>
</html>
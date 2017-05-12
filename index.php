<?php
session_start();
$con=mysqli_connect("localhost","root","king","boda") OR die();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>boda</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-diamond"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>User Portal</h1>
								<p><!--[--><a href="https://html5up.net">LAIKIPIA COUNTY</a><!--]--><br />
								<!--[-->NYAHURURU TOWNHALL <a href="https://html5up.net/license"> SUB COUNTY </a><!--]--></p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Home</a></li>
								<li><a href="#work">Work</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#payment">Payment</a></li>
								<li><a href="#contact">Contact</a></li>
								<li><a href="#login">login</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Home</h2>
								<span class="image main"><img src="images/pic01.jpg" alt="" /></span>
								<p>Laikipia County is one of the 47 counties of Kenya, locatedon the equator in the former Rift Valley Province of the country<a href="#work"></a>.</p>
								<p>The county has two major urban centers: Nanyuki to the southeast, and Nyahururu to the southwest. its capital is Rumuruti. Economic activity mainly consist of tourism and agriculture, chiefly grain crops, ranching, and greenhouse horticulture. The county encampasses the high, dry Laikpia Plateau, and has a cool, temperate climate with both rainy and dry seasons. The county has three constituencies: Laikipia East, Laikipia West and Laikipia North constituencies.</p>
							</article>

						<!-- Work -->
								<article id="work">
								<h2 class="major">Work</h2>
								<span class="image main"><img src="images/pic02.jpg" alt="" /></span>
								<p>The county government of Laikipia uses the manual method to collect and record revenue from the industrious and growing sector of boda boda business.  </p>
                                <p>With most business organizations going digital, there was need for the county to embrace technology as the fastest mean to serve the locals. The introduction of Boda Boda revenue collection management system will help solve the problem of the much paper work in the offices. It also helps to reduce fraud, data loss, congestion and mistreatment of the operators by the officers in charge, directly or indirectly. Moreso it helps to increase work efficiency and service to the citizens.<b></b></p>
							</article>

							<!-- payment -->
									<article id="payment">
									<h2 class="major">Payment</h2>
									<span class="image main"><img src="images/mpesa-logo.jpg" height="340px" alt="" /></span>
									<p>Manual on how to Pay for the services.<br></br>The client pays the money to the county office account via mpesa. The mpesa paybill number is 999000. The steps to follow are:<br>
                        a).Go to Mpesa<br>
                        b).Go to Mpesa menu<br>
                        c).Click on lipa na mpesa.<br>
                        d). Enter the till number.<br>
                        e). Input the the account name<b>account4</b><br>
                        f). Enter amount and your pin then send.</p>
								</article>
								<!-- payment -->
									<article id="login">
										<h2 class="major">login</h2>
										<div class="container">
		<!--form starts here-->
			 <form action="index.php" method="POST">
			<div class="form-group">
				<label for="exampleInputusername">Email</label>
				<input type="text" name="email" class="form-control" id="exampleInputusername" placeholder="Enter Username">
			</div>
			<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>

			<button type="submit" class="btn btn-default" name='login'>login</button>
			<button type="submit" class="btn btn-default" title="Enter your username and password to create account">Sign Up to User Portal</button>
		</form>
</div>
									</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">About</h2>
								<span class="image main"><img src="images/pic03.jpg" alt="" /></span>
								<p>Nyahururu Townhall subcounty is located in Nyahururu town. its located along Nyahururu Nakuru road opposite Nyahururu Referal Hospital and borders spear supermarket round-about. Nyharuru subcounty offices collects most of the revenue in Laikipia County than any other subcounty ward in the county.</p>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact Us</h2>
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="4"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>


					</div>
<?php
				if(isset($_POST['login'])){
				$password=mysqli_real_escape_string($con,$_POST['password']);
				$email=mysqli_real_escape_string($con,$_POST['email']);

				$sel="select * from user where email='$email' AND password='$password'";
				$run=mysqli_query($con,$sel);
				$check=mysqli_num_rows($run);
				if($check==0)
				{
					echo"<script>alert('password or email is not correct,try again!')</script>";
					exit();
				}
				else{
					$_SESSION['email']=$email;
					echo"<script>window.open('user.php','_self')</script>";
				}
				}
?>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; COPYRIGHT<a href="https://html5up.net"> Francis Mwakidoshi 2017. ALL RIGHTS RESERVED</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

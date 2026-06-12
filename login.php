<?php
    include('inc/config.php');

    include 'admin/session.php';

    if(isset($_SESSION['user'])){
      header('location: account/dashboard.php');
   }

    $page_name = 'Sign In';
    $page_parent = 'Account';
    $page_banner = 'contact-bg';
    $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
    $page_description = $settings->siteTitle.' provides quality trading insights...';
    include('inc/head.php');

?>

<body class="auth-page">
    <!-- SVG Preloader Starts -->
    <?php include('inc/pre-loader.php'); ?>
    <!-- SVG Preloader Ends -->
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <div class="container-fluid user-auth">
			<div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
				<!-- Logo Starts -->
				<a class="logo" href="<?= $baseurl ?>">
					<img id="logo-user" class="img-responsive" src="images/logo-dark.png" alt="logo">
				</a>
				<!-- Logo Ends -->
				<!-- Slider Starts -->
				<div id="carousel-testimonials" class="carousel slide carousel-fade" data-ride="carousel">
					<!-- Indicators Starts -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-testimonials" data-slide-to="1"></li>
						<li data-target="#carousel-testimonials" data-slide-to="2"></li>
					</ol>
					<!-- Indicators Ends -->
					<!-- Carousel Inner Starts -->
					<div class="carousel-inner">
						<!-- Carousel Item Starts -->
						<div class="item active item-1">
							<div>
								<blockquote>
									<p>This is a realistic program for anyone looking for site to invest. Paid to me regularly, keep up good work!</p>
									<footer><span>Lucy Smith</span>, England</footer>
								</blockquote>
							</div>
						</div>
						<!-- Carousel Item Ends -->
						<!-- Carousel Item Starts -->
						<div class="item item-2">
							<div>
								<blockquote>
									<p>My returns doubled in 7 days. You should not expect anything less. Excellent customer service!</p>
									<footer><span>Slim Hamdi</span>, Tunisia</footer>
								</blockquote>
							</div>
						</div>
						<!-- Carousel Item Ends -->
						<!-- Carousel Item Starts -->
						<div class="item item-3">
							<div>
								<blockquote>
									<p>My family and me want to thank you for helping us find a great opportunity to make money online. Very happy with how things are going!</p>
									<footer><span>Rawia Chniti</span>, Russia</footer>
								</blockquote>
							</div>
						</div>
						<!-- Carousel Item Ends -->
					</div>
					<!-- Carousel Inner Ends -->
				</div>
				<!-- Slider Ends -->
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<!-- Logo Starts -->
				<a class="visible-xs" href="<?= $baseurl ?>">
					<img id="logo" class="img-responsive mobile-logo" src="images/logo-dark.png" alt="logo">
				</a>
				<!-- Logo Ends -->
				<div class="form-container">
					<div>
						<!-- Section Title Starts -->
						<div class="row text-center">
							<h2 class="title-head hidden-xs">member <span>login</span></h2>
							<?php
                                if(isset($_SESSION['error'])){
                                  echo "
                                    <div class='callout callout-danger text-center'>
                                      <p>".$_SESSION['error']."</p> 
                                    </div>
                                  ";
                                  unset($_SESSION['error']);
                                }
                                if(isset($_SESSION['success'])){
                                  echo "
                                    <div class='callout callout-success text-center'>
                                      <p>".$_SESSION['success']."</p> 
                                    </div>
                                  ";
                                  unset($_SESSION['success']);
                                }
                            ?>
						</div>
						<!-- Section Title Ends -->
						<!-- Form Starts -->
						<form method="post" action="admin/verify.php">
							<!-- Input Field Starts -->
							<div class="form-group">
								<input class="form-control" name="info" id="info" placeholder="Username or Email" type="text" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group">
								<input class="form-control" name="password" id="password" placeholder="PASSWORD" type="password" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Submit Form Button Starts -->
							<div class="form-group">
								<button class="btn btn-primary" type="submit" name="login">login</button>
								<p class="text-center">Don't have an account? <a href="register">register now</a>
								<p class="text-center">Forgot password? <a href="password_forgot">click here to reset</a>
							</div>
							<!-- Submit Form Button Ends -->
						</form>
						<!-- Form Ends -->
					</div>
				</div>
			</div>
		</div>
        <!-- Template JS Files -->
        <?php include("inc/scripts.php"); ?>

    </div>
    <!-- Wrapper Ends -->
</body>



</html>
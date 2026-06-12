<?php
    include('inc/config.php');

    include 'admin/session.php';

    if(isset($_SESSION['user'])){
      header('location: account/dashboard.php');
   }

    $page_name = 'Register';
    $page_parent = 'Account';
    $page_banner = 'contact-bg';
    $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
    $page_description = $settings->siteTitle.' provides quality trading insights...';
    include('inc/head.php');

if (isset($_GET["referral"]) && !empty(trim($_GET["referral"]))) {
      $referral = trim($_GET["referral"]);

      $conn = $pdo->open();
      $stmt = $conn->prepare("SELECT *, COUNT(*) AS num_of_referrals FROM users WHERE referral_code=:referral");
      $stmt->execute(['referral' => $referral]);
      $prow = $stmt->fetch();
      $pdo->close();
      $num_of_referrals = $prow['num_of_referrals'];

      if ($num_of_referrals >= 2) {
        $ref_sentence = 'Already referred '.$num_of_referrals.' other Users';
      }elseif ($num_of_referrals == 1) {
        $ref_sentence = 'Referred '.$num_of_referrals.' other User';
      }else{
        $ref_sentence = 'You are the first to be referred by this User';
      }
      
    }

?>

<body>
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
									<p>Returns doubled in 7 days. You should not expect anything less. Excellent customer service!</p>
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
									<footer><span>Dalel Boubaker</span>, Russia</footer>
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
							<h2 class="title-head hidden-xs">get <span>started</span></h2>
							<p class="info-form">Open an account for free and start investing now!</p>
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
						<form method="post" action="register_helper.php">
							<!-- Input Field Starts -->
							<div class="form-group col-md-12">
								<input class="form-control" name="full_name" id="name" placeholder="NAME" type="text" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group col-md-6">
								<input class="form-control" name="username" id="username" placeholder="USERNAME" type="text" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group col-md-6">
								<input class="form-control" name="phone_no" id="phone_no" placeholder="PHONE NUMBER" type="text" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group col-md-6">
								<input class="form-control" name="email" id="email" placeholder="EMAIL" type="email" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group col-md-6">
								<input class="form-control" name="referral" id="referral" placeholder="(Optional) Input a Referral Code" <?= isset($referral) ? "readonly" : ""; ?> type="text" value="<?= isset($referral) ? $referral : '' ?>">
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group col-md-6">
								<input class="form-control" name="password" id="password" placeholder="PASSWORD" type="password" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group col-md-6">
								<input class="form-control" name="repassword" id="repassword" placeholder="RETYPE PASSWORD" type="password" required>
							</div>
							<!-- Input Field Ends -->

							<input type="text" name="extra_field" style="display:none">

							<!-- Submit Form Button Starts -->
							<div class="form-group">
								<button class="btn btn-primary" type="submit" name="signup">create account</button>
								<p class="text-center">already have an account ? <a href="login">Login</a>
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

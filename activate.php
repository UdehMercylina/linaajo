<?php
    include('inc/config.php');

    include 'admin/session.php';

    if(isset($_SESSION['user'])){
      header('location: account/dashboard.php');
   }

    $page_name = 'Account Activation';
    $page_parent = 'Account';
    $page_banner = 'contact-bg';
    $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
    $page_description = $settings->siteTitle.' provides quality trading insights...';
    include('inc/head.php');

    $output = '';
    if(!isset($_GET['code']) OR !isset($_GET['user'])){
        $output .= '
            <h3 class="font-size-sl-72 font-weight-light mb-3">Error!</h3>
            <p class="text-gray-90 font-size-20 mb-0 font-weight-light">Code to activate account not found. Please <a href="register.php">Register</a></p>
        '; 
    }
    else{
        $conn = $pdo->open();

        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE activate_code=:code AND id=:id");
        $stmt->execute(['code'=>$_GET['code'], 'id'=>$_GET['user']]);
        $row = $stmt->fetch();

        if($row['numrows'] > 0){
            if($row['status']){
                $output .= '
                    <h3 class="font-size-sl-72 font-weight-light mb-3">Error!</h3>
                    <p class="text-gray-90 font-size-20 mb-0 font-weight-light">Account already activated. Please <a href="login.php">Login</a></p>
                ';
            }
            else{
                try{

                   $id = intval($row['id']);

                    $now = date('Y-m-d g:i A');

                    $stmtTx = $conn->prepare("INSERT INTO transaction (trans_id, user_id, trans_date, type, amount, remark, balance) VALUES (NULL, :user_id, :trans_date, :type, :amount, :remark, :balance)");
                    $stmtTx->execute([
                        'user_id'    => $id,
                        'trans_date' => $now,
                        'type'       => '1',
                        'amount'     => 5,
                        'remark'     => 'Welcome Bonus',
                        'balance'    => 5,
                    ]);

                    $stmt = $conn->prepare("UPDATE users SET status=:status WHERE id=:id");
                    $stmt->execute(['status'=>1, 'id'=>$row['id']]);
                    $output .= '
                        <h3 class="font-size-sl-72 font-weight-light mb-3">Success!</h3>
                        <p class="text-gray-90 font-size-20 mb-0 font-weight-light">Account activated - Email: <b>'.$row['email'].'</b>. You may <a href="login.php">Login</a></p>
                    ';


                }
                catch(PDOException $e){
                    $output .= '
                        <h3 class="font-size-sl-72 font-weight-light mb-3">Error!</h3>
                        <p class="text-gray-90 font-size-20 mb-0 font-weight-light">'.$e->getMessage().' Please <a href="register.php">signup</a></p>
                    ';
                }

            }
            
        }
        else{
            $output .= '
                <h3 class="font-size-sl-72 font-weight-light mb-3">Error!</h3>
                <p class="text-gray-90 font-size-20 mb-0 font-weight-light">Cannot activate account. Wrong code. Please <a href="register.php">signup</a></p>
            ';
        }

        $pdo->close();
    }

?>

<body>
    <!-- SVG Preloader Starts -->
    <?php include('inc/pre-loader.php'); ?>
    <!-- SVG Preloader Ends -->
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <?php include('inc/header.php'); ?>
        <!-- Header Ends -->
        <!-- Banner Area Starts -->
        <section class="banner-area">
			<div class="banner-overlay">
				<div class="banner-text text-center">
					<div class="container">
						<!-- Section Title Starts -->
						<div class="row text-center">
							<div class="col-xs-12">
								<!-- Title Starts -->
								<h2 class="title-head">Account <span>activation</span></h2>
								<!-- Title Ends -->
								<hr>
								<!-- Breadcrumb Starts -->
								<ul class="breadcrumb">
									<li><a href="<?= $baseurl ?>"> home</a></li>
									<li>activate</li>
								</ul>
								<!-- Breadcrumb Ends -->
							</div>
						</div>
						<!-- Section Title Ends -->
					</div>
				</div>
			</div>
        </section>
        <!-- Banner Area Ends -->
        <!-- Contact Section Starts -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12 contact-form">
						<?php echo $output; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section Ends -->
        <!-- Footer Starts -->
        <!-- Footer Starts -->
        <?php include("inc/footer.php"); ?>
        <!-- Footer Ends -->
        
        <!-- Template JS Files -->
        <?php include("inc/scripts.php"); ?>

    </div>
    <!-- Wrapper Ends -->
</body>

</html>
<?php
    include('inc/config.php');
    include('admin/includes/format.php');

    $page_name = 'Payout';
    $page_parent = '';
    $page_banner = 'contact-bg';
    $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
    $page_description = $settings->siteTitle.' provides quality trading insights...';
    include('inc/head.php');
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
								<h2 class="title-head">Latest <span>payouts</span></h2>
								<!-- Title Ends -->
								<hr>
								<!-- Breadcrumb Starts -->
								<ul class="breadcrumb">
									<li><a href="<?= $baseurl ?>"> home</a></li>
									<li>payout</li>
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
                    <div class="col-xs-12 table-responsive">
                        <table id="btcTable" aria-live="polite" class="table order text-center">
                            <colgroup>
                                <col class="col-xs-4">
                                <col class="col-xs-4 col-sm-6">
                                <col class="col-xs-4 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Address</th>
                                    <th>Date/Time</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
					<!-- Contact Widget Ends -->
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
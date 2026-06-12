<?php
    include('inc/config.php');
    include('admin/includes/format.php');

    $page_name = 'Frequently Asked Questions';
    $page_parent = '';
    $page_banner = 'about-bg';
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
								<h2 class="title-head">Frequenty Asked <span>Questions</span></h2>
								<!-- Title Ends -->
								<hr>
								<!-- Breadcrumb Starts -->
								<ul class="breadcrumb">
									<li><a href="<?= $settings->siteTitle; ?>"> home</a></li>
									<li>faq</li>
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
        <!-- Section FAQ Starts -->
        <section class="faq">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <!-- Panel Group Starts -->
                        <h3 style="color: #fff;">Frequently Asked Question</h3>
                        <br />
                        <p align=justify> <b>How can I invest with <?= $baseurl; ?> ?</b><br>
                            To make a investment you must first become a member of <?= $baseurl; ?> . Once 
                            you are signed up, you can make your first deposit. All deposits must be made 
                            through the Members Area. You can login using the member username and password 
                            you receive when signup. <br>
                            <br>
                            <b>I wish to invest with <?= $baseurl; ?> but I don't have an any ecurrency account. What 
                            should I do?</b><br>
                            you can purchase e currecy on any crypto broker example (blockchain)
                            <br>
                            <br>
                            <b>How do I open my <?= $baseurl; ?> Account?</b><br>
                            It's quite easy and convenient. Follow this <a href="register">link</a>, fill 
                            in the registration form and then press "Register". <br>
                            <br>
                            <b>Which e-currencies do you accept?</b><br>
                            We accept e-currencies. <br>
                            <br>
                            <b>How can I withdraw funds?</b><br>
                            Login to your account using your username and password and check the Withdraw 
                            section. <br>
                            <br>
                            <b>How long does it take for my deposit to be added to my account?</b><br>
                            Your account will be updated as fast, as you deposit. <br>
                            <br>
                            <b>How can I change my e-mail address or password?</b><br>
                            Log into your <?= $baseurl; ?> account and click on the "Account Information". You 
                            can change your e-mail address and password there. <br>
                            <br>
                            <b>What if I can't log into my account because I forgot my password?</b><br>
                            Click <a href="password_forgot">forgot password</a> link, type your username 
                            or e-mail and you'll receive your account information. <br>
                            <br>
                            <b>Does a daily profit paid directly to my currency account?</b><br>
                            No, profits are gathered on your <?= $baseurl; ?> account and you can withdraw them 
                            anytime. <br>
                            <br>
                            <b>How do you calculate the interest on my account?</b><br>
                            Depending on each plan. Interest on your <?= $baseurl; ?> account is acquired 
                            Daily, Weekly, Bi-Weekly, Monthly and Yearly and credited to your available 
                            balance at the end of each day. <br>
                            <br>
                            <b>Can I do a direct deposit from my account balance?</b><br>
                            Yes! To make a deposit from your <?= $baseurl; ?> account balance. Simply login 
                            into your members account and click on Make Deposit ans select the Deposit from 
                            Account Balance Radio button. <br>
                            <br>
                            <b>Can I make an additional deposit to <?= $baseurl; ?> account once it has 
                            been opened?</b><br>
                            Yes, you can but all transactions are handled separately. <br>
                            <br>
                            <b>After I make a withdrawal request, when will the funds be available on my 
                            ecurrency account?</b><br>
                            Funds are usually available within 12 business hours. <br>
                            <br>
                            <b>How can I change my password?</b><br>
                            You can change your password directly from your members area by editing it in 
                            your personal profile. <br>
                            <br>
                            <b>Can I lose money?</b><br>
                            There is a risk involved with Mining platforms. However, 
                            there are a few simple ways that can help you to reduce the risk of losing more than 
                            you can afford to. First, align your investments with your financial goals, 
                            in other words, keep the money you may need for the short-term out of more aggressive 
                            investments, reserving those investment funds for the money you intend to raise 
                            over the long-term. It's very important for you to know that we are real traders 
                            and that we invest members' funds on major investments. <br>
                            <br>
                            <b>How can I check my account balances?</b><br>
                            You can access the account information 24 hours, seven days a week over the Internet. 
                            <br>
                            <br>
                            <b>May I open several accounts in your program?</b><br>
                            yes multiple acccount with diffrent usernames can be processed <br>
                            <br>
                            <b>How can I make a spend?</b><br>
                            To make a spend you must first become a member of <?= $baseurl; ?>. Once you 
                            are signed up, you can make your first spend. All spends must be made through 
                            the Member Area. You can login using the member username and password you received 
                            when signup. <br>
                            <br>
                            <b>Who manages the funds?</b><br>
                            All funds and profits are managed by a dedicated miner which secure and manage funds without risk<br>
                            <br>
                        </p>
                        <!-- Panel Group Ends -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Section FAQ Ends -->
        <!-- Footer Starts -->
        <?php include("inc/footer.php"); ?>
        <!-- Footer Ends -->
        
        <!-- Template JS Files -->
        <?php include("inc/scripts.php"); ?>

    </div>
    <!-- Wrapper Ends -->
</body>


</html>
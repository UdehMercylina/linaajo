<header class="header">
    <div class="container">
        <div class="row">
            <!-- Logo Starts -->
            <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                <a href="<?= $baseurl; ?>">
                    <img id="logo" class="img-responsive" src="images/logo-dark.png" alt="logo">
                </a>
            </div>
            <!-- Logo Ends -->
            <!-- Statistics Starts -->
            <div class="col-md-7 col-lg-7">
                <ul class="unstyled bitcoin-stats text-center">
                    <li>
                        <h6>9,450 USD</h6><span>Last trade price</span></li>
                    <li>
                        <h6>+5.26%</h6><span>24 hour price</span></li>
                    <li>
                        <h6>12.820 BTC</h6><span>24 hour volume</span></li>
                    <li>
                        <h6>2,231,775</h6><span>active traders</span></li>
                </ul>
            </div>
            <!-- Statistics Ends -->
            <!-- User Sign In/Sign Up Starts -->
            <div class="col-md-3 col-lg-3">
                <ul class="unstyled user">
                    <li class="sign-in"><a href="login" class="btn btn-primary"><i class="fa fa-user"></i> sign in</a></li>
                    <li class="sign-up"><a href="register" class="btn btn-primary"><i class="fa fa-user-plus"></i> register</a></li>
                </ul>
            </div>
            <!-- User Sign In/Sign Up Ends -->
        </div>
    </div>
    <!-- Navigation Menu Starts -->
    <nav class="site-navigation navigation" id="site-navigation">
        <div class="container">
            <div class="site-nav-inner">
                <!-- Logo For ONLY Mobile display Starts -->
                <a class="logo-mobile" href="<?= $baseurl; ?>">
                    <img id="logo-mobile" class="img-responsive" src="images/logo-dark.png" alt="">
                </a>
                <!-- Logo For ONLY Mobile display Ends -->
                <!-- Toggle Icon for Mobile Starts -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Toggle Icon for Mobile Ends -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <!-- Main Menu Starts -->
                    <ul class="nav navbar-nav">
                        <li <?php echo ( $page_name == 'Home' || $page_parent == 'Home' ) ? 'class="active"' : '' ?>><a href="<?= $baseurl; ?>">Home</a></li>
                        <li><a href="<?php echo ( $page_name == 'Home' || $page_parent == 'Home' ) ? '' : $baseurl; ?>#about">About Us</a></li>
                        <li><a href="https://www.coinbase.com/buy-bitcoin" target="_blank">Buy Bitcoin</a></li>
                        <li <?php echo ( $page_name == 'Terms and Conditions' || $page_parent == 'Terms and Conditions' ) ? 'class="active"' : '' ?>><a href="terms">Terms & Conditions</a></li>
                        <li><a href="<?php echo ( $page_name == 'Home' || $page_parent == 'Home' ) ? '' : $baseurl; ?>#plans">Invest</a></li>
                        <li <?php echo ( $page_name == 'Contact Us' || $page_parent == 'Contact Us' ) ? 'class="active"' : '' ?>><a href="contact">Contact Us</a></li>
                        <li><a href="login">Login</a></li>
                    </ul>
                    <!-- Main Menu Ends -->
                </div>
            </div>
        </div>
    </nav>
    <!-- Navigation Menu Ends -->
</header>
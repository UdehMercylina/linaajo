<?php
    include('inc/config.php');

    include 'admin/session.php';

    if(isset($_SESSION['user'])){
      header('location: account/dashboard.php');
   }

    $page_name = 'Password Reset';
    $page_parent = 'Account';
    $page_banner = 'contact-bg';
    $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
    $page_description = $settings->siteTitle.' provides quality trading insights...';
    include('inc/head.php');

?>

    <body>
        <!-- HEADER -->
        <?php include('inc/header.php'); ?>
        <!-- HEADER END -->

        <!-- PAGE BANNER -->
        <?php include('inc/page-banner.php'); ?>
        <!-- PAGE BANNER END -->

        <section class="1map-2 sell-area-2 section-padding">
            <div class="1contact-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <div class="row">
                                <div class="1contact-form-area-2">
                                    <div class="col-md-7">
                                        <div class="contact-form-1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-title-2">
                                                        <h4>Enter email associated with account</h4>
                                                    </div>
                                                </div>
                                            </div>
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
                                            <br />
                                            <form method="post" action="reset.php">
                                                <table cellspacing="0" cellpadding="2" border="0">
                                                    <div class="row">
                                                        <div class="col-md-12 contact-input-2">
                                                            <input placeholder="Your Email" type="email" name="email" class="inpts" size="30" autofocus="autofocus" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 submit-2">
                                                            <button type="submit" name="reset" class="submit_btn">Reset Password</button>
                                                        </div>
                                                    </div>
                                                </table>
                                            </form>
                                            <br />
                                            <br />
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="contact-detail-2 contact-detail-bg primary-overlay">
                                            <h4>New Member</h4>
                                            <a href="register">
                                                <h6>
                                                    <span>
                                                        <i class="fa fa-user"></i>
                                                        SIGN UP
                                                    </span>
                                                    <br />
                                                </h6>
                                            </a>
                                            <br />
                                            <br />
                                            <h4>Remember Password?</h4>
                                            <a href="login">
                                                <span>
                                                    <i class="fa fa-key"></i>
                                                        LOGIN
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <?php include('inc/footer.php'); ?>
        <!-- FOOTER END -->

        <!-- SCRIPTS -->
        <?php include('inc/scripts.php'); ?>
        <!-- SCRIPTS END -->
    </body>
</html>
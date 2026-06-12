<footer class="footer">
    <!-- Footer Top Area Starts -->
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Starts -->
                <div class="col-sm-4 col-md-2">
                    <h4>Our Company</h4>
                    <div class="menu">
                        <ul>
                            <li><a href="<?= $baseurl; ?>">Home</a></li>
                            <li><a href="<?php echo ( $page_name == 'Home' || $page_parent == 'Home' ) ? '' : $baseurl; ?>#about">About</a></li>
                            <li><a href="<?php echo ( $page_name == 'Home' || $page_parent == 'Home' ) ? '' : $baseurl; ?>#plans">Pricing</a></li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Widget Ends -->
                <!-- Footer Widget Starts -->
                <div class="col-sm-4 col-md-2">
                    <h4>Help & Support</h4>
                    <div class="menu">
                        <ul>
                            <li><a href="faq">FAQ</a></li>
                            <li><a href="terms">Terms of Services</a></li>
                            <li><a href="register">Register</a></li>
                            <li><a href="login">Login</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Widget Ends -->
                <!-- Footer Widget Starts -->
                <div class="col-sm-4 col-md-3">
                    <h4>Contact Us </h4>
                    <div class="contacts">
                        <div>
                            <span><?= $settings->email ?></span>
                        </div>
                        <div>
                            <span><?= $settings->phoneNumber ?></span>
                        </div>
                        <div>
                            <span><?= $settings->address ?></span>
                        </div>
                    </div>
                    <!-- Social Media Profiles Starts -->
                    <div class="social-footer">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- Social Media Profiles Ends -->
                </div>
                <!-- Footer Widget Ends -->
                <!-- Footer Widget Starts -->
                <div class="col-sm-12 col-md-5">
                    <!-- Facts Starts -->
                    <div class="facts-footer">
                        <div>
                            <h5>$198.76B</h5>
                            <span>Market cap</span>
                        </div>
                        <div>
                            <h5>243K</h5>
                            <span>daily transactions</span>
                        </div>
                        <div>
                            <h5>369K</h5>
                            <span>active accounts</span>
                        </div>
                        <div>
                            <h5>127</h5>
                            <span>supported countries</span>
                        </div>
                    </div>
                    <!-- Facts Ends -->
                    <hr>
                    <!-- Supported Payment Cards Logo Starts -->
                    <div class="payment-logos">
                        <h4 class="payment-title">supported payment methods</h4>
                        <img src="images/icons/payment/american-express.png" alt="american-express">
                        <img src="images/icons/payment/mastercard.png" alt="mastercard">
                        <img src="images/icons/payment/visa.png" alt="visa">
                        <img src="images/icons/payment/paypal.png" alt="paypal">
                        <img class="last" src="images/icons/payment/maestro.png" alt="maestro">
                    </div>
                    <!-- Supported Payment Cards Logo Ends -->
                </div>
                <!-- Footer Widget Ends -->
            </div>
        </div>
    </div>
    <!-- Footer Top Area Ends -->
    <!-- Footer Bottom Area Starts -->
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Copyright Text Starts -->
                    <p class="text-center">Copyright &copy; 2018 - <?= $year; ?> <?= $settings->siteTitle; ?> All Rights Reserved</p>
                    <!-- Copyright Text Ends -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Area Ends -->
</footer>

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '9e17fb2941c29d26eec9cb44510acb53140c3bc7';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

<!--<div class="pubble-app" data-app-id="134134" data-app-identifier="134134"></div>
<script type="text/javascript" src="https://cdn.chatify.com/javascript/loader.js" defer></script>-->
<?php

     ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include('inc/config.php');
    include('admin/includes/format.php');

    $page_name = 'Home';
    $page_parent = '';
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
        <!-- Slider Starts -->
        <?php include('inc/slider.php'); ?>
        <!-- Slider Ends -->
        <!-- Features Section Starts -->
        <section class="features">
            <div class="container">
                <div class="row features-row">
                    <!-- Feature Box Starts -->
                    <div class="feature-box col-md-4 col-sm-12">
                        <span class="feature-icon">
							<img id="download-bitcoin" src="images/icons/orange/download-bitcoin.png" alt="download bitcoin">
						</span>
                        <div class="feature-box-content">
                            <h3>Great Market Analysis</h3>
                            <p>Keep up to date with our in depth market news and analysis.</p>
                        </div>
                    </div>
                    <!-- Feature Box Ends -->
                    <!-- Feature Box Starts -->
                    <div class="feature-box two col-md-4 col-sm-12">
                        <span class="feature-icon">
							<img id="add-bitcoins" src="images/icons/orange/add-bitcoins.png" alt="add bitcoins">
						</span>
                        <div class="feature-box-content">
                            <h3>Self-executing trade plans</h3>
                            <p>Set orders to be executed at a set price, no manual input needed once the rule is set up.</p>
                        </div>
                    </div>
                    <!-- Feature Box Ends -->
                    <!-- Feature Box Starts -->
                    <div class="feature-box three col-md-4 col-sm-12">
                        <span class="feature-icon">
							<img id="buy-sell-bitcoins" src="images/icons/orange/buy-sell-bitcoins.png" alt="buy and sell bitcoins">
						</span>
                        <div class="feature-box-content">
                            <h3>Sentiment analysis</h3>
                            <p>Our Sentiment Trader displays information about current and historic long/short sentiment: the percentage of traders who currently have (or had) an open buy or sell position in a symbol.</p>
                        </div>
                    </div>
                    <!-- Feature Box Ends -->
                </div>
            </div>
        </section>
        <!-- Features Section Ends -->
        <!-- About Section Starts -->
        <section class="about-us" id="about">
            <div class="container">
                <!-- Section Title Starts -->
                <div class="row text-center">
                    <h2 class="title-head">About <span>Us</span></h2>
                    <div class="title-head-subtitle">
                        <p>Your trusted source for expert insights on currency trading, market trends, and smart forex investments.</p>
                    </div>
                </div>
                <!-- Section Title Ends -->
                <!-- Section Content Starts -->
                <div class="row about-content">
                    <!-- Image Starts -->
                    <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                        <img id="about-us" class="img-responsive img-about-us" src="images/about-us.png" alt="about us">
                    </div>
                    <!-- Image Ends -->
                    <!-- Content Starts -->
                    <div class="col-sm-12 col-md-7 col-lg-6">
                        <h3 class="title-about">We are <?= $settings->siteTitle ?></h3>
                        <p class="about-text"><?= $settings->siteTitle ?> has steadily expanded its global footprint, emerging as a leading force in the online trading industry. Over the past few years, the company has seen significant growth in its client base, particularly across South America, Asia, and the Middle East. The opening of a new office in Nassau marks a strategic move to better serve these emerging markets. With this expansion, linaajo continues to empower investors worldwide—offering powerful performance benchmarks, tailored insights, and actionable next steps. Whether you're refining your strategy or executing trades, everything you need is now right at your fingertips.</p>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menu1">Our Mission</a></li>
                            <li><a data-toggle="tab" href="#menu2">Our Vision</a></li>
                            <li><a data-toggle="tab" href="#menu3">Guarantees</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="menu1" class="tab-pane fade in active">
                                <p>Our mission is to empower individuals and businesses through secure, transparent, and accessible forex investment solutions that promote financial growth and global opportunity.</p>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <p>To redefine the future of finance through innovation in forex trading, making global currency markets accessible, efficient, and profitable for all.</p>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <p>We’re driven by a passion for open, transparent markets and committed to being a major force in the global adoption of forex trading. As pioneers in the industry, we aim to stay ahead—delivering trusted, innovative solutions that empower every investor. </p>
                            </div>
                        </div>
                    </div>
                    <!-- Content Ends -->
                </div>
                <!-- Section Content Ends -->
            </div>
        </section>
        <!-- About Section Ends -->
        <!-- Features and Video Section Starts -->
        <section class="image-block">
            <div class="container-fluid">
                <div class="row">
                    <!-- Features Starts -->
                    <div class="col-md-8 ts-padding img-block-left">
                        <div class="gap-20"></div>
                        <div class="row">
                            <!-- Feature Starts -->
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="strong-security" src="images/icons/orange/strong-security.png" alt="strong security"/>
									</span>
                                    <h3 class="feature-title">Strong Security</h3>
                                    <p>Protection against DDoS attacks, <br>full data encryption</p>
                                </div>
                            </div>
                            <!-- Feature Ends -->
							<div class="gap-20-mobile"></div>
                            <!-- Feature Starts -->
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="world-coverage" src="images/icons/orange/world-coverage.png" alt="world coverage"/>
									</span>
                                    <h3 class="feature-title">World Coverage</h3>
                                    <p>Providing services in 99% countries<br> around all the globe</p>
                                </div>
                            </div>
                            <!-- Feature Ends -->
                        </div>
                        <div class="gap-20"></div>
                        <div class="row">
                            <!-- Feature Starts -->
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="payment-options" src="images/icons/orange/payment-options.png" alt="payment options"/>
									</span>
                                    <h3 class="feature-title">Payment Options</h3>
                                    <p>Popular methods: Visa, MasterCard, <br>bank transfer, cryptocurrency</p>
                                </div>
                            </div>
                            <!-- Feature Ends -->
							<div class="gap-20-mobile"></div>
                            <!-- Feature Starts -->
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="mobile-app" src="images/icons/orange/mobile-app.png" alt="mobile app"/>
									</span>
                                    <h3 class="feature-title">Mobile App</h3>
                                    <p>Trading via our Mobile App is underway and will be available<br> in Play Store & App Store</p>
                                </div>
                            </div>
                            <!-- Feature Ends -->
                        </div>
                        <div class="gap-20"></div>
                        <div class="row">
                            <!-- Feature Starts -->
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="cost-efficiency" src="images/icons/orange/cost-efficiency.png" alt="cost efficiency"/>
									</span>
                                    <h3 class="feature-title">Cost efficiency</h3>
                                    <p>Reasonable trading fees for takers<br> and all market makers</p>
                                </div>
                            </div>
                            <!-- Feature Ends -->
							<div class="gap-20-mobile"></div>
                            <!-- Feature Starts -->
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="high-liquidity" src="images/icons/orange/high-liquidity.png" alt="high liquidity"/>
									</span>
                                    <h3 class="feature-title">High Liquidity</h3>
                                    <p>Fast access to high liquidity orderbook<br> for top currency pairs</p>
                                </div>
                            </div>
                            <!-- Feature Ends -->
                        </div>
                    </div>
                    <!-- Features Ends -->
                    <!-- Video Starts -->
                    <div class="col-md-4 ts-padding bg-image-1">
                        <div>
                            <div class="text-center">
                                <a class="button-video mfp-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Video Ends -->
                </div>
            </div>
        </section>
        <!-- Features and Video Section Ends -->

        <!-- Tesla Invest Section Starts -->
        <section class="about-us" id="about">
            <div class="container">
                <!-- Section Title Starts -->
                <div class="row text-center">
                    <h2 class="title-head">Driving <span>Innovation</span></h2>
                    <div class="title-head-subtitle">
                        <p>Invest in Tesla: Powering the Future of Mobility</p>
                    </div>
                </div>
                <!-- Section Title Ends -->
                <!-- Section Content Starts -->
                <div class="row about-content">
                    <!-- Image Starts -->
                    <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                        <img id="about-us" class="img-responsive img-about-us" src="images/tesla.png" alt="about us">
                    </div>
                    <!-- Image Ends -->
                    <!-- Content Starts -->
                    <div class="col-sm-12 col-md-7 col-lg-6">
                        <h3 class="title-about">Empowering the Next Generation of Electric Mobility</h3>
                        <p class="about-text">Tesla continues to redefine the future of mobility through innovation, accessibility, and sustainability. Recent initiatives—such as 2,000 free Supercharging miles for new EV owners, low-rate financing options, and complimentary Full Self-Driving trials—are designed to accelerate adoption and strengthen long-term customer engagement.</p>
                        <p>As Tesla expands its global charging network and enhances its vehicle technology, the company remains well-positioned for sustained revenue growth and margin expansion. With a proven track record of performance, strong demand across multiple vehicle segments, and a scalable energy and software ecosystem, Tesla (NASDAQ: TSLA) represents a compelling long-term investment opportunity in the electric vehicle and clean energy sectors.</p>
                    </div>
                    <!-- Content Ends -->
                </div>
                <!-- Section Content Ends -->
            </div>
        </section>
        <!-- Tesla Invest Section Ends -->
        <!-- SpaceX Section Starts -->
        <section class="call-action-all space-x-action-all">
            <div class="call-action-all-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- SpaceX Text Starts -->
                            <div class="action-text">
                                <h2>SpaceX Investment Opportunity</h2>
                                <p style="font-size: 16px;" class="about-text">SpaceX is revolutionizing space exploration and global communications through relentless innovation and engineering excellence. With a growing portfolio of groundbreaking initiatives—including the reusable Falcon launch system, the deep-space Starship program, and the expanding Starlink satellite network—SpaceX continues to lead the aerospace industry into a new era of sustainable and scalable operations.</p>
                                <p style="font-size: 16px;">The company’s achievements in reducing launch costs, expanding satellite connectivity, and advancing interplanetary transport technology have positioned it as a pivotal force in both commercial and governmental space markets. As global demand for reliable satellite broadband and launch services accelerates, SpaceX represents a rare and compelling opportunity for long-term investors seeking exposure to the future of aerospace, connectivity, and beyond-Earth innovation.</p>
                            </div>
                            <!-- SpaceX Text Ends -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SpaceX Section Ends -->
        <!-- Pricing Starts -->
        <section class="pricing" id="plans">
            <div class="container">
                <!-- Section Title Starts -->
                <div class="row text-center">
                    <h2 class="title-head">affordable <span>packages</span></h2>
                </div>
                <!-- Section Title Ends -->
                <!-- Section Content Starts -->
                <div class="row pricing-tables-content">
                    <div class="pricing-container">
                        <!-- Pricing Tables Starts -->
                        <ul class="pricing-list bounce-invert">
                            <?php
                                $index = 1;
                                foreach ($investment_plans as $investment_plan) :

                                if ($index == 1) {
                                    $icon = "link";
                                }elseif ($index == 2) {
                                    $icon = "arrows";
                                }elseif ($index == 3) {
                                    $icon = "star";
                                }elseif ($index == 2 || $index == 4) {
                                    $icon = "unlink";
                                }else{
                                    $icon = "signal";
                                }

                                if ($investment_plan->max_invest >= 100000000) {
                                    $max_invest = "Unlimited";
                                }else{
                                    $max_invest = "&#36;". number_format($investment_plan->max_invest, 0);
                                }

                                $days = $investment_plan->duration;

                                $total_rate = number_format($investment_plan->rate * $investment_plan->duration, 0);

                                if ($investment_plan->duration <= 4) {

                                    $duration = $days * 24 ." Hours";
                                }else{
                                    $duration = $days ." Days";
                                }                  

                            ?>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <!-- Buy Pricing Table #1 Starts -->
                                    <li data-type="buy" class="is-visible">
                                        <header class="pricing-header">
                                            <h2><?= $investment_plan->name; ?> <span><?= $investment_plan->rate; ?>% return on investment after <?= $duration; ?> </span></h2>
                                            <div class="price">
                                                <span class="value" style="font-size: 2.5rem">&#36;<?= number_format($investment_plan->min_invest, 0); ?> - <?= $max_invest; ?></span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="register" class="btn btn-primary">INVEST NOW</a>
                                        </footer>
                                    </li>
                                </ul>
                            </li>
                            <?php
                                $index++;
                                endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Ends -->
        <!-- Call To Action Section Starts -->
        <section class="call-action-all">
			<div class="call-action-all-overlay">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<!-- Call To Action Text Starts -->
							<div class="action-text">
								<h2>Get Started Today</h2>
								<p class="lead">Open account for free and start investing!</p>
							</div>
							<!-- Call To Action Text Ends -->
							<!-- Call To Action Button Starts -->
							<p class="action-btn"><a class="btn btn-primary" href="register">Register Now</a></p>
							<!-- Call To Action Button Ends -->
						</div>
					</div>
				</div>
			</div>
        </section>
        <!-- Call To Action Section Ends -->
        <!-- Footer Starts -->
        <?php include("inc/footer.php"); ?>
        <!-- Footer Ends -->
		
        <!-- Template JS Files -->
        <?php include("inc/scripts.php"); ?>

        <!-- Notification Popup -->
<div class="popup-container" id="popupBox">
  <div class="row popupInner">
    <img src="icon.png" width="50" height="50">
    <div id="popupContent">
      <div class="popup-header">
        <img src="https://flagcdn.com/w20/es.png" alt="flag">
        <h5>Chen Wei</h5>
      </div>
      <p>Just earned <span class="amount">$2,100</span></p>
      <span class="time-text">8 minutes ago</span>
    </div>
  </div>
  <div class="progress-bar"></div>
</div>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

  .popup-container {
    position: fixed;
    top: 80px;
    left: 15px;
    background: rgba(255, 255, 255, 0.96);
    border-radius: 16px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.12);
    padding: 16px 18px 22px;
    width: 240px;
    max-width: 60vw;
    font-family: 'Poppins', sans-serif;
    color: #222;
    z-index: 9999;
    opacity: 0;
    transform: translateY(-20px);
    pointer-events: none;
    overflow: hidden;
  }

  .popup-container.show {
    animation: fadeSlideIn 0.6s ease forwards, fadeSlideOut 0.6s ease forwards 4s;
  }

  @keyframes fadeSlideIn {
    from { opacity: 0; transform: translateY(-20px) scale(0.95); filter: blur(2px); }
    to { opacity: 1; transform: translateY(0) scale(1); filter: blur(0); }
  }

  @keyframes fadeSlideOut {
    from { opacity: 1; transform: translateY(0); }
    to { opacity: 0; transform: translateY(-20px); }
  }

  .popup-header {
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .popup-header img {
    width: 20px;
    height: 14px;
    object-fit: cover;
    border-radius: 3px;
    box-shadow: 0 0 2px rgba(0,0,0,0.2);
  }

  .popup-header h5 {
    margin: 0;
    font-size: 15px;
    font-weight: 600;
    color: #ff7a00;
  }

  .popup-container p {
    margin: 6px 0 0;
    font-size: 13px;
    color: #444;
    line-height: 1.4;
  }

  .amount {
    color: #22c55e;
    font-weight: 600;
  }

  .time-text {
    display: block;
    margin-top: 6px;
    font-size: 12px;
    color: #888;
    opacity: 0.7;
  }

  .progress-bar {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 4px;
    width: 0%;
    background: linear-gradient(90deg, #ff7a00, #ffb347);
    border-radius: 0 0 16px 16px;
    transition: width 4s linear;
  }

  .popup-container.show .progress-bar {
    width: 100%;
  }

  .popupInner {
    display: inline-flex;
    align-items: center;
    gap: 5px;
  }

  @media (max-width: 600px) {
    .popup-container {
      width: 50%;
      padding: 12px;
      font-size: 12px;
    }
  }
</style>

<script>
  // Predefined name-country pairs (with correct flags)
  const people = [
    { name: "Jean Dupont", country: "France", flag: "fr" },
    { name: "Maria Rossi", country: "Italy", flag: "it" },
    { name: "Hans Müller", country: "Germany", flag: "de" },
    { name: "James Brown", country: "United States", flag: "us" },
    { name: "Yuki Tanaka", country: "Japan", flag: "jp" },
    { name: "Chen Wei", country: "China", flag: "cn" },
    { name: "Aisha Khan", country: "Pakistan", flag: "pk" },
    { name: "Lucas Martin", country: "Brazil", flag: "br" },
    { name: "Sofia Costa", country: "Portugal", flag: "pt" },
    { name: "Ahmed Ali", country: "Egypt", flag: "eg" },
    { name: "Jonas Berg", country: "Sweden", flag: "se" },
    { name: "Daniel Kim", country: "South Korea", flag: "kr" },
    { name: "Nina Kowalski", country: "Poland", flag: "pl" },
    { name: "Andrei Popov", country: "Russia", flag: "ru" },
    { name: "Eva Novak", country: "Czech Republic", flag: "cz" },
    { name: "Leila Hassan", country: "United Arab Emirates", flag: "ae" },
    { name: "Mateo Hernandez", country: "Mexico", flag: "mx" },
    { name: "Ravi Patel", country: "India", flag: "in" },
    { name: "Grace Young", country: "United Kingdom", flag: "gb" },
    { name: "Lucas Schneider", country: "Austria", flag: "at" },
    { name: "Charlotte Brown", country: "Canada", flag: "ca" },
    { name: "Fatima Ahmed", country: "Saudi Arabia", flag: "sa" },
    { name: "Zara Carter", country: "Australia", flag: "au" },
    { name: "Diego Fernandez", country: "Argentina", flag: "ar" },
    { name: "Isabelle Dubois", country: "Belgium", flag: "be" },
    { name: "Jon Torres", country: "Spain", flag: "es" },
    { name: "Liam Smith", country: "Ireland", flag: "ie" },
    { name: "Noah Davis", country: "New Zealand", flag: "nz" },
    { name: "Santiago Rivera", country: "Colombia", flag: "co" },
    { name: "Ava Wilson", country: "South Africa", flag: "za" },
    { name: "Leo Adams", country: "Denmark", flag: "dk" },
    { name: "Chloe Nguyen", country: "Vietnam", flag: "vn" },
    { name: "William Chen", country: "Singapore", flag: "sg" },
    { name: "Amelia Hall", country: "Norway", flag: "no" },
    { name: "Nora Ivanova", country: "Bulgaria", flag: "bg" },
    { name: "David King", country: "United Kingdom", flag: "gb" },
    { name: "Layla Scott", country: "Scotland", flag: "gb-sct" },
    { name: "Jacob Baker", country: "United States", flag: "us" },
    { name: "Emily Turner", country: "Canada", flag: "ca" },
    { name: "Nathan Wright", country: "Ireland", flag: "ie" },
    { name: "Elijah Lewis", country: "United States", flag: "us" },
    { name: "Harper Allen", country: "Australia", flag: "au" },
    { name: "Isabella Garcia", country: "Mexico", flag: "mx" },
    { name: "Emma Johnson", country: "United States", flag: "us" },
    { name: "Sophia Lee", country: "United Kingdom", flag: "gb" },
    { name: "Oliver Jones", country: "Canada", flag: "ca" },
    { name: "Mia Rodriguez", country: "Spain", flag: "es" },
    { name: "Ethan Thompson", country: "United States", flag: "us" },
    { name: "Aria Robinson", country: "United Kingdom", flag: "gb" }
  ];

  const popup = document.getElementById('popupBox');
  const popupContent = document.getElementById('popupContent');
  const progress = popup.querySelector('.progress-bar');
  let index = 0;
  const messages = [];

  // Generate 50 messages with 40% in high range
  for (let i = 0; i < 50; i++) {
    const person = people[i % people.length];
    const isHigh = i < 20; // first 20 → higher range
    const min = isHigh ? 4470 : 800;
    const max = isHigh ? 9800 : 4469;
    const amount = Math.floor(Math.random() * (max - min + 1)) + min;
    const minutes = Math.floor(Math.random() * 30) + 1;

    messages.push({
      name: person.name,
      flag: `https://flagcdn.com/w20/${person.flag}.png`,
      amount: `$${amount.toLocaleString()}`,
      time: `${minutes} minutes ago`
    });
  }

  // Shuffle messages so they appear randomly
  messages.sort(() => Math.random() - 0.5);

  function showMessage() {
    const msg = messages[index];
    popupContent.innerHTML = `
      <div class="popup-header">
        <img src="${msg.flag}" alt="${msg.name} flag">
        <h5>${msg.name}</h5>
      </div>
      <p>Just earned <span class="amount">${msg.amount}</span></p>
      <span class="time-text">${msg.time}</span>
    `;

    popup.classList.remove('show');
    progress.style.transition = 'none';
    progress.style.width = '0%';
    void popup.offsetWidth; // force reflow

    popup.classList.add('show');
    setTimeout(() => {
      progress.style.transition = 'width 4s linear';
      progress.style.width = '100%';
    }, 50);

    index = (index + 1) % messages.length;
  }

  showMessage();
  setInterval(showMessage, 5000);
</script>


    </div>
    <!-- Wrapper Ends -->
</body>

</html>
<?php
    include('inc/config.php');
    include('admin/includes/format.php');

    $page_name = 'Terms and Conditions';
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
								<h2 class="title-head">terms of <span>services</span></h2>
								<!-- Title Ends -->
								<hr>
								<!-- Breadcrumb Starts -->
								<ul class="breadcrumb">
									<li><a href="<?= $baseurl ?>"> home</a></li>
									<li>terms of services</li>
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
		<!-- Section Terms of Services Starts -->
        <section class="terms-of-services">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
                        <h3>Terms and Conditions</h3>
                        <br />
                        <p align="justify">
                            Please read the following rules carefully before signing in.<br />
                            <br />
                            The <?= $settings->siteTitle; ?> Terms and Conditions (the “Terms”) contained herewith govern your use of <?= $settings->siteTitle; ?> and the associated rights and obligations thereof. Please read these Terms carefully as they govern your use of the <?= $settings->siteTitle; ?>
                            website (the “Website”) and the <?= $settings->siteTitle; ?> proposition (the “Services”). You are under no obligation to use the Website or the Services offered by <?= $settings->siteTitle; ?> so if you do not agree with any portion of these Terms, or do not
                            understand any of these terms then you are not permitted to use the Services.<br />
                            <br />
                            <?= $settings->siteTitle; ?> is a Trading name of <?= $settings->siteTitle; ?> Group.
                        </p>
                        
                        <h3>GENERAL PROVISIONS</h3>
                        <p align="justify">
                            These Terms govern your (defined as “you”, “your” or the “Customer”) rights and obligations related to the use of the Insurance Service provided by Zurich Insurance. (defined as “we”, “our” or the “Provider”); registered
                            in the UK, France. United States and Zurich.<br />
                            <br />
                            You are entering into a contract with the Provider by registering for the Service or using the Website and accordingly by doing so you express your agreement with the Terms.<br />
                            <br />
                            Your personal data will be processed in accordance with the Privacy Policy<br />
                            <br />
                            The Services are intended only for persons over the age of 18 who reside in a country for which the services are available. If you are under 18 years of age you may not use the services. By registering on the Website,
                            you confirm that you are over 18 years of age. You undertake to access the Services solely from one of the countries for which the Services are available. <br />
                            <br />
                            You acknowledge that your access to the Services and use thereof may be prohibited by law in some countries and you undertake to only access and use the Services in accordance with applicable laws.<br />
                            <br />
                            The Services consist of the provision of tools to educate the Customer on Financial market movements. Other associated services including but not limited to provision of analytical tools, training and trading room
                            membership may be offered from time to time and are covered by these Terms. No information given by the Provider at any time can be considered an inducement to trade. <br />
                            <br />
                            Each Customer must make an independent assessment as to whether to make any trade in the Financial Markets. The Customer is not entitled to any compensation, for any loss of funds that may occur through the use of any
                            Zurich services and the Customer indemnifies the Provider against this.<br />
                            <br />
                            None of the Services provided to you by the Provider can be considered to be investment advice or related investment services in accordance with applicable laws. The Provider does not provide any advice or guidance that
                            can be considered to be financial advice, trading advice or advice on how you should perform transactions when using the Services. Nor does the Provider accept such guidance, instructions or information from you.<br />
                            <br />
                            No employees, staff or representatives of the Provider are authorized to provide investment advice or recommendations. The Customer should not interpret any information or statement from any employee to be investment
                            advice or recommendations. The Provider explicitly disclaims that any information from its employees can be interpreted as investment advice. <br />
                            <br />
                            The Provider reserves the right to change the Terms at any time with immediate effect for new Customers and new orders of the Services from existing Customers. The Provider will notify existing Customers of any change to
                            the Terms via e-mail. <br />
                            <br />
                            These Terms constitute the complete terms and conditions agreed between you and the Provider and supersede any prior agreements relating to the Terms, whether verbal or written prior to the acceptance of these Terms, the
                            Customer has carefully assessed the possible risks arising from them and accepts those risks.
                        </p>
                        
                        <h3>PAYMENT TERMS</h3>
                        <p align="justify">
                            The prices shown on the website are the prices required to purchase the service at that time and in the currency stated. Payment can be made by digital currency.<br />
                            <br />
                            The most up to date price for the Service will be displayed on the website. Prices are subject to change without notice and the price on the website is the current valid price for the Service.<br />
                            <br />
                            Charges shown on the website are inclusive of taxes incurred by Zurich insurance, Zurich. However it is your responsibility to understand, calculate and pay any additional taxes that you may owe due to the use of the
                            Service in your own tax jurisdiction.
                        </p>
                        
                        <h3>REFUND RIGHTS</h3>
                        <p align="justify">
                            <?= $settings->siteTitle; ?> warrants that the digital product you receive will be of satisfactory quality, fit for purpose and as described by the company.<br/>
                            The <?= $settings->siteTitle; ?> model is 'try before you buy' using the Trading Room so you will have seen the product(s) for a free trial period prior to your purchase.<br/>
                            You have the right to withdraw from the contract within 7 days of your initial payment if the product does not meet the three aforementioned criteria.<br/>
                            To request a refund within the first 7 days send an email through to
                            <a href="mailto: <?= $settings->email ?>" class="__cf_email__" data-cfemail="41323431312e3335013235203335202220316f222e2c6f">[email&#160;protected]</a> If the request is valid we will confirm via a reply email without
                            undue delay. Any fees to be refunded will be done so via the same mechanism with which you paid originally.
                        </p>
                        
                        <h3>SERVICES</h3>
                        <p align="justify">
                            The Services can be ordered by completing the appropriate registration or order form on the Website and associated payment of the fee. The contract between the Provider and Customer is effective once the payment has been
                            taken and the account details issued via email.<br/>
                            All data that you provide to us through the registration process or order form must be complete, true and up to date. You are responsible for ensuring that this data is always accurate and up to date. You must
                            immediately notify us of any change in your data or update the data in the client section. Failure to provide accurate information may result in your account being closed by the Provider or the Services available being
                            withdrawn/reduced. We reserve the right to independently verify any personal data that you give us.<br/>
                            The fees for the Services are as stated on the website at the time of purchase.<br/>
                            The Provider reserves the right to change the fees and/or the parameters of the Services at any time; this includes the parameters for successful completion. Any such change will not be retrospective to Customers who
                            have already made a purchase.<br/>
                            The purchase of the Service entitles a single Individual retail Customer to have access to the Service. The Service is not permitted to be used by groups of Traders, Businesses, Trading Forums or similar. The Provider
                            reserves the right to check how the Service is being used via internet parameters or other means. Any violation of this clause will result in the Service being withdrawn and no further Services being made available to
                            that Customer at that point and in the future.<br/>
                            The Provider bears no responsibility, and the Customer is not entitled to any compensation, for any loss of funds that may occur through the use of the Service and the Customer indemnifies the Provider against this.
                            <br/>
                            The Customer acknowledges that in order to use the Service that they must obtain the appropriate technical equipment and relevant software at their own risk and expense. The Provider bears no responsibility for the
                            effective performance of any Customer equipment. <br/>
                            You acknowledge that brokers and operators of trading platforms are persons or entities different from the Provider and that their own terms and conditions and privacy policies will apply when you use their services and
                            products. Before sending an order form, you are obligated to read those privacy policies. <br/>
                            The Provider does not bear any responsibility for trading or other investment activities performed by the Customer. <br/>
                            If the Customer raises an unjustifiable complaint regarding the fee paid or disputes the fee paid with their bank or payment service provider (e.g. through wallets, chargeback services, dispute services, or similar
                            services), on the basis of which a refund of the fee or any part thereof is requested, the Provider is entitled, at its own discretion, to stop providing to the Customer any services and refuse any future provision of
                            any services.<br/>
                            The Provider is not liable for the unavailability of the Trading Platform and the Customer is not entitled to any compensation for any unavailability howsoever caused.<br/>
                            The Customer acknowledges that the Services may not be available 24/7, due to system maintenance, upgrades, or any other reasons.<br/>
                            The Customer may at any time request to be removed from the Services by emailing
                            <a href="mailto: <?= $settings->email ?>" class="__cf_email__" data-cfemail="790a0c0909160b0d390a0d180b0d181a1809571a161457">[email&#160;protected]</a> You acknowledge that no compensation is payable to you due to you
                            surrendering your use of the Services.
                        </p>
                        
                        <h3>VIOLATIONS</h3>
                        <p align="justify">
                            Any violation of these Terms may result in the termination of any existing Services being provided without prior notice or any compensation. It may also lead to a restriction of provision of any future services and
                            ultimately legal action depending on the severity of the violations.<br/>
                            Additionally, any action on the part of the Customer which may damage the Provider’s good reputation may lead to a restriction on the services offered and ultimately legal action depending on the severity of the
                            violations.<br/>
                            The Provider will let the Customer know via email whether they have been successful and can continue onto the next stage.
                        </p>
                        
                        <h3>DISCLAIMER</h3>
                        <p align="justify">
                            The Provider reserves the right to add, replace or modify any elements and functions of the Services at any time without any compensation.<br/>
                            The Provider reserves the right to modify the Terms from time to time, the most up to date Terms will be found on the Website.<br/>
                            The Customer acknowledges that all Content and services provided by <?= $settings->siteTitle; ?> are done on an ‘as is’ basis with any inherent defects, errors or shortcomings and that their use is solely your responsibility and risk.<br/>
                            The Provider disclaims any warranties of any kind to the maximum extent permitted by law including but not limited to fitness, quality and useability.<br/>
                            The Provider is not responsible for any harm, including but not limited to special, punitive, indirect, incidental, consequential damages including, loss of data, lost profit, personal or other non-monetary harm or
                            property damage caused as a result of using the Services or reliance on any tool, functionality or information provided in connection with using the Service.<br/>
                            The Provider is not responsible for any third party products, services or applications that the customer uses in connection with the Service. At no point shall the Provider’s liability to the Customer exceed the amount
                            paid by the Customer for the Service.
                        </p>
                        
                        <h3>COMMUNICATION</h3>
                        <p align="justify">
                            The Customer acknowledges that all communication in connection with the provision of Services will take place via the Customer’s given email address. <br/>
                            Any communication with <?= $settings->siteTitle; ?> must take place via the email address <a href="mailto: <?= $settings->email ?>" class="__cf_email__" data-cfemail="15666065657a6761556661746761747674653b767a78">[email&#160;protected]</a>
                            <br/>
                            The Provider will attempt to resolve any complaint that is raised by a Customer as soon as possible (no later than within 30 calendar days). If we do not settle the complaint in time, you have the right to withdraw from
                            the contract. You can file a complaint by sending an e-mail to <a href="mailto: <?= $settings->email ?>" class="__cf_email__" data-cfemail="9feceaefeff0edebdfecebfeedebfefcfeefb1fcf0f2">[email&#160;protected]</a>
                        </p>
                        
                        <h3>JURISDICTION</h3>
                        <p align="justify">
                            All legal relations established by these Terms or related to them, as well as any non contractual legal relations, shall be governed by the laws of Switzerland.<br/>
                            The Provider may assign any claim arising from these Terms or any agreement to a third party without the Customer’s consent. You agree that the Provider may, as the assignor, transfer its rights and obligations under
                            these Terms or any agreement or parts thereof to a third party. The Customer is not authorized to transfer or assign the Customer’s rights and obligations under these Terms or any agreements or parts thereof, or any
                            receivables arising from them, in whole or in part, to any third party.
                        </p>
                        
                        <h3>TRADING ROOM</h3>
                        <p align="justify">
                            The Provider will offer Trading Room functionality to customers from time to time. The Provider is not liable for the unavailability of the Trading Room and the customer is not entitled to any compensation howsoever
                            caused. <br/>
                            The Trading Room provides education on the financial markets. Nothing shown in the Trading Room is an inducement to trade and the Provider bears no responsibility, and the Customer is not entitled to any compensation,
                            for any loss of funds that may occur through the use of the Trading Room and the Customer indemnifies the Provider against this.<br/>
                            The Trading Room provides chat room functionality where customers can make posts and view posts made by others. At all times these posts must be related only to comments on the financial markets and must not be directed
                            towards any other customer using the Trading Room. Customers must respect all other Trading Room users and the Provider reserves the right to remove anybody from the Trading Room who they deem is not complying. <br/>
                            The Provider's decision is final and there is no right to appeal.<br/>
                            The Customer understands and agrees that the Provider shall have no responsibility or liability whatsoever for any and all data and content provided by any Customer(s) within the Trading Room.
                        </p>
                        
                        <h3>QUARTERLY PROMO</h3>
                        <p align="justify">
                            The first agreement you fill out will be considered your Primary Investor Agreement. <br/>
                            The second engagement to be carried out is the conveniences fee for withdrawals sent. <br/>
                            Once your information is provided you will have to upload 1 piece of government-issued ID and a bank Statement. See below to for info on which cards and documents are accepted. We may request a second piece of ID. <br/>
                            Your acknowledgment and agreeance is submitted via an Sectigo electronic signature. The electronic signature is space and case sensitive and must match your full legal name inputted in the Investor Agreement Form.<br/>
                            You agree to pay any accumulated Convenience fee or State tax laws where applicable for requested withdrawals.
                        </p>
                        
                        <h3>DEFINITIONS</h3>
                        <p align="justify">
                            Terms - these general Terms and Conditions of Zurich insurance.<br/>
                            Provider - the provider of services; as set out in Clause 1<br/>
                            Customer - the user of services; as set out in Clause 1<br/>
                            Service(s) - the Provider’s service as set out in Clause 4<br/>
                            Content - means the Website and any services provided by the Provider such as emails, performance statements and any other content created in delivery of the Services<br/>
                            Calendar Day - means the period from midnight to midnight as defined by GMT (Greenwich Mean Time)<br/>
                            These Terms shall enter into force and effect on 21st November 2021
                        </p>
                    </div>
				</div>
			</div>
		</section>
		<!-- Section Terms of Services Ends -->
        <!-- Footer Starts -->
        <?php include("inc/footer.php"); ?>
        <!-- Footer Ends -->
        
        <!-- Template JS Files -->
        <?php include("inc/scripts.php"); ?>

    </div>
    <!-- Wrapper Ends -->
</body>

</html>
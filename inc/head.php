<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/bayya/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jul 2025 08:47:05 GMT -->
<head>

   <meta charset="utf-8" />
   <title><?php echo ($page_name == 'Home') ? $settings->siteTitle. ' | ' .$settings->siteTagline : $page_name. ' | ' .$settings->siteTitle;  ?></title>
   <meta name="description" content="<?php echo $page_description; ?>" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
   <meta name="keywords" content="<?php echo $settings->siteTitle ?>, Secure Investment, Online Investment, Trusted Online Investment, Long Term Online Investment, 100% Secure Online Business, Top Online Investment Company, Invest and Earn on Daily Basis, Online Investment Services, Investment, Invest with us, Invest with 100% Guaranty, Money Back Guaranty, Hot Investment Company, Risk Free Online Investment, Forex Trading, Forex, Stock Exchange, Invest in Forex Trading, Invest in Stock Exchange Markets, Invest in Multinational Companies, Minimum Invest $100, Start Online Investment Just in $100, Daily earn Daily Withdraw, Minimum Withdraw $5.10">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
   <link rel="stylesheet" href="css/skins/orange.css">
   
   <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />

    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>

</head>

<?php

require_once("admin/includes/conn.php");

$conn = $pdo->open();

$newQuery = $conn->query("SELECT * from news order by 1 desc limit 3");
if ($newQuery->rowCount()) {
   $news = $newQuery->fetchAll(PDO::FETCH_OBJ);
}

$investment_planQuery = $conn->query("SELECT * from investment_plans order by 1 asc");
if ($investment_planQuery->rowCount()) {
   $investment_plans = $investment_planQuery->fetchAll(PDO::FETCH_OBJ);
}

$depositQuery = $conn->query("SELECT * from hp_transactions WHERE type=1 order by 1 DESC limit 8");
if ($depositQuery->rowCount()) {
   $deposits = $depositQuery->fetchAll(PDO::FETCH_OBJ);
}

$withdrawalQuery = $conn->query("SELECT * from hp_transactions WHERE type=2 order by 1 DESC limit 8");
if ($withdrawalQuery->rowCount()) {
   $withdrawals = $withdrawalQuery->fetchAll(PDO::FETCH_OBJ);
}

$investmentQuery = $conn->query("SELECT *, users.uname AS username from investment LEFT JOIN users ON users.id = investment.user_id LEFT JOIN investment_plans ON investment_plans.id = investment.invest_plan_id ORDER BY 1 DESC limit 8");
if ($investmentQuery->rowCount()) {
   $investments = $investmentQuery->fetchAll(PDO::FETCH_OBJ);
}

$blockchaintxQuery = $conn->query("SELECT * from blockchaintx order by RAND() desc limit 10");
if ($blockchaintxQuery->rowCount()) {
   $blockchaintxs = $blockchaintxQuery->fetchAll(PDO::FETCH_OBJ);
}

function substrwords($text, $maxchar, $end='...') {
   if (strlen($text) > $maxchar || $text == '') {
       $words = preg_split('/\s/', $text);      
       $output = '';
       $i      = 0;
       while (1) {
           $length = strlen($output)+strlen($words[$i]);
           if ($length > $maxchar) {
               break;
           } 
           else {
               $output .= " " . $words[$i];
               ++$i;
           }
       }
       $output .= $end;
   } 
   else {
       $output = $text;
   }
   return $output;
}

?>
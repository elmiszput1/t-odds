 <?php 

// header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
// header("Cache-Control: no-cache");
// header("Pragma: no-cache");

// ini_set('session.gc_maxlifetime', 1800);
// session_start();

// require_once("classes/db-class.php");
// require_once("includes/functions.php");
// require_once("includes/other-functions.php");
// require_once("includes/mobile-detect.php");

// // $four = get_date("4 days");
// // $yesterday = get_date("-1 days");
// // $tomorrow = get_date("1 days");


// $detect = new Mobile_Detect; 

// function detectCurrUserBrowser($a,$b,$c){
// $msie = stripos($_SERVER["HTTP_USER_AGENT"], "msie") ? true : false;
// if($msie){
// $msiePosition = stripos($_SERVER["HTTP_USER_AGENT"], "msie");
// $msiePositionNew = $msiePosition+5;
// $versionNumber = substr($_SERVER["HTTP_USER_AGENT"],$msiePositionNew,1);
// if($versionNumber <= $c){
// echo $a;
// }
// else{
// echo $b;
// }
// }
// else{
// echo $b;
// }
// }

// // $_GET["recast"] = true;

// $country_ip = $country_code = $country = "";

// $country_ip = get_client_ip();
// $country_code = get_country_data($country_ip, "country_code");
// $country = $country_code;

// $four = get_date("4 days");
// $yesterday = get_date("-1 days");
// $tomorrow = get_date("1 days");

// $testing = tr_input("testing");
// if(!empty($testing)){
// $country = $testing;
// $country_code = $testing;
// }

// $page_title = $page_description = "";
// $web_file_name = basename($_SERVER["PHP_SELF"],".php");

// if($web_file_name == "basketball-prediction"){
// $page_title = "Basketball prediction provide free betting tips.";
// }else if($web_file_name == "tennis-prediction"){
// $page_title = "Tennis Prediction Free Betting Tips and Results.";
// }else if($web_file_name == "ice-hockey-prediction"){
// $page_title = "Ice Hockey predictions 100% free and faster results.";
// }else if($web_file_name == "rugby-prediction"){
// $page_title = "Rugby expert prediction free and faster results.";
// }else if($web_file_name == "promotions"){
// $page_title = "Promotions | Betensured";
// }else if($web_file_name == "faqs"){
// $page_title = "Football Prediction FAQ - Betensured";
// }
// else if($web_file_name == "online-affiliate"){
// $page_title = "Make Money Online - Become A Betensured Affiliate";
// }
// else if($web_file_name == "partner-affiliate"){
// $page_title = "Make Money Online - Become A Betensured Affiliate";
// }
// else if($web_file_name == "english-premier-league-predictions"){
// $page_title = "English Premier League Predictions and Tips | Betensured";
// } 
// else if($web_file_name == "register"){
// $page_title = "Register - Create a Betensured Account";
// }
// else if($web_file_name == "index"){

// if($country == "KE"){
// $page_title = "Best Football Prediction Site in Kenya | Betensured";
// }else{
// $page_title = "Football Predictions - Free Football Prediction Site | Betensured";
// }

// } 
// else if(preg_match('/todays-predictions/i', $_SERVER["REQUEST_URI"])) {
//     $page_title = "Today Football Prediction - Game Prediction for Today's Matches";
// }
// else if(preg_match('/tomorrows-predictions/i', $_SERVER["REQUEST_URI"])) {
//     $page_title = "Football Prediction for Tommorrow's Matches | Betensured";
// }
// else if(preg_match('/yesterdays-predictions/i', $_SERVER["REQUEST_URI"])) {
//     $page_title = "Football Prediction and Tips for Yesterday's Matches";
// }
// else if(preg_match('/FreePlus/i', $_SERVER["REQUEST_URI"])) {
//    $page_title = "Free Plus Plan | Betensured";
// }
// else if(preg_match('/Basic/i', $_SERVER["REQUEST_URI"])) {
//    $page_title = "Basic Plan | Betensured";
// }
// else if(preg_match('/FootballPlatinum/i', $_SERVER["REQUEST_URI"])) {
//    $page_title = "Football Platinum Plan | Betensured";
// }
// else if(preg_match('/FootballEconomy/i', $_SERVER["REQUEST_URI"])) {
//    $page_title = "Football Economy Plan | Betensured";
// }
// else if(preg_match('/FootballExpertAdvisor/i', $_SERVER["REQUEST_URI"])) {
//    $page_title = "Football Expert Advisory Plan | Betensured";
// }
// else if(preg_match('/GeniusGold/i', $_SERVER["REQUEST_URI"])) {
//    $page_title = "Genius Gold Plan | Betensured";
// }
// else if(preg_match('/Premium/i', $_SERVER["REQUEST_URI"])) {
//    $page_title = "Premium Plan | Betensured";
// }
// else{
// $page_title = title_link(basename($_SERVER["PHP_SELF"],".php")) . " | Betensured";
// }



// if($web_file_name == "basketball-prediction"){
    
// $page_description = "Basketball prediction provides information to predict the game score. We also provide a 100% best and final result to win match leagues and series.";

    
// }else if($web_file_name == "tennis-prediction"){
    
// $page_description = "We provide absolutely and 100% free and faster results. We offering tennis betting predictions for today and upcoming matches betting tips and results.";

// }else if($web_file_name == "ice-hockey-prediction"){
    
// $page_description = "Ice hockey prediction tips for upcoming matches and tournaments with faster and better results from our experts to wins the betting of games.";

// }else if($web_file_name == "rugby-prediction"){
    
// $page_description = "Best free rugby prediction and betting tips for our experts to win the game. We also provide a 100% best tips and prediction of today & upcoming matches.";

// }else if($web_file_name == "partners"){
    
// $page_description = "A list of our recommended partners, tool and suggested sites. Partner with us today";

// }else if($web_file_name == "promotions"){
    
// $page_description = "Win big using our discount deals and promotionns now when you sign on with Betensured, your #1 football prediction website.";

// } else if($web_file_name == "faqs"){
    
// $page_description="Football Betting FAQ. All your frequently asked questions about football prediction, betting tips and much more answered in one place. Check it out now.";

// } else if($web_file_name == "help"){
    
// $page_description="Learn how to find Help on Betensured. Use our help or FAQ page. Can't find an answer to your question? Email us";

// } else if($web_file_name == "pricing"){
    
// $page_description="Check out our pricing page and pick the right plan for you. Not sure what plan suits you? We can recommend a plan for you.";

// } else if($web_file_name == "english-premier-league-predictions"){
    
//     $page_description = "English Premier League Predictions and Tips | Betensured";
    
// }  else if($web_file_name == "country-how-to-pay"){
    
//     $page_description = "Win big with our English Premier League predictions and tips. Get weekly up to date premier league tips, statistics, and more provided by expert tipsters.";
    
// } else if($web_file_name == "online-affiliate"){
//     $page_description = "Do you want to make money money? Then here is your chance. Make up to 50% commission when you join Betensured affiliate program";
    
// } else if($web_file_name == "terms"){
//     $page_description = "Betensured terms and conditions. Find out how we process and use your data";
    
// } else if($web_file_name == "contact"){
//     $page_description = "Got a burning questions? Check out our FAQ page or simply contact us today";
    
// } else if($web_file_name == "register"){
//     $page_description = "Register today. Create a betensured account and be on your way to winning more football games";
    
// } else if($web_file_name == "login"){
//     $page_description = "Login to your Betensured account. Access tips, make deposit and much more.";
    
// } else if(preg_match('/todays-predictions/i', $_SERVER["REQUEST_URI"])) {
    
//    $page_description = "Today's Football Predictions. Our team of experts shows you how to win big with your next football bets!";
// }
// else if(preg_match('/tomorrows-predictions/i', $_SERVER["REQUEST_URI"])) {
//     $page_description = "Tomorrow's match prediction. Get soccer predictions & betting tips for tomorrow's football prediction, 1x2, Score, Over/Under, BTTS!";
// }
// else if(preg_match('/yesterdays-predictions/i', $_SERVER["REQUEST_URI"])) {
//     $page_description ="Find Football predictions for yesterday's matches. Find betting tips, Match Previews and Predictions, Head to Head (H2H), Team Comparison and Statistics from Betensured";

// } 
// else if(preg_match('/FreePlus/i', $_SERVER["REQUEST_URI"])) {
//    $page_description = "Check out our Free Plus Plan. This plan is perfect for members with verified numbers or email address and active for 2 weeks.";
// } 
// else if(preg_match('/Basic/i', $_SERVER["REQUEST_URI"])) {
//    $page_description = "Check out our basic plan. This plan is perfect for members with verified numbers or email address and gives you access to 12 categories.";
   
// } 
// else if(preg_match('/FootballPlatinum/i', $_SERVER["REQUEST_URI"])) {
//    $page_description = "Check out our platinum plan. This plan is perfect for members and is our best and most efficient plan for long-term profit accumulation";
// } 
// else if(preg_match('/FootballEconomy/i', $_SERVER["REQUEST_URI"])) {
//    $page_description = "Check out our football economy plan. This plan is perfect for members with For verified numbers and email address only and you get a combo of Basic Plan + Tip Genius";
// } 
// else if(preg_match('/FootballExpertAdvisor/i', $_SERVER["REQUEST_URI"])) {
//    $page_description = "Check out our football expert advisory plan. This plan is for customers who need complete analysis of their match selections. You get a personal expert who will guide you all the way";
// } 
// else if(preg_match('/GeniusGold/i', $_SERVER["REQUEST_URI"])) {
//    $page_description = "Check out our genius gold plan. This plan is Reserved for high stakes investors. For customers who take a risk and place large amounts on bets, the Genius Gold is designed to mitigate risks";
// } 
// else if(preg_match('/Premium/i', $_SERVER["REQUEST_URI"])) {
//    $page_description = "Check out our premium plan. This plan is This is our best and most efficient plan for long-term profit accumulation";
// }
// else {

// if($country == "KE"){
// $page_description = "Betensured is the best football prediction site in Kenya. We offer accurate soccer prediction and tips worldwide. Register for well researched football statistics, analysis and predictions, sure 2 odds, sure 3 odds and more.";
// }else{
// $page_description = "Free football prediction site. Find betting tips, soccer predictions, statistics,  winning football tips and much more to help you win big.";
// }

// }

// function checkAD($position) {
    
//     global $db2;
//     $checkAD = $db2->query("SELECT * FROM adverts WHERE advert_position = '$position' AND hide = '0'");
//     if(count_rows($checkAD) > 0){
//         return true;
//     }
//     return false;
// }

// require("new-core.php");

?> 
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php echo $page_title; ?></title>
        <base href="<?php directory(); ?>" target="_top">
        
        <meta name="robots" content="index, follow" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Accurate Football Predictions. Calculated sports betting tips. Insightful soccer prediction analysis, statistics, and team data">
        <meta name="author" content="Betensured">
        <meta name="description" content="<?php echo $page_description; ?>"/>
        <link rel="canonical" href="<?php echo $actual_link; ?>"/>
        <link rel="shortcut icon" href="<?= $images; ?>fav.jpg">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= $images; ?>fav.jpg">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= $images; ?>fav.jpg">
        <link rel="icon" href="<?= $images; ?>logos/favicon.ico">
        <link rel="apple-touch-icon-precomposed" href="<?= $images; ?>logos/favicon.ico">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/calendar-new.css">
        <link href="new_assets/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!--<link rel="stylesheet" href="assets/css/fontawesome.min.css">-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="wheels/wheels20.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/fantasystyle.css">
        
        <meta name="msapplication-TileColor" content="#b20">
        <meta name="msapplication-TileBackground" content="#000">
        <meta name="msapplication-TileImage" content="<?php echo $images; ?>logos/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta property="og:url" content="<?php directory(); ?>" /> 
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?php echo $page_title; ?>" /> 
        <meta property="og:description" content="<?php echo $page_description; ?>" /> 
        <meta property="og:image" content="<?php directory(); echo $images; ?>logos/betensured-logo.png" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="140" />
        <meta property="og:image:height" content="140" />
        
        <?php 
            if($web_file_name == "index") { ?>
            <script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How do I join Betensured?","acceptedAnswer":{"@type":"Answer","text":"You can join Betensured for Free. Register <a href=”https://www.betensured.com/register”>here</>"}},{"@type":"Question","name":"Which is the most accurate prediction site?","acceptedAnswer":{"@type":"Answer","text":"Betensured takes the first spot worldwide, and it is the most accurate Sports Prediction Website. "}},{"@type":"Question","name":"What is the easiest bet to win?","acceptedAnswer":{"@type":"Answer","text":"For Football Predictions, the easiest is Goals Category: Either Over or Under and For Other sports Predictions (Tennis is 1HH/2HH) while Basketball (1HH/2HH)"}},{"@type":"Question","name":"Who is the best tipster in the world?","acceptedAnswer":{"@type":"Answer","text":"Betensured is the Best Tips Service Provider; due to our integrity and services, we were featured in the 2019 Forbes 30 under 30 African Magazine."}},{"@type":"Question","name":"How do you guess Football Scores?","acceptedAnswer":{"@type":"Answer","text":"Betensured has a Team of Expert Analysts and Statisticians, applying tested risk management strategies in ensuring you make more profits than losses"}},{"@type":"Question","name":"What sport is the easiest to bet on?","acceptedAnswer":{"@type":"Answer","text":"Football is the easiest sport to bet on"}},{"@type":"Question","name":"How can I win Bet9ja every day?","acceptedAnswer":{"@type":"Answer","text":"You can win with Bet9ja and any other Bookmaker of your choice by ensuring you subscribe to Betensured Predictions, which guarantees accurate predictions. "}}]}</script>
            <!--FAQPage Code Generated by https://saijogeorge.com/json-ld-schema-generator/faq/-->
            <script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "Organization",
  "name": "Betensured",
  "url": "https://www.betensured.com/",
  "logo": "https://betensured.com/images/logos/betensured-logo.png",
  "image": "https://betensured.com/images/logos/betensured-logo.png",
  "description": "Betensured is the #1 football prediction site in Nigeria. We offer predictions mainly on top leagues and tournaments. If we made careless decisions, imagine the effect it would have on the bankroll of our esteemed users.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": " Kay's Court (Beside Blenco Supermarket), Addo Road, Ajah, Lagos, Nigeria.",
    "addressLocality": "Lekki",
    "addressRegion": "Lagos",
    "postalCode": "10001",
    "addressCountry": "Nigeria"
  
  }
}
 </script>
        <?php  }
        ?>
        
        <script type='application/ld+json'> 
        {
          "@context": "http://www.schema.org",
          "@type": "WebSite",
          "name": "Betensured",
          "url": "https://www.betensured.com/"
        }
         </script>
         
        <?php 
            if($web_file_name == "contact") { ?>
            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Betensured",
  "image": "https://betensured.com/images/logos/betensured-logo.png",
  "@id": "https://www.betensured.com/",
  "url": "https://www.betensured.com/",
  "telephone": "+234 908 592 8914",
  "priceRange": "₦1,000.00",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": " Kay's Court (Beside Blenco Supermarket), Addo Road",
    "addressLocality": "Ajah",
    "addressRegion": "Lagos",
    "postalCode": "100001",
    "addressCountry": "NG"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 6.475612174136317,
    "longitude":  3.6129214462728796
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  },
  "sameAs": [
    "https://twitter.com/Betensuredltd",
    "https://www.facebook.com/betensured",
    "https://www.instagram.com/betensuredinc/"
  ] 
}
</script>

<script type="application/ld+json"> 
{ "@context": "http://schema.org", "@type": "Organization", "url": "URL of page", "contactPoint":[
{"@type": "ContactPoint", "contactType" : "customer service", "name": "Information Desk",
"description": "customer service", "telephone": 
"+234 908 592 8914","email": "contact@betensured.com",
"hoursAvailable": "hours contact point is open (i.e. Sun-Sa 00:00-24:00)"}]}
</script>
            
        <?php } ?>
        
        
        <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148535479-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-148535479-1');
        </script>
        
        <?php 
            include_once("shared/analyticstracking.php");
        ?>
        
        
        <style>
            .quick-overlay {
                position: fixed;
                z-index: 30000;
                height: 100%;
                width: 100%;
                display:none;
                top:0;
                background-color: #00000050;
            }
            .quick-pop {
                margin: 60px 37.5%;
                width: 25%;
                height: auto;
                background-color: #fff;
                box-shadow: 0px 0px 30px 0px rgba(82, 63, 105, 0.15);
                border-radius: 10px;
            }
            
            .quick-pop-inner {
                padding: 0px;
            }
            @media (max-width: 480px) {
                .quick-pop {
                    margin: 60px 15%;
                    width: 80% !important;
                }
            }
            
            .quick-toggle {
                position: fixed;
                z-index: 50000;
                right: -36px;
                top: 30%;
                padding: 8px 10px;
                transform: rotate(270deg);
                color: #fff;
                background-color: red;
                margin: 0px;
                font-size: 13px;
                font-weight: bold;
                border-radius: 5px;
            }
            
        </style>
        
        
        <style>
        
            .header .header-bottom .navbar .navbar-nav .nav-item.dropdown .dropdown-menu .dropdown-item:after {
                background: red !important;
            }
        
            .sidebar-on-media {
                display:none;
            }
            
            @media (max-width:480px) {
                .sidebar-on-media {
                    display: block;
                }
            }
            
            @media (max-width:480px) {
                .media-p {
                    padding: 15px !important;
                    margin-top: 10px;
                }
                
                .media-no-p {
                    margin: 0px !important;
                }
            }
            
             @media (min-width:990px) {
                .mobile-slide {
                    display: none !important;
                }
             }
        
            @media (max-width:480px) {
                .desktop-slide {
                    display: none !important;
                }
                
                .mobile-slide {
                    display: block !important;
                    margin-bottom: 20px !important;
                }
            }
            
            /*#ffcc56*/
            #pills-tip-genius-tab.active {
                background-color: #002 !important;
                position: relative;
            }
            
            #pills-tip-genius-tab.active:after {
                position: absolute;
                content: '';
                left: 50%;
                bottom: -6px;
                width: 20px;
                height: 20px;
                background-color: #002 !important;
                -webkit-transform: translateX(-50%) rotate(45deg);
                -ms-transform: translateX(-50%) rotate(45deg);
                transform: translateX(-50%) rotate(45deg);
                z-index: -1;
            }
            
            #pills-pro-tips-tab.active {
                background-color: #002 !important;
                position: relative;
            }
            
            #pills-pro-tips-tab.active:after {
                position: absolute;
                content: '';
                left: 50%;
                bottom: -6px;
                width: 20px;
                height: 20px;
                background-color: #002 !important;
                -webkit-transform: translateX(-50%) rotate(45deg);
                -ms-transform: translateX(-50%) rotate(45deg);
                transform: translateX(-50%) rotate(45deg);
                z-index: -1;
            }
            
            .expert-pick-top {
                position: relative;
                border-left: 1px solid #e4e0e9;
            }
            .expert-pick-top .owl-nav {
                position:absolute;
                right:-35px;
                top: 2px;
            }
            
            .expert-pick-top .owl-nav .owl-next, 
            .expert-pick-top .owl-nav .owl-prev {
                margin-top:5px;
                padding: 5px 2px;
                font-size: 20px;
            }
            
            .expert-pick-top .owl-nav .owl-next:hover, 
            .expert-pick-top .owl-nav .owl-prev:hover {
                color: red;
            }
            
            .games-card {
                /*width: 220px;*/
                border: none;
                border-right: 1px solid #e4e0e9;
                transition: .3s;
            }
            
            .games-card:hover {
                transition: .3s;
                background-color: #e0e4e9;
            }
            
            .games-card .rec { 
                transition: 0.3s;
            }
            
            .games-card .odds { 
                display: none; 
                color: #fff; 
                font-weight: bold; 
                transition: 0.3s;
                color: red;
            }
            .games-card .tsm { font-size: 13px; font-weight:300}
            
            .result-class ul li span {color: #000;}
            .result-class ul li i { font-size: 25px;}
                        
            .panel-title a {
                color: red;
                padding: 7px 8px;
                border: 1px solid #000000;
                border-bottom-color:rgba(172,172,172,.788);
                font-weight: 400;
                background-color: #000000;
                display:block;
            }
            
             .panel-title.collapsed a {
                 color: #fff;
             }
            
            .panel-title a:before {
                float: right !important;
                font-family: "font awesome 5 free";
                content:"\f068";
                padding-right: 5px;
                color:#fff;
                font-weight: 200;
            }
            .panel-title.collapsed a:before {
                float: right !important;
                content:"\f067";
                font-weight: 200;
            }
            
            .sub-list li {
                padding: 7px 8px;
                border: 1px solid #dcdcdc;
                background-color: #f8f8f8;
                font-size: 13px;
                border-bottom:none;
            }
            
            .sub-list li.d-item {
                padding: 7px 8px;
                border: 1px solid #dcdcdc;
                background-color: #f8f8f8;
                font-size: 13px;
                border-bottom:none;
            }
            
            .sub-list li.sbi.active {
                background-color: red;
                color: #fff;
            }
            
            .data-item {
                border-bottom: 1px solid #dcdcdc;
            }
            
            /*.tab-title {display:inline-block;}*/
            
            .tab-title a.football_nav,
            .tab-title a.other_nav {
                color: #fff;
                padding: 9px 10px;
                font-weight: 400;
                text-align: center;
                background-color: #000;
            }
            
            .tab-title a.football_nav.active {
                background-color: red;
            }
            
            .tab-title a.other_nav.active {
                background-color: #060;
            }
            
            .tab-title a.main:hover {
                color: red;
            }
            
            
            .sub-list { display:block; }
            
            .sub-list li a {
                padding: 7px 8px;
                border: 1px solid #dcdcdc;
                background-color: #f8f8f8;
                display:block;
                font-size: 13px;
                border-bottom:none;
            }
            
            .sub-list li a.active {
                background-color: red;
                border-color:red;
                color: #fff;
            }
            
            .sub-list li a.other.active {
                background-color: #060;
                border-color:#060;
                color: #fff;
            }
            
            .expert-picks-table tbody td { font-size:12px; padding-top:5px; padding-bottom: 5px; }
            .free-game .rec {  
                padding:6px 0px; 
                transition: 0.3s;
            }
            .free-game .odds { 
                display: none; 
                color: #fff; 
                font-weight: bold; 
                padding:6px 12px; 
                transition: 0.3s;
                background-color: red;
            }
            .slideshow {
                position: relative;
            }
            
            .slideshow .owl-nav {
                position:absolute;
                top: 50%;
                width:100%;
            }
            
            .slideshow .owl-nav .owl-next
             {
                position:absolute;
                color: #fff;
                right: 10px;
                padding: 5px 7px;
                font-size: 20px;
            }
            
            .slideshow .owl-nav .owl-prev {
                position:absolute;
                color: #fff;
                left: 10px;
                padding: 5px 7px;
                font-size: 20px;
            }
            
            .slideshow .owl-nav .owl-next, 
            .slideshow .owl-nav .owl-prev {
                color: red;
                background: #00000035;
            }
            
            .blink{
        		/*font-size: 15px;*/
        		/*font-family: cursive;*/
        		animation: blink 1s linear infinite;
        	}
            @keyframes blink{
                0%{opacity: 0;}
                50%{opacity: .5;}
                100%{opacity: 1;}
            }
            
            .rg-switch .nav-item .nav-link {
                background-color: #f8f8f8;
                color: #000;
                margin-right:10px;
            }
            .rg-switch .nav-item .nav-link.active {
                background-color: red;
                color: #fff;
            }
            
            .external-matches-table{
                width:100%;
            }
            
            .external-matches-table * {
              font-weight: bold;
              text-align: center;
            }
            
            .external-matches-table td, .external-matches-table th {
              padding: 10px 5px;
              font-size: 12px;
            }
            
            .external-matches-table td {
              padding: 10px 5px;
            }
            
            .external-matches-table .odd-title-top-row th {
              background: #b20!important;
              border-right: 1px solid #900;
              color: #fff;
            }
            
            .external-matches-table .odd-content-row .time-content {
              width: 40px;
            }
            
            .external-matches-table .odd-content-row .odd-content {
              width: 60px;
            }
            
            .external-matches-table .odd-title-row .match-date, .external-matches-table .odd-content-row .match-content {
              text-align: left;
            }
            
            .external-matches-table .odd-content-row .odd-content span {
              background: #3558BD;
              border: 1px solid #3558BD;
              color: #fff;
              padding: 2px;
              display: block;
              cursor: pointer;
            }
            
            .external-matches-table .odd-content-row .odd-content span:hover {
              background: #fff;
              color: #3558BD;
            }
            
            
            .mobile { display: none; }
            
            @media screen and (max-width:480px) {
                .desktop {display:none; }
                .mobile { display: block; text-align:center; }
                
                /*fix for navbar mobile 07/04*/
                .header .header-bottom.navbar-fixed{
                    top: 45px;
                }
            }
            
            .upcoming-match .single-match .part-head:after {
                position: absolute;
                content: '';
                left: 0;
                top: 0;
                width: 100%;
                background: -webkit-linear-gradient(290deg,#000000,#000000);
                background: -o-linear-gradient(290deg,#000000,#000000);
                background: linear-gradient(160deg,#000000,#000000);
                height: 100%;
                z-index: -1;
                opacity: .78;
            }
            
            .blink{visibility:visible}
            
            @media (max-width:480px) {
                .header-middle, .od {
                    display:none !important;
                }
                
            }
            
            .sport-toggler {
                background: none;
                border: none;
                padding: 5px 6px;
                color: #fff;
                font-size: 23px;
                outline: none;
            }
            
            .btn-danger, .vew-more-news{
                background: red;
            }
        </style>
        
        <style>
            .bns {
                padding: 7px 8px;
                color: #fff;
                background-color: red;
                display:inline-block;
            }
            
            .bns.Free {
                background-color: #666;
                color: #fff !important;
            }
            
            .bns.Professional {
                background-color: #d47506;
            }
            
            .bns.Basic, .bns.Standard {
                background-color: #06f;
            }
            
            .bns.Premium, .bns.Business {
                background-color: #b20;
            }
            
            .bns.active,
            .bns:hover {
                background-color: #000000;
                color: red;
            }
            
            .bns.Free.active,
            .bns.Free:hover {
                color: #fff !important;
            }
            
            .bns .ppn {
                color:#fff;
                font-weight: bold;
                font-size:9px;
            }
            
            .bns:hover .ppn {
                color: #fff !important;
            }
            
            .bns.active .ppn {
                color: #fff !important;
            }
            
            .bns.unavail {
                background-color: #fc0;
                color: #b20;
            }
            
            .bns.unavail .main {
                display: none;
            }
            
            .bns.unavail:hover {
                background-color: #000;
                color: red;
            }
            .bns.unavail:hover .main {
                display:block;
            }
            .bns.unavail:hover .note {
                display: none;
            }
            
            .modal-section {
                top: 0;
                position: fixed;
                z-index:60000;
                width: 100%;
                height: 100%;
                background-color: #00000090;
                display: none;
                left: 0;
            }
            
            
            .modal-b {
                width:459px;
                margin: 130px auto;
                background:red;
                padding: 5px;
                position:relative;
                overflow: visible;
            }
            
            
            .center-modal-picture {
                margin: 90px auto;
                width: 400px !important;
            }
            
            
            @media screen and (max-width:480px){
            
                .modal-b {
                    width: 80% !important;
                    margin: 160px auto !important;
                }
            }
            
            .modal-inner {
                display:block;
                width:auto;
                height:auto;
                text-align:center;
                background-color: #323150;
                padding: 30px 20px;
                color: #fff;
            }
            
            .modal-inner h4 {
                font-family: "candara";
                font-size: 30px;
                margin: 0px;
                color: #fff;
            }
            
            .modal-inner p {
                margin: 10px !important;
                font-size:19px;
                font-family: "candara";
                color:#fff !important;
            }
            
            .modal-b-close, 
            .modal-b-close-2 {
                position:absolute;
                font-size:17px;
                padding: 3px 8px;
                border-radius: 25px;
                background-color: #fc0;
                color:#fff; font-weight:bold;
                right:-10px; top: -10px;
                cursor:pointer;
                font-family: "verdana";
            }
            
            .subscribe {
                font-size:16px;
                color: #fff;
                background-color: #f33;
                font-family: "candara";
                padding: 10px 12px;
                border-radius: 28px;   
                font-weight: bold;
                margin-top: 30px;
                text-decoration: none;
            }
            
            
            @media screen and (max-width:480px){
                .modal-inner {
                    padding: 15px 10px;
                }
                
                .subscribe {margin-top: 10px !important; display:inline-block !important; }
            }
        </style>
        
        <style>
                    
            #calendar {
              -webkit-transform: translate3d(0, 0, 0);
              -moz-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
              width: 100%;
              margin: 0 auto;
              height: auto;
              overflow: hidden;
            }
            
            #calendar .header {
              height: 30px;
              width: 100%;
              background: #e5e5e5;
              text-align: center;
              position:relative;
              z-index: 100;
            }
            
            #calendar .header h1 {
              margin: 0;
              padding: 0;
              font-size: 15px;
              line-height: 30px;
              font-weight: bold;
              letter-spacing: 1px;
              color: #000;
            }
            
            #calendar .left, #calendar .right {
              position: absolute;
              width: 0px;
              height: 0px;
              border-style: solid;
              top: 50%;
              margin-top: -7.5px;
              cursor: pointer;
            }
            
            #calendar .left {
              border-width: 7.5px 10px 7.5px 0;
              border-color: transparent rgba(160, 159, 160, 1) transparent transparent;
              left: 20px;
            }
            
            #calendar .right {
              border-width: 7.5px 0 7.5px 10px;
              border-color: transparent transparent transparent rgba(160, 159, 160, 1);
              right: 20px;
              /*display: none !important;*/
            }
            
            #calendar .month {
              /*overflow: hidden;*/
              opacity: 0;
            }
            
            #calendar .month.new {
              -webkit-animation: fadeIn 1s ease-out;
              opacity: 1;
            }
            
            #calendar .month.in.next {
              -webkit-animation: moveFromTopFadeMonth .4s ease-out;
              -moz-animation: moveFromTopFadeMonth .4s ease-out;
              animation: moveFromTopFadeMonth .4s ease-out;
              opacity: 1;
            }
            
            #calendar .month.out.next {
              -webkit-animation: moveToTopFadeMonth .4s ease-in;
              -moz-animation: moveToTopFadeMonth .4s ease-in;
              animation: moveToTopFadeMonth .4s ease-in;
              opacity: 1;
            }
            
            #calendar .month.in.prev {
              -webkit-animation: moveFromBottomFadeMonth .4s ease-out;
              -moz-animation: moveFromBottomFadeMonth .4s ease-out;
              animation: moveFromBottomFadeMonth .4s ease-out;
              opacity: 1;
            }
            
            #calendar .month.out.prev {
              -webkit-animation: moveToBottomFadeMonth .4s ease-in;
              -moz-animation: moveToBottomFadeMonth .4s ease-in;
              animation: moveToBottomFadeMonth .4s ease-in;
              opacity: 1;
            }
            
            #calendar .week {
             background: #4A4A4A;
            }
            
            #calendar .day {
              display: inline-block;
              width: 14.2857%;
              padding: 10px;
              text-align: center;
              vertical-align: top;
              cursor: pointer;
              background: #4A4A4A;
              position: relative;
              z-index: 100;
              color: #fff;
            }
            
            #calendar .day:hover {
                color: red;
            }
            
            #calendar .day.other {
             color: rgba(255, 255, 255, .3);
            }
            
            #calendar .day.today {
              color: #fff !important;
              background-color: #000 !important;
            }
            
            #calendar .day.active {
              color: #fff !important;
              background-color: red !important;
            }
            
            #calendar .day.disabled {
                color: #666 !important;
                opacity: .6;
            }
            
            
            #calendar .day-name {
              font-size: 9px;
              text-transform: uppercase;
              margin-bottom: 5px;
              color: rgba(255, 255, 255, .5);
              letter-spacing: .7px;
              display:none !important;
            }
            
            #calendar .day-number {
              font-size: 13px;
              letter-spacing: 1.5px;
              /*color: #fff;*/
            } 
            
            #calendar .day.other .day-name,
            #calendar .day.other .day-number  {
                display: none;
            }
            
            #calendar .day .day-events {
              list-style: none;
              margin-top: 3px;
              text-align: center;
              height: 12px;
              line-height: 6px;
              overflow: hidden;
              display: none;
            }
            
            #calendar .day .day-events span {
              vertical-align: top;
              display: inline-block;
              padding: 0;
              margin: 0;
              width: 5px;
              height: 5px;
              line-height: 5px;
              margin: 0 1px;
            }
            
            #calendar .blue { background: rgba(156, 202, 235, 1); }
            #calendar .orange { background: rgba(247, 167, 0, 1); }
            #calendar .green { background: rgba(153, 198, 109, 1); }
            #calendar .yellow { background: rgba(249, 233, 0, 1); }
            
            #calendar .details {
              position: relative;
              width: 100%;
              height: 60px;
              background: rgba(164, 164, 164, 1);
              margin-top: 5px;
              border-radius: 4px;
              display: none;
            }
            #calendar  
            #calendar .details.in {
              -webkit-animation: moveFromTopFade .5s ease both;
              -moz-animation: moveFromTopFade .5s ease both;
              animation: moveFromTopFade .5s ease both;
            }
            
            #calendar .details.out {
              -webkit-animation: moveToTopFade .5s ease both;
              -moz-animation: moveToTopFade .5s ease both;
              animation: moveToTopFade .5s ease both;
            }
            
            #calendar .arrow {
              position: absolute;
              top: -5px;
              left: 50%;
              margin-left: -2px;
              width: 0px;
              height: 0px;
              border-style: solid;
              border-width: 0 5px 5px 5px;
              border-color: transparent transparent rgba(164, 164, 164, 1) transparent;
              transition: all 0.7s ease;
            }
            
            #calendar .events {
              height: 75px;
              padding: 7px 0;
              overflow-y: auto;
              overflow-x: hidden;
            }
            
            #calendar .events.in {
              -webkit-animation: fadeIn .3s ease both;
              -moz-animation: fadeIn .3s ease both;
              animation: fadeIn .3s ease both;
            }
            
            #calendar .events.in {
              -webkit-animation-delay: .3s;
              -moz-animation-delay: .3s;
              animation-delay: .3s;
            }
            
            #calendar .details.out .events {
              -webkit-animation: fadeOutShrink .4s ease both;
              -moz-animation: fadeOutShink .4s ease both;
              animation: fadeOutShink .4s ease both;
            }
            
            #calendar .events.out {
              -webkit-animation: fadeOut .3s ease both;
              -moz-animation: fadeOut .3s ease both;
              animation: fadeOut .3s ease both;
            }
            
            #calendar .event {
              font-size: 16px;
              line-height: 22px;
              letter-spacing: .5px;
              padding: 2px 16px;
              vertical-align: top;
            }
            
            #calendar .event.empty {
              color: #eee;
            }
            
            #calendar .event-category {
              height: 10px;
              width: 10px;
              display: inline-block;
              margin: 6px 0 0;
              vertical-align: top;
            }
            
            #calendar .event span {
              display: inline-block;
              padding: 0 0 0 7px;
            }
            
            #calendar .legend {
              position: absolute;
              bottom: 0;
              width: 100%;
              height: 30px;
              background: rgba(60, 60, 60, 1);
              line-height: 30px;
              display: none;
            
            }
            
            #calendar .entry {
              position: relative;
              padding: 0 0 0 25px;
              font-size: 13px;
              display: inline-block;
              line-height: 30px;
              background: transparent;
            }
            
            #calendar .entry:after {
              position: absolute;
              content: '';
              height: 5px;
              width: 5px;
              top: 12px;
              left: 14px;
            }
            
            #calendar .entry.blue:after { background: rgba(156, 202, 235, 1); }
            #calendar .entry.orange:after { background: rgba(247, 167, 0, 1); }
            #calendar .entry.green:after { background: rgba(153, 198, 109, 1); }
            #calendar .entry.yellow:after { background: rgba(249, 233, 0, 1); }
            
            /* Animations are cool!  */
            @-webkit-keyframes moveFromTopFade {
              from { opacity: .3; height:0px; margin-top:0px; -webkit-transform: translateY(-100%); }
            }
            @-moz-keyframes moveFromTopFade {
              from { height:0px; margin-top:0px; -moz-transform: translateY(-100%); }
            }
            @keyframes moveFromTopFade {
              from { height:0px; margin-top:0px; transform: translateY(-100%); }
            }
            
            @-webkit-keyframes moveToTopFade {
              to { opacity: .3; height:0px; margin-top:0px; opacity: 0.3; -webkit-transform: translateY(-100%); }
            }
            @-moz-keyframes moveToTopFade {
              to { height:0px; -moz-transform: translateY(-100%); }
            }
            @keyframes moveToTopFade {
              to { height:0px; transform: translateY(-100%); }
            }
            
            @-webkit-keyframes moveToTopFadeMonth {
              to { opacity: 0; -webkit-transform: translateY(-30%) scale(.95); }
            }
            @-moz-keyframes moveToTopFadeMonth {
              to { opacity: 0; -moz-transform: translateY(-30%); }
            }
            @keyframes moveToTopFadeMonth {
              to { opacity: 0; -moz-transform: translateY(-30%); }
            }
            
            @-webkit-keyframes moveFromTopFadeMonth {
              from { opacity: 0; -webkit-transform: translateY(30%) scale(.95); }
            }
            @-moz-keyframes moveFromTopFadeMonth {
              from { opacity: 0; -moz-transform: translateY(30%); }
            }
            @keyframes moveFromTopFadeMonth {
              from { opacity: 0; -moz-transform: translateY(30%); }
            }
            
            @-webkit-keyframes moveToBottomFadeMonth {
              to { opacity: 0; -webkit-transform: translateY(30%) scale(.95); }
            }
            @-moz-keyframes moveToBottomFadeMonth {
              to { opacity: 0; -webkit-transform: translateY(30%); }
            }
            @keyframes moveToBottomFadeMonth {
              to { opacity: 0; -webkit-transform: translateY(30%); }
            }
            
            @-webkit-keyframes moveFromBottomFadeMonth {
              from { opacity: 0; -webkit-transform: translateY(-30%) scale(.95); }
            }
            @-moz-keyframes moveFromBottomFadeMonth {
              from { opacity: 0; -webkit-transform: translateY(-30%); }
            }
            @keyframes moveFromBottomFadeMonth {
              from { opacity: 0; -webkit-transform: translateY(-30%); }
            }
            
            @-webkit-keyframes fadeIn  {
              from { opacity: 0; }
            }
            @-moz-keyframes fadeIn  {
              from { opacity: 0; }
            }
            @keyframes fadeIn  {
              from { opacity: 0; }
            }
            
            @-webkit-keyframes fadeOut  {
              to { opacity: 0; }
            }
            @-moz-keyframes fadeOut  {
              to { opacity: 0; }
            }
            @keyframes fadeOut  {
              to { opacity: 0; }
            }
            
            @-webkit-keyframes fadeOutShink  {
              to { opacity: 0; padding: 0px; height: 0px; }
            }
            @-moz-keyframes fadeOutShink  {
              to { opacity: 0; padding: 0px; height: 0px; }
            }
            @keyframes fadeOutShink  {
              to { opacity: 0; padding: 0px; height: 0px; }
            }
        
        </style>
        
        <style>
            .not-slider {position: relative;}
            .not-slider .owl-nav {
                position: absolute;
                top: 20px;
                width: 100%;
            }
            .not-slider .owl-nav .owl-prev {
                position: absolute;
                left: -3px;
                padding: 5px 7px;
                font-size: 20px;
            }
            .not-slider .owl-nav .owl-next {
                position: absolute;
                right: 10px;
                padding: 5px 7px;
                font-size: 20px;
            }
            
            .nsl {
                position: relative;
            }
            
            .nsl span {
                font-size: 13px;
            }
            
            .nsl.nm {
                position: absolute;
                left: 5px;
                top: 6px;
                font-size: 10px;
                font-weight: bold;
            }
        </style>
        
        <style>
            .mobile { display: none; }
            .desktop { display: block; }
            
            @media (max-width: 480px) {
                .mobile { display: block;}
                .desktop { display: none !important;}
            }
        </style>

    </head>

    <body>

    <style>
        .content-box-ffr {
            position: absolute;
            top: 0;
            z-index:30000;
            width: 100%;
        }

    </style>
    
    <style>
        #anii4 {position:absolute;right: 20px; top: 75px; z-index:2000;display:inline-block;text-align:center;}
        .msb {display: none;}
        /*#anii b { color:yellow; }*/
        @media (max-width: 480px) {
            #anii4 {width:100%; text-align:center; top: 45px; right: 0px; z-index:2000;display:block !important;margin-bottom:10px;}
            .dsk {display: none !important;}
            .msb { display: block;}
            /*#ani b { color:red; }*/
            .black-friday {
                margin-top:40px;
            }
        }
        
    </style>
    
    <a href="javascript:void();" class="quick-toggle">Quick Links</a>
    
    <section class="content-box-ffr">
        
    <div class="black-friday bg-white">
        <a href="https://www.betensured.com/users/payment-new">
            
                <div class="desktop">
                    <?php
                        $selected_countries = array(243 => "NG");
                        country_advert($selected_countries, 243); // 52
                    ?>
                </div>
                <div class="mobile">
                    <?php
                        $selected_countries = array(241 => "NG");
                        country_advert($selected_countries, 241); // 52
                    ?>
                </div>
                    <!--<img src="<?= $images; ?>betensured/banner/Final-Web.gif" class="desktop"/>-->
                    <!--<img src="<?= $images; ?>betensured/banner/Final-22.gif" class="mobile"/>-->
                    
                        <!--<p id="anii4"></p>-->
                    
           
        </a>
    </div>
    
    <script>
        // // Set the date we're counting down to
        var countDownDate3 = new Date("Nov 29, 2021 23:59:59").getTime();
        
        // // Update the count down every 1 second
        var x3 = setInterval(function() {
        
            // Get todays date and time
            var now3 = new Date().getTime();
            
            // Find the distance between now an the count down date
            var distance3 = countDownDate3 - now3;
            
            // Time calculations for days, hours, minutes and seconds
            var days3 = Math.floor(distance3 / (1000 * 60 * 60 * 24));
            var hours3 = Math.floor((distance3 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes3 = Math.floor((distance3 % (1000 * 60 * 60)) / (1000 * 60));
            var seconds3 = Math.floor((distance3 % (1000 * 60)) / 1000);
            
            // Output the result in an element with id="demo"
            document.getElementById("anii4").innerHTML =  two_letters3(days3, " Days") + two_letters3(hours3, " Hrs") + two_letters3(minutes3, " Mins") + two_letters3(seconds3, " Sec");
            
            // If the count down is over, write some text 
            if (distance3 < 0) {
                clearInterval(x3);
                ocument.getElementById("anii4").innerHTML =  two_letters3(days3) + two_letters3(hours3) + two_letters3(minutes3) + two_letters3(seconds3);
            }
        }, 1000);
        
        function two_letters3(what, tt) {
            var this_val = what.toString(); 
            if(this_val.length == 1){
                this_val = "0" + what;
            }
            return "<b style='margin-right:10px;font-size:18px;font-family:Arial black;color:#fff !important;'>" + this_val + tt + "</b>";
        }
    </script>

    <style>
        
        /* Dropdown Button */
        .dropbtn {
            color: white;
            border: none;
        }
        
        /* The container <div> - needed to position the dropdown content */
        /*.dropdown {*/
        /*  position: relative;*/
        /*  display: inline-block;*/
        /*}*/
        
        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        
        .dropdown-content.show {
            display: block !important;
        }
        
        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        
        /* Change color of dropdown links on hover */
        
        /* Show the dropdown menu on hover */
        /*.dropdown:hover .dropdown-content {display: block;}*/
        
        .fdnbtn {
            margin-top: 10px;
            border-radius: 0;
        }
        
        .fdb-item {
            padding: 10px 10px !important;
        }
        
        @media (max-width: 480px) {
            .fdnwrapper {
                position: fixed;
                width:100%;
                top: 0;
                z-index: 30000 !important;
            }
            
            .fdnbtn {
                width: 100%;
                border-radius: 0;
                padding: 10px 10px;
                margin-top: 0px;
            }
            
            .fdbdm {
                width:100%;
                position: fixed !important;
                top: 40px;
            }
            
            .ddspi {
                margin-top: 30px !important;
            }
        }
        
    </style>
    
    <!-- header begin -->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <?php if(true) { ?>
                    <div class="col-xl-4 col-lg-4 col-sm-4 mb-3 p-0 fdnwrapper">
                        <div class="dropdown">
                            <button class="btn btn-danger dropbtn fdnbtn" type="button" id="dropbtn">
                                <?php if(isset($_SESSION["logged_in"])) { 
                                    $cur = in_table("wallet_currency","users","WHERE user_id = '{$id}'","wallet_currency");
                                    $bal = in_table("balance","wallet","WHERE user_id = '{$id}'","balance");
                                ?>
                                    <b>Wallet Balance: <?php echo $cur; ?> <?php echo formatNumber($bal); ?></b>
                                <?php } else { ?>
                                    Fund Your Wallet
                                <?php } ?>
                                
                                <i class="fa fa-caret-down ml-2"></i>
                            </button>
                            <div class="dropdown-content fdbdm">
                                <ul style="list-style:disc !important; padding-left:25px;">
                                    <li style="list-style:disc !important;"><a class="fdb-item" href="/users/payment-new">Buy a Plan</a></li>
                                    <li style="list-style:disc !important;"><a class="fdb-item" href="/users/custom-plan-country">Customize Plan</a></li>
                                    <li style="list-style:disc !important;"><a class="fdb-item" href="/users/wallet-fund">Fund Wallet</a></li>
                                </ul>
                             </div>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="col-xl-4 col-lg-4 col-sm-4">
                        <div class="text-center"><h5 class="text-white mb-1">Notice Board</h5></div>
                        <div class="left-area mb-2 notiti p-2 text-center not-slider owl-carousel" style="background:#fff !important;">
                            <div class="nsl">
                                <small class="nm">1/3</small>
                                <span style="margin:10px; font-weight:400;">
                                    We want to notify our esteemed subscribers that our prices will experience a slight increase starting from 1st January 2021. Thank you for choosing Betensured.
                                </span>
                            </div>
                            <!--<div class="nsl">-->
                            <!--    <span style="margin:10px; font-weight:400;">-->
                            <!--        Subscribe for the 15-days Genius Gold and get a <span style="color:red;">Risk Management Strategist </span> for FREE -->
                            <!--        <br><a href="https://www.betensured.com/users/payment-new" class="blink" style="color:red" target="_blank">Subscribe Now</a>-->
                            <!--    </span>-->
                            <!--</div>-->
                            
                            <div class="nsl">
                                <small class="nm">2/3</small>
                                <span style="margin:10px; font-weight:400;">
                                     <span style="color:red;"><a href="https://www.betensured.com/users/wallet-fund">Fund your Wallet Effortlessly</a></span>
                                    <br>Customize your Plans (Have a taste of all plans at pocket friendly prices).
                                    <a href="https://www.betensured.com/users/custom-plan-country" class="blink" style="color:red" target="_blank">Try Customizing</a>
                                </span>
                            </div>
                            <div class="nsl">
                                <small class="nm">3/3</small>
                                <span style="margin:10px; font-weight:400;">
                                    Stay Updated With Your Favourite  <span style="color:red;">Match Trends </span>
                                    <br>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-xl-4 col-lg-4 col-sm-4 ddspi">
                        <div class="text-center">
                            <?php
                                $selected_countries = array(1 => "NG", 13 => "KE", 135 => "UG", 136 => "GH");
                                country_advert($selected_countries, 1);
                            ?>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-4">
                        <div class="right-area">
                            <ul class="ml-0 mr-0">
                               <li class="langa">
                                    <p style="padding:2px !important;margin:0px !important;">
                                    <span><a href="https://betensured.com/">
                                    <img src="<?= $images; ?>uk-flag.png" width="18px"></a>
                                    </span>
                                    <span><a href="https://betensured.fr">
                                    <img src="<?= $images; ?>france-flag.png" width="18px"></a>
                                    </span>
                                    <span><a href="https://betensured.de">
                                    <img src="<?= $images; ?>ger-flag.png" width="18px"></a>
                                    </span>
                                    <span><a href="https://betensured.cn">
                                    <img src="<?= $images; ?>chn-flag.png" width="18px"></a>
                                    </span>
                                    <!--<span><a href="https://betensured.pt">-->
                                    <!--<img src="<?= $images; ?>por-flag.png" width="18px"></a>-->
                                    <!--</span>-->
                                    <span><a href="https://betensured.es">
                                    <img src="<?= $images; ?>esp-flag.png" width="18px"></a>
                                    </span>
                                    <!--<span><a href="https://betensured.ru">-->
                                    <!--<img src="<?= $images; ?>rus-flag.png" width="18px"></a>-->
                                    <!--</span>-->
                                    </p>
                                    <p style="padding:3px !important;margin:0px !important;">
                                    <select name="language" id="language" style="color:#fff; border: 1px solid #fff;">
                                        <option style="color:#fff;">Select language</option>
                                        <option value="https://betensured.com" style="color:#fff;">English</option>
                                        <option value="https://betensured.fr" style="color:#fff;">French</option>
                                        <option value="https://betensured.es" style="color:#fff;">Spanish</option>
                                        <option value="https://betensured.cn" style="color:#fff;">Chinese</option>
                                        <option value="https://betensured.de" style="color:#fff;">Dutch</option>
                                        <!--<option value="https://betensured.ru" style="color:#fff;">Russian</option>-->
                                        <!--<option value="https://betensured.pt" style="color:#fff;">Portuguese</option>-->
                                    </select>
                                    </p>
                                </li>
                                
                                <!-- <?php 
                                    if(isset($_SESSION["logged_in"])){ ?>
                                    <!-- <li><a class="link" href="<?= $users; ?>">My Account</a></li>
                                    <li><a class="link" href="<?= $users; ?>?logout=1">Logout</li> -->
                                <?php 
                                    } 
                                    else 
                                    { ?> 
<!--                                        
                                        <li><a class="link" href="register" style="color:red;">Register</a></li>
                                        <li><a class="link" href="login">Login</a></li> -->
                                <?php } 
                                ?> -->
                            </ul>
                        </div>
                        <div class="right-area mt-2">
                            <p class="text-white text-center mt-2">
                                <?php 
                                    // $our_users = $db1->query("SELECT COUNT(*) as all_users FROM users");
                                    // $our_users = fetch_data($our_users);
                                        
                                    // $deactivated_users = $db1->query("SELECT COUNT(*) as all_users FROM deactivated_users");
                                    // $deactivated_users = fetch_data($deactivated_users);
                                    
                                    // $all_users = (int)($deactivated_users["all_users"] + $our_users["all_users"]);
                                    // $our_users = number_format($all_users);
                                    
                                    
                                    
                                    // echo "<small><a style='color:red;' href='/register'>{$our_users}</a> smart punters use Betensured as their preferred Sport Prediction guide</small>";
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="navbar" class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="row">
                            <!-- <?php if($_SERVER["REQUEST_URI"] != "/") { ?>
                              
                            <?php } ?>
                            <div class="col-xl-12 col-lg-12 <?php if($_SERVER["REQUEST_URI"] != "/") { ?> col-9 <?php } else { ?> col-9 <?php } ?> d-xl-block d-lg-block d-flex align-items-center">
                                <div class="logo">
                                    <a href="/">
                                        <img src="https://betensured.com/images/logos/betensured-logo.png" alt="logo">
                                    </a>
                                </div>
                            </div> -->
                            <div class="col-3 d-xl-none d-lg-none d-block">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10">
                        <div class="mainmenu">
                            <nav class="navbar navbar-expand-lg">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" style="color:red; text-transform: initial !important;" href="https://flashsco.re/3v3diQO" target="_blank">LiveScore</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="pDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Predictions 
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="pDropdown">
                                                <a class="dropdown-item" href="predictions#football">Football Predictions</a>
                                                <a class="dropdown-item" href="predictions#basketball">Basketball Predictions</a>
                                                <a class="dropdown-item" href="predictions#rugby">Rugby Predictions</a>
                                                <a class="dropdown-item" href="predictions#tennis">Tennis Predictions</a>
                                                <a class="dropdown-item" href="predictions#ice-hockey">Ice Hockey Predictions</a>
                                                
                                                <!-- <?php 
                                                    $jackpots = $db2->query("SELECT * FROM jackpot_clients WHERE country = '$country'");
                                                    if(count_rows($jackpots)) {
                                                        while($row = fetch_data($jackpots)) { ?>
                                                        
                                                        <a class="dropdown-item" href="/<?php echo $row["slug"]; ?>/jackpots"><?php echo $row["slug"]; ?> <?= ($row["slug"] == "superpicks") ? null : "Jackpots"; ?></a>
                                                    <?php }
                                                    }
                                                ?> -->
                                                
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="pricingDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Pricing 
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="pricingDropdown">
                                                <a class="dropdown-item" href="pricing">Football Plans</a>
                                                <a class="dropdown-item" href="othersports-pricing">Other Sports Plans</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/blog/">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mobile text-left" href="prediction-result-checker">Results</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="partner-affiliate">Affiliate</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="how-to-pay-for-betensured-predictions">How to Pay</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->
    
    <!-- <?php include("shared/column_map.php"); ?> -->
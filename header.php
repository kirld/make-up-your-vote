<?php include("newsletter.php") ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <!-- Oswald Goole Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <!-- Roboto Goole Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/app.css">
    	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  </head>
  <body>
    <!-- Navigation Starts Here -->
  	<div class="nav-wrapper">
    		<div class="row">
    			<div class="large-6 medium-6 small-6 columns">
    				<img src="img/home/logo.png" alt="Logo Image">
    			</div>
    			<div class="large-6 medium-6 small-6 right-nav columns">
    				<ul class="main-top-nav">
    					<li><a href="sign-in.php">SIGNIN</a></li>
                                        <li><a href="sign-up.php">SIGNUP</a></li>
    				</ul>
    			</div>
    		</div>
      <div class="main-nav-wrap">
    		<div class="row">
    			<div class="large-5 medium-5 small-12 columns no-padding">
    				<ul class="main-nav">
    					<li><a href="home.php">HOME</a></li>
    					<li><a href="parties.php?party=liberal">PARTIES</a></li>
    					<li><a href="#">MAP</a></li>
    					<li><a href="#">COMPARE</a></li>
    				</ul>
    			</div>
    			<div class="large-3 medium-3 hide-for-small-only columns">
    				<div class="soc-icons">
    					<i class="fa fa-twitter"></i>
    					<i class="fa fa-facebook"></i>
    					<i class="fa fa-linkedin"></i>
    					<i class="fa fa-instagram"></i>	
    				</div>	
    			</div>
    			<div class="large-4 medium-4 hide-for-small-only columns">
            <div class="nav-inp-right">
      		    <form action="<?php htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
                    <input type="email" name="email" class="newsletterInput" placeholder="Newsletter subscription">
                    <input type="submit" name="submit" value="SIGN UP" class="newsletter-btn">
                </form>
            </div>
    			</div>	
    			
    		</div>
      </div>
    </div>
    <!-- End of Navigation  -->
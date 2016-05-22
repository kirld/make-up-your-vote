<div class="nav-wrapper">
	<div class="row">
		<div class="large-6 medium-6 small-6 columns">
			<img src="img/home/logo.png" alt="Logo Image">
		</div>
		<div class="large-6 medium-6 small-6 right-nav columns">
			<ul class="main-top-nav">
				<?php
                    //if user sesing is set
                    if(isset($_SESSION['user'])){
                         echo '<li><form action="' . htmlentities($_SERVER['PHP_SELF']) . '" method="post"><button name="logOut">LOGOUT</button></form></li>';          
                         echo "<li name='logOut'><a href='profile.php'>MEMBERS</a></li>"; 
                    }
                    else{
                        echo "<li><a href='sign-in.php'>SIGNIN</a></li>";
                        echo "<li><a href='sign-up.php'>SIGNUP</a></li>";
                    }
                ?>
			</ul>
		</div>
	</div>
  <div class="main-nav-wrap">
	<div class="row">
		<div class="large-5 medium-5 small-12 columns no-padding">
		  <ul class="main-nav">
			<li><a href="index.php">HOME</a></li>
			<li><a href="parties.php?id=1">PARTIES</a></li>
			<li><a href="map.php">MAP</a></li>
			<li><a href="compare.php">COMPARE</a></li>
		  </ul>
		</div>
		<div class="large-3 medium-3 hide-for-small-only columns">
			<div class="soc-icons">
			  <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
              <a href="https://facebook.com/"><i class="fa fa-facebook"></i></a>
              <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
              <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>	
			</div>	
		</div>
		<div class="large-4 medium-4 hide-for-small-only columns">
            <div class="nav-inp-right">
				<form action="<?php htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
                    <input type="email" name="email" class="newsletterInput"  placeholder="Newsletter subscription" 
                           value="<?php if(isset($successNewsletter)){ echo $successNewsletter;} ?>" required>
                    <input type="submit" name="newsletterSubmit" value="SIGN UP" class="newsletter-btn">
                </form>
            </div>
		</div>	
	</div>
  </div>
</div>
<!-- End of Navigation  -->
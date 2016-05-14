<?php include 'header.php' ?>

    <!-- Start Hero Section  -->
    <section class="hero-wrap">
      <div class="row hero-img">
        <div class="large-6 medium-12 small-12 columns">
            <h1 class="hero-hd">VOTE FOR YOUR FUTURE</h1>
        </div>
        
        <div class="large-6 medium-12 small-12 columns">
            
            <form  id="signup-form-home" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">

                <!--   EMAIL ENTRY    -->
                <input class="input-form" type="text" name="email" id="emailHome"  placeholder="Enter email" />
                <!--   PHP validation error message    -->
                <div class="help">
                     <?php if(isset($emailFailure)){ echo $emailFailure;}?>
                </div>
                <!--   Javascript validation error message    -->
                <div class="help" id="emailHomeHelp">
                    <p>&#42;Please fill in a real email address.</p>
                </div>

                <!--   PASSWORD ENTRY   -->

                <input class="input-form" type="password" id="passwordHome" name="password" placeholder="Enter password"/>
                 <!--   PHP validation error message    -->
                <div class="help">
                    <?php if(isset($passwordFailure)){ echo $passwordFailure;}?>
                </div>
                 <!--   Javascript validation error message    -->
                <div class="help" id="passwordHomeHelp">
                    <p>&#42; Password must be 6 or more characters one uppercase, one lowercase and one number</p>
                </div>


                <input class="main-btn" type="submit" name="submit" value="submit">

            </form>
            
        </div>
      </div>
    </section>
    <!-- End of Hero Section  -->
    <!-- Start Content Section  -->
    <section class="content-wrap">
      <div class="row">
        <div class="large-6 medium-6 small-12 columns about-us">
            <h3>ABOUT US</h3>
            <p>
              Make Your Vode Up helps you decide who you should vote for in the next general election. We provide information on the relevant parties and making it easier to compare and contrast.
            </p> 
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id vestibulum odio, a faucibus ex. Nulla fermentum, purus ut vulputate rutrum, erat lectus pretium nibh, ac viverra neque est eget diam.
            </p>
            <p> 
              Nunc non venenatis sem, vel viverra metus. Maecenas eu interdum magna. Quisque faucibus libero sem, vitae 
              tristique mauris gravida quis. 
            </p>
        </div>
        <div class="large-6 medium-6 small-12 columns">
          <img class="icons-img" src="img/home/icons.jpg" alt="icons background images">
        </div>
      </div>
    </section>
    <!-- End of Content Section  -->


  	<script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="js/main.js"></script>
  </body>
  </html>	
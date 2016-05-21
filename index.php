<?php include 'header.php' ?>
    <!-- Navigation Starts Here -->
  <div class="page-wrap">  
  	<?php include 'navigation.php';?>
    <!-- Start Hero Section  -->
    <section class="hero-wrap">
      <div class="row hero-img">
        <div class="large-6 medium-12 small-12 columns">
            <h1 class="hero-hd">VOTE FOR YOUR FUTURE</h1>
        </div>
        
        <div class="large-6 medium-12 small-12 columns">
          <div class="inp-col">
          <form  id="signup-form-home" action="sign-up-process.php" method="post">
                <!-- EMAIL ENTRY  -->  
              <input class="input-form" type="text" name="email" id="emailHome"  placeholder="Enter email" />
             <!-- PHP validation error message    -->
              <div class="help">
                   <?php if(isset($emailFailure)){ echo $emailFailure;}?>
              </div>
              <!--   Javascript validation error message -->
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
          <p class='inp-col-p'>
                By creating an account I consent to Make your voteup’s Terms of Service.
          </p> 
        </div>
      </div>
    </section>
    <!-- End of Hero Section  -->
    <!-- Start About Section  -->
    <section class="about-wrap">
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
        <div class="large-6 medium-6 small-12 columns hide-for-small-only">
          <img class="icons-img" src="img/home/icons.jpg" alt="icons background images">
        </div>
      </div>
    </section>
    <!-- End of About Section  -->

    <section class="parties-wrap">
      <div class="row parties-intro">
        <div class="large-12 columns">
            <h3>PARTIES</h3>
        </div>
        <div class="large-6 medium-12 small-12 columns about-us">
            <img src="img/home/partiesCover.jpg" alt="parties cover image" class="show-for-medium-only">
            <img src="img/home/partiesCover-mob.jpg" alt="parties cover image" class="show-for-small-only">
            <img src="img/home/partiesCover-desk.jpg" alt="parties cover image" class="large-img-only">
        </div>
        <div class="large-6 medium-12 small-12 columns">
          <p>
            <br><br>
            Political parties hold a great deal of power in the Canadian system of government. Indeed, 
            the entire Canadian parliamentary system presumes the existence of parties and would 
            not be able to function without them.<br><br>
            As we learned in the Parliamentary System chapter, it’s the party with the most 
            seats in the Canadian House of Commons that forms the Government of Canada 
            and gets to pick the prime minister and his cabinet. 
            The party with the second-largest number of seats forms the 
            Official 
            Opposition.
            Political parties in Canada are all organized the same fashion, 
            which is to say, very 
            hierarchically.<br><br> 
            There’s always a single “leader” at the top who is basically boss of the party. The leader formulates party policy and determines where his party stands on the issues of the day, and all party members below are expected to respectfully support him. In federal eletions, party leaders run as candidates for prime minister.
          </p>
        </div>    
      </div>
      <div class="row">
        <div class="large-4 medium-6 small-6 columns">
          <div class="callout par-box">
            <h4>LIBERAL PARTY OF CANADA</h4>
            <img src="img/home/liberal.jpg" alt="liberal party image">  
            <a href="parties.php?id=1"><input type="button" class="parties-btn" value="Learn more"></a>
          </div>
        </div>
        <div class="large-4 medium-6 small-6 columns">
          <div class="callout par-box">
            <h4 class="child-2">CONSERVATIVE PARTY OF CANADA</h4>
            <img src="img/home/conservative.jpg" alt="conservative party image">  
            <a href="parties.php?id=3"><input type="button" class="parties-btn" value="Learn more"></a>
          </div>
        </div>
        <div class="large-4 medium-6 small-6 columns">
          <div class="callout par-box">
            <h4 class="child-3">NEW DEMOCRATIC PARTY</h4>
            <img src="img/home/new_democratic.jpg" alt="new democratic party image">  
            <a href="parties.php?id=2"><input type="button" class="parties-btn" value="Learn more"></a>
          </div>
        </div>
        <div class="large-4 medium-6 small-6 columns">
          <div class="callout par-box">
            <h4>BLOC QUEBECOIS</h4>
            <img src="img/home/bloc.jpg" alt="bloc quebecois party image">  
            <a href="parties.php?id=5"><input type="button" class="parties-btn" value="Learn more"></a>
          </div>
        </div>
        <div class="large-4 medium-6 small-6 columns">
          <div class="callout par-box">
            <h4>GREEN PARTY OF CANADA</h4>
            <img src="img/home/green_party.jpg" alt="green party image">  
            <a href="parties.php?id=4"><input type="button" class="parties-btn" value="Learn more"></a>
          </div>
        </div>
        <div class="large-4 medium-6 small-6 columns">
          <div class="callout par-box">
            <h4>LIBERTARIAN PARTY OF CANADA</h4>
            <img src="img/home/libertarian.jpg" alt="libertarian party image">  
            <a href="parties.php?id=6"><input type="button" class="parties-btn" value="Learn more"></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Start of Footer -->
    <?php include 'footer.php';?>


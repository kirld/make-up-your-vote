<footer class="footer-wrap">
  <div class="row">
    <div class="large-4 medium-4 small-12 columns">
      <h3 class="footer-hd">FOLLOW US</h3>
        <div class="footer-soc">
          <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
          <a href="https://facebook.com/"><i class="fa fa-facebook"></i></a>
          <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>

          <div class="nav-inp-right ft-input">
              <form action="<?php htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
                <input type="email" name="email" class="newsletterInput"
                       value="<?php if(isset($successNewsletter)){ echo $successNewsletter;} ?>" placeholder="Newsletter subscription" required>
                <input type="submit" name="newsletterSubmit" value="SIGN UP" class="newsletter-btn">
            </form>
          </div>
        </div>
    </div>
    <div class="large-4 medium-4 small-12 columns">
      <h3 class="footer-hd">SITEMAPS</h3>
      <ul class="footer-ul">
        <li><a href="index.php">HOME</a></li>
        <li><a href="parties.php?id=1">PARTIES</a></li>
        <li><a href="map.php">MAP</a></li>
        <li><a href="compare.php">COMPARE</a></li>
      </ul>
    </div>
    <div class="large-4 medium-4 small-6 columns">
      <img class="logo-white" src="img/home/logo-white.png" alt="white logo">
    </div>
    <div class="large-12 medium-12 small-6 columns">
      <p class="copy-rights">
        @2015-2016 MAKE YOUR VOTE All rights reserved
      <p>
    </div>
    <div class="scrollTop">
        <i class="fa fa-arrow-up"></i>
        <p>Back to Top</p>
    </div>
  </div>
</footer>
<!-- End of Footer -->
</div>  
<!-- End of Page Wrapper -->
  <script src="bower_components/what-input/what-input.js"></script>
  <script src="bower_components/foundation-sites/dist/foundation.js"></script>
  <script src="js/app.js"></script>
  <script src="js/main.js"></script>
  <script src="js/map.js"></script>
</body>
</html>
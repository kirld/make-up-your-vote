<?php include 'header.php' ?>

<div class="row">
    
    <div class="small-12 medium-push-3 medium-6 columns">
        <div class="form-container">
            <!-- SIGN UP NEW USER FORM -->
            <form  id="signup-form" action="sign-up-process.php" method="post">

                <!--   EMAIL ENTRY    -->
                <h3>Create a user account</h3>
                <label class="form-labels">Email</label>
                <input class="input-form" type="text" name="email" id="email"  placeholder="Enter email" />
                <p class="validation-icon" id="email-validated"></p>
                <!--   PHP validation error message    -->
                <div class="help">
                     <?php if(isset($emailFailure)){ echo $emailFailure;}?>
                </div>
                <!--   Javascript validation error message    -->
                <div class="help" id="emailHelp">
                    <p>&#42;Please fill in a real email address.</p>
                </div>

                <!--   PASSWORD ENTRY   -->
                <h3>Choose password</h3>
                <p>Password must be 6 or more characters<br>one uppercase, one lowercase and one number</p>
                <label class="form-labels">Password</label>
                <input class="input-form" type="password" id="password" name="password" placeholder="Enter password"/>
                <p class="validation-icon" id="password-validated"></p>
                 <!--   PHP validation error message    -->
                <div class="help">
                    <?php if(isset($passwordFailure)){ echo $passwordFailure;}?>
                </div>
                 <!--   Javascript validation error message    -->
                <div class="help" id="passwordHelp">
                    <p>&#42;Password not strong enough</p>
                </div>


                <input class="main-btn" type="submit" name="submit" value="submit">

            </form>
        </div>
    </div>
    
</div>

    <script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/what-input/what-input.js"></script>
<script src="bower_components/foundation-sites/dist/foundation.js"></script>
<script src="js/app.js"></script>
<script src="js/main.js"></script>
</body>
</html> 


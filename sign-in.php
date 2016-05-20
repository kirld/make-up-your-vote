<?php include("partials/db-connection.php") ?>
<?php
   //if no connection to database is made, error will display
   if( !$connection ) {
        die( "Connection Failed:" . mysqli_connect_error() );
    }
    
    else {
          if(isset($_POST['email']) AND !empty($_POST['password'])) {
              
            $email = mysqli_real_escape_string($connection, strtolower( $_POST['email'] ));
            $password = mysqli_real_escape_string($connection, $_POST['password']);

             //create query to select from database table
             $query = "SELECT * FROM user_table
                       WHERE email = '$email'";
            $queryResult = mysqli_query($connection, $query);
            //grab all the rows from query that match
            $rows = mysqli_num_rows($queryResult);
            //if user name and password is found in database
            if ($rows > 0) {
                while ($row = mysqli_fetch_assoc($queryResult)) {
        $securePassword = $row["password"];
                    
                    $password = $hashed = hash("sha256", $password);
                    
                    if($password === $securePassword){
                        //start session
                        session_start();
                        $_SESSION['user'] = $email;
                        //send to profile
                        header("Location: profile.php");
                    }
                    else {
                      $signInMessage = "<div>";
                      $signInMessage .= "<p><b>Sorry Username or Password is incorrect!</b></p>";
                      $signInMessage .= "<div>";  
                    }
                 
                } 
            }
            else {
                     //login incorrect message
                     $signInMessage = "<div>";
                     $signInMessage .= "<p><b>Sorry Username or Password is incorrect!</b></p>";
                     $signInMessage .= "<div>";
            }                          
        }
    }
    
    
?>

<?php include 'header.php' ?>
<?php include 'navigation.php' ?>         
<div class="row">    

    <div class="small-12 medium-push-3 medium-6 columns">
        
        <div class="form-container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <h3>Sign In</h3>
                <label class="form-labels">Email</label>
                <input type="text" name="email" id="email"  placeholder="Enter email" />


                <!--   PASSWORD ENTRY   -->
                <label class="form-labels">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password"/>


                <input class="main-btn" type="submit" name="submit" value="submit">
                <!--  PHP sign in error-->
                 <?php if(isset($signInMessage)) { echo $signInMessage; } ?>
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

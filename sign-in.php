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
<?php include 'navigation.php' ?> 
<?php include("partials/db-connection.php") ?>
<?php include 'newsletter.php' ?>
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
                        session_start();
                        $_SESSION['user'] = $email;
                        //send to profile
                        echo "<script> location.replace('profile.php'); </script>";
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
<?php include 'footer.php' ?> 
<?php include("partials/db-connection.php") ?>
<?php
    //if no connection to database is made, error will display
   if( !$connection ) {
        die( "Connection Failed:" . mysqli_connect_error() );
    }
    
    else {
        
        function prevent($this, $conn) {
        stripslashes($this);
        mysqli_real_escape_string($conn, $this);
        return $this;
    }
        
        //if user hits the submit button
        if(isset($_POST['submit'])){
            
            
            //PHP VALIDATE
            //remove input of all uneccessary characters + backslashes
            function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }

            $username = true; 
            $email = true;
            $password = true;

            //declare failure response to use to add on errors            

            // check if e-mail address syntax is valid or not
            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",test_input($_POST["email"])) || empty($_POST["email"])) {
                    //if it does not match, add failure response
                    $emailFailure =  "<p>*Invalid email format</p>";
                    //returns false
                    $email = false;
            }



            //does it contain one uppercase, one lowercase, one number and is atleast 6 chars long
            if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(.{6,})$/",test_input($_POST["password"])) || empty($_POST["password"])) {    
                 $passwordFailure =  "<p>*Password not secure</p>";
                 $password = false;
            }


            if($email == true && $username == true && $password == true){

                $password = mysqli_real_escape_string($connection,$_POST['password']);
                $hashed = hash("sha256", $password);
                $email = mysqli_real_escape_string($connection,$_POST['email']);

                prevent($password, $connection);
                prevent($email, $connection);
                
                 
                //create insert query
                $insert =  "INSERT INTO user_table (email,password) 
                            VALUES ('$email','$hashed')";
                //insert into database
                $insertResult = mysqli_query($connection,$insert);
                session_start();
                //begin session for user once sign up is complete
                $_SESSION['user'] = $email;
                //Once user has succesfully created an account
                // send to the compare page to begin voting
                echo "<script> location.replace('compare.php'); </script>";
            }
        }
    }

?>
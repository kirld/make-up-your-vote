<?php
    session_start();
    //if user clicks log out
   if(isset($_POST['logOut'])){
        session_unset();
        session_destroy();
        echo "<script> location.replace('index.php'); </script>";
   }  
?>
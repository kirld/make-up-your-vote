<?php
    session_start();
    //if user clicks log out
   if(isset($_POST['logOut']) || !isset($_SESSION['user'])){
        session_unset();
        session_destroy();
   }  
?>
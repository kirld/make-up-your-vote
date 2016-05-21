<?php
    //if user clicks log out
   if(isset($_POST['logOut'])){
        session_unset();
        session_destroy();
        header("location: index.php");
   }  
?>
<?php
  // Start the session
  session_start();

  //Delete all session variables if user logs out
  if(isset($_POST['logOut']) OR !isset($_SESSION['user'])) {
    session_unset(); 
    session_destroy();
  }
// converting data into database
header('Content-Type: application/json');
			$data = file_get_contents('php://input');
			$data = json_decode($data,true);

			
			include("partials/db-connection.php");

			if(!$connection){
		        die("Connection failed: ". mysqli_connect_error());
		    }else{

		    	//get the user id from session_email	
				$session_email = mysqli_real_escape_string($connection,$_SESSION['user']);
				
				$select = "SELECT * FROM user_table WHERE email = '$session_email'";
				$resultSelect = mysqli_query($connection, $select);
				
				$numOfRows = mysqli_num_rows($resultSelect);
				if($numOfRows>0){
					while($row = mysqli_fetch_assoc($resultSelect)) {
						$user_id = $row["id"];
					}
				} else {
					echo "There is no result";
				}

				// delete the previous data from this user
				$delete = "DELETE FROM vote_table WHERE user_id = $user_id";
	    		$resultDelete = mysqli_query($connection, $delete);
	    		
	    		// insert the latest data from this user
		    	foreach($data as $party){
		    		$partyId = $party["id"];
		    		$partyCounter = count($party["counter"]);
		    		$query = "INSERT INTO vote_table (user_id, party_id, agree) values ($user_id, $partyId, $partyCounter )";
		    		$resultQuery = mysqli_query($connection, $query);

		    	}

		    	mysqli_close($connection);
				echo json_encode(["success!!!", "success!!!"]);
			}
			 
			
			

			
		;?>
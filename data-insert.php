<?php
  // Start the session
  session_start();

  //Delete all session variables if user logs out
  if(isset($_POST['logOut']) OR !isset($_SESSION['user'])) {
    session_unset(); 
    session_destroy();
  }
 
header('Content-Type: application/json');
			$data = file_get_contents('php://input');
			$data = json_decode($data,true);

			
			$con = mysqli_connect('localhost', 'root', '', 'election_db');
			if(!$con){
		        die("Connection failed: ". mysqli_connect_error());
		    }else{

		    	
				$session_email = mysqli_real_escape_string($con,$_SESSION['user']);
				
				$select = "SELECT * FROM user_table WHERE email = '$session_email'";
				$resultSelect = mysqli_query($con, $select);
				
				$numOfRows = mysqli_num_rows($resultSelect);
				if($numOfRows>0){
					while($row = mysqli_fetch_assoc($resultSelect)) {
						$user_id = $row["id"];
					}
				} else {
					echo "There is no result";
				}


				$delete = "DELETE FROM vote_table WHERE user_id = $user_id";
	    		$resultDelete = mysqli_query($con, $delete);
	    		

		    	foreach($data as $party){
		    		$partyId = $party["id"];
		    		$partyCounter = count($party["counter"]);
		    		$query = "INSERT INTO vote_table (user_id, party_id, agree) values ($user_id, $partyId, $partyCounter )";
		    		$resultQuery = mysqli_query($con, $query);

		    	}

		    	mysqli_close($con);
				echo json_encode(["success!!!", "success!!!"]);
			}
			 
			
			

			
		;?>
<?php 
header('Content-Type: application/json');
			$data = file_get_contents('php://input');
			$data = json_decode($data,true);

			
			$con = mysqli_connect('localhost', 'root', '', 'election_db');
			if(!$con){
		        die("Connection failed: ". mysqli_connect_error());
		    }else{
				

				$delete = "DELETE FROM vote_table WHERE user_id = 1";
	    		$resultDelete = mysqli_query($con, $delete);
	    		

		    	foreach($data as $party){
		    		$partyId = $party["id"];
		    		$partyCounter = count($party["counter"]);
		    		$query = "INSERT INTO vote_table (user_id, party_id, agree) values (1, $partyId, $partyCounter )";
		    		$resultQuery = mysqli_query($con, $query);

		    	}

		    	mysqli_close($con);
				echo json_encode(["success!!!", "success!!!"]);
			}
			 
			
			

			
		;?>
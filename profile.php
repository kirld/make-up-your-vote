<?php
  // Start the session
  session_start();
  //Delete all session variables if user logs out
  if(isset($_POST['logOut']) OR !isset($_SESSION['user'])) {
    session_unset(); 
    session_destroy();
  }
  //including header and dbconnection
include 'header.php';
include("partials/db-connection.php");
?>
<style>
.parties-name-container h2 {
    color: #fff;
    font-weight: 300;
    padding: 5px;
    text-transform: uppercase;
    font-size: 1.875rem;
    font-family: 'Oswald';
}
.parties-container-title h1 {
	    margin-left: 12px;
    text-transform: uppercase;
    font-family: 'Oswald';
    font-size: 1.875rem;
        font-weight: normal;
    font-style: normal;
    margin-left: 0;
}
.vote-result {
	margin-top: 50px;
}

.vote-result h3, 
.random-fact h3 {
	color: #000;

}
</style>
<div class="row">
        <div class="parties-container-title medium-12 large-12 columns">
             <h1>Your Result</h1>
        </div>
    </div>
<?php 
	// name the session
	$session_email = mysqli_real_escape_string($connection,$_SESSION['user']);
	// get the user id using $session_email from the database			
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
	// get the information to show for the user
	$voteSelect = "SELECT facttable.fact, info.leader_img, vote.agree, party.name FROM fact_table as facttable, parties_info_table as info, vote_table as vote, party_table as party WHERE vote.party_id = facttable.party_id AND vote.party_id = info.id AND vote.party_id = party.id AND vote.user_id = $user_id ORDER BY agree DESC";
	$resultVoteSelect = mysqli_query($connection, $voteSelect);
	$numOfRowsVote = mysqli_num_rows($resultVoteSelect);
	// get the result
	if($numOfRowsVote>0){
		while($row = mysqli_fetch_assoc($resultVoteSelect)) {
			
			$fact[] = $row["fact"];
			$leader_img[] = $row["leader_img"];
			$party_name[] = $row["name"];
			$agree[] = $row["agree"];
		}
	}
?>
<section class="random-fact row">
	<div class="medium-12 large-12 columns">
		<div class="parties-name-container">
            <h2><?php echo $party_name[0] ?></h2>
        </div>
		<div class="row">
			<div class="medium-5 large-6 columns">
				<img src="./img/parties/<?php echo $leader_img[0]?>" alt="<?php echo $party_name[0] ?>">
			</div>
			<div class="medium-7 large-6 columns">
				<h3>INTERESTING FACT</h3>
				<p><?php echo $fact[0] ?></p>
			</div>
		</div>
	</div>	
</section>
<section class="vote-result row">
	<div class="medium-12 large-12 columns">
		<h3>VOTE RESULT</h3>
		<?php if($numOfRowsVote>0){ //if vote was done ?>
		<div id="container" style="width:100%; height:400px;"></div>
		<?php } else { // if the vote was never done before ?>
		<a href="compare.php">VOTE FOR PARTIES</a>
		<?php } ?>
	</div>	
</section>
<!-- applying jquery -->
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!-- applying highcharts.js -->
<script src="http://code.highcharts.com/highcharts.js"></script>
<script>
	// putting data inside the js
	$(function () { 
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'VOTE RESULT'
        },
        xAxis: {
            categories: [<?php echo '"'.join($party_name, '","').'"'; ?>]
        },
        yAxis: {
            title: {
                text: 'Your Vote'
            }
        },
        series: [{
            name: <?php echo "'" . $session_email . "'"; ?>,
            data: [<?php echo join($agree, ','); ?>],
            pointWidth: 30
        }]
    });
});
// customize the bar chart
Highcharts.theme = {
    colors: ['#99cc33', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', 
             '#FF9655', '#FFF263', '#6AF9C4'],
    chart: {
        backgroundColor: {
            linearGradient: [0, 0, 0, 0],
            stops: [
                [0, 'rgb(255, 255, 255)'],
                [1, 'rgb(240, 240, 255)']
            ]
        }
    },
    title: {
        style: {
            color: '#fff',
            font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
        }
    },
    subtitle: {
        style: {
            color: '#666666',
            font: 'bold 12px "Trebuchet MS", Verdana, sans-serif'
        }
    },
    legend: {
        itemStyle: {
            font: '9pt Trebuchet MS, Verdana, sans-serif',
            color: 'black'
        },
        itemHoverStyle:{
            color: 'gray'
        }   
    }
};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);

</script>
</body>
</html> 